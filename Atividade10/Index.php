<!DOCTYPE html>
<html>
<head>
    <title>Exercício 10</title>
</head>
<body>
    <h2>Exercício 10: Exibir números do número digitado até 0 com intervalo</h2>
    <form method="post">
        <label for="numero">Digite um número:</label><br>
        <input type="number" id="numero" name="numero" min="0" required><br><br>
        <label for="intervalo">Digite o intervalo:</label><br>
        <input type="number" id="intervalo" name="intervalo" min="1" required><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        $intervalo = $_POST['intervalo'];
        for ($i = $numero; $i >= 0; $i -= $intervalo) {
            echo "$i <br>";
        }
    }
    ?>
</body>
</html>