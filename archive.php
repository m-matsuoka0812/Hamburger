<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>hamburger menu</title>
        <meta name="description" content="ハンバーガーメニュー作成課題">

         <!-- Adobe Fonts -->
         <script>
            (function(d) {
              var config = {
                kitId: 'phg4osz',
                scriptTimeout: 3000,
                async: true
              },
              h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
            })(document);
          </script>

        <!-- CSS -->                 
        <!--<link rel="stylesheet" href="https://raw.githubusercontent.com/nicolas-cusan/destyle.css/master/destyle.min.css">-->
        <link rel="stylesheet" href="../css/style.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- <script src="../js/jquery-3.6.0.min.js"></script>-->
       
    </head>
    
    <body>
        <div class="l-main"> <!-- 変更 -->
            <article class="l-main__left"> <!-- 変更 -->
                <!-- ハンバーガーメニュー -->
                <div class="p-bar">
                    <button class="p-bar__button">Menu</button>
                </div>
                <!-- 追加分 -->
                <div class="l-header">
                    <div class="l-header__left">
                        <a href="#">
                            <h1>Hamburger</h1>
                        </a>
                    </div>
                    <form class="l-header__form">
                        <input class="l-header__form__box fas fa-search fa-lg" type="search" value="&#xf002"> <!-- icon追加 -->
                        <input class="l-header__form__button" type="submit" value="検索">
                    </form>
                </div>

                <div class="p-archive c-media"> <!-- 追加 -->
                    <div class="c-media__top__archive"> <!-- 変更・追加 -->
                        <h2 class="p-archive__title">Menu:</h2> <!-- 追加 -->
                        <p class="p-archive__subtitle">チーズバーガー</p> <!-- 追加 -->
                    </div>
                </div>

                <div class="c-comments"> <!-- 変更 -->
                    <h4 class="c-comments__title">小見出しが入ります</h4> <!-- 追加 -->
                    <p class="c-comments__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p> <!-- 追加 -->
                </div>

                <div class="p-archive__card">
                    <img class="c-media__menu" src="../img/e-1.jpg" alt=""> <!-- 追加 -->
                    <div class="p-archive__card__intro">
                        <h3>チーズバーガー</h3>
                        <h4>小見出しが入ります</h4>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <button class="c-button__archive"><a href="#">詳しく見る</a></button><!-- 変更・追加 -->
                    </div> 
                </div>

                <div class="p-archive__card">
                    <img class="c-media__menu" src="../img/e-1.jpg" alt=""> <!-- 追加 -->
                    <div class="p-archive__card__intro">
                        <h3>ダブルチーズバーガー</h3>
                        <h4>小見出しが入ります</h4>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <button class="c-button__archive"><a href="#">詳しく見る</a></button><!-- 変更・追加 -->
                    </div>  
                </div>

                <div class="p-archive__card">
                    <img class="c-media__menu" src="../img/e-1.jpg" alt=""> <!-- 追加 -->
                    <div class="p-archive__card__intro">
                        <h3>スペシャルチーズバーガー</h3>
                        <h4>小見出しが入ります</h4>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <button class="c-button__archive"><a href="#">詳しく見る</a></button><!-- 変更・追加 -->
                    </div>
                </div>

                <div class="p-pagination">
                    <p class="p-pagination__current__page">page 1/10</p>
                    <ul class="p-pagination__list">
                        <li class="p-pagination__page">
                            <a class="p-pagination__page__link-1" href="#" aria-label="Previous" style="font-size: 2rem; padding: 0;">
                                <span aria-hidden="true">&laquo;</span>
                                <p class="p-pagination__previous">前へ</p>
                            </a>
                        </li>
                        <li class="p-pagination__page"><a class="p-pagination__page__number" href="archive.html">1</a></li>
                        <li class="p-pagination__page"><a class="p-pagination__page__number" href="archive.html">2</a></li>
                        <li class="p-pagination__page"><a class="p-pagination__page__number" href="archive.html">3</a></li>
                        <li class="p-pagination__page"><a class="p-pagination__page__number" href="archive.html">4</a></li>
                        <li class="p-pagination__page"><a class="p-pagination__page__number" href="archive.html">5</a></li>
                        <li class="p-pagination__page"><a class="p-pagination__page__number" href="archive.html">6</a></li>
                        <li class="p-pagination__page"><a class="p-pagination__page__number" href="archive.html">7</a></li>
                        <li class="p-pagination__page"><a class="p-pagination__page__number" href="archive.html">8</a></li>
                        <li class="p-pagination__page"><a class="p-pagination__page__number" href="archive.html">9</a><l/i>
                        <li class="p-pagination__page">
                            <p class="p-pagination__next">次へ</p>
                            <a class="p-pagination__page__link-2" href="#" aria-label="Next" style="font-size: 2rem; padding: 0;">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>

            <aside class="l-main__right"> <!-- 変更 -->
                <div class="l-sidebar">
                    <div class="c-button__close"></div> <!-- ハンバーガーメニュー追加 -->
                    <a class="l-sidebar__menu" href="#">Menu</a>
                    <ul>
                        <li><a class="l-sidebar__menu__list" href="#">バーガー</a>
                            <ul class="l-sidebar__menu__block">
                                <li><a class="l-sidebar__menu__merchandise" href="#">ハンバーガー</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">チーズハンバーガー</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">テリヤキハンバーガー</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">アボガドハンバーガー</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">フィッシュハンバーガー</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">ベーコンハンバーガー</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">チキンハンバーガー</a></li>
                            </ul>
                        </li>

                        <li><a class="l-sidebar__menu__list" href="#">サイド</a>
                            <ul class="l-sidebar__menu__block">
                                <li><a class="l-sidebar__menu__merchandise" href="#">ポテト</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">サラダ</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">ナゲット</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">コーン</a></li>
                            </ul>
                        </li>

                        <li><a class="l-sidebar__menu__list" href="#">ドリンク</a>
                            <ul class="l-sidebar__menu__block">
                                <li><a class="l-sidebar__menu__merchandise" href="#">コーラ</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">ファンタ</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">オレンジ</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">アップル</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">紅茶（Ice/Hot）</a></li>
                                <li><a class="l-sidebar__menu__merchandise" href="#">コーヒー（Ice/Hot）</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>
                
        </div>

        <footer class="l-footer">
            <div class="l-footer__section">
                <a href="#">ショップ情報</a>
                <a href="#">ヒストリー</a>
            </div>
            <small>Copyright: RaiseTech</small>
        </footer>
        
        <script src="../js/jquery.js"></script>

    </body>
</html>