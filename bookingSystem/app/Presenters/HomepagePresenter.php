<?php

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;
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
    $form->addText("eta", "Anni")->setRequired();
    $form->addSubmit("invia", "Invia");
    $form->onSuccess[] = [$this, 'alunnoFormSucceeded'];
    
    return $form;
    }
  
  public function alunnoFormSucceeded(Form $form, \stdClass $values): void{
    $this->database->table("studenti")->insert([
      "nome"=>$values->nome,
      "cognome"=>$values->cognome,
      "eta"=>$values->eta,
    ]);
    $this->redirect('Homepage:index');      //to make this instruction work see ./bookingSystem/app/Router/RouterFactory.php
    }
}
?>