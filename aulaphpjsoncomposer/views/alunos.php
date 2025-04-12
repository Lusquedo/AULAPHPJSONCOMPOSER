<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA PHP JSON COMPOSER</title>
    <script src="alunos.js"></script>
    <script>
        
        function processarResposta(R) {
            R.json().then(function(d) {
                console.log(d.nome);
                console.log(d.idade);
            });
        }

      
        fetch("/main.php").then(processarResposta);
    </script>
</head>
<body>
    <h1>Gerenciar Alunos</h1>
</body>
</html>