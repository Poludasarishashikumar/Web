<html>
  <head>
    <title>
      Reading binary data
    </title>
  </head>

  <body>
    <h1>
       Reading binary data
    </h1>
      <?php
        $handle = fopen("file.txt", "rb");
        $text = fread($handle, filesize("file.txt"));

        $fixed_text = str_replace("\n", "<br>", $text);

        echo $fixed_text;

        fclose($handle);
      ?> 
  </body>
</html>
