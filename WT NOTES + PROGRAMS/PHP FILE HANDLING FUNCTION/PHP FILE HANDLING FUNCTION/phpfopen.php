<html>
  <head>
    <title>
      Opening a file
    </title>
  </head>

  <body>
    <h1>
       Opening a file
    </h1>
    <?php
      $handle = fopen("file.txt", "r");
      if($handle){
        echo "File opened OK.";
      }
    ?>  
  </body>
</html>
