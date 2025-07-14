

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Millionaire</title>
        <link rel="stylesheet" href="game_index_style.css">
        <link rel="icon" type="image/x-icon" href="img/logo.png">
    </head>
    <body>
        <audio controls loop autoplay src="index.mp3" style="display:none"></audio>
        <div class="main">
            <?php
                $name_for_img = str_replace(" ","_",trim($_SESSION['userdata']['name']));
                $name_updated = strtolower($name_for_img);
            ?>
            <b style="color: #FFFFCC;">
            <?php 
            echo "<center><img src = 'images/".$name_updated.".jpeg' alt='match'><br>";
            echo $_SESSION['userdata']['name'] ;?></b>
            <br><br>
            <!-- <a href = "game_main.php">Start the Game</a> -->
            <button class="animated-button"><a href="game_main.php">Start the Game</a></button>
            <br><br>
            <!-- <a href="logout_from_index.php">Logout</a><br> -->
            <button class="animated-button"><a href="logout_from_index.php">Logout</a></button>
            <h4 style="color:#FFFFCC;">Scoreboard of <?php echo $_SESSION['userdata']['name']; ?></h4>
            <table class = "scoreboard" border="1">
                <tr>
                    <th>Amount won in previous games</th>
                    <th>Time of previous games</th>
                </tr>
                <?php 
                    foreach($score_values as $score){ ?>

                    <tr>
                        <td> <?php echo $score[1]; ?> </td>
                        <td> <?php echo $score[2] ;?> </td>
                    </tr>
                        
                <?php } ?>
                
            </table>
        </div>


    </body>
</html>