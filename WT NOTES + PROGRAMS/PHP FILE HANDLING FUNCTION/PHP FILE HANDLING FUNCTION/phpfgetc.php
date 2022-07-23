<html>
  <head>
    <title>
      Reading characters from a file
    </title>
  </head>

  <body>
    <h1>
       Reading characters from a file
    </h1>
      <?php
        $handle = fopen("file.txt", "r");

        while ($char = fgetc($handle)) {
          if($char == "\n"){
            $char = "<br>";
          }
          echo "$char";
        }

        fclose($handle);
      ?> 
  </body>
</html>
