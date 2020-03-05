<?php
$fruit = new fruit();
$fruit->connect();
$category_text = "";
if ( isset( $_GET[ "category" ] ) ) {
	$category_text = $_GET[ "category" ];
}
$arr = $fruit->ShowFruitCategories();
$arr2 = $fruit->ShowFruitCategory($category_text);
?>

<link href="/css/main/main.css" rel="stylesheet" type="text/css"/>
<div class="mid">
	<div class="container">
<div class="row mt-3">
                <div class="col-md-3">
                    <div class="list-group">
                        <p class="list-group-item list-group-item-action active">
                            Loại hoa quả
                        </p>
                      
                       <?php
						foreach($arr as $row)
						{
							echo"<a href='/categories/?category=$row[category]' class='list-group-item list-group-item-action'><i class='fas fa-angle-right'></i> $row[category] </a>";
						}
						?>
						
                   
                    </div>
                </div>
                <div class="col-md-9">
					<?php include($_SERVER['DOCUMENT_ROOT'].'/php/banner/banner.php'); ?>
				</div>
	</div>
		    <div class="row mt-3 row-reverse">
				  <div class="col-lg-3 order-12 mt-5">
                    <ul class="list-group">
                        <li class="list-group-item bg-success active">HỖ TRỢ TRỰC TUYẾN</li>
                        <li class="list-group-item">
                            <div class="kho-hang">
                                <h5> Kho hàng </h5>
                            </div>
                            <div class="info">
                                <i class="fas fa-phone-square-alt"></i> 08686.707.15
                                <br>
                                <i class="fas fa-envelope"></i> ssmart@ssmart.com
                            </div>

                        </li>
                        <li class="list-group-item">
                            <div class="kho-hang">
                                <h5> Bộ phận bán hàng </h5>
                            </div>
                            <div class="info">
                                <i class="fas fa-phone-square-alt"></i> 0969.333.010
                                <br>
                                <i class="fas fa-envelope"></i> ssmart@ssmart.com
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-9 order-12">
                    <div class="australia-product">
                        <h1> <?php 
							if($category_text!="")
							echo "Quả ".mb_strtolower($category_text); 
							else echo"Tổng hợp";
							?>
						</h1>
                    </div>
                    <div class="row">
                        <?php
		  foreach($arr2	 as $row)
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
		  	<div class='col-lg-4 col-md-4 col-sm-6 col-12'>
				<div class='product_item card' >
                            <img src='$row[fruit_image]' class='card-img-top'  alt='...'>
                            <div class='card-body'>
								<div class='card-text' id='fruit_name'> $row[fruit_name]</div>
								  <div class='card-text mb'>
                                    <div class='price'>Nguồn gốc: $row[fruit_country]</div>
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
	</div>
	
	
	<?php
	$fruit->fruit_Close();
	$user->user_Close();
	?>