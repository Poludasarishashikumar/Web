<?php
class student{
public $rollno;
public $name;
public function constructor($rollno,$name)
{
this.$rollno=$rollno;
this.$name=$name;
}
public function display()
{
	echo $rollno;
	echo "<br>";
	echo $name;
}
}
$study=new student(501,"xyz");
$study->display();
$study2=new student(502,"abc");
$study2->display();
?>