<?php
$host='127.0.0.1';
$user='root';
$pass='';
$bd='eleicao';

$link = mysqli_connect($host, $user, $pass, $bd);

$sql = "insert into nomes values('".$_POST['membro']."','".$_POST['vice']."','".$_POST['tesoureiro']."','".$_POST['secretario']."','".$_POST['dirigente']."','".$_POST['dirigente2']."','".$_POST['dirigente3']."','".$_POST['som']."','".$_POST['midia']."','".$_POST['recepcionista']."','".$_POST['ebd']."','".$_POST['missoes']."','".$_POST['fiscal']."','".$_POST['infantil']."','".$_POST['eventos']."','".$_POST['patrimonial']."')";

mysqli_query($link,$sql);




echo "Voto cadastrado com sucesso!!!<br><br>";

echo "Membro: ".$_POST['membro'];
echo "<br>";
echo "Vice-presidente: ".$_POST['vice'];
echo "<br>";
echo "Tesoureiro: ".$_POST['tesoureiro'];
echo "<br>";
echo "secretario: ".$_POST['secretario'];
echo "<br>";
echo "Dirigente 1: ".$_POST['dirigente'];
echo "<br>";
echo "Dirigente 2: ".$_POST['dirigente2'];
echo "<br>";
echo "Dirigente 3: ".$_POST['dirigente3'];
echo "<br>";
echo "Operador de som: ".$_POST['som'];
echo "<br>";
echo "Operador de Mídia: ".$_POST['midia'];
echo "<br>";
echo "Recepcionista: ".$_POST['recepcionista'];
echo "<br>";
echo "Diretor de EBD: ".$_POST['ebd'];
echo "<br>";
echo "Promotor de Missões: ".$_POST['missoes'];
echo "<br>";
echo "Conselho Fiscal: ".$_POST['fiscal'];
echo "<br>";
echo "Ministério Infantil: ".$_POST['infantil'];
echo "<br>";
echo "Promotor de eventos: ".$_POST['eventos'];
echo "<br>";
echo "Patrimônio: ".$_POST['patrimonial'];
echo "<br>";

mysqli_close($link);


?>