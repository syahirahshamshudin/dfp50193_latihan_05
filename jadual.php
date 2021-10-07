<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadual-Jadual Darab</title>
    <style>
        *{
            font-family:verdana, Geneva, Tahoma, sans-serif;
        }
        td{
            padding: 4px;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <h1>Jadual-Jadual Darab</h1>

    <table>
        <tr>
            <?php
            for($x = 1; $x <= 10; $x++) {
                if($x % 2 == 0){
                ?>
                <td>
                    <h2>Darab <?php echo $x; ?></h2>

                    <?php
                    for ($y = 1; $y <= 12; $y++) {
                        $z = $x * $y;
                        echo "<p>$y X $x = $z </p>";
                    }
                    ?>
                </td>
            <?php
                }
            }
                ?>
        </tr>
            }
    </table>
    
</body>
</html>