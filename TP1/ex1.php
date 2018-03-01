<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
<body>
    
    <?php
        echo("Hello world !");
    ?>

<?php
echo("<h1>Salut ");
if(isset($_GET["message"])){
	echo $_GET["message"];
}
echo(" !</h1>");
?>
    
        
    <br>
    <a href="ex1.php?message=toto">Afficher toto</a>
    <br>
    <a href="ex1.php?message=titi">Afficher titi</a>
    <br>
    <a href="ex1.php">Afficher salut</a>
    

</body>
    
</html>