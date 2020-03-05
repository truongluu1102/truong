<?php


class user
{
	public $conn;
	public $username,$password,$fullname,$admin,$id,$email,$phone;
	public function connect()
	{
		$this->conn= new connect();
		$this->conn->connect();

	}
	public function setUser1($username,$password,$fullname,$email,$phone)
	{
		$this->username=$username;
		$this->password=$password;
		$this->fullname=$fullname;
		$this->email=$email;
		$this->phone=$phone;
	}
	public function setUser2($username,$password)
	{
		$this->username=$username;
		$this->password=$password;
	}
	public function setUser3($id)
	{
		
	}
	public function addUser()
	{
		$query = "INSERT INTO user (username,password,fullname,email,phone) VALUES 
		('$this->username','$this->password','$this->fullname','$this->email','$this->phone')";
		$result = mysqli_query($this->conn->connect, $query);
	}
	public function isUser()
	{
		
		$query="SELECT id,admin FROM user WHERE username='$this->username' AND password ='$this->password'";
		$result = mysqli_query($this->conn->connect, $query);
	
		if(mysqli_num_rows($result)>0) 
		{
			$row=mysqli_fetch_row($result);
			$this->id=$row[0];
			$this->admin=$row[1];
			return true;
		}
		else return false;
	}
	public function hadUser($str)
	{
		$query="";
		if($str=="username")$query="SELECT id FROM user WHERE username='$this->username'";
		if($str=="email")$query="SELECT id FROM user WHERE email='$this->email'";
		if($str=="phone")$query="SELECT id FROM user WHERE phone='$this->phone'";
		$result = mysqli_query($this->conn->connect, $query);
		if(mysqli_num_rows($result)>0) 
		{
			if($str=="username") return "hadUsername";
			if($str=="email") return "hadEmail";
			if($str=="phone") return "hadPhone";
		}
		else return "none";
	}
	public function getId()
	{
		return $this->id;
	}
	public function setAdmin()
	{
	$query="UPDATE user SET admin = 1 WHERE id=$this->id";	
	$result = mysqli_query($this->conn->connect, $query);
	}
	public function isAdmin()
	{
		echo $this->admin;
		if($this->admin==1)return true;
		else return false;
	}
	public function userclose()
	{
		$this->conn->Close();
	}
}
?>