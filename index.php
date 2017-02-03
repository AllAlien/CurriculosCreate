<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Gerador de currículo</title>
	<link rel="stylesheet" href="css/estilo.css">

</head>
<body>
<div id="formulario">
		<form action="processaCurriculo.php" method="post">
				<table>
					<tr>
						<td>
							<span id="dadosPessoais">Dados pessoais</span>
						</td>
					</tr>
					<tr>
						<td>Seu nome: </td>
						<td><input  name="nome" required type="text"></td>
						<td>Sobrenome: </td>
						<td><input  name="sobrenome" required type="text"></td>
					</tr>
					<tr>
						<td><span id="anodenascimento">Ano de nascimento</span></td>
						<td><select name="ano">
							<option value="2001">2001</option>
							<option value="2000">2000</option>
							<option value="1999">1999</option>
							<option value="1998">1998</option>
							<option value="1997">1997</option>
							<option value="1996">1996</option>
							<option value="1995">1995</option>
							<option value="1994">1994</option>
							<option value="1993">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>
							<option value="1990">1990</option>
							<option value="1989">1989</option>
							<option value="1987">1987</option>
							<option value="1986">1986</option>
							<option value="1985">1985</option>
							<option value="1984">1984</option>
							<option value="1983">1983</option>
							<option value="1982">1982</option>
							<option value="1981">1981</option>
							<option value="1980">1980</option>
						</select></td>
						<td><span id="status">Status</span></td>
						<td><select name="status">
							
							<option value="solteiro">Solteiro(a)</option>
							<option value="casado">Casado(a)</option>
							<option value="divorciado">Divorciado(a)</option>
							<option value="viuvo">Viúvo(a)</option>
						</select></td>
					</tr>

							<tr>
								<td><span id="sexo">Sexo</span></td>
								<td>Masculino
								<input type="radio" value="m" name="sexo">
								Feminino
								<input type="radio" value="f" name="sexo">
								</td>
							</tr>
					

						<tr>
							<td><span id="dadosContato">Dados de contato</span></td>
						</tr>
						<tr>
							<td>Tel 1: </td>
							<td><input id="tel1" name="tel1" type="text"></td>
							<td>Tel 2: </td>
							<td><input id="tel2" name="tel2" type="text"></td>
						</tr>
						<tr>
							<td>E-mail:</td>
							<td><input name="email" type="email"></td>
						</tr>
						
					<tr>
						<td><span id="endereco">Endereço</span></td>
					</tr>
					<tr>
						<td>CEP</td>
								<td><input name="cep" id="cep" required  type="text"></td>
								<td>Rua: </td>
								<td><input name="rua" id="rua" required  type="text"></td>
							</tr>
							<td>Cidade:</td>
							<td><input  name="cidade" id="cidade" required type="text"></td>
							<td>UF: </td>
							<td><input name="uf" id="uf" type="text" size="2"></td>
							<tr>
						<td>
							<span id="dadosProfissionais">Dados profissionais</span>
						</td>
					</tr>
					<tr>
						<td>Objetivo profissional</td>
						<td><textarea  required name="obj" cols="30" rows="4"></textarea></td>
					</tr>
					<tr>
						<td>Experiencias profissionais</td>
					</tr>
					<tr>
						<td>Nome da empresa</td>
						<td><input name="n_empresa" required  type="text"></td>
					</tr>
					<tr>
						<td>Cargo exercido</td>
						<td><input name="cargo" required  type="text"></td>
					</tr>
					<tr>
						<td>Periódo</td>
						<td><input type="date" name="inicio_e"> até</td>
						<td><input type="date" name="fim_e"></td>
					</tr>
					<tr>
						<td>Cidade sede da empresa</td>
						<td><input name="cidade_empresa" type="text"></td>
					</tr>
		<tr>
			<td>Atividades desenvolvidas</td>
			<td><textarea name="atv_desenvolvida" required  cols="30" rows="4"></textarea></td>
		</tr>
		<tr>
			<td><span id="formacao">Formação</span></td>
		</tr>
		<tr>
			<td>Escolaridade</td>
						<td><select name="formacao" id="">
							<option value="Cursando o ensino fundamental">Cursando o ensino fundamental</option>
							<option value="fc">Fandamental concluido</option>
										<option 
										value="Cursando o ensino medio">Cursando o ensino medio</option>
										<option
										 value="Ensino medio concluido">Ensino medio concluido</option>
										<option
										 value="Cursando ensino superior">Cursando ensino superior</option>
										<option
										 value="Superior completo">Superior completo</option>
										<option
										 value="Pós-graduação">Pós-graduação</option>
										<option 
										value="Doutorado">Doutorado</option>
									</select></td>
								</tr>
								<tr>
						<td>Habilidades e competências</td>
						<td><textarea required name="ha_cp" cols="30" rows="4"></textarea></td>
					</tr>
					<tr>
					<td>Cursos adicionais</td>
					<td><textarea required name="c_add" cols="30" rows="4"></textarea></td>
					</tr>
					<tr>
						<td><button class="btn">Gerar currículo</button></td>
					</tr>
				</table>
		
	</form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="mask/jquery.mask.js"></script>
<script src="js/main.js"></script>
</body>
</html>
