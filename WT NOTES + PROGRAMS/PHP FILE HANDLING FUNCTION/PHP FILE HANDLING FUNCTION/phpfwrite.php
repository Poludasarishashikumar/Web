<html>
    <head>
        <title>
            Writing files 
        </title>
    </head>
    <body>
      <h1>
        Writing files
      </h1>

      <?php
        $handle = fopen("data.txt", "w");

        $text = "IIIIIIIRD YEAR Here\nis\nthe\ntext.";

        if (fwrite($handle, $text) == FALSE) {
          echo "Can not write data.txt.";
        }
        else {
          echo "Created data.txt.";
        }

        fclose($handle);
      ?>  
    </body>
</html>
