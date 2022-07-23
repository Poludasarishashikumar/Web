<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>student details</title>
</head>
<body style="background-color:aqua;border:5px solid black;">
<h1 align="center" style="background-color:tomato;border: 2px solid ghostwhite ;color:indigo">Balaji Institute of Technology and Sciences</h1>
<form action="war.php" method="get">
<div style="background-color:black;color:white;padding:20px;">
<img src="http://localhost/mypro/bits.jpeg" style="margin-left:580px"height="100" width="100" alt="picture.jpg"><br>
<label style="margin-left:580px">Enter the date and time of your submission:</label>
<input type="datetime-local"></input><br><br>
<label for="fname">FIRST NAME: </label>
<input style="margin-left:10px" type="text" id="fname" name="data[n1]" placeholder="enter your first name">
<label style="margin-left:150px" for="lname">LAST NAME:</label>
<input style="margin-left:10px"  type="text" id="lname" name="data[n2]"placeholder="enter your last name">
<label style="margin-left:150px" for="kum">ROLL NUMBER:</label>
<input style="margin-left:10px" type="text" id="kum" name="data[rol]" placeholder="19C31A0587"><br><br><br>
<label for="mt">BRANCH:</label>
<select style="margin-left:10px" name="data" >
<option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
<option value="Computer Science Engineering">Computer Science Engineering</option>
<option value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
</select>
<label for="ty" style="margin-left:60px">SEMISTER:</label>
<select style="margin-left:10px" id="ty" name="data[sem]">
<option value="I">I</option>
<option value="II">II</option>
</select>
<label style="margin-left:60px" for="birthday">DOB:</label>
<input type="date" id="birthday" name="data[b]"></input><br><br>
<label for="it">SUBJECTS:</label>
<select style="margin-left:10px" id="it" name="data[s]">
<option value="Web Technologies">Web Technologies</option>
<option value="Computer Networks">Computer Networks</option>
<option value="FLAT">FLAT</option>
<option value="Software Engineering">Software Engineering</option>
</select>
<label for="ot" style="margin-left:190px">BACKLOGS:</label>
<input type="checkbox" style="margin-left:10px" id="ot">Web Technologies</input>
<input type="checkbox" style="margin-left:10px" id="ot">Computer Networks</input>
<input type="checkbox" style="margin-left:10px" id="ot">FLAT</input>
<input type="checkbox" style="margin-left:10px" id="ot">Software Engineering</input><br><br>
<label for="myfile" id="myfile">Select a file:</label>
<input type="file" id="myfile" name="myfile"></input><br><br><br>
<label for="pt" style="margin-left:450px">EMAIL</label><br>
<input type="email" id="pt" style="margin-left:390px" placeholder="example@email.com"></input><br><br>
<label for="t" style="margin-left:430px">PASSWORD</label><br>
<input type="password" id="t" style="margin-left:390px" placeholder="Enter your password"></input><br>
<input type="radio" style="margin-left:350px">I agree for all the terms and conditions</input><br><br>
<input style="margin-left:440px;color:red;" type="submit" value="SUBMIT" >&#129311;</input><input type="reset"></input>
<p id="demo" style="margin-left:430px" >press submit!</p>
</div>
<br>
<br><br>
</form>
</body>
</html>