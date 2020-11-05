<?php
include_once "head.php";
?>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../../CSS/account/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Quên mật khẩu
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Tên đăng nhập
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Hoàn Thành
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Chúng tôi sẽ gửi mã code đăng nhập đến Email bạn đã đăng kí!
						</span>
					</div>
				</form>
				<hr/>
				<br/>
                <div class="container-login100-form-btn m-t-17">
					<button class="login100-form-btn" onclick="location.href='../index.php'"  style="font-family: Montserrat-SemiBold; background: linear-gradient(90deg,  rgba(121,191,250,0.5) 0%, rgba(233,127,127,0.5) 34%,rgba(252,165,132,0.5) 90%); color: black;">
						Quay về trang chủ
					</button>
				</div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

</body>
</html>