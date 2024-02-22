<html>
<head>
    <title>Calculos</title>
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
        .a1 {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            margin-top: 20px;
            text-align: center;
        }
        .boton {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .buttonBg {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            border: none;
            font-size: 16px;
        }
        .buttonBg:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="a1">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $radiou = $_GET["radioo"];
                $areau = pi() * pow($radiou,2);
                echo "AREA DE LA MONEDA DE CHOCOLATE". "<br>". "<br>";
                echo "Radio introducido: " . $radiou. "<br>"."<br>";
                echo "El Area de la moneda es: " . $areau . "<br>";

            }
        ?>
        <div class="boton">
        <button class="buttonBg" onclick="history.go(-1);">Regreso</button>
    </div>
    </div>
    
</body>
</html>