<?php
try{

  $dbuser = "root";
  $dbpass = "Ale-26062002";

  $conn = new PDO('mysql:host=localhost;dbname=alunni', $dbuser, $dbpass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
  echo "Errore" . $e->getMessage() . "<br>";
}

$n = $_GET["nome"];
$c = $_GET["cognome"];
$eta = $_GET["eta"];
$nome = '"'.$n.'"';
$cognome = '"'.$c.'"';

$conn->beginTransaction();
$result = $conn->prepare("INSERT INTO studenti(nome, cognome, eta) VALUES ($nome, $cognome,$eta)");
$result->execute();
$conn->commit(); 
if($result = 1){
  echo "Record creato correttamente";
}
else{
  echo "<script>
          window.open('errore.html');
        </script>";
}
?>
<html>
  <body>
   <table>
      <tr>
     	  <td>Nome</td>
        <td>Cognome</td>
        <td>Età</td>
      </tr>
<?php
  $result = $conn->prepare("SELECT * FROM studenti");
  if($result->execute()){
   while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td> {$row['nome']} </td>";
    echo "<td> {$row['cognome']} </td>";
    echo "<td> {$row['eta']} </td>";
    echo"</tr>";
  }
  echo "</table>";
}
?>
<br><br>
    <a style = "position: fixed; bottom:5%"href = ".\index.html"><-Torna indietro</a>
  </body>
</html> 