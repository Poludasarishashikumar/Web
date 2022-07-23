<html>
  <head>
    <title>
      Locking and unlocking files 
    </title>
  </head>
  <body>
    <h1>
      Locking and unlocking files
    </h1>

    <?php
      $handle = fopen("data.txt", "w");

      $text = "Here\nis\nthe\ntext.";

      if (flock($handle, LOCK_EX | LOCK_NB)) { 
        echo "Locked the file. <br>";
        if (fwrite($handle, $text) == FALSE) {
          echo "Can not write data.txt. <br>";
        }
        else {
          echo "Wrote to data.txt. <br>";
        }
        flock($handle, LOCK_UN); 
        echo "Unlocked the file. <br>";
      } 
      else {
        echo "Could not lock the file. <br>";  
      }

      fclose($handle);
    ?>  
  </body>
</html>
