<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
   
        <label for="euro">EURO</label>          
        <input type="number" name="euro"/>
        <input type="submit" value="Calcular" name="euros_dolar"/>
    </br>
        <label for="dolar">DÓLAR</label>          
        <input type="number" name="dolar"/>
        <input type="submit" value="Calcular" name="dolar_euro"/>
    </br>
        
    
    </form>

    <?php
    
        $euro_dolar=$_POST['euro'] * 1.10;
        $dolar_euro=$_POST['dolar'] * 0.91;

        if (isset($_POST['euros_dolar'])) {
            
            echo "<p>Son ".$euro_dolar." dólares</p>";
        }
        if (isset($_POST['dolar_euro'])) {
            
            echo "<p>Son ".$dolar_euro." euros</p>";
        }
    
    ?>


</body>
</html>

