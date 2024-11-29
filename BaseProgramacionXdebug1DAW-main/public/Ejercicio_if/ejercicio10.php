<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nieve=0;
    $opcion= $_GET["opt"];
    switch ($opcion){
        case 1 :
            echo "           *<br>";
            echo "          ***<br>";
            echo "        *******<br>";
            echo "       *********<br>";
            echo "     *************<br>";
            echo "   ******************<br>";
            echo "*************************<br>";
            echo "___________||_____________";
            break;
        case 2:
            echo " _______________________";
            echo "|           ||          |";
            echo "|           ||          |";
            echo "|___________||__________|";
            echo "|___________||__________|";
            echo "|           ||          |";
            echo "|           ||          |";
            echo "|___________||__________|";
            break;
    }
    ?>
</body>
</html>