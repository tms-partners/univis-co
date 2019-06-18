		<footer id="footer">
			<div class="uk-container uk-container-center">
			<div id="f_nav">
			
					<div class="f_nav f_large">
						<h4><a href="/service">サービス</a></h4>
						<div class="f_nav_child">
				
								<h5 class="f_nav_tms_h5">M&A Service</h5>
								
									<ul>
										<li><a href="/service/ma">M&Aアドバイザリー​</a></li>
										<li><a href="/service/dd">デューデリジェンス​</a></li>
										<li><a href="/service/dd">株価算定​</a></li>									
									</ul>
								
								
								
								<h5 class="f_nav_tms_h5">Consulting</h5>
								
									<ul>
										<li><a href="/service/finance">資金調達支援​</a></li>
										<li><a href="/service/cfo">ＣＦＯ代行支援/ベンチャー企業支援​</a></li>
										<li><a href="/service/accounting">会計コンサルティング​</a></li>
										<!--
										<li><a href="/service/planning">計画・予算策定支援/KPI管理​</a></li>-->
										<li><a href="/service/international">国際業務/海外進出支援（ＵＳＡ）​</a></li>
										<li><a href="/service/invest">自己投資・経営支援​</a></li>
									</ul>
								</li>
								
								<h5 class="f_nav_tms_h5">Business Process Outsourcing</h5>
								
									<ul>
										<li><a href="/service/tax">会計・税務顧問/申告書作成・節税支援​</a></li>
										<li><a href="/service/audit">会計監査​</a></li>
										<li><a href="/service/subsidy">助成金・補助金申請​</a></li>
									</ul>
								

						</div>
					</div>
					<div class="f_nav">
						<h4><a href="/about">会社概要</a></h4>
						<ul>
							<li><a href="/about/company">会社概要​</a></li>
							<li><a href="/about/business">事業内容​</a></li>
							<li><a href="/about/vision">理念/弊社の強み​</a></li>
							<li><a href="/about/member">メンバープロフィール​</a></li>
							<li><a href="/about/access">アクセス</a></li>
						</ul>			
					</div>
					<div class="f_nav">
						<h4><a href="/recruit">リクルート​</a></h4>
						<ul>
							<li><a href="/recruit/what">ユニヴィスとは？​</a></li>
							<li><a href="/recruit/members">メンバー紹介​</a></li>
							<li><a href="/recruit/career">キャリアパス​</a></li>
							<li><a href="/recruit/faq">よくあるご質問​</a></li>
							<li><a href="/recruit/recruitment">募集要項</a></li>
						</ul>
					</div>
					<div class="f_nav">
						<h4><a href="/faq">よくあるご質問​</a></h4>
						<ul>
							<li><a href="/faq/service">サービスについて​</a></li>
							<li><a href="/faq/univis">ユニヴィスについて​</a></li>
							<li><a href="/recruit/faq">リクルートについて​</a></li>
							<li><a href="/faq/others">その他</a></li>
						</ul>
					</div>
					<div class="f_nav">
						<h4><a href="/contact">お問い合わせ</a></h4>
						<ul>
							<li><a href="/contact">お問い合わせ</a></li>
						</ul>
						<h4>others</h4>
						<ul>
							
							<li><a href="/news">News</a></li>
							<li><a href="/privacypolicy">プライバシーポリシー​</a></li>
							<li><a href="/sitemap">サイトマップ​​</a></li>
						</ul>
					</div>
				</div>
				<hr>
				<div class="f_rights" >
					<p><img class="uk-margin uk-margin-remove" src="<?php bloginfo('template_directory'); ?>/img/logo.png" width="90" height="30" alt="ユニヴィスグループ"></p>
					<p class="copyRight">Copyright &copy;  Univis Group. All rights reserved.</p>

				</div>				
			</div>
		</footer>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/uikit.min.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/components/sticky.min.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.circliful.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
        <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/uikit.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/components/parallax.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/core/offcanvas.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/stickyfill.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/common.js"></script>
		<script>
  $(window).scroll(function () {
    var sT = $(window).scrollTop();

      if (sT >= 10) {
        $("body").addClass('headerBg')
      } else {
        $("body").removeClass('headerBg')
      }
  });

	</script>
		<?php wp_footer(); ?>
    </body>
</html>