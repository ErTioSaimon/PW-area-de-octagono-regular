<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Octagono Regular</title>
</head>
<body>
<h1 align="center">Calculo de área de un octágono regular</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <table align="center" border="1">
            <tr>
                <td>
                    <label for="perimetro">Valor del Perimetro:</label>
                </td>
                <td>
                    <input type="number" name="perimetro" id="perimetro">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="apotema">Valor del Apotema:</label>
                </td>
                <td>
                    <input type="number" name="apotema" id="apotema">
                </td>
            </tr>
        </table>
        <br>
        <div align="center">
            <input type="submit" name="btn" value="Calcular">
            <input type="reset" name="btn" value="Limpiar">
        </div>
        <br><br>
    </form>
    <?php
    if (isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
        if (isset($_POST['perimetro']) && !empty($_POST['perimetro']) && isset($_POST['apotema']) && !empty($_POST['apotema'])) {
            $perimetro = $_POST['perimetro'];
            $apotema = $_POST['apotema'];
            $area = null;
            if (is_numeric($perimetro) && is_numeric($apotema)) {
                $area = ($perimetro * $apotema) / 2;
                ?>
                <table align="center" border="1">
                    <tr>
                        <td>
                            Valor del Perimetro:
                        </td>
                        <td>
                            <?php
                            echo $perimetro . 'Cm';
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Valor del Apotema:
                        </td>
                        <td>
                            <?php
                            echo $apotema . 'Cm';
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Area del Octágono:
                        </td>
                        <td>
                            <?php
                            echo $area . 'Cm';
                            ?>
                        </td>
                    </tr>
                </table>
                <?php
                unset($perimetro);
                unset($apotema);
            } else {
                echo 'Por favor solo ingrese valores numericos';
                unset($perimetro);
                unset($apotema);
            }
            
        } else {
            echo 'Por favor ingrese todos los valores requeridos';
            unset($perimetro);
            unset($apotema);
        }
        
    }
    ?>
</body>
</html>