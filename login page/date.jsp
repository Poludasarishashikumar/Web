<%@ import="java.util.*,java.io.*,javax.servlet.*"%>
<html>
<head>
<title>
display time and date</title>
</head>
<body>
<center>
<h1>displaying</h1>
</center>
<%
Date date=new Date();
out.println("<h2>"+date.toString()+"</h2>");
%>
</body>
</html>
