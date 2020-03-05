<link href="/css/main/main.css" rel="stylesheet" type="text/css"/>
<?php
$fruit = new fruit();
$fruit->connect();

if(isset($_GET["main"]))
{
	if ( $_GET[ "main" ] == "new" )
	{
		$arr = $fruit->ShowFruitHomeNoLimit( "new" );
		$arr2 = $fruit->ShowFruitHome( "hot" );
$arr3 = $fruit->ShowFruitHome( "sale" );
	}
	if ( $_GET[ "main" ] == "hot" )
	{
		$arr = $fruit->ShowFruitHome( "new" );
		$arr2 = $fruit->ShowFruitHomeNoLimit( "hot" );
		$arr3 = $fruit->ShowFruitHome( "sale" );
	}
	if ( $_GET[ "main" ] == "sale" )
	{
		$arr = $fruit->ShowFruitHome( "new" );
$arr2 = $fruit->ShowFruitHome( "hot" );
		$arr3 = $fruit->ShowFruitHomeNoLimit( "sale" );
	}
}
else{
$arr = $fruit->ShowFruitHome( "new" );
$arr2 = $fruit->ShowFruitHome( "hot" );
$arr3 = $fruit->ShowFruitHome( "sale" );
}
?>
<div class="mid">
	<?php include($_SERVER['DOCUMENT_ROOT'].'/php/banner/banner.php'); ?>
	<div class="container">
		<div class="title">
			<div class="container pl-2 pr-2 ">
				<div class="float-left">Mới nhất</div>
				<div class="float-right "><a href="?main=new">Xem thêm</a>
				</div>
			</div>
		</div>

		<div class="row products">
			<?php
			foreach ( $arr as $row ) {
				$row[ 'fruit_sale' ] = number_format( $row[ 'fruit_sale' ], 0, '', '.' );
				$row[ 'fruit_cost' ] = number_format( $row[ 'fruit_cost' ], 0, '', '.' );
				if ( $row[ 'fruit_sale' ] == $row[ 'fruit_cost' ] ) {
					$row[ 'fruit_sale' ] = 'Giá: ' . $row[ 'fruit_cost' ] . 'đ/kg';
					$row[ 'fruit_cost' ] = '';
				} else {
					$row[ 'fruit_sale' ] = 'Giá: ' . $row[ 'fruit_sale' ] . 'đ/kg';
					$row[ 'fruit_cost' ] = 'Giá: ' . $row[ 'fruit_cost' ] . 'đ/kg';
				}
				echo "
		  	<div class='col-lg-3 col-md-4 col-sm-6 col-12'>
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
		<div class="title">
			<div class="container pl-2 pr-2 ">
				<div class="float-left">Đang giảm giá</div>
				<div class="float-right "><a href="/?main=sale">Xem thêm</a>
				</div>
			</div>
		</div>

		<div class="row products">
			<?php
			foreach ( $arr3 as $row ) {
				$row[ 'fruit_sale' ] = number_format( $row[ 'fruit_sale' ], 0, '', '.' );
				$row[ 'fruit_cost' ] = number_format( $row[ 'fruit_cost' ], 0, '', '.' );
				if ( $row[ 'fruit_sale' ] == $row[ 'fruit_cost' ] ) {
					$row[ 'fruit_sale' ] = 'Giá: ' . $row[ 'fruit_cost' ] . 'đ/kg';
					$row[ 'fruit_cost' ] = '';
				} else {
					$row[ 'fruit_sale' ] = 'Giá: ' . $row[ 'fruit_sale' ] . 'đ/kg';
					$row[ 'fruit_cost' ] = 'Giá: ' . $row[ 'fruit_cost' ] . 'đ/kg';
				}
				echo "
		  	<div class='col-lg-3 col-md-4 col-sm-6 col-12'>
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
		<div class="title">
			<div class="container pl-2 pr-2 ">
				<div class="float-left "> Bán chạy nhất </div>
				<div class="float-right "><a href="/?main=hot">Xem thêm</a>
				</div>
			</div>
		</div>

		<div class="row products">
			<?php
			foreach ( $arr2 as $row ) {
				$row[ 'fruit_sale' ] = number_format( $row[ 'fruit_sale' ], 0, '', '.' );
				$row[ 'fruit_cost' ] = number_format( $row[ 'fruit_cost' ], 0, '', '.' );
				if ( $row[ 'fruit_sale' ] == $row[ 'fruit_cost' ] ) {
					$row[ 'fruit_sale' ] = 'Giá: ' . $row[ 'fruit_cost' ] . 'đ/kg';
					$row[ 'fruit_cost' ] = '';
				} else {
					$row[ 'fruit_sale' ] = 'Giá: ' . $row[ 'fruit_sale' ] . 'đ/kg';
					$row[ 'fruit_cost' ] = 'Giá: ' . $row[ 'fruit_cost' ] . 'đ/kg';
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