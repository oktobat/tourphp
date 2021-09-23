<?php 

	session_start();
	if ( isset($_SESSION["userid"]) ) {
		$userid = $_SESSION["userid"];
	} else {
		$userid = "";
	}

	if ( isset($_SESSION["username"]) ) {
		$username = $_SESSION["username"];
	} else {
		$username = "";
	}


?>




<header id="header">
		<div class="header_area row">	
			<h1><a href="index.php">Tourist in tour</a></h1>
			<div class="openMOgnb">
				<a href="#">
					<span></span>
					<span></span>
					<span></span>
					<b class="blind">메뉴열기</b>
				</a>
			</div>
			<!-- header_cont -->
			<div class="header_cont">
				<ul class="util">
					<?php 
						if ( !$userid ) {
					?>
						<li><a href="login.php">로그인</a></li>
					    <li><a href="join.php">회원가입</a></li>
					<?php
						} else {
							$logged = $username."(".$userid.") 님 환영합니다!! ";
					?>
						<li><a href="logout.php"><?= $logged; ?>로그아웃</a></li>
						<li><a href="join_modify.php">정보수정</a></li>
					<?php
						}
					?>
				</ul>	
				<nav>
					<ul class="gnb">
						<li><a href="javascript:;" class="openAll1">여행정보</a>
							<ul class="submenu_list">
								<li><a href="javascript:;">국내</a></li>
								<li><a href="javascript:;">해외</a></li>
							</ul>
						</li>
						<li><a href="javascript:;" class="openAll2">고객센터</a>
							<ul class="submenu_list">
								<li><a href="notice_list.php">공지사항</a></li>
								<li><a href="javascript:;">문의하기</a></li>
							</ul>
						</li>
						<li><a href="javascript:;" class="openAll3">상품투어</a>
							<ul class="submenu_list">
								<li><a href="program.php">프로그램 소개</a></li>
								<li><a href="javascript:;">여행자료</a></li>
							</ul>
						</li>
						<li><a href="javascript:;" class="openAll4">티켓/가이드</a>
							<ul class="submenu_list">
								<li><a href="javascript:;">항공</a></li>
								<li><a href="javascript:;">호텔</a></li>
							</ul>
						</li>
					</ul>
                </nav>
				<div class="decobox"></div>
			</div>
			<!-- //header_cont -->
		</div>
		
	</header>