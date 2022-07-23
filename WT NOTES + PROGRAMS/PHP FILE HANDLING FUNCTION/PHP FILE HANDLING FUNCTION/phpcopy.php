<html>
  <head>
    <title>
      Copying files
    </title>
  </head>

  <body>
    <h1>
       Copying files
    </h1>
      <?php
        $file = 'file.txt';
        $copy = 'copy.txt';

        if (copy($file, $copy)) {
          echo "Copied $file.";
        }
        else {
          echo "Could not copy $file.";
        }
      ?> 
  </body>
</html>
