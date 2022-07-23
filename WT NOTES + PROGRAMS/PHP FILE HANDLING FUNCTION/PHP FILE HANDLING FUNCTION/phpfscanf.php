<html>
  <head>
    <title>
      Parsing files
    </title>
  </head>

  <body>
    <h1>
       Parsing files
    </h1>
      <?php
        $handle = fopen("actors.txt", "r");

        while ($name = fscanf($handle, "%s\t%s\n")) {
          list ($firstname, $lastname) = $name;
          echo $firstname, " ", $lastname, "<br>";
        }

        fclose($handle);
      ?> 
  </body>
</html>
