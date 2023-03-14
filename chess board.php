<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1 style="margin-left:400px;text-decoration:underline;">CHESS BOARD</h1>
        <table border = "1px" height="250px" width="250px" style="margin-left:400px;">
            <?php
            for($row = 1;$row <= 8;$row++)
            {
                echo "<tr>";
                for($col = 1;$col <= 8;$col++)
                {
                    $total=$row+$col;
                    if($total%2 == 0)
                    {
                        echo "<td bgcolor=black></td>";
                    }
                    else
                    {
                        echo "<td ></td>";
                    }
                }
            }
            ?>
        </table>
    </body>
</html>