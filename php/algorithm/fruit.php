<?php

class fruit
{
	public $conn;
	public $id,$fruit_name,$fruit_country,$fruit_status,$fruit_category,$fruit_cost,$fruit_sale,$fruit_describe,$fruit_image,$fruit_code,$fruit_date,$fruit_expiryDate;
	
	public function connect()
	{
		$connect= new connect();
		$connect->connect();
		$this->conn=$connect->connect;

	}
	public function setFruit($fruit_name,$fruit_country,$fruit_status,$fruit_category,$fruit_cost,$fruit_describe,$fruit_image,$fruit_code,$fruit_date,$fruit_expiryDate)
	{
		$this->fruit_name=$fruit_name;
		$this->fruit_country=$fruit_country;
		$this->fruit_status=$fruit_status;
		$this->fruit_category=$fruit_category;
		$this->fruit_cost=$fruit_cost;
		$this->fruit_describe=$fruit_describe;
		$this->fruit_image=$fruit_image;
		$this->fruit_code=$fruit_code;
		$this->fruit_date=$fruit_date;
		$this->fruit_expiryDate=$fruit_expiryDate;
	}
	public function setFruitByID($id)
	{
		$this->id=$id;
		$query="SELECT fruit_name,fruit_image,fruit_cost,fruit_sale,fruit_country,fruit_status,fruit_category,fruit_describe,fruit_date,fruit_expiryDate FROM fruit WHERE fruit_id='$id'";
		$result = mysqli_query($this->conn, $query);
		while($row = mysqli_fetch_assoc($result))
		{
		$this->fruit_name=$row['fruit_name'];
		$this->fruit_country=$row['fruit_country'];
		$this->fruit_status=$row['fruit_status'];
		$this->fruit_category=$row['fruit_category'];
		$this->fruit_cost=$row['fruit_cost'];
		$this->fruit_describe=$row['fruit_describe'];
		$this->fruit_image=$row['fruit_image'];
		$this->fruit_date=$row['fruit_date'];
			$this->fruit_sale=$row['fruit_sale'];
		$this->fruit_expiryDate=$row['fruit_expiryDate'];
		}
	}
	public function editFruit_decribe()
	{
		
		
	}
	public function addFruit()
	{
		nl2br($this->fruit_describe);

		$query = "INSERT INTO fruit (fruit_name,fruit_country,fruit_status,fruit_category,fruit_cost,fruit_describe,fruit_image,fruit_code,fruit_date,fruit_expiryDate) VALUES 
		('$this->fruit_name','$this->fruit_country','$this->fruit_status','$this->fruit_category','$this->fruit_cost','$this->fruit_describe','$this->fruit_image','$this->fruit_code','$this->fruit_date','$this->fruit_expiryDate')";
		$result = mysqli_query($this->conn, $query);
	}
		public function hadFruit()
	{
		
		$query="SELECT id FROM fruit WHERE fruit_code='$this->fruit_code'";
		$result = mysqli_query($this->conn, $query);
		if(mysqli_num_rows($result)>0) 
		{
			return true;
		}
		else return false;
	}
	public function ShowFruitHome($for)
	{
		$array =array();
		if($for=="new")
		$query="SELECT fruit_id,fruit_name,fruit_image,fruit_country,fruit_sale,fruit_cost FROM fruit WHERE fruit_sale =0 ORDER BY fruit_id DESC LIMIT 12";
		else if($for=="hot")
		{
			$query="SELECT fruit_id, fruit_name,fruit_image,fruit_country,fruit_cost,fruit_sale FROM fruit WHERE fruit_sale =0 ORDER BY fruit_status ASC LIMIT 12";
		}
				else if($for=="sale")
		{
			$query="SELECT fruit_id, fruit_name,fruit_image,fruit_country,fruit_cost,fruit_sale FROM fruit WHERE fruit_sale > 0 ORDER BY fruit_sale DESC LIMIT 12";
		}
		$result = mysqli_query($this->conn, $query);
		while($row = mysqli_fetch_assoc($result))
		{
			$row['fruit_sale']=$row['fruit_cost']-$row['fruit_sale']*$row['fruit_cost']/100;
			$array[]=array('fruit_id'=> $row['fruit_id'],'fruit_name' => $row['fruit_name'],'fruit_image' => $row['fruit_image'],'fruit_cost' => $row['fruit_cost'],'fruit_sale' => $row['fruit_sale'],'fruit_country' => $row['fruit_country']);
		}
		return $array;
	
	}
	public function ShowFruitSearch($text)
	{
		$array =array();
		$query="SELECT fruit_id,fruit_name,fruit_image,fruit_cost,fruit_sale,fruit_country FROM fruit WHERE fruit_name LIKE '%$text%' OR fruit_country LIKE '%$text%' ORDER BY fruit_id DESC ";
		$result = mysqli_query($this->conn, $query);
		while($row = mysqli_fetch_assoc($result))
		{
			$row['fruit_sale']=$row['fruit_cost']-$row['fruit_sale']*$row['fruit_cost']/100;
			$array[]=array('fruit_id'=> $row['fruit_id'],'fruit_name' => $row['fruit_name'],'fruit_image' => $row['fruit_image'],'fruit_cost' => $row['fruit_cost'],'fruit_sale' => $row['fruit_sale'],'fruit_country' => $row['fruit_country']);
		}
		return $array;
	}
		public function ShowFruitCategory($text)
	{
		$array =array();
		$query="SELECT fruit_id,fruit_name,fruit_image,fruit_cost,fruit_sale,fruit_country FROM fruit WHERE fruit_category LIKE '%$text%' ORDER BY fruit_id DESC LIMIT 12";
		$result = mysqli_query($this->conn, $query);
		while($row = mysqli_fetch_assoc($result))
		{
			$row['fruit_sale']=$row['fruit_cost']-$row['fruit_sale']*$row['fruit_cost']/100;
			$array[]=array('fruit_id'=> $row['fruit_id'],'fruit_name' => $row['fruit_name'],'fruit_image' => $row['fruit_image'],'fruit_cost' => $row['fruit_cost'],'fruit_sale' => $row['fruit_sale'],'fruit_country' => $row['fruit_country']);
		}
		return $array;
	}
	public function ShowFruitCategories()
	{
		$array =array();
		$query="SELECT DISTINCT fruit_category FROM fruit LIMIT 5";
		$result = mysqli_query($this->conn, $query);
		while($row = mysqli_fetch_assoc($result))
		{
			
			$array[]=array('category' =>$row['fruit_category']);
		}
		return $array;
	}
	public function ShowFruitCountries()
	{
		$array =array();
		$query="SELECT DISTINCT fruit_country FROM fruit LIMIT 5";
		$result = mysqli_query($this->conn, $query);
		while($row = mysqli_fetch_assoc($result))
		{
			
			$array[]=array('country' =>$row['fruit_country']);
		}
		return $array;
	}
		public function ShowFruitCountry($text)
	{
		$array =array();
		$query="SELECT fruit_id,fruit_name,fruit_image,fruit_cost,fruit_sale,fruit_country FROM fruit WHERE fruit_country LIKE '%$text%' ORDER BY fruit_id DESC LIMIT 12";
		$result = mysqli_query($this->conn, $query);
		while($row = mysqli_fetch_assoc($result))
		{
			$row['fruit_sale']=$row['fruit_cost']-$row['fruit_sale']*$row['fruit_cost']/100;
			$array[]=array('fruit_id'=> $row['fruit_id'],'fruit_name' => $row['fruit_name'],'fruit_image' => $row['fruit_image'],'fruit_cost' => $row['fruit_cost'],'fruit_sale' => $row['fruit_sale'],'fruit_country' => $row['fruit_country']);
		}
		return $array;
	}
	public function ShowFruitHomeNoLimit($for)
	{
		$array =array();
		if($for=="new")
		$query="SELECT fruit_id,fruit_name,fruit_image,fruit_country,fruit_sale,fruit_cost FROM fruit ORDER BY fruit_id DESC";
		else if($for=="hot")
		{
			$query="SELECT fruit_id, fruit_name,fruit_image,fruit_country,fruit_cost,fruit_sale FROM fruit ORDER BY fruit_status ASC";
		}
				else if($for=="sale")
		{
			$query="SELECT fruit_id, fruit_name,fruit_image,fruit_country,fruit_cost,fruit_sale FROM fruit WHERE fruit_sale > 0 ORDER BY fruit_sale DESC";
		}
		$result = mysqli_query($this->conn, $query);
		while($row = mysqli_fetch_assoc($result))
		{
			$row['fruit_sale']=$row['fruit_cost']-$row['fruit_sale']*$row['fruit_cost']/100;
			$array[]=array('fruit_id'=> $row['fruit_id'],'fruit_name' => $row['fruit_name'],'fruit_image' => $row['fruit_image'],'fruit_cost' => $row['fruit_cost'],'fruit_sale' => $row['fruit_sale'],'fruit_country' => $row['fruit_country']);
		}
		return $array;
	
	}
	public function fruit_Close()
	{
		$this->conn->Close();
	}
}
?>