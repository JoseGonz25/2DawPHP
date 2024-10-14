<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="245imprimeTiquetCompra.php" method="get">
    
    <?php 
        $cantidad = $_GET['cantproduc'];
        for($i=0;$i<$cantidad;$i++){
    ?>
        <ul>
            <li>
            <label for="produc1">Producto:</label>
            <input type="text" id="produc<?=$i?>" name="produc<?=$i?>" />
            </li>
            <li>
            <label for="precio1">Precio:</label>
            <input type="text" id="precio<?=$i?>" name="precio<?=$i?>" />
            </li>
        </ul>
    <?php    
        } 
        
    ?>
    <input type="hidden" name="cantidad" id="cantidad" value=<?=$cantidad?>>
    <li class="button">
        <button type="submit">Envíe su mensaje</button>
    </li>

</form>
    
</body>
</html>