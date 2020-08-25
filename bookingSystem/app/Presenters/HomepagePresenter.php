<?php

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Nette\Database\Connection;
use Tracy\Debugger;
DEBUGGER::enable();

final class HomepagePresenter extends Nette\Application\UI\Presenter
{
  private $database;
  function __construct(Nette\Database\Context $database){
    $this->database = $database;                                      
  }
  public function renderDefault(): void{
    $this->template->studenti = $this->database->table('studenti'); 
  }
  public function renderIndex(): void{
    $this->template->studenti = $this->database->table('studenti'); 
  }
  protected function createComponentAlunnoForm(): form{

    $form = new Form;
    $form->addText("nome", "Nome")->setRequired();
    $form->addText("cognome", "Cognome")->setRequired();
    $form->addText("eta", "Anni")->setRequired()
      ->addRule($form::MAX_LENGTH, "Inserire massimo 2 cifre", 2);
    $form->addSubmit("invia", "Invia");
    $form->onSuccess[] = [$this, 'checkAge'];
    
    return $form;
    }
  
  public function checkAge(Form $form, \stdClass $values): void{
    $rows = $this->database->table("studenti")->fetchAll();
    $n = sizeof($rows);
    $esiste = false;
    for($i=0;$i<$n;$i++){
      if($rows[$i]->eta == $values->eta){
        echo "Inserire un' eta diversa";
        $esiste = true;
        break;
       }
      }
    if($esiste === false){
      $this->insertTable($form,$values);
    }
  }

  public function insertTable(Form $form, \stdClass $values): void{
    $this->database->table("studenti")->insert([
      "nome"=>$values->nome,
      "cognome"=>$values->cognome,
      "eta"=>$values->eta,
    ]);
    $this->redirect('Homepage:index');    //to make this instruction work see ./bookingSystem/app/Router/RouterFactory.php
  }
}
?>