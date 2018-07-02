<?php 

$notas = array(3,5,7,10);
$media = ($notas[0]+$notas[1]+$notas[2]+$notas[3])/4;

for ($i=0; $i < 4; $i++) { 
	echo "o aluno tirou $notas[$i]<br>";
}

echo "<br>a media desse aluno foi $media";

if ($media>6) {
	echo "<br>aprovado";
	}else{
		echo "<br>reprovado";
	}















 ?>