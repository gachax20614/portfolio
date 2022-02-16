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
<div class="title_pc">
  <h1>
    <span class="gachax">gachax</span>
    <span class="design">Design</span>
    <span class="lab">Lab</span>
  </h1>
</div>
<main>
  <div class="main_v">
    <img src="img/desk.jpeg" alt="机に置かれたPCの写真">
  </div>
</main>
<section id="#about">
  <div class="section_title">
    <h2 class="a_heading">About</h2>
  </div>
  <div class="about_item">
    <div class="about_img">
      <img src="" alt="">
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
    
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
</body>
</html>