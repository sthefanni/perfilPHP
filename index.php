<html>
<head>
	<meta charset="utf-8">
	<title>Dados e informações</title>

</head>
<body>

	<?php
	$v1 = array(

	'img'=> 'https://i.imgur.com/PSOxBZ2.jpg',
	'nome'=> 'Sthefanni',
	'apelido'=> 'Thé',
	'rua'=> 'Antônio Montalvão',
	'cidade'=> 'Iuiú',
	'email'=> 'sthefannivalleri19@gmail.com',
	'curso'=> 'Informática para Internet',
	'disciplina'=> 'Programação de Sistemas Web',
	'ano'=> 2020
	);


	echo ('<img src=' . $v1 ['img']. '> <br><br>');
	echo ('Nome:' . $v1 ['nome']. '<br> Apelido: '. $v1 ['apelido']. '<br> Rua: '. $v1 ['rua']. '<br> Cidade: '. $v1 ['cidade'].'<br> E-mail: '. $v1 ['email']. '<br> Curso: '. $v1 ['curso']. '<br> Disciplina: '. $v1 ['disciplina']. '<br> Ano: '. $v1 ['ano']);

?>
    
</body>

