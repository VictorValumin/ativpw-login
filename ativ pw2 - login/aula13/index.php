<?php

session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$validation = [
    "username" => "",
    "email" => "",
    "password" => ""
];

$banco = new PDO('mysql:host=localhost;dbname=banco', 'root', '');
echo "Conexão efetuada com sucesso!<br><br>";

$query = $banco->prepare("SELECT * FROM perfil");
$query->execute();
$data = $query->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($data);
echo '</pre>';

$query = $banco->prepare("INSERT INTO perfil (username, email, senha) VALUES (:username, :email, :senha)");
$query->bindParam(':username', $username, PDO::PARAM_STR);
$query->bindParam(':email', $email, PDO::PARAM_STR);
$query->bindParam(':senha', $password, PDO::PARAM_STR);
if ($query->execute()) {
    echo 'Gravou';
} else {
    echo 'Não gravou';
}
