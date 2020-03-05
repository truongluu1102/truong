<link href="/css/link/link.css" rel="stylesheet" type="text/css"/>
<?php
$link1="";
$fruit = new fruit();
$fruit->connect();
if(isset($_GET["country"]))
   $link1=$_GET["country"];
else if(isset($_GET["id"]))
{
$fruit->setFruitByID($_GET["id"]);
$link1 =$fruit->fruit_country;
$link2=$fruit->fruit_name;
}

?>
<div class="mid">
  <div class="container pl-2  pr-2">
    <div class="mucluc mt-3 mb-2"> <a class="trang-chu" href="/" title="Trang Chủ"> Trang chủ </a> <span class="avigation-pipe">  <span class="avigation-pipe"> &nbsp; <i class="fas fa-chevron-right"></i> &nbsp; </span> <a class="nguon-goc" 
	href="<?php if(isset($_GET["id"]))echo"/country/?country=$fruit->fruit_country"?>" title="Nguồn gốc"> Trái Cây <?php echo $link1?> </a>
		<?php
		if(isset($_GET["id"]))
			echo"<span class='avigation-pipe'> &nbsp; <i class='fas fa-chevron-right'></i> &nbsp; </span> <a class='nguon-goc' href='' title='Nguồn gốc'>$link2</a>";
		?>
	  	
		</div>
  </div>
</div>
	<?php
	$fruit->fruit_Close();
	?>
