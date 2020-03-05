<?php
	
class connect
{
	public $connect;
	public function connect()
	{
		$this->connect=mysqli_connect("127.0.0.1", "root", "", "teamnd");
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