<?php
	
class connect
{
	public $connect;
	public function connect()
	{
		$this->connect=mysqli_connect("us-cdbr-iron-east-04.cleardb.net", "b2a25855721aa", "a87e1f6f", "heroku_12ce267cd554a88");
	}
	public function close()
	{
		mysqli_close($this->connect);
	}
	public function getConnect()
	{
		return $this->connect;
	}
}


?>
