<!DOCTYPE html>
<html lang="ko">
<head>
<title> 로그인::투어리스트인투어 </title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="./css/normalize.css">
<link rel="stylesheet" href="./css/reset.css">
<link rel="stylesheet" href="./css/common.css">
<link rel="stylesheet" href="./css/rwdCommon.css">
<link rel="stylesheet" href="./css/login.css">
<script src="./js/jquery-1.11.3.min.js"></script>
<!--[if lte IE 9]>
    <script src="./js/html5shiv.js"></script>
<![endif]-->
</head>

<body>
<ul class="skipnavi">
    <li><a href="#container">본문내용</a></li>
</ul>
<!-- wrap -->
<div id="wrap">
	
    <?php include 'header.php' ?>

	<div id="container">
		
		<!-- location_area -->
		<div class="location_area login">
			<div class="row">
				<h2 class="tit_page">TOURIST <span class="in">in</span> TOUR</h2>
				<p class="location">MEMBER <span class="path">/</span> 로그인</p>
			</div>
		</div>	
		<!-- //location_area -->

		<!-- bodytext_area -->
		<div class="bodytext_area row">
			<!-- login-wrap -->
			<div class="login_wrap">
				<!-- <h1 class="loginTit"><a href="#"><img src="./img/tit_login.png" alt="TOURIST IN TOUR" /></a></h1> -->

				<form action="login_ok.php" method="post" class="loginForm" name="loginForm">
					<fieldset>
						<legend>로그인폼</legend>
						<div>
							<p>
								<label for="userid">이메일주소 또는 전화번호</label>
								<input type="text" id="userid" name="userid" autocomplete="off">
							</p>
							<p>
								<label for="userpwd">비밀번호</label>
								<input type="password" id="userpwd" name="userpwd" autocomplete="off">
							</p>
						</div>
						<p class="btn">
							<button type="submit">로그인</button>
						</p>
					</fieldset>
				</form>

				<ul class="login_list">
					<li class="kakao"><a href="javascript:;"><strong>카카오톡</strong> 로그인</a></li>
					<li class="naver"><a href="javascript:;"><strong>네이버</strong> 로그인</a></li>
					<li class="facebook"><a href="javascript:;"><strong>페이스북</strong> 로그인</a></li>
					<li class="cellphone"><a href="javascript:;"><strong>이메일 주소</strong> 로그인</a></li>
				</ul>
				<div class="btnonoff_line">
					<div class="switch"></div>
					<br>
					<p>
					    <a href="#" class="btn_onoff">로그인 유지</a>
					</p>
				</div>
        				
			</div>
			<!-- //login-wrap -->

		</div>
		<!-- //bodytext_area -->

	</div>
	<!-- //container -->

	<?php include 'footer.php' ?>

</div>
<!-- //wrap -->

<h2 class="blind">빠른 링크 : 전화 문의,카카오톡,오시는 길,꼭대기로</h2>
<div class="quick_area">
	<ul class="quick_list">
		<li><a href="tel:010-7184-4403"><h3>전화 문의</h3><p>010-1234-5678</p></a></li>
		<li><a href="javascript:;"><h3>카카오톡 <em>상담</em></h3><p>1:1상담</p></a></li>
		<li><a href="javascript:;"><h3 class="to_contact">오시는 길</h3></a></li>
	</ul>
	<p class="to_top"><a href="#" class="s_point">TOP</a></p>
</div>


<script src="./js/common.js"></script>
<script src="./js/login.js"></script>
</body>
</html>
