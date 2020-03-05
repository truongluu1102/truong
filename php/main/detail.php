<link href="/css/main/detail.css" rel="stylesheet" type="text/css"/>
<?php
$fruit = new fruit();
$fruit->connect();
$fruit->setFruitByID($_GET["id"]);
if($fruit->fruit_status==0) $fruit->fruit_status="Hết hàng";
$fruit->fruit_cost=number_format($fruit->fruit_cost-$fruit->fruit_cost*$fruit->fruit_sale/100, 0, '', '.');
?>
<div class="mid">
  <div class="container pl-2  pr-2">
  
    <div class="row mt-2">
      <div class="col-xl-6 col-12">
         <img src="<?php echo $fruit->fruit_image; ?>" id="detail_image">
      </div>
      <div class="col-xl-6 col-12">
        <div class="noi-dung">
          <div class="detail_information" >
            <h2> <?php echo"$fruit->fruit_name"; ?></php?> </h2>
            <p> • Xuất sứ: <a href=""> <strong><?php echo"$fruit->fruit_country"; ?></strong></a> </p>
            <p> • Nhóm sản phẩm: <a href=""> <strong><?php echo"$fruit->fruit_category"; ?></strong> </a> </p>
            <p> • Số lượng:  <strong style="color:red"><?php echo"$fruit->fruit_status"; ?></strong>  </p>
			 <p> • Năm sản xuất:  <strong style="color:red"><?php echo"$fruit->fruit_date"; ?></strong>  </p>
			 <p> • Hạn sử dụng:  <strong style="color:red"><?php echo $fruit->fruit_expiryDate-$fruit->fruit_date; ?> năm</strong>  </p>
          </div>
          <div class="detail_prices mt-3">
            <p><strong> Giá: <span style="color: red"><?php echo"$fruit->fruit_cost"; ?> đ/kg </span></strong></p>
          </div>
          <button type="button" class="btn btn-outline-danger btn-buy"> <i class="fas fa-shopping-cart"></i> Đặt mua </button>
        </div>
      </div>
    </div>
	  <div class="detail_content">
	  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><strong>Mô tả sản phẩm</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><strong>Bình luận</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><strong>Liên hệ</strong></a>
  </li>
</ul>
<div class="tab-content" id="TabContent">
  <div class="tab-pane fade show active describe" id="home" role="tabpanel" aria-labelledby="home-tab">
	<?php echo nl2br("$fruit->fruit_describe"); ?>
	</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	  <div class="comment-form">
                                <p>
                                    Vui lòng nhập tiếng việt có dấu để có thể nhận phản hồi nhanh nhất!
                                </p>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="Họ và tên"> Họ và tên </label>
                                        <input type="text" id="Họ và tên" class="form-control" placeholder="Họ và tên">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="Điện thoại"> Điện thoại </label>
                                        <input type="text" id="Điện thoại" class="form-control" placeholder="Điện thoại">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="Email"> Email </label>
                                        <input type="text" id="Email" class="form-control" placeholder="Địa chỉ Email">
                                    </div>
                                    <div class="col-sm-12 col-xs-6">
                                        <label for="message"> Nội dung </label>
                                        <textarea id="message" class="form-control" placeholder="Ý kiến của bạn" style="height: 60px;width: 100%"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="submit" value="GỬI Ý KIẾN" id="mainContent_btnSubmit" class="btn btn-info" style="margin-top: 10px">
                                    </div>
                                </div>
                            </div>
	</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
	 <div id="contact" class="tab-panel">
                        <p><strong>SSMART - NHÀ PHÂN PHỐI HOA QUẢ CHÍNH HÃNG CHẤT LƯỢNG CAO</strong></p>
                        <p>- Đỉa chỉ: Thôn cành lá, Xã cành cây, Huyện gió mây, Tỉnh đồi núi</p>
                        <p>- Điện thoại: 08686.707.15</p>
                        <p>- Email: ssmart@ssmart.com</p>
                        <br>
                        <br>
                        <p><strong>TÀI KHOẢN GIAO DỊCH</strong></p>
                        <p>- BIDV - </p>
                        <p>- Số tài khoản: ...</p>
                        <p>- Chủ tài khoản: ...</p>
                    </div>
	</div>
</div>
	  </div>
  </div>
</div>
<?php
	$fruit->fruit_Close();
	?>
