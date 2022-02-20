<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula la hipotenusa dado los catetos:</title>
    </head>
    <body>

<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $cateto_a = 3;
    $cateto_b = 4;
    $hipotenusa=sqrt($cateto_a*$cateto_a+$cateto_b*$cateto_b);

    echo 'Valor de hipotenusa: ' . $hipotenusa . "<br/>\n";
}
 

?>

<form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="cateto_a">El valor del cateto a es:   4</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="cateto_b">El valor del cateto b es:   3</label>
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>