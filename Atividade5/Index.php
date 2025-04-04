<!DOCTYPE html>
<html>
<head>
    <title>Exercício 5</title>
</head>
<body>
    <h2>Exercício 5: Receber uma palavra e a quantidade de repetições</h2>
    <form method="post">
        <label for="palavra">Digite uma palavra:</label><br>
        <input type="text" id="palavra" name="palavra" required><br><br>
        <label for="quantidade">Quantidade de repetições:</label><br>
        <input type="number" id="quantidade" name="quantidade" min="1" required><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $palavra = $_POST['palavra'];
        $quantidade = $_POST['quantidade'];
        for ($i = 1; $i <= $quantidade; $i++) {
            echo "$i - $palavra <br>";
        }
    }
    ?>
</body>
</html>