<?php
if(is_uploaded_file($_FILES['f1']['tmp_name']))
	{
		$fname=$_FILES['f1']['name'];
		if(move_uploaded_file($_FILES['f1']['tmp_name'],"uploadsl$fname"))
		{
		echo "Uploaded sucessfully";
	}
	else
	{
		echo "Not uploaded";
	}
	}
	?>