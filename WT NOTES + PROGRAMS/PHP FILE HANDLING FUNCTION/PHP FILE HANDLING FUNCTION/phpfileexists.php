<html>
  <head>
    <title>
      Checking if a file exists
    </title>
  </head>

  <body>
    <h1>
       Checking if a file exists
    </h1>
      <?php
        $filename = "does_not_exist.txt";

        if (file_exists($filename)) {
          $data = file($filename);

          foreach ($data as $number => $line) {
            echo "Line $number: " , $line , "<br>";
          }
        } 
        else {
          echo "The file $filename does not exist";
        }
      ?> 
  </body>
</html>
