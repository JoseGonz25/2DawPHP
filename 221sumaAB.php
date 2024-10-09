<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $sumTotal=0;

        for($i=$_GET["num1"];$i<=$_GET["num2"];i++){

            $sumTotal+=$i;
        }

        echo "$sumTotal"
    
    ?>
</body>
</html>