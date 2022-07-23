<html>
  <head>
    <title>
      Writing files with file_put_contents
    </title>
  </head>
  <body>
    <h1>
      Writing files with file_put_contents
    </h1>

    <?php
      $text = "Here\nis\nthe\ntext.";

      if (file_put_contents("data.txt", $text) == FALSE) {
        echo "Can not write data.txt.";
      }
      else {
        echo "Wrote to data.txt.";
      }
    ?>  
  </body>
</html>
