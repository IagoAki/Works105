<?php 

$curso = $_POST["cursocad"];
$tipocurso = $_POST["tipocurso"];

if(isset($_POST["cursocad"])){
	$curso = $_POST["cursocad"];
	$tipocurso = $_POST["tipocurso"];


$inserir = "INSERT INTO curso ";
$inserir .= "(cursocad, tipocurso)";
$inserir .= "VALUES ";
$inserir .= "('$cursocad', 'tipocurso')";

$operacao_inserir = mysql_query($conecta, $inserir);
if (!$operacao_inserir) {
	die("Erro no banco");
}

}
 ?>