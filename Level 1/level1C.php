<?php
if(isset($_POST['kirim'])) {
    $a = $_POST['bila'];
    $b = $_POST['bilb'];
    $c = $_POST['bilc'];
    $d = $_POST['bild'];
    
    if ( $a > $b ) {
        if ( $a > $c ) {
            if ( $a > $d ) {
                echo "nilai terbesar adalah $a";
            } else {
                echo "nilai terbesar adalah $d";
            }
        }
    } else if ( $b > $c ) {
        echo "nilai terbesar adalah $b";
    } else {
        echo "nilai terbesar adalah $c";
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
        <input type="int" name="bila" required><br>
        <label for="">B</label>
        <input type="int" name="bilb" required><br>
        <label for="">C</label>
        <input type="int" name="bilc" required><br>
        <label for="">D</label>
        <input type="int" name="bild" required><br>
        <button type="submit" name="kirim">kirim</button>
    </form>
</body>
</html>
