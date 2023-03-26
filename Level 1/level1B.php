<?php
if(isset($_POST['kirim'])) {
    $a = $_POST['bila'];
    $b = $_POST['bilb'];
    $c = $_POST['bilc'];
    
    if ( $a > $b ) {
        if ( $a > $c ) {
            echo "bilangan terbesar adalah $a";
        } else {
            echo "bilangan terbesar adalah $c";
        }
    } else if ( $b > $c ) {
        echo "bilangan terbesar adalah $b";
    } else {
        echo "bilangan terbesar adalah $c";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">A</label>
        <input type="int" name="bila"><br>
        <label for="">B</label>
        <input type="int" name="bilb"><br>
        <label for="">C</label>
        <input type="int" name="bilc">
        <button type="submit" name="kirim">kirim</button>
        <br>
        <a href="level1C.php">NEXT LEVEL?</a>
    </form>
</body>
</html>
