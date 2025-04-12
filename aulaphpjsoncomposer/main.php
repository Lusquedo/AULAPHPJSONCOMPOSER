<?php

include_once("./model/Aluno.php");

$pascal = new Aluno("Lucas Ramos da Silva", 20); 
$stringJsonPascal = json_encode($pascal);

echo $stringJsonPascal;