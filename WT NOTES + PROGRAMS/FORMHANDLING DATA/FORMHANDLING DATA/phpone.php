<html>
  <head>
    <title>Using one page to accept and process data</title>
  </head>

  <body>
    <h1>Using one page to accept and process data</h1>
    <?php
      if(isset($_REQUEST["flavor"])){
    ?>
      Your favorite ice cream flavor is
    <?php 
      echo $_REQUEST["flavor"];
      }
      else {
    ?>
    <form method="post" action="phpone.php">
      What's your favorite ice cream flavor?
      <input name="flavor" type="text">
      <br>
      <br>
      <input type=submit value=Submit>
    </form>
    <?php
      }
    ?>
  </body>
</html>
