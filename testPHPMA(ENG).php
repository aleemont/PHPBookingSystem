<?php
$servername = "localhost";
$username = "your_MySQL_username";
$password = "your_MySQL_password";
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
    $sql = "INSERT INTO your_table(name, surname, age) VALUES ($name, $surname,$age)";
    if($conn->query($sql) === true)
      echo "Record creation succeeded";
    else
    echo "Error" .$sql. "<br>" .$conn->error;
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
        echo "<td> {$row['name']} </td>";
        echo "<td> {$row['surname']} </td>";
        echo "<td> {$row['age']} </td>";
        echo"</tr>";
      }
      echo "</table>";
    }
    $conn->close();
  ?>
  <a style = "position: fixed; bottom: 5%" href = ".\test1.html"><-Go backo</a>
  </body>
</html>
