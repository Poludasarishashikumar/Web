<html>
  <head>
    <title>
      Reading from a file
    </title>
  </head>

  <body>
    <h1>
       Reading from a file
    </h1>
    <?php
      $handle = fopen("file.txt", "r");
      while (!feof($handle)){
        $text = fgets($handle);
        echo $text, "<br>";
      }
      fclose($handle);
    ?>  
  </body>
</html>
