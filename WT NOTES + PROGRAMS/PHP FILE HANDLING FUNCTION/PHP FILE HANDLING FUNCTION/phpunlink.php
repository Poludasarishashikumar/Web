 <html>
  <head>
    <title>
      Deleting files
    </title>
  </head>

  <body>
    <h1>
       Deleting files
    </h1>
      <?php
        if(unlink("copy.txt")){
          echo "Deleted the file.";
        }
        else {
          echo "Could not delete the file.";
        }
      ?> 
  </body>
</html>
