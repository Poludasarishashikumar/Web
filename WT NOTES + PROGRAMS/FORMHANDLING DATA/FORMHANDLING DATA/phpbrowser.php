<html>
  <head>
        <title>Determining Browser Type</title>
  </head>

  <body>
    <h1>Determining Browser Type</h1>
    <br>
    <?php
      if(strpos($_SERVER["HTTP_USER_AGENT"], "MSIE")){
        echo("<marquee><h1>You're using the Internet Explorer</h1></marquee>");
      }
      elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Firefox")) {
        echo("<h1>You are using Firefox</h1>");
      }
      else {
        echo("<h1>You are not using Internet Explorer or Firefox</h1>");
      }
    ?>
  </body>
</html>
