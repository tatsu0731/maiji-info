<!-- 問題一覧・削除画面 -->
<?php
// session_start();

// if (!isset($_SESSION['id'])) {
//   header('Location: /admin/auth/signin.php');
// } else {
//   if (isset($_SESSION['message'])) {
//     $message = $_SESSION['message'];
//     unset($_SESSION['message']);
//   }

  $pdo = new PDO('mysql:host=db;dbname=meiji-info', 'root', 'root');
  $art = $pdo->query("SELECT * FROM article")->fetchAll(PDO::FETCH_ASSOC);
  
?>


<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>maiji-info-top</title>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/common.css" />
  </head>
  <body>
    <header>
      <div class="header-box">
        <div class="header-top">
          <div class="logo">
            <img src="" alt="logo" />
          </div>
          <nav class="header-bottom">
            <ul class="list-box">
              <li class="list"><a href="article.html">記事一覧</a></li>
              <li class="list"><a href="organization.html">サークル情報</a></li>
              <li class="list"><a href="exam.html">受験情報</a></li>
              <li class="list"><a href="contact.html">お問い合わせ</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main>
      <section class="sns">
        <a href="https://twitter.com/Meiji_Info_"
          ><div class="icon">
            <img
              src="asset/Twitter social icons - rounded square - blue.png"
              alt="Twitter"
            /></div
        ></a>
        <a href="https://www.instagram.com/meiji_info_/?igshid=YmMyMTA2M2Y%3D"
          ><div class="icon">
            <img src="asset/Instagram_icon.png" alt="Instagram" /></div
        ></a>
      </section>
      <section class="main-info">
        <div class="main-info-box">
          <div class="main-info-title">重要なお知らせ</div>
          <div class="main-info-contents">
            <div class="main-info-when">2023.09.15</div>
            <div class="main-info-text">maiji-infoのウェブサイトが完成！</div>
          </div>
        </div>
      </section>
      <section>
        <div class="background-box-top"></div>
        <div class="sec-title">
          <h2>最新情報</h2>
          <p class="subtitle">///news</p>
          <p class="text">maiji-infoが送る最新情報です！</p>
        </div>
        <div class="contents-container">
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">
              秋新歓企画！あなたのサークル特集させてください！
            </p>
            <p class="content-date">2023.09.15</p>
          </div>
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">
              <?= $art[0]["title"] ?>
            </p>
            <p class="content-date"><?= $art[0]["date"] ?></p>
          </div>
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">
              <?= $art[1]["title"] ?>
            </p>
            <p class="content-date"><?= $art[1]["date"] ?> </p>
          </div>
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">
              <?= $art[2]["title"] ?>
            </p>
            <p class="content-date"><?= $art[2]["date"] ?></p>
          </div>
        </div>
        <div class="btn-box">
          <button class="more-btn">もっと見る</button>
        </div>
      </section>
      <section>
        <div class="sec-title">
          <h2>記事一覧</h2>
          <p class="subtitle">///article</p>
          <p class="text">
            明大生のキャンパスライフをより輝かせる、今欲しい情報をお届けする記事です！
          </p>
        </div>
        <div class="contents-container-article">
          <div class="contents-container-top">
            <div class="content">
              <div class="content-img">
                <img src="./asset/demo-content.JPG" alt="" />
              </div>
              <p class="content-text">
                秋新歓企画！あなたのサークル特集させてください！
              </p>
              <div class="content-sub-info">
                <p class="content-date">2023.09.15</p>
                <p class="content-new">new</p>
              </div>
            </div>
            <div class="content">
              <div class="content-img">
                <img src="./asset/demo-content.JPG" alt="" />
              </div>
              <p class="content-text">
                秋新歓企画！あなたのサークル特集させてください！
              </p>
              <p class="content-date">2023.09.15</p>
            </div>
            <div class="content">
              <div class="content-img">
                <img src="./asset/demo-content.JPG" alt="" />
              </div>
              <p class="content-text">
                秋新歓企画！あなたのサークル特集させてください！
              </p>
              <p class="content-date">2023.09.15</p>
            </div>
            <div class="content">
              <div class="content-img">
                <img src="./asset/demo-content.JPG" alt="" />
              </div>
              <p class="content-text">
                秋新歓企画！あなたのサークル特集させてください！
              </p>
              <p class="content-date">2023.09.15</p>
            </div>
          </div>
          <div class="contents-container-bottom">
            <div class="content">
              <div class="content-img">
                <img src="./asset/demo-content.JPG" alt="" />
              </div>
              <p class="content-text">
                秋新歓企画！あなたのサークル特集させてください！
              </p>
              <p class="content-date">2023.09.15</p>
            </div>
            <div class="content">
              <div class="content-img">
                <img src="./asset/demo-content.JPG" alt="" />
              </div>
              <p class="content-text">
                秋新歓企画！あなたのサークル特集させてください！
              </p>
              <p class="content-date">2023.09.15</p>
            </div>
            <div class="content">
              <div class="content-img">
                <img src="./asset/demo-content.JPG" alt="" />
              </div>
              <p class="content-text">
                秋新歓企画！あなたのサークル特集させてください！
              </p>
              <p class="content-date">2023.09.15</p>
            </div>
            <div class="content">
              <div class="content-img">
                <img src="./asset/demo-content.JPG" alt="" />
              </div>
              <p class="content-text">
                秋新歓企画！あなたのサークル特集させてください！
              </p>
              <p class="content-date">2023.09.15</p>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <button class="more-btn">もっと見る</button>
        </div>
      </section>
      <section class="contents-sec">
        <div class="background-box-middle"></div>
        <div class="sec-title">
          <h2>サークル情報</h2>
          <p class="subtitle">///organizations</p>
          <p class="text">明大生が4年間共にするサークル・団体情報です！</p>
        </div>
        <div class="contents-container">
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">
              【サークル紹介】プログラミングサークルPOSSE
            </p>
            <p class="content-date">2023.09.15</p>
          </div>
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">【サークル紹介】映像集団鵺</p>
            <p class="content-date">2023.09.15</p>
          </div>
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">【サークル紹介】漫画研究会</p>
            <p class="content-date">2023.09.15</p>
          </div>
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">
              【サークル紹介】明治大学英会話サークルESS
            </p>
            <p class="content-date">2023.09.15</p>
          </div>
        </div>
        <div class="btn-box">
          <button class="more-btn">もっと見る</button>
        </div>
      </section>
      <section>
        <div class="sec-title">
          <h2>受験情報</h2>
          <p class="subtitle">///entrance exam</p>
          <p class="text">
            MARCHの一角を担う明治大学を目指す受験生のための情報です！
          </p>
        </div>
        <div class="contents-container">
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">
              秋新歓企画！あなたのサークル特集させてください！
            </p>
            <p class="content-date">2023.09.15</p>
          </div>
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">
              秋新歓企画！あなたのサークル特集させてください！
            </p>
            <p class="content-date">2023.09.15</p>
          </div>
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">
              秋新歓企画！あなたのサークル特集させてください！
            </p>
            <p class="content-date">2023.09.15</p>
          </div>
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">
              秋新歓企画！あなたのサークル特集させてください！
            </p>
            <p class="content-date">2023.09.15</p>
          </div>
        </div>
        <div class="btn-box">
          <button class="more-btn">もっと見る</button>
        </div>
      </section>
      <section>
        <div class="background-box-bottom"></div>
        <div class="sec-title">
          <h2>お問い合わせ</h2>
          <p class="subtitle">///contact</p>
          <p class="text">maiji-infoに興味のある方へ</p>
        </div>
        <div class="contents-container">
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">
              秋新歓企画！あなたのサークル特集させてください！
            </p>
            <p class="content-date">2023.09.15</p>
          </div>
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">
              秋新歓企画！あなたのサークル特集させてください！
            </p>
            <p class="content-date">2023.09.15</p>
          </div>
          <div class="content">
            <div class="content-img">
              <img src="./asset/demo-content.JPG" alt="" />
            </div>
            <p class="content-text">
              秋新歓企画！あなたのサークル特集させてください！
            </p>
            <p class="content-date">2023.09.15</p>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <nav>
        <ul class="footer-nav">
          <li class="footer-list">
            <a href="https://harmo-inc.co.jp/">会社概要</a>
          </li>
          <li class="footer-list">プライバシーポリシー</li>
          <li class="footer-list">
            <a href="https://www.meiji.ac.jp/">明治大学HPへ</a>
          </li>
        </ul>
      </nav>
      <p class="copyright">&copy; 2023 maiji-info, All Rights Reserved.</p>
    </footer>
  </body>
</html>
