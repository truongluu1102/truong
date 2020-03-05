
<?php
if ( isset( $_COOKIE[ "username" ] ) )header( 'Location: /' );
?>
<link href="/css/login/login.css" rel="stylesheet" type="text/css"/>
<script src="/js/login/login.js"></script>

<div class="mid ">
	<div class="title ">
		<div class="container pl-2  pr-2 ">
			<div class="float-left "> Đăng nhập </div>
			<div class="float-right "><a href="">Xem thêm</a>

			</div>
		</div>
	</div>

	<div class="container pl-2  pr-2 mt-3 mb-3	">
		<div class="row">
			<div class="col-lg-5 col-12">
				<div class=" p-3 login_box1" id="login_box1">

					<div id="login_content">
						<form action="" method="post">
							<input type="text" class="form-control" id="username" name="username" placeholder="Username...">
							<input type="password" class="form-control mt-3" id="password" name="password" placeholder="Password...">
							<div class="mt-3">
								<button class="btn btn-info" type="submit" id="login" name="login">Đăng nhập </button>
								<a onClick="login_register()" id="login_register" class="ml-2">Đăng ký</a>
								<a onClick="forgetten()" class="text-info font-weight-bold ml-2" id="forgetten">Quên mật khẩu</a>
							</div>

						</form>
						<div class="login_message mt-3">
							<?php

							if ( isset( $_POST[ "login" ] ) ) {
								$username = $_POST[ "username" ];
								$password = $_POST[ "password" ];
								$user = new user();
								$user->connect();
								$user->setUser2( $username, $password );
								if ( $user->isUser() ) {
									setcookie( "username", $username, time() + 3600, "/" );
									if ( $user->isAdmin() ) {
										setcookie("admin", $username, time() + 3600, "/" );
										header( 'Location: /admin' );
									} else {
										header( 'Location: /' );

									}

								} else {
									echo "Sai tên đăng nhập hoặc mật khẩu !";
								}
							}
							?>
						</div>
					</div>



					<div id="register_content">
						<form action="" method="post">

							<input type="text" class="form-control" name="username" id="username" placeholder="Username...">
							<input type="password" class="form-control mt-3" name="password" id="password" placeholder="Password...">
							<input type="text" class="form-control mt-3" name="fullname" id="fullname" placeholder="Họ và tên...">
							<input type="email" class="form-control mt-3" name="email" id="email" placeholder="Email...">
							<input type="text" class="form-control mt-3" name="phone" id="phone" placeholder="Số điện thoại">
							<div class="mt-3">
								<button class="btn btn-info" type="submit" name="register" id="register">Đăng ký </button>
								<a onClick="login_register()" id="login_register">Đăng nhập</a>
								<a onClick="forgetten()" class="text-danger font-weight-bold" id="forgetten">Quên mật khẩu</a>
							</div>

						</form>
						<div class="login_message mt-3">
							<?php

							if ( isset( $_POST[ "register" ] ) ) {
								$username = $_POST[ "username" ];
								$password = $_POST[ "password" ];
								$fullname = $_POST[ "fullname" ];
								$email = $_POST[ "email" ];
								$phone = $_POST[ "phone" ];
									
								$user = new user();
								$user->connect();
								$user->setUser1( $username, $password ,$fullname,$email,$phone);
								if($user->hadUser("username")=="hadUsername") echo"Đã có người dùng tài khoản này";
								else if($user->hadUser("email")=="hadEmail") echo"Đã có người dùng email này";
								else if($user->hadUser("phone")=="hadPhone") echo"Đã có người dùng số điện thoại này";
								else{
									$user->addUser();
								}
							}
							?>
						</div>
					</div>
					<div id="forgetten_content">
						<form>

							<input type="text" class="form-control" id="username" placeholder="Username...">

							<div class="mt-3">
								<button class="btn btn-info" type="button">Gửi yêu cầu </button>
								<a onClick="forgetten()" class="text-danger font-weight-bold" id="forgetten">Hủy</a>
							</div>



						</form>

					</div>
				</div>
			</div>
			<div class="col-lg-7 col-12">
				<div class=" p-3 login_box2"> Với mong muốn đưa các sản phẩm tươi sạch đến tận tay người tiêu dùng ở Việt Nam, SSmart đang cần tuyển thêm các đại lý hoặc hợp tác với những doanh nghiệp, cá nhân để phân phối sản phẩm đến tay người tiêu dùng: <br>
					<strong>Lợi ích của bạn khi trở thành đại lý hoặc đối tác của SSmart:</strong> <br> + Hưởng mức chiết khấu hấp dẫn <br> + Làm việc độc lập, không gò bó về thời gian và đặc biệt không áp đặt doanh số hàng tháng <br> + Được công ty đào tạo, hỗ trợ sử dụng phần mềm bán hàng chuyên nghiệp <br>
					<strong> Các điều kiện để trở thành cộng tác viên hoặc đại lý của Ssmart:</strong> <br> + Đam mê kinh doanh, nhanh nhẹn <br> + Những cá nhân, công ty đang có sẵn mặt bằng kinh doanh sẽ là một lợi thế hoặc những ai có nhu cầu kinh doanh kiếm thêm thu nhập <br> + Biết sử dụng Computer, Ms Word, Ms Excel và sử dụng Email thành thạo Nếu bạn quan tâm đến cơ hội hợp tác này, vui lòng gửi email đến <strong>ssmart@ssmart.com</strong> và chúng tôi sẽ liên lạc lại với bạn.</div>
			</div>
		</div>
	</div>



</div>