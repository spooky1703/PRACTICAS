<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADOS</title>
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
        h2 {
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 10px;
        }
        .buttonBg {
        background-color: #007bff;
        color: #fff;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }
    .buttonBg:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
    <section>
        <article>
            <h2>RESULTADOS</h2>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "GET"){
                    $basee = $_GET['base'];  
                    $alturaa = $_GET['altura']; 
                    $areaaa = ($basee * $alturaa)/2;

                    echo "<p>AREA DEL TRIANGULO</p>";
                    echo "<p>Base ingresada: ". $basee ."</p>";
                    echo "<p>Altura ingresada: " . $alturaa. "</p>";
                    echo "<p>el  area del triangulo es: ". $areaaa . "</p>";

                }
            ?>
                    <button class="buttonBg" onclick="history.go(-1);">Regreso</button>

        </article>
    </section>
</body>
</html>