<?php
class shape{
	public $len;
	public $bre;
	public $heig;
	public function constructor($len,$bre,$heig)
	{
		$this->len=$len;
		$this->bre=$bre;
		$this->heig=$heig;
		echo $len,",",$bre;
		echo "<br>";
		echo "len=$len";
		echo "<br>";
		echo "bre=$bre";
		echo "<br>";
		echo "area= ",$len+$bre;
		echo "<br>";
		echo "height=$heig";
	echo "<br>";
echo "vol=",$len*$bre*$heig;
	}
}
$obj=new shape;
$obj->constructor(5,2,7);
?>