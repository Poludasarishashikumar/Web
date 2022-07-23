<html>
  <head>
    <title>
      Using stat
    </title>
  </head>

  <body>
    <h1>
       Using stat
    </h1>
      <?php
        $array = stat("file.txt");

        echo "The file is ", $array["size"]. " bytes long.";
      ?> 
  </body>
</html>
