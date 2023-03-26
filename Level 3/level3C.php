<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method = "post">
        ANGKA1<br> <input type="text" name ="a"></input> <br>
        <br>
        ANGKA2 <br> <input type="text" name ="b"></input> <br>
        <br>
        ANGKA3 <br> <input type="text" name ="c"></input> <br>
        <br>
        <input type="submit" text = "cek">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if($a==$b && $b==$c){
            echo"segitiga sama sisi";
        }
         elseif($a==$b || $a==$c || $b==$c){
            echo"segitiga sama kaki";
        }
         else{
            echo"segitiga sembarang";
    }}
    ?>
    <br>
        <a href="level3B.php">LEVEL SEBELUMNYA</a>
</body>
</html>