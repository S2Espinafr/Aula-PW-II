<!DOCTYPE html>
<html>
<head>
    <title>Exercício 9</title>
</head>
<body>
    <h2>Exercício 9: Exibir números de 0 até o número digitado com intervalo</h2>
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
        for ($i = 0; $i <= $numero; $i += $intervalo) {
            echo "$i <br>";
        }
    }
    ?>
</body>
</html>