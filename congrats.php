<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Millionaire</title>
        <link rel="stylesheet" href="congrats_style.css">
        <link rel="icon" type="image/x-icon" href="images/logo.png">
    </head>

    <body>
        <audio controls autoplay src="congo.mp3" style="display:none"></audio>
        <?php 
        if($_SESSION['count'] == 15){ 
            header("location:congrats_main.php");
        } else { 
        $c = $_SESSION['count']-1;
        ?>
        <div class="won">

            <p style="font-family: 'Poppins',sans-serif;">Congratulations! You have won </p><h1 ><?php echo $_SESSION['full_data'][$c][0]; ?></h1>
            <br>
            <button class="animated-button"><a href="game_main.php">Continue the Game</a></button>
            <br><br>
            <button class="animated-button"><a href="logout_from_index.php">Logout</a></button>
        </div>
      <?php }   
        ?>
    </body>
</html>