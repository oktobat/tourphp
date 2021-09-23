$('.program_list li .btn_more a').on('click', function(){
    // 클릭한 a의 부모의 형(이전)이 클래스 on을 갖고 있지 않으면(!)
    // on을 추가하고, 
    // (else문) on을 갖고 있으면 on을 제거해라.
    if ( !$(this).parent().prev().hasClass('on') ) {
        $(this).parent().prev().addClass('on')
        $(this).text('접기')
    } else {
        $(this).parent().prev().removeClass('on')
        $(this).text('더보기')
    }
})

// .package ul li a를 클릭하면 a의 부모인 li의
// 인덱스번호를 추출해서
// .bodytext_area의 자식 .tourinfo 랑 인덱스번호가
// 같은 .tourinfo만 보이게 하시오.

$('.package ul li a').on('click', function(){
    $('.package ul li a').removeClass('on')
    $(this).addClass('on')
    var liNo = $(this).parent().index()
    $('.program .bodytext_area > .tourinfo').eq(liNo).addClass('on')
    $('.program .bodytext_area > .tourinfo').eq(liNo).siblings().removeClass('on')
})