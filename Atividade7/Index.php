<!DOCTYPE html>
<html>
<head>
    <title>Exercício 7</title>
</head>
<body>
    <h2>Exercício 7: Mostrar números pares do número digitado até 0</h2>
    <form method="post">
        <label for="numero">Digite um número:</label><br>
        <input type="number" id="numero" name="numero" min="0" required><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        for ($i = $numero - ($numero % 2); $i >= 0; $i -= 2) {
            echo "$i <br>";
        }
    }
    ?>
</body>
</html>