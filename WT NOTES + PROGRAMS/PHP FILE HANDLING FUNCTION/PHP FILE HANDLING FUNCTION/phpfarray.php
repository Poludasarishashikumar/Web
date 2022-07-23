<html>
  <head>
    <title>
      Reading a file into an array
    </title>
  </head>

  <body>
    <h1>
       Reading a file into an array
    </h1>
      <?php
        $data = file('file.txt');

        foreach ($data as $number => $line) {
           echo "Line $number: " , $line , "<br>";
        }
      ?> 
  </body>
</html>
