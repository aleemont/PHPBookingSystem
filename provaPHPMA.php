<?php
$servername = "localhost";
$username = "root";
$password = "Ale-26062002";
$dbname = "alunni";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $n = $_GET["nome"];
    $c = $_GET["cognome"];
    $eta = $_GET["eta"];
    $nome = '"'.$n.'"';
    $cognome = '"'.$c.'"';
    $sql = "INSERT INTO studenti(nome, cognome, eta) VALUES ($nome, $cognome,$eta)";
    if($conn->query($sql) === true)
      echo "Record creato correttamente";
    else
    echo "Errore" .$sql. "<br>" .$conn->error;
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
     $sql = "SELECT * FROM studenti";
     if ($result = $conn->query($sql)) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td> {$row['nome']} </td>";
        echo "<td> {$row['cognome']} </td>";
        echo "<td> {$row['eta']} </td>";
        echo"</tr>";
      }
      echo "</table>";
    }
    $conn->close();
  ?>
  <a style = "position: fixed; bottom: 5%" href = ".\test1.html"><-Torna indietro</a>
  </body>
</html>