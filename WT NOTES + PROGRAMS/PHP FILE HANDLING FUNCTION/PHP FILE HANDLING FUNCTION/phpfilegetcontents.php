<html>
  <head>
    <title>
      Reading a whole file at once
    </title>
  </head>

  <body>
    <h1>
       Reading a whole file at once
    </h1>
      <?php
        $text = file_get_contents("file.txt");
       // $text = file_get_contents("http://www.php.net");

        $fixed_text = str_replace("\n", "<br>", $text);

        echo $fixed_text;
      ?> 
  </body>
</html>
