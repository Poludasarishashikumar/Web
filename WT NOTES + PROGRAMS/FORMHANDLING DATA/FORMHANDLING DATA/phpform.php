<html>
  <head>
    <title>
      Dumping form data
    </title>
  </head>

  <body>
    <h1>Dumping form data</h1>
    Here is the data from the form:
    <br>
    <?php
      foreach($_REQUEST as $key => $value){
        if(is_array($value)){
          foreach($value as $item){
            echo $key, " => ", $item, "<br>";
          }
        }
        else {
          echo $key, " => ", $value, "<br>";
        }
      }
    ?>
  </body>
</html>
