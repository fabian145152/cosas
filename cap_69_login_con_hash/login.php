<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 300px;
            margin: auto;
            background-color: #ffc;
            border: 2px solid #f00;
            padding: 5px;
        }

        td {
            text-align: center;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>REGISTRATE</h1>
    <form action="comprueba_login.php" method="post">
        <table>
            <tr>
                <td class="izq">Login:</td>
                <td class="der"><input type="text" name="login"></td>
            </tr>
            <tr>
                <td class="izq">Password: </td>
                <td class="der"><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="LOGIN:"></td>
            </tr>
        </table>
    </form>


</body>

</html>