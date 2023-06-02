<!DOCTYPE html>
<html>
<head>
    <title>Formulário PHP</title>
</head>
<body>
    <h2>Formulário PHP - Dados de 5 pessoas</h2>
    <form method="POST" action="">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<h3>Pessoa " . $i . "</h3>";
            echo "<label for='nome" . $i . "'>Nome:</label>";
            echo "<input type='text' name='nome" . $i . "' id='nome" . $i . "' required><br><br>";
            
            echo "<label for='idade" . $i . "'>Idade:</label>";
            echo "<input type='number' name='idade" . $i . "' id='idade" . $i . "' required><br><br>";
        }
        ?>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Dados enviados:</h2>";
        for ($i = 1; $i <= 5; $i++) {
            $nome = $_POST["nome" . $i];
            $idade = $_POST["idade" . $i];
            echo "<h3>Pessoa " . $i . "</h3>";
            echo "Nome: " . $nome . "<br>";
            echo "Idade: " . $idade . "<br><br>";
        }
    }
    ?>
</body>
</html>
<!-- Neste exemplo, utilizei um loop for para criar os campos de nome e idade para cada pessoa. Os campos têm nomes únicos, como "nome1", "idade1" para a primeira pessoa, "nome2", "idade2" para a segunda pessoa, e assim por diante.

 Quando o formulário é enviado, os valores são recuperados usando o array $_POST e exibidos na página.

 Espero que isso atenda às suas necessidades! -->





