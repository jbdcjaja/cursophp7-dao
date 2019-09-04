<?php


require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);
//traz um usuário
//$root->loadbyId(3);
//echo "cheguei";
//echo $root;
//traz uma lista de usuarios


//Carrega uma lista de usuarios

//$lista = Usuario::getList();

//echo json_encode($lista);
// carrega uma lista dos usuários buscar pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);
//carrega o usuário carregando login e a senha
$usuario = new Usuario();
$usuario->login("root","9876");

echo $usuario

?>