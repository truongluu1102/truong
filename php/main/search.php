<link href="/css/main/main.css" rel="stylesheet" type="text/css"/>
<?php
$fruit = new fruit();
$fruit->connect();
$search_text = "";
if ( isset( $_GET[ "search" ] ) ) {
	$search_text = $_GET[ "search_text" ];
}
$arr = $fruit->ShowFruitSearch( $search_text );
?>
<div class="mid">
	<div class="container pl-2 pr-2 ">
		<div class="title">
			<div class="container pl-2 pr-2 ">
				<div class="float-left"> <?php
					if($search_text!="")
					echo "Tìm kiếm: ".$search_text;
					else echo "Tìm kiếm: Tất cả";
					?></div>
					</div>
				
				</div>
			</div>
<div class="container pl-2 pr-2 ">
		<div class="row products ">
			<?php
		  foreach($arr as $row)
			  {
			  $row['fruit_sale']=number_format($row['fruit_sale'], 0, '', '.');
			   $row['fruit_cost']=number_format($row['fruit_cost'], 0, '', '.');
				if($row['fruit_sale']==$row['fruit_cost'])
				{
					$row['fruit_sale']='Giá: '.$row['fruit_cost'].'đ/kg';
					$row['fruit_cost']='';
				}
			  else 
			  {
				  $row['fruit_sale']='Giá: '.$row['fruit_sale'].'đ/kg';
					$row['fruit_cost']='Giá: '.$row['fruit_cost'].'đ/kg';
			  }
		  echo "
		  	<div class='col-lg-3 col-md-4 col-sm-6 col-12'>
				<div class='product_item card'>
                            <img src='$row[fruit_image]' class='card-img-top'  alt='...'>
                            <div class='card-body'>
								<div class='card-text' id='fruit_name'> $row[fruit_name]</div>
								  <div class='card-text mb'>
                                    <div class='price'>Nhập khẩu: $row[fruit_country]</div>
                                </div>
                                <div class='card-text mb-2'>
                                    <div class='fruit_price'> 
									<div  id='fruit_cost'>$row[fruit_cost] </div>
									<div  id='fruit_sale'>$row[fruit_sale] </div>
									</div>
                                </div>

                                <a href='' class='btn btn-info'><i class='fas fa-shopping-cart'></i></a>
                                <a href='/detail?id=$row[fruit_id]' class='btn btn-outline-info'>Xem chi tiết</a>
                            </div>
                        </div>
			  </div>
		  
		  ";
			  }
		  ?>



		</div>



	</div>

</div>

<?php
	$fruit->fruit_Close();	
	?>