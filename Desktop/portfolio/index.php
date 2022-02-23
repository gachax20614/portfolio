<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ようこそ！フリーランスgachaxのポートフォリオです。ホームページやランディングページ制作のお問合せはこちらから。">
  <link rel="shortcut icon" href="img/mylogo.svg">
  <title>gachax portforio</title>
  <!-- css -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php include('./partsfolder/header.php') ?>
<div class="title">
  <h1>
    <span class="gachax">gachax</span>
    <span class="design">Design</span>
    <span class="lab">Lab</span>
  </h1>
</div>
<main>
  <div class="main_v">
    <img src="img/desk.jpg" alt="机に置かれたPCの写真">
  </div>
</main>
<section id="about">
  <div>
    <h2 class="a_heading">About</h2>
  </div>
    <div class="about_txt">
      <p>この度は、当サイトにご来訪いただき、<br>
         ありがとうございます。<br></p>
      <p>私はHP制作を通して、お客さまが<br>
      <span class="emphasis">想像する未来・新しい世界</span><br>
            を形に出来ればできれば<br>
            嬉しく思います。<br></p>
      <p>『自分の趣味のサイトを作りたいけど、<br>
            どうすればいいのか？』<br>
         『会社のHPを作りたいけど、<br>
            どこにお願いしよう？』</p>
      <span class="emphasis">ぜひ、私に聞かせてください！<br>
            お客さまの想いを創造するお手伝いを<br>
            させてください！</span>
      </div>
      <div>
        <h2 class="p_heading">Profile</h2>
      </div>
      <div class="profile_item">
        <div class="profile_txt">
          <p class="profile_name">gachax(ガチャックス) 本名:緒方正人</p>
          <p class="profile_info">前職で『うつ病』を発症。休職中に元同僚から誘われ、<br>独学でプログラミング学習開始。<br>
          架空サイト制作等を行いながら、日々スキルアップに<br>取り組んでおります。<br>
          『<span class="emphasis">ひとを想い、想いをかたちにする</span>』<br>をモットーにweb制作に取り組みます！</p>
          <p class="profile_info_sp">前職で『うつ病』を発症。休職中に元同僚から<br>誘われ,独学でプログラミング学習開始。<br>
          架空サイト制作等を行いながら、<br>日々スキルアップに取り組んでおります。<br>
          『<span class="emphasis">ひとを想い、想いをかたちにする</span>』<br>をモットーにweb制作に取り組みます！</p>
          <div class="twitter_icon">
            <a href="https://twitter.com/gachax20614" target="_blank"><img src="./img/twitter.svg" alt=""></a>
            </div>
          </div>
        </div>
        <h2 class="s_heading">Skill</h2>
        <ul class="skill_box">
          <li class="skill_item"><img src="./img/html-5.svg" alt=""></li>
          <li class="skill_item"><img src="./img/css-3.svg" alt=""></li>
          <li class="skill_item"><img src="./img/javascript.svg" alt=""></li>
          <li class="skill_item"><img src="./img/php.svg" alt=""></li>
        </ul>
      </section>
      <section id="work">
        <div>
          <h2 class="w_heading">Work</h2>
        </div>
        <div class="inner">
          <div class="work_list">
            <a class="work_item" href="./partsfolder/work_it.php">
              <p class="work_img"><img src="./img/IT-network.jpg" alt="制作品の写真"></p>
              <p class="work_name">IT-Network(架空サイト)</p>
              <p class="work_info">Design/Coding(スマホ対応)</p>
            </a>
            <a class="work_item" href="./partsfolder/work_gdl.php">
              <p class="work_img"><img src="./img/gdl.jpg" alt="制作品の写真"></p>
              <p class="work_name">gachax portfolio(当サイト)</p>
              <p class="work_info">Design/Coding(スマホ対応)</p>
            </a>
          </div>
        </div>
      </section>
      <section id="contact">
        <div>
          <h2 class="c_heading">Contact</h2>
          <h3>＊全項目入力必須です</h3>
        </div>
       <?php include('./contact_form/form.php') ?>
      </section>
      <footer class="site_footer">
        <p>©︎ 2022 gachax portfolio</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
      <script src="./js/script.js"></script>
    </body>
    </html>