<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css"
    </head>
    <body>
        <div class="calculadora">
        <form action="calc.php" method="get">
            <input type="number" name="n1">
            <select name="operation">
                <option Value="">Seletect a operation</option>
                <option Value="1">Sum</option>
                <option Value="2">Resta</option>
                <option Value="3">Multi</option>
                <option Value="4">Div</option>
                <option value="5">logat</option>
                <option value="6">x<sub>2</sub></option>
                <option value="7">x<sub>y</sub></option>
                <option value="8">√</option>
                <option value="9">Root</option>
            </select>
            <input type="number" name="n2">
            <br>
            <button type="submit">Operate</button>
        </form>
        </div>
    </body>
</html>
