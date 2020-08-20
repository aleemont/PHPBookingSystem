<?php
$servername = "localhost";
$username = "your_mySQL_username";
$password = "your_mySQL_password";
$dbname = "your_db_name";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $n = $_GET["name"];
    $s = $_GET["surname"];
    $age = $_GET["age"];
    $name = '"'.$n.'"'; //adding quotes to name and surname strings
    $surname = '"'.$s.'"';
    $sql = "INSERT INTO your_table(field1, field2, field3) VALUES ($name, $surname,$age)";
    if($conn->query($sql) === true)
      echo "Record creation succeeded";
    else{
      echo  '<script>
              window.open("error.html");
            </script>';
    }
    ?>
<html>
  <body>
   <table>
      <tr>
     	  <td>Name</td>
        <td>Surname</td>
        <td>Age</td>
      </tr>
    <?php
     $sql = "SELECT * FROM your_table";
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
  <a style = "position: fixed; bottom: 5%" href = ".\index(ENG).html"><-Go back</a>
  </body>
</html>
