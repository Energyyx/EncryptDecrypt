<?php
require_once("func.php");
?>

<html>
    <title>EnergyyxDev - Encrypt-Decrypt</title>
    <body>
        <div>
            <h2>Encrypt</h2>
            <form action="index.php" method="POST">
            <p>Input Text to Encrypt: <input type="text" name="encrypt_text" value="" style="width:400px;" /></p>
            <p><button type="submit" name="submit">Submit</button></p>
            <?php  
            $encrypt_text = $_POST['encrypt_text'];
            $result_e = ed($encrypt_text, true);
            echo "<p>Result: $result_e</p>"; ?>
        </div>
        <div>
            <h2>Decrypt</h2>
            <form action="index.php" method="POST">
            <p>Input Text to Decrypt: <input type="text" name="decrypt_text" value="" style="width:400px;" /></p>
            <p><button type="submit" name="submit">Submit</button></p>
            <?php  
            $decrypt_text = $_POST['decrypt_text'];
            $result_d = ed($decrypt_text, false);
            echo "<p>Result: $result_d</p>"; ?>
        </div>
        
    <center>
        <p>Copyright By <a href='https://github.com/Energyyx'>EnergyyxDev</a></p>
    </center>
    </body>
</html>