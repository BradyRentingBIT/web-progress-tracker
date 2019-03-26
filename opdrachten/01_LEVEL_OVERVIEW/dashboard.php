<?php
$servername = "127.0.0.1:3306";
$username = "root";
$conn = new PDO("mysql:host=$servername;dbname=progressie", $username);
function showTable(){
	$quer = "SELECT * FROM progressie.opdrachten;";
	$stm = $conn->query($quer);
}
showTable();
?>
<h1>Progress tracker</h1>
<?php
while ($row = $stm->fetch()){
    echo $row["ID"] . $row["opdracht"] . "\n";
}
?>