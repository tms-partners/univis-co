$(function(){
	$('a[href^="#"]:not(a[href="#"],a[href="#tm-offcanvas"])').click(function() {
		var speed = 400;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top - 100;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
    
    // サイドバーページ内スクロール
	$(function(){
	    var margin = 100,   //ウインドウ上部からどれぐらいの位置で変化させるか
	    sectionTop = new Array, //sectionのTop位置格納用
	    current = -1;   //現在のカレント位置
	 
	    //(1)各sectionの縦位置を取得
	    $('.js-scroll').each(function(i) {
	        sectionTop[i] = $(this).offset().top;
	    });
	 
	    //init
	    changeNavCurrent(0);
	 
	    //スクロールした時の処理
	    $(window).scroll(function(){
	        scrollY = $(window).scrollTop();
	 
	        //(2)各セクションの位置とスクロール位置を比較して、条件にあったらchangeNavCurrentを実行
	        for (var i = sectionTop.length - 1 ; i >= 0; i--) {
	            if (scrollY > sectionTop[i] - margin) {
	                    changeNavCurrent(i);
	                break;
	            }
	        };
	    });
	    //(3)ナビの処理
	    function changeNavCurrent(curNum) {
	        if (curNum != current) {
	            current = curNum;
	            curNum2 = curNum + 1;//HTML順序用
	            $('.article_nav ul a').removeClass('on');
	            $('.article_nav ul a:nth-child(' + curNum2 +')').addClass('on');
	        }
	    };
	});
});