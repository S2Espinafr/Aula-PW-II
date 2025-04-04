<!DOCTYPE html>
<html>
<head>
    <title>Exercício 4</title>
</head>
<body>
    <h2>Exercício 4: Receber uma palavra ou frase e escrevê-la 10 vezes</h2>
    <form method="post">
        <label for="palavra">Digite uma palavra ou frase:</label><br>
        <input type="text" id="palavra" name="palavra" required><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $palavra = $_POST['palavra'];
        for ($i = 1; $i <= 10; $i++) {
            echo "$i - $palavra <br>";
        }
    }
    ?>
</body>
</html>