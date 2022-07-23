<html>
  <head>
    <title>
      Reading a Web page into an array
    </title>
  </head>

  <body>
    <h1>
       Reading a Web page into an array
    </h1>
      <?php
        $data = file('http://www.php.net');

        foreach ($data as $number => $line) {
           echo "Line $number: " , $line , "<br>";
        }
      ?> 
  </body>
</html>
