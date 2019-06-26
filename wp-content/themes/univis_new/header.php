<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <title>Univis</title>
        <meta name="description" content="ユニヴィスグループは、公認会計士・税理士を中心としたプロフェッショナル集団です。会計、税務、ファイナンスのプロフェッショナルとして、クライアントの様々な課題を解決することをお約束します。また、私たちは、クライアント及び関係する全ての人々の成長・繁栄を考え、皆さまとともにチャレンジしていく、最良のパートナーであり続けます。">

        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/components/service.css"  />
    </head>
    <body>
        <div id="tm-offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">

                <ul class="uk-nav-offcanvas uk-nav-side uk-nav uk-nav-parent-icon" data-uk-nav>

                    <li class="uk-parent">
                        <a href="#">サービス</a>
                        <ul class="tms-uk-nav-sub uk-nav-sub">
                                <li><a href="/service/tax">会計・税務顧問/申告書作成・節税支援​</a></li>
                                <li><a href="/service/ma">M&Aアドバイザリー​</a></li>
                                <li><a href="/service/finance">資金調達支援​</a></li>
                                <li><a href="/service/dd">デューデリジェンス/株価算定​</a></li>
                                <li><a href="/service/accounting">会計コンサルティング​</a></li>
                                <li><a href="/service/cfo">ＣＦＯ代行支援/ベンチャー企業支援​</a></li>
                                <li><a href="/service/planning">計画・予算策定支援/KPI管理​</a></li>
                                <li><a href="/service/international">国際業務/海外進出支援（ＵＳＡ）​</a></li>
                                <li><a href="/service/invest">自己投資・経営支援​</a></li>
                                <li><a href="/service/audit">会計監査​</a></li>
                                <li><a href="/service/subsidy">助成金・補助金申請​</a></li>
                            </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="#">会社概要</a>
                        <ul class="tms-uk-nav-sub uk-nav-sub">
                            <li><a href="/about/company">会社概要​</a></li>
                            <li><a href="/about/business">事業内容​</a></li>
                            <li><a href="/about/vision">理念/弊社の強み​</a></li>
                            <li><a href="/about/member">メンバープロフィール​</a></li>
                            <li><a href="/about/access">アクセス</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="#">リクルート</a>
                        <ul class="tms-uk-nav-sub uk-nav-sub">
                            <li><a href="/recruit/what">ユニヴィスとは？​</a></li>
                            <li><a href="/recruit/members">メンバー紹介​</a></li>
                            <li><a href="/recruit/career">キャリアパス​</a></li>
                            <li><a href="/recruit/faq">よくあるご質問​</a></li>
                            <li><a href="/recruit/recruitment">募集要項</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="#">よくあるご質問</a>
                    <ul class="tms-uk-nav-sub uk-nav-sub">
                            <li><a href="/faq/service">サービスについて</a></li>
                            <li><a href="/faq/univis">ユニヴィスについて</a></li>
                            <li><a href="/recruit/faq">リクルートについて</a></li>
                            <li><a href="/faq/others">その他</a></li>
                        </ul>
                    </li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/privacypolicy">プライバシーポリシー</a></li>
                    <li><a href="/sitemap">サイトマップ</a></li>
                    <li><a href="/contact">お問い合わせ</a></li>
                </ul>
            </div>
        </div>
        <header>
            <nav class="tm-navbar uk-navbar uk-navbar-attached">
                <div class="uk-container uk-container-center">
                    <a class="uk-navbar-brand uk-hidden-small" href="<?php bloginfo('url'); ?>">
                        <img class="uk-margin uk-margin-remove" src="<?php bloginfo('template_directory'); ?>/img/logo.png" width="90" height="30" alt="ユニヴィスグループ">
                    </a>
                    <ul class="uk-navbar-flip uk-navbar-nav uk-hidden-small">
                        <li class="uk-parent" data-uk-dropdown="#" aria-haspopup="true" aria-expanded="false"><a href="/service">サービス</a>
                         <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-autoflip uk-dropdown-top" aria-hidden="true" style="top: 10px; left: 0px;  position: fixed; width: 100vw; height:100px; background-color: rgb(0,0,0,0);">
							<div class="tms-uk-dropdown-wrapper">
                            <ul class="uk-nav uk-nav-navbar" >
                                <li><a href="/service/tax">会計・税務顧問/申告書作成・節税支援​</a></li>
                                <li><a href="/service/ma">M&Aアドバイザリー​</a></li>
                                <li><a href="/service/finance">資金調達支援​</a></li>
                                <li><a href="/service/dd">デューデリジェンス/株価算定​</a></li>
                                <li><a href="/service/accounting">会計コンサルティング​</a></li>
                                <li><a href="/service/cfo">ＣＦＯ代行支援/ベンチャー企業支援​</a></li>
                                <li><a href="/service/planning">計画・予算策定支援/KPI管理​</a></li>
                                <li><a href="/service/international">国際業務/海外進出支援（ＵＳＡ）​</a></li>
                                <li><a href="/service/invest">自己投資・経営支援​</a></li>
                                <li><a href="/service/audit">会計監査</a></li>
                                <li><a href="/service/subsidy">助成金・補助金申請​</a></li>
                            </ul>
                            </div>
						</div>
                        </li>
                        <li class="uk-parent" data-uk-dropdown="#" aria-haspopup="true" aria-expanded="false"><a href="/about">会社概要</a>
						<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-autoflip uk-dropdown-top" aria-hidden="true" style="top: 10px; left: 0px;  position: fixed; width: 100vw; height:100px; background-color: rgb(0,0,0,0);">
							<div class="tms-uk-dropdown-wrapper">
								<ul class="uk-nav uk-nav-navbar">
								 <li><a href="/about/company">会社概要​</a></li>
								<li><a href="/about/business">事業内容​</a></li>
								<li><a href="/about/vision">理念/弊社の強み​</a></li>
								<li><a href="/about/member">メンバープロフィール​</a></li>
								<li><a href="/about/access">アクセス</a></li>
								</ul>
							</div>
						</div>
							
                        </li>
                        <li class="uk-parent" data-uk-dropdown="#" aria-haspopup="true" aria-expanded="false"><a href="/recruit">リクルート</a>
                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-autoflip uk-dropdown-top" aria-hidden="true" style="top: 10px; left: 0px;  position: fixed; width: 100vw; height:100px; background-color: rgb(0,0,0,0);">
							<div class="tms-uk-dropdown-wrapper">
                            <ul class="uk-nav uk-nav-navbar">
                                <li><a href="/recruit/what">ユニヴィスとは？</a></li>
                                <li><a href="/recruit/members">メンバー紹介</a></li>
                                <li><a href="/recruit/career">キャリアパス</a></li>
                                <li><a href="/recruit/faq">よくあるご質問</a></li>
                                <li><a href="/recruit/recruitment">募集要項</a></li>
                            </ul>
							</div>
                        </div>
                        </li>
                        <li class="uk-parent" data-uk-dropdown="#" aria-haspopup="true" aria-expanded="false"><a href="/faq">よくあるご質問</a>
                            						<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-autoflip uk-dropdown-top" aria-hidden="true" style="top: 10px; left: 0px;  position: fixed; width: 100vw; height:100px; background-color: rgb(0,0,0,0);">
							
							<div class="tms-uk-dropdown-wrapper">
                            <ul class="uk-nav uk-nav-navbar">
                            <li><a href="/faq/service">サービスについて</a></li>
                            <li><a href="/faq/univis">ユニヴィスについて</a></li>
                            <li><a href="/recruit/faq">リクルートについて</a></li>
                            <li><a href="/faq/others">その他</a></li>
                        </ul>
						</div>
                    </div>
                        </li>
                        <li class="uk-parent" data-uk-dropdown="#" aria-haspopup="true" aria-expanded="false"><a href="/news">News</a></li>
                        <li><a href="/contact">お問い合わせ</a></li>
                    </ul>
                </div>
                <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas="#"></a>
                <a class="uk-navbar-brand uk-navbar-center uk-visible-small" href="/">
                    <img class="uk-margin uk-margin-remove" src="<?php bloginfo('template_directory'); ?>/img/logo.png" width="90" height="30" alt="ユニヴィスグループ">
                </a>
            </nav>
        </header>