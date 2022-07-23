<html>
  <head>
    <title>
      Checking required data
    </title>
  </head>

  <body>
    <h1>Checking required data</h1>
    <?php
      $errors_array = array();

      if(isset($_REQUEST["welcome_already_seen"])){

         check_data();
         if(count($errors_array) != 0){
           show_errors();
           show_welcome();
         } 
         else {
           handle_data();
         }
      } 
      else {
        show_welcome();
      }

      function check_data()
      {
        global $errors_array;
        if($_REQUEST["flavor"] == "") {
          $errors_array[] = "<font color='red'>Please enter your flavor</font>";
        }
      }

      function show_errors()
      {
        global $errors_array;

        foreach ($errors_array as $err){
          echo $err, "<br>";
        }
      }

      function handle_data()
      {
        echo "Your favorite ice cream flavor is ";
        echo $_REQUEST["flavor"];
      }

      function show_welcome()
      {
        echo "<form method='post'>";
        echo "What's your favorite ice cream flavor?";
        echo "<br>";
        echo "<input name='flavor' type='text'>";
        echo "<br>";
        echo "<br>";
        echo "<input type='submit' value='Submit'>";
        echo "<input type='hidden' name='welcome_already_seen'         
         value='already_seen'>";
        echo "</form>";
      }
    ?>
    </body>
</html>