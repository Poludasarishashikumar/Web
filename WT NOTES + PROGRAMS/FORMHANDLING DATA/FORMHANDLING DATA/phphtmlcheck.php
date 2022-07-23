<html>
  <head> 
    <title>Handling HTML in user input</title>
  </head>

  <body>
    <H1>Handling HTML in user input</H1>
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
          $errors_array[] = "<font color='red'>Enter your favorite flavor</font>";
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
        echo "Your name is ";
        $ok_text = strip_tags($_REQUEST["flavor"]);
        echo $ok_text;
      }

      function show_welcome()
      {
        echo "<form method='post'>";
        echo "What's your favorite ice cream flavor?<br>";
        echo "<input name='flavor' type='text'>";
        echo "<br><br>";
        echo "<input type='submit' value='Submit'>";
        echo "<input type='hidden' name='welcome_already_seen' 
          VALUE='already_seen'>";
        echo "</form>";
      }
    ?>
  </body>
</html>