<html>
  <head>
    <title>
      Parsing .ini files
    </title>
  </head>

  <body>
    <h1>
       Parsing .ini files
    </h1>
      <?php
        $array = parse_ini_file("sample.ini");
        foreach ($array as $key => $value) {
          echo "$key => $value <br>";
        }
      ?> 
  </body>
</html>
