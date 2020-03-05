<link href="/css/admin/admin_upload.css" rel="stylesheet" type="text/css"/>
<script src="/js/admin/admin_upload.js"></script>
<?php
if ( !isset( $_COOKIE[ "admin" ] ) )header( 'Location: /' );

?>
<div class="mid">
	<div class="title ">
		<div class="container pl-2  pr-2 ">
			<div class="float-left "> Thêm hoa quả </div>
			<div class="float-right "><a href="">Xem thêm</a>

			

			</div>
		</div>
	</div>
	<div class="container pl-2  pr-2 mt-3 mb-3">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="row">

				<div class="col-lg-6 col-12">
					<div class="admin_upload_image">
						<label for="upload_file"><img src="/image/noimage.png" id="upload_image"></label>
					</div>
					<input type="file" id="upload_file" name="upload_file" onChange="readImage()">
				</div>
				<div class="col-lg-6 col-12">
					<input type="text" class="form-control" id="fruit_name" name="fruit_name" placeholder="Tên hoa quả...">
					<div class="row mt-2">
						<div class="col-lg-6 col-12">
							<input type="text" class="form-control" id="fruit_category" name="fruit_category" placeholder="Loại quả...">
						</div>
						<div class="col-lg-6 col-12">
							<input type="text" class="form-control" id="fruit_country" name="fruit_country" placeholder="Nhập khẩu từ...">
						</div>
					</div>
					<div class="row mt-2">

						<div class="col-lg-6 col-12">
							<input type="text" class="form-control" id="fruit_code" name="fruit_code" placeholder="Mã..">
						</div>
						<div class="col-lg-3 col-12">
							<input type="text" class="form-control" id="fruit_date" name="fruit_date" placeholder="Năm...">
						</div>
						<div class="col-lg-3 col-12">
							<input type="text" class="form-control" id="fruit_Expirydate" name="fruit_expiryDate" placeholder="Hạn...">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-lg-6 col-12">
							<input type="text" class="form-control" id="fruit_cost" name="fruit_cost" placeholder="Tiền...">
						</div>
					
						<div class="col-lg-6 col-12">
							<input type="number" class="form-control" id="fruit_hot" name="fruit_status" placeholder="Tình trạng...">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-12">
							<textarea class="form-control" id="fruit_describe" rows="7" name="fruit_describe" ></textarea>
						</div>

					</div>
					<div class="row mt-2">
						<div class="col-lg-4">
							<button class="btn btn-info" type="submit" id="fruit" name="fruit">Thêm sản phẩm</button>
						</div>


					</div>
				</div>

			</div>

		</form>
		<?php
		if ( isset( $_POST[ "fruit" ] ) ) {
			$fruit_image_tmp = $_FILES[ "upload_file" ][ "tmp_name" ];
			$fruit_image_name = $_FILES[ 'upload_file' ][ 'name' ];
			$fruit_name = $_POST[ "fruit_name" ];
			$fruit_category = $_POST[ "fruit_category" ];
			$fruit_country = $_POST[ "fruit_country" ];
			$fruit_code = $_POST[ "fruit_code" ];
			$fruit_date = $_POST[ "fruit_date" ];
			$fruit_expiryDate = $_POST[ "fruit_expiryDate" ];
			$fruit_cost = $_POST[ "fruit_cost" ];
			$fruit_status = $_POST[ "fruit_status" ];
			$fruit_describe = $_POST[ "fruit_describe" ];
			$fruit = new fruit();

			$fruit_image_path="/fruits/$fruit_category/$fruit_name/$fruit_image_name";
			
			$fruit->connect();
			$fruit->setFruit( $fruit_name, $fruit_country, $fruit_status, $fruit_category, $fruit_cost, $fruit_describe, $fruit_image_path, $fruit_code, $fruit_date, $fruit_expiryDate );
			$fruit->addFruit();
			
			$structure = $_SERVER['DOCUMENT_ROOT']."/fruits/$fruit_category/$fruit_name";
			
			if(!is_dir($structure))
			if ( !mkdir( $structure, 0777, true ) ) {
				die( 'Tạo thư mục không thành công' );
			}
			
			move_uploaded_file( $fruit_image_tmp, $_SERVER['DOCUMENT_ROOT']."/fruits/$fruit_category/$fruit_name/$fruit_image_name" );

		}
		?>
	</div>
</div>