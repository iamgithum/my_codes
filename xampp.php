<!doctype html>
<html lang=en>
    <head>
        <title><?php $_SERVER['PHP_SELF']; ?></title>
        <style type=text/css>
            body{
                background-color:#f2f2f2;
            }
            div{
                margin:9px;
                padding:9px;
            }
        </style>
    </head>
    <body>
        <h1>Hello Php</h1>
        <div>
            <?php
                echo "Printing this code<br>";
                $file = $_SERVER['PHP_SELF'];
                $var = fopen($file,"r");
                echo fread($var,filesize($file));
                fclose($file);
                #readfile("<?php  ?>");
            ?>
        </div>
    </body>
</html>