<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM  tb_usuarios");

//echo json_encode($usuarios);


// Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;

// Carrega uma lista usuário
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
//$seach = Usuario::search("jo");
//echo json_encode($seach);

// Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "12345");

echo $usuario;


?>
