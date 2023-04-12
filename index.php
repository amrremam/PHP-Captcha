<?php
session_start();

if(!isset($_POST['secure'])){
    $_SESSION['secure'] = rand(1000,9999);
} else{
    if($_SESSION['secure'] == $_POST['secure']){
        echo 'Correct';
    }else{
        echo 'Incorrect';
        $_SESSION['secure'] = rand(1000,9999);
    }
}

?>

<br>
<img src="submit.php"><br>

<form action="index.php" method="POST">
    Type the value : <input type="text" size="6" name="secure"> <input type="submit" value="submit">
</form>