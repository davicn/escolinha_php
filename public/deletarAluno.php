<?php
include 'db_connection.php';
$conn = OpenCon();
$id=$_REQUEST['id'];
$query = "DELETE FROM aluno WHERE idaluno='".$id."'"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: consultaAluno.php"); 
?>