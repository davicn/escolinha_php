<?php

// resgata variáveis do formulário
$email = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
 
if (empty($email) || empty($password))
{
    echo "Informe email e senha";
    exit;
}


header('Location: admin.php');

?>