<html>
  <head>
    <title>
      Appending to files 
    </title>
  </head>
  <body>
    <h1>
      Appending to files
    </h1>

    <?php
      $handle = fopen("data.txt", "a");

      $text = "\nHere\nis\nmore\ntext.";

      if (fwrite($handle, $text) == FALSE) {
        echo "Can not append to data.txt.";
      }
      else {
        echo "Appended to data.txt.";
      }

      fclose($handle);
    ?>  
  </body>
</html>