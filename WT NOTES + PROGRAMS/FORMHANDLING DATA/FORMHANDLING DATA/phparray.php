<html>
  <head>
    <title>
      Using form arrays
    </title>
  </head>

  <body>
    <h1>Using form arrays</h1>
    Your name is
    <?php 
      $data = $_REQUEST['data'];
      echo $data['name'], "<br>";
    ?>
      
    Your favorite flavor is
    <?php 
      $data = $_REQUEST['data'];
      echo $data['flavor'], "<br>";
    ?>
  </body>
</html>
