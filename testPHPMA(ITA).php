<?php
$servername = "localhost";
$username = "your_mySQL_username";
$password = "your_mySQL_password";
$dbname = "your_db_name";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $n = $_GET["nome"];
    $c = $_GET["cognome"];
    $eta = $_GET["eta"];
    $nome = '"'.$n.'"';
    $cognome = '"'.$c.'"';
    $sql = "INSERT INTO nome_tabella(campo1, campo2, camo3) VALUES ($nome, $cognome,$eta)";
    if($conn->query($sql) === true)
      echo "Record creato correttamente";
    else{
      echo  '<script>
              window.open("errore.html");
            </script>';
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
     $sql = "SELECT * FROM nome_tabella";
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
  <a style = "position: fixed; bottom: 5%" href = ".\index(ITA).html"><-Torna indietro</a>
  </body>
</html>