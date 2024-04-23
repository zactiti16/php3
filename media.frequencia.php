<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média e Frequência em PHP</title>
</head>
<body>
    <h2>Média e Frequência em PHP</h2>
    <form action="" method="post">
        <label for="aluno">Aluno:</label>
        <input type="text" id="aluno" name="aluno" required><br><br>

        <label for="disciplina">Disciplina:</label>
        <input type="text" id="disciplina" name="disciplina" required><br><br>

        <label for="serie">Série:</label>
        <input type="text" id="serie" name="serie" required><br><br>

        <label for="media">Média:</label>
        <input type="number" id="media" name="media" required><br><br>

        <label for="faltas1">Faltas 1º Semestre:</label>
        <input type="number" id="faltas1" name="faltas1" required><br><br>

        <label for="ano_letivo">Ano Letivo:</label>
        <input type="text" id="ano_letivo" name="ano_letivo" required><br><br>

        <label for="frequencia">Frequência:</label>
        <input type="number" id="frequencia" name="frequencia" required><br><br>

        <label for="faltas2">Faltas 2º Semestre:</label>
        <input type="number" id="faltas2" name="faltas2" required><br><br>

        <input type="submit" value="Salvar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Coletando os dados do formulário
        $aluno = $_POST['aluno'];
        $disciplina = $_POST['disciplina'];
        $serie = $_POST['serie'];
        $media = $_POST['media'];
        $faltas1 = $_POST['faltas1'];
        $ano_letivo = $_POST['ano_letivo'];
        $frequencia = $_POST['frequencia'];
        $faltas2 = $_POST['faltas2'];

        // Exibindo os dados recebidos
        echo "<h2>Dados do Aluno</h2>";
        echo "Aluno: $aluno<br>";
        echo "Disciplina: $disciplina<br>";
        echo "Série: $serie<br>";
        echo "Média: $media<br>";
        echo "Faltas 1º Semestre: $faltas1<br>";

        echo "<h2>Dados do Ano Letivo</h2>";
        echo "Ano Letivo: $ano_letivo<br>";
        echo "Frequência: $frequencia<br>";
        echo "Faltas 2º Semestre: $faltas2<br>";
    }
    ?>
</body>
</html>