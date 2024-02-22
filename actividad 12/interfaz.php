<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULO DE AREAS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        section {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        article {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="number"] {
            margin-bottom: 10px;
            padding: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <section>
        <article>
            <h2>CALCULO DE AREAS</h2>
            <form method="get" action="backend.php">
                <label for="base">Area de un triangulo.</label>
                <br>
                <label for="base">BASE:</label>
                <input type="number" name="base" placeholder="ingrese la base">
                <br>
                <label for="altura">ALTURA:</label>
                <input type="number" name="altura" placeholder="ingrese la altura">
                <br>
                <input type="submit" value="calcular area">
            </form>
        </article>
    </section>
</body>
</html>