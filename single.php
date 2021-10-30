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

                <div class="p-single c-media"> <!-- 追加 -->
                    <div class="p-single__top c-media__top__single"> <!-- 追加・追加 -->
                        <h2 class="p-single__title">h1</h2> <!-- 追加 -->
                        <p class="p-single__subtitle">チーズバーガー</p> <!-- 追加 -->
                    </div>
                </div>

                <div class="c-comments__block"> <!-- 変更 -->
                    <div class="c-comments__block__text"> <!-- 変更 -->
                        <h2>見出しh2</h2>
                        <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                        <h3>見出しh3</h3>
                        <h4>見出しh4</h4>
                        <h5>見出しh5</h5>
                        <h6>見出しh6</h6>
                    </div>
                    <div class="c-comments__text__copy"> <!-- 変更 -->
                        <blockquote>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</blockquote>
                        <p>出典元：<a href="#">○○○○○○○○○○○○</a></p>
                    </div>
                </div>

                <div class="c-comments c-media"> <!-- 追加 -->
                    <div>
                        <img class="c-media__top" src="../img/single-picture.jpg" alt="#"> <!-- 変更 -->
                    </div>
                    <div class="c-comments__img__text"> <!-- 変更 -->
                        <img class="c-media__middle" src="../img/single-picture.jpg" alt="#">  <!-- 変更 -->
                        <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                    </div>
                    <div class="c-comments__img__text c-media__img"> <!-- 変更 -->
                        <img class="c-comments__bottom c-media__bottom" src="../img/single-picture.jpg" alt="#"> <!-- 変更 -->
                        <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                    </div>
                </div>

                <div class="c-media__half"> <!-- 変更 -->
                    <img src="../img/single-picture.jpg" alt="#">
                </div>
                <div class="c-media__tile"> <!-- 変更 -->
                    <img src="../img/single-picture.jpg" alt="#">
                    <img src="../img/single-picture.jpg" alt="#">
                    <img src="../img/single-picture.jpg" alt="#">
                    <img src="../img/single-picture.jpg" alt="#">
                    <img src="../img/single-picture.jpg" alt="#">
                    <img src="../img/single-picture.jpg" alt="#">
                    <img src="../img/single-picture.jpg" alt="#">
                    <img src="../img/single-picture.jpg" alt="#">
                    <img src="../img/single-picture.jpg" alt="#">
                </div>

                <div class="p-single__list"> <!-- 変更 -->
                    <ol>
                        <li>リストリストリスト</li>
                        <li>リストリストリスト
                            <ol>
                                <li>リスト2リスト2リスト2</li>
                                <li>リスト2リスト2リスト2</li>
                            </ol>
                        </li>
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ol>
                    <ul>
                        <li>リストリストリスト</li>
                        <li>リストリストリスト
                            <ul>
                                <li>リスト2リスト2リスト2</li>
                                <li>リスト2リスト2リスト2</li>
                            </ul>
                        </li>
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ul>
                </div>

                <pre class="p-single__code"> <!-- 変更 -->
<!--              --><code>&lt;html&gt;
<!--              -->       &lt;head&gt;
<!--              -->       &lt;/head&gt;
<!--              -->       &lt;body&gt;
<!--              -->       &lt;/body&gt;                       
<!--             -->&lt;/html&gt;</code>
                </pre>

                <div class="c-wrap__table">
                    <table>
                        <tr>
                            <th>テーブル</th>
                            <td>テーブル</td> 
                        </tr>
                        <tr>
                            <th>テーブル</th>
                            <td>テーブル</td>
                        </tr>
                        <tr>
                            <th>テーブル</th>
                            <td>テーブル</td>
                        </tr>
                        <tr>
                            <th>テーブル</th>
                            <td>テーブル</td>
                        </tr>
                    </table>
                </div>

                <div class="c-button__single"> <!-- 変更 -->
                    <button><a href="#">ボタン</a></button>
                </div>

                <p class="c-button__comment">boldboldboldboldboldboldbold</p>

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