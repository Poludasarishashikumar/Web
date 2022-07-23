<html>
  <head>
    <title>
      Writing binary files 
    </title>
  </head>
  <body>
    <h1>
      Writing binary files 
    </h1>

    <?php
      $number = 512;
      $handle = fopen ("data.dat", "wb");
      if (fwrite ($handle, pack ("L", $number)) == FALSE) {
        echo "Can not write data.dat.";
      }
      else {
        echo "Created data.dat. and stored $number.";
      }

      fclose ($handle);
    ?>  
  </body>
</html>
