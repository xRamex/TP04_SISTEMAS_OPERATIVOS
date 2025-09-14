

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Descargas - TP04 Sistemas Operativos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 60px;
        }

        h1 {
            color: #333;
        }

        .descarga-box {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        a.boton {
            display: inline-block;
            padding: 12px 20px;
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        a.boton:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="descarga-box">
        <h1>Descarga de Debian</h1>
        <p>Puedes descargar la imagen oficial de Debian 13 (netinst) desde el siguiente enlace:</p>

        <a class="boton" href="https://cdimage.debian.org/debian-cd/current/amd64/iso-cd/debian-13.1.0-amd64-netinst.iso">
            Descargar Debian 13 ISO
        </a>
    </div>

</body>
</html>
