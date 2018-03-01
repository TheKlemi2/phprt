<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ex2</title>
    </head>
    
<body>
   
    <form method="GET">
        <label for="size">Size : </label>
        <input type="number" value="" name="size" id="size">
        <input type="submit" value="Valider">
        
        <label for="color">couleur : </label>
        <input type="text" value="" name="color" id="color">
        <input type="submit" value="Valider">
    </form>
    

    
    
    <?php
        echo "<div style='font-size: {$_GET["size"]}px;'>
            Message de taille {$_GET["size"]}px en rouge</div>";
        echo "<div style='color: {$_GET["color"]}px;'>
            Message de couleur {$_GET["couleur"]}px en rouge</div>";
     ?>

</body>
    
</html>