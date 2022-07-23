<html>
  <head>
    <title>
      Reading binary files 
    </title>
  </head>
  <body>
    <h1>
      Reading binary files 
    </h1>

    <?php
      $handle = fopen ("data.dat", "rb");
      $data = fread ($handle, 4);
      $array = unpack ("Ldata", $data);
      $data = $array["data"];
      echo "Read this value from data.dat: ", $data;
    ?>  
  </body>
</html>
