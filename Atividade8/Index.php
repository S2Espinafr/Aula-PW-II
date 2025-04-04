<!DOCTYPE html>
<html>
<head>
    <title>Exercício 8</title>
</head>
<body>
    <h2>Exercício 8: Mostrar a tabuada do número digitado</h2>
    <form method="post">
        <label for="numero">Digite um número:</label><br>
        <input type="number" id="numero" name="numero" required><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado <br>";
        }
    }
    ?>
</body>
</html>