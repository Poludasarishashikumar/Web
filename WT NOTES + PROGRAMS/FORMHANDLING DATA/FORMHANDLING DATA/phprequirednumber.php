<html>
  <head>
    <title>
      Requiring integer input
    </title>
  </head>

  <body>
    <h1>Requiring integer input</h1>
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
         if(strcmp($_REQUEST["number"], strval(intval($_REQUEST["number"])))) {
           $errors_array[] = "<font color='red'>Please enter an integer</font>";
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
         echo "Your age is ";
         echo $_REQUEST["number"];
       }

       function show_welcome()
       {
         echo "<form method='post'>";
         echo "Please enter your age as an integer.";
         echo "<br>";
         echo "<input name='number' type='text'>";
         echo "<br>";
         echo "<br>";
         echo "<input type='submit' value='Submit'>";
         echo "<input type=hidden name='welcome_already_seen' 
           value='already_seen'>";
         echo "</form>";
       }
    ?>
  </body>
</html>