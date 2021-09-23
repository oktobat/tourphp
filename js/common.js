// 여기서부터 resize 이벤트 발생시 스크롤바 유무에 따른 상태제어 프로그램
var deviceSize1 = 1064;
var deviceSize2 = 800;

function scrollOX(status) {
    $('html').css({
        overflowY:status
    })
    var htmlWidth = $('html').width()
    return htmlWidth
}
var swh = scrollOX('hidden')
var sws = scrollOX('scroll')
var swd = swh - sws
console.log(swd)
// 세로스크롤바가 있는 화면에서는 17, 없는 화면에서는 0
// 세로스크롤바가 있으면 미디어쿼리 넓이에서 17을 뺀 넓이로 재계산
// 세로스크롤바가 없으면 아래 if문을 수행하지 않으므로 원래 넓이값 사용
if (swd>0) {
    deviceSize1 = deviceSize1 - swd
    deviceSize2 = deviceSize2 - swd
}
// 여기까지 스크롤바상태 유무 프로그램

var winWidth = $(window).width()

$(window).on('resize', function(){
    winWidth = $(this).width()
    if (winWidth>deviceSize2) {
        $('#header .header_cont').css({
            display:'block'
        })
    } else {
        $('#header .header_cont').css({
            display:'none'
        })
        $('#header').removeClass('on')
    }
})


$('.gnb>li').on('mouseenter', function(){
    if (winWidth>deviceSize2) {
        $(this).addClass('on')
        $(this).siblings().removeClass('on')
        $('.decobox').fadeIn(0)
    }
})

$('nav, .decobox').hover(
    function(){
        if (winWidth>deviceSize2) {
            $('.decobox').fadeIn(0)
        }
    },
    function(){
        if (winWidth>deviceSize2) {
            $('.decobox').fadeOut(0)
            $('.gnb>li').removeClass('on')
        }
    }
)





// quick_area 구역에서 맨위로 부드럽게 이동
// .to_top의 a를 클릭했을때 스크롤바가 부드럽게 맨위로 이동하게 해보세요.
$('.quick_area .s_point').on('click', function(){
    $('html, body').animate({
        scrollTop:0
    }, 600)
    return false
})


$('.openMOgnb').on('click', function(e){
    e.preventDefault()
    if ( !$('#header').hasClass('on') ) {
        $('#header').addClass('on')
        $('#header .header_cont').slideDown(200)
    } else {
        $('#header .header_cont').slideUp(200, function(){
            $('#header').removeClass('on')
        })
    }
    
})


$(window).on('scroll', function(){
    let sct = $(this).scrollTop()
    if (sct > 50) {
        $('.to_top').addClass('on')
        $('#header').addClass('bgc')
    } else {
        $('.to_top').removeClass('on')
        $('#header').removeClass('bgc')
    }

    // if (sct >= 80 && !$('header').hasClass('on')) {
    //     $('#header').css({
    //         position:'fixed',
    //         top:'-50px'
    //     }).animate({
    //         top:'0px'
    //     }, 300).addClass('on')
    // } else if ( sct<80 && $('header').hasClass('on') ){
    //     $('#header').css({
    //         position:'relative',
    //         top:'0px'
    //     }).removeClass('on')
    // }
    
})