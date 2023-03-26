<?php
if(isset($_POST['kirim'])) {
    $a = $_POST['bila'];
    $b = $_POST['bilb'];
    
    if ( $a > $b ) {
        echo "nilai terbesar adalah $a";
    } else {
        echo "nilai terbesar adalah $b";
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
        <input type="int" name="bilb">
        <button type="submit" name="kirim">kirim</button>
        <br>
        <a href="level1B.php">NEXT LEVEL?</a>
    </form>
</body>
</html>
