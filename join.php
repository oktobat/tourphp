<!DOCTYPE html>
<html lang="ko">
<head>
<title> 회원가입::투어리스트인투어 </title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="./css/normalize.css">
<link rel="stylesheet" href="./css/jquery-ui.css">
<link rel="stylesheet" href="./css/reset.css">
<link rel="stylesheet" href="./css/common.css">
<link rel="stylesheet" href="./css/rwdCommon.css">
<link rel="stylesheet" href="./css/join.css">
<script src="./js/jquery-1.11.3.min.js"></script>
<script src="./js/jquery-ui.min.js"></script>
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
		<div class="location_area member">
			<div class="row">
				<h2 class="tit_page">TOURIST <span class="in">in</span> TOUR</h2>
				<p class="location">MEMBER <span class="path">/</span> 회원가입</p>
			</div>
		</div>	
		<!-- //location_area -->


		<!-- SQL(Structured Query Language)
			create table member (
				num int not null auto_increment comment '일련번호',
				email varchar(20) not null comment '이메일', 
				irum varchar(20) not null comment '작성자',
				userid varchar(20) not null comment '아이디',
				pwd varchar(20) not null comment '비밀번호',
				phone varchar(20) not null comment '연락처',
				birthday date comment '생년월일',
				gender varchar(1) comment '성별',
				hobby varchar(30) comment '관심분야',
				agree varchar(3) comment '개인정보활용동의',
				memo varchar(10) comment '문의내용',
				primary key(num)
			);
		 -->


		<!-- bodytext_area -->
		<div class="bodytext_area row">
			<!-- appForm -->
			<form action="member_insert.php" method="post" name="appForm" class="appForm">
				<fieldset>
					<legend>상담문의 입력 양식</legend>
					<p class="info_pilsoo pilsoo_item">필수입력</p>
					<ul class="app_list">
						<li class="cf">
                            <label for="email_lbl" class="tit_lbl pilsoo_item">이메일</label>
                            <div class="app_content email_area cf">
                                <input type="text" class="w160" id="email_lbl" title="이메일 주소" name="email_id" />
                                <span class="ico_space">@</span>
                                <input type="text" class="w160" title="이메일 제공업체 입력" name="email_domain" id="email_domain" disabled />										
                                <div class="select_common">
                                    <select title="이메일 제공업체 목록" id="email_list" name="select_domain">
										<option value="title">::이메일선택::</option>
                                        <option value="self">직접입력</option>
                                        <option value="naver.com">naver.com</option>
                                        <option value="hanmail.net">hanmail.net</option>
                                    </select>
                                </div>										
                            </div>
						</li>
						<li class="cf">
							<label for="name_lbl" class="tit_lbl pilsoo_item">작성자명</label>
							<div class="app_content"><input type="text" class="w100p" id="name_lbl" name="irum" placeholder="이름을 입력해주세요"/></div>
						</li>
						<li class="cf">
							<label for="userid" class="tit_lbl pilsoo_item">아이디</label>
							<div class="app_content">
								<input type="text" id="userid" name="userid" placeholder="아이디를 입력하세요." class="w170">
								<a href="javascript:;" class="idcheck" onclick="check_id()">중복체크</a>
							</div>
						</li>
						<li class="cf">
							<label for="pwd_lbl" class="tit_lbl pilsoo_item">비밀번호</label>
							<div id="pwdarea" class="app_content"><input type="password" class="w100p" id="pwd_lbl" name="pwd" />
							<p class="pwdhint">비밀번호는 영문자, 숫자, 특수문자 3가지 이상 조합하고, 첫글자는 영어만 허용합니다.</p>
							</div>
						</li>
						<li class="cf">
							<label for="pwd2_lbl" class="tit_lbl pilsoo_item">비밀번호 확인</label>
							<div class="app_content"><input type="password" class="w100p" id="pwd2_lbl" placeholder="비밀번호를 다시 한번 입력해주세요"/></div>
						</li>
						<li class="cf">
							<label for="phone_lbl" class="tit_lbl pilsoo_item">연락처</label>
							<div class="app_content"><input type="text" class="w100p" id="phone_lbl" name="phone" placeholder="휴대폰”-”없이 숫자만 입력하세요"/></div>
						</li>
						<li class="cf">
							<label for="birthday" class="tit_lbl nopilsoo">생년월일</label>
							<div class="app_content"><input type="text" class="w160" id="birthday" name="birthday"></div>
						</li>
						<li class="cf">
							<span class="tit_lbl nopilsoo">성별</span>
							<div class="app_content radio_area">
								<input type="radio" class="css-radio" id="mmm_lbl" name="gender" value="m"><label for="mmm_lbl">남</label>
								<input type="radio" class="css-radio" id="www_lbl" name="gender" value="w"><label for="www_lbl">여</label>
							</div>
						</li>
						<li class="cf">
                            <span class="tit_lbl nopilsoo">관심분야</span>
							<div id="hobbyarea" class="app_content checkbox_area">
								<input type="checkbox" class="css-checkbox" id="hobby_all"><label for="hobby_all">전체선택</label>
								<input type="checkbox" class="css-checkbox" id="hobby1" name="hobby[]" value="등산"><label for="hobby1">등산</label>
								<input type="checkbox" class="css-checkbox" id="hobby2" name="hobby[]" value="음악감상"><label for="hobby2">음악감상</label>
								<input type="checkbox" class="css-checkbox" id="hobby3" name="hobby[]" value="독서"><label for="hobby3">독서</label>
							</div>
						</li>
						<li class="cf">
                            <span class="tit_lbl nopilsoo">개인정보 활용동의</span>
							<div class="app_content checkbox_area">
								<input type="checkbox" class="css-checkbox" id="agree_lbl" name="agree" value="yes"><label for="agree_lbl">동의함</label>
							</div>
						</li>
						<li class="cf">
							<label for="content_lbl" class="tit_lbl nopilsoo">문의내용</label>
							<div class="app_content"><textarea id="content_lbl" class="w100p" placeholder="간단한 상담 요청 사항을 남겨주시면 보다 상세한 상담이 가능합니다.&#13;&#10;전화 상담 희망시 기재 부탁드립니다." name="memo" maxlength="10"></textarea>
							<p class="remain">남은글자 : <span>10</span>글자</p>	
							</div>
						</li>
					</ul>
				</fieldset>
				<p class="btn_line">
					<button type="button" class="btn" onclick="chk_input()">등록</button>
					<button type="reset" class="btn">취소</button>
				</p>
			</form>
			<!-- //appForm -->
			
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
<script src="./js/join.js"></script>

