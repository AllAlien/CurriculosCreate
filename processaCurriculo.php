<?php
session_start();

try{ 

if ($_POST && !empty($_POST)){

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$sexo = $_POST['sexo'];
$status =  $_POST['status'];
$ano = (int)$_POST['ano'];
$rua = $_POST['rua'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];
$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$email = $_POST['email'];
$obj = $_POST['obj'];
$formacao = $_POST['formacao'];
$n_empresa = $_POST['n_empresa'];
$cidade_empresa = $_POST['cidade_empresa'];
$cargo = $_POST['cargo'];
$inicio_e = $_POST['inicio_e'];
$fim_e = $_POST['fim_e'];
$atv_desenvolvida = $_POST['atv_desenvolvida'];
$c_add = $_POST['c_add'];
$ha_cp = $_POST['ha_cp'];

if ($sexo == 'm'){
	$sexo = "Homem";
}else{
	$sexo = "Mulher";
}
$idade = date("Y") - $ano;

}

$_SESSION['conteudoCurriculo'] = "<html>

<style>
	.no_empresa{
		margin-left:200px;
	}
	.periodo{
		margin-left:50px;
	}
	
</style>


	<h2>".$nome." ".$sobrenome."</h2>
	<hr>
<span>".$sexo.", ".$status.", ".$idade." anos</span><br>	
<span>".$rua.", ".$cidade."-".$uf." CEP: ".$cep."</span><br>	
<span>Tel.: ".$tel1." / ".$tel2."</span><br>
<span>E-mail.: ".$email."</span><br><br>

<h3>Objetivos</h3> 
<hr>
<p>".$obj."</p>

<h3>Formação</h3>
<hr>
<span>".$formacao."</span>


<h3>Experiência</h3>
<hr>

<span>".$n_empresa."</span><span class='no_empresa'>".$cidade_empresa."-".$uf."</span><span class='periodo'>Periódo: ".$inicio_e." até ".$fim_e."</span><br>
<span>Cargo: ".$cargo."</span><br><br>

<h3>Atividades desenvolvidas</h3>
<span>".$atv_desenvolvida."</span><br><br>

<h3>Cursos adicionais</h3>
<hr>
<span>".$c_add."</span><br><br>

<h3>Habilidades e competências</h3>
<hr>
<p>".$ha_cp."</p>
</html>";
} catch (Execption $erro){

	var_dump($erro);
}

header("location:render_curriculo.php");

?>