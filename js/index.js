$('.slideInner').slick({
    autoplay:true,
    arrows:false,
    dots:true,
    fade:true,
    speed:1000,
    autoplaySpeed:5000,
    pauseOnHover:false,
    responsive:[{
        breakpoint:801,
        settings:{
            autoplay:false,
            fade:false,
        }
    }]
})
$('.slideOuter .plpa').on('click', function(){
    if ( $(this).find('i').hasClass('fa-pause') ) {
        $('.slideInner').slick("slickPause")
        $(this).find('i').removeClass('fa-pause').addClass('fa-play')
    } else {
        $('.slideInner').slick("slickPlay")
        $(this).find('i').removeClass('fa-play').addClass('fa-pause')
    }
})

$('.place_list li > a').on('click', function(e){
    e.preventDefault()
    let info = $(this).attr('data-info')
    let src1 = $(this).attr('data-src1')
    let title = $(this).find('h3').text()
    let bh = $('body').height()
    let liTopDis = $(this).parent().offset().top
    $('body').append(`<div class="popupBox"><div class="popupCont"><h3>${title}</h3><img src="${src1}" alt=""><p>${info}</p><button><i class="fas fa-times"></i></button></div></div>`)
    $('.popupBox').css({
        position:'absolute',
        top:0, left:0, 
        width:'100%', height:bh+'px',
        backgroundColor:'rgba(0,0,0,0.5)',
        zIndex:99999999,
    })
    $('.popupCont').css({
        top:liTopDis+'px'
    })
    $('.popupCont > h3').css({
        fontSize:'30px',
        fontWeight:'bold',
        padding:'10px 0 24px'
    })
    $('.popupCont > p').css({
        fontSize:'17px',
        paddingTop:'25px',
        letterSpacing:'-2px',
        wordBreak:'keep-all',
        lineHeight:'1.5'
    })
    $('.popupCont > button').css({
        position:'absolute',
        top:'-60px', right:'0',
        fontSize:'50px', color:'#fff',
        border:'none'
    })
})

$('body').on('click', '.popupCont>button, .popupBox', function(){
    $('.popupBox').remove()
})

// Gallery(미니슬라이드)
$('.slideInner1').slick({
    autoplay:true,
    slidesToShow:3,
    slidesToScroll:1,
    centerMode:true,
    centerPadding:"100px",
    prevArrow:'<button class="arrow parr"><i class="fas fa-angle-left"></i></button>',
    nextArrow:'<button class="arrow narr"><i class="fas fa-angle-right"></i></button>',
    responsive:[{
        breakpoint:801,
        settings:{
            slidesToShow:1,
            centerMode:false,
        }
    }]
})