<script>

    // 아이디 중복체크 함수
	function check_id(){
		var userid = document.appForm.userid.value
		window.open('member_check_id.php?id='+userid, '', 'top=100, left=100, width=200, height=200, scrollbars=no, resizable=no');
		$('.idcheck').addClass('on');
		// document.querySelector('.idcheck').classList.add('on);
	}



	// 회원가입 폼에서 입력한 값들을 유효성 체크후 member_insert.php 에 전송하는 함수
	function chk_input() {
		$('.appForm input').css({
            borderColor:'#ccc'
        })
    let email = $('#email_lbl').val()
    let emailCheck = /^[a-zA-Z0-9]+$/
    // p.398~p.400 정규표현식 참고
    // ^ 첫 문자 일치, $ 끝 문자 일치
    // + 한번 이상 나옴
    if ( !emailCheck.test(email) ) {
        alert('특수문자는 포함하지 않으며, 한글자 이상 입력')
        $('#email_lbl').focus().css({
            borderColor:'red'
        })
        return false
    } 
    
    let emailDomain = $('#email_domain').val()
    let emailDomainCheck = /^[a-zA-Z]+[\.][a-z]+([\.][a-z]+)*$/
    // ?= 조건확인후 처음으로 돌아감
    // . 임의의문자(숫자,문자,특수문자 포함한 모든 문자)
    // * 앞의 글자가 0번 이상 나옴
    if ( !emailDomainCheck.test(emailDomain) ) {
        alert('정확한 도메인을 입력해주세요.')
        $('#email_domain').focus().css({
            borderColor:'red'
        })
        return false
    }

    let nameLbl = $('#name_lbl').val()
    let nameLblCheck = /^[가-힣]+$/
    if ( !nameLblCheck.test(nameLbl) ) {
        alert('이름은 한글만 입력하세요.')
        $('#name_lbl').focus().css({
            borderColor:'red'
        })
        return false
    }

    // 아이디칸이 빈칸이면 경고창 띄우고, 전송안되게 하세요.
    let userid = $('#userid').val()
    if ( !userid ) {
        alert('아이디를 입력해주세요.')
        $('#userid').focus().css({
            borderColor:'red'
        })
        return false
    }



    let pwdLbl = $('#pwd_lbl').val()
    // 영문, 숫자, 특수문자 중 3가지 이상 조합. 첫글자는 영어만 허용
    let pwdLblCheck = /^(?=[a-zA-Z])(?=.*[^a-zA-Z0-9])(?=.*[0-9]).*$/
    // . 임의의문자(숫자,문자,특수문자 포함한 모든 문자)
    // * 앞의 글자가 0번 이상 나옴
    // [^ ] 대괄호 안의 ^는 not 
    if ( !pwdLblCheck.test(pwdLbl) ) {
        alert('비밀번호는 영문, 숫자, 특수문자 중 3가지 이상 조합. 첫글자는 영어만 허용')
        $('#pwd_lbl').focus().css({
            borderColor:'red'
        })
        return false
    }

    let pwd2Lbl = $('#pwd2_lbl').val()
    if ( !pwd2Lbl ) {
        alert('비밀번호확인을 입력해주세요.')
        $('#pwd2_lbl').focus().css({
            borderColor:'red'
        })
        return false
    } else {
        if ( pwdLbl!==pwd2Lbl ) {
            alert('비밀번호가 맞지 않습니다.')
            $('#pwd2_lbl').focus().css({
                borderColor:'red'
            })
            return false
        }
    }

    let phoneLbl = $('#phone_lbl').val()
    if ( !phoneLbl ) {
        alert('전화번호를 입력해주세요.')
        $('#phone_lbl').focus().css({
            borderColor:'red'
        })
        return false
    }

	if ( !$('.idcheck').hasClass('on') ) {
		alert("아이디 중복체크를 눌러주세요.")
		return false;
	}
	// if ( !document.querySelector('.idcheck').classList.contains('on) ) {
	//     return false;
	// }


		document.appForm.submit();
	}



</script>
</body>
</html>
