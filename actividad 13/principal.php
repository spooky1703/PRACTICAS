<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }
        article {
            background-color: #f0f0f0;
            border-radius: 10px;
            padding: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="number"] {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    
    <section>
        <article>
        <header>
            <div style="text-align: center;">
        <font color="black"> AREA. </font>
            </div>
    </header>
            <form method="get" action="calculos.php">
                <input type="number" name="radioo" placeholder="ingrese el radio...">
                <br><br>
                <input type="submit" value="Calcular">
            </form>
        </article>
    </section>
</body>
</html>