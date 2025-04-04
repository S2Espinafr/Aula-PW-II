<!DOCTYPE html>
<html>
<head>
    <title>Exercício 6</title>
</head>
<body>
    <h2>Exercício 6: Mostrar números pares de 0 até o número digitado</h2>
    <form method="post">
        <label for="numero">Digite um número:</label><br>
        <input type="number" id="numero" name="numero" min="0" required><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        for ($i = 0; $i <= $numero; $i += 2) {
            echo "$i <br>";
        }
    }
    ?>
</body>
</html>