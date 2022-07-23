<html>
  <head>
    <title>
      Welcome to my script
    </title>
  </head>

  <body>
    <h1>Welcome to my script</h1>
    <?php 
      echo "You have accessed ", $_SERVER["PHP_SELF"], " on port ", 
       $_SERVER["SERVER_PORT"];
    ?>
  </body>
</html>
