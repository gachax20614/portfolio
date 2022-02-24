<?php
session_start();
if(!$_POST){
  header('Location: ./index.php');
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="お問い合わせ確認画面">
    <title> GDL | お問い合わせ確認画面
    </title>
    <link rel="shortcut icon" href="../img/mylogo.svg">
    <!--CSS-->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
  </head>

<?php
// トークンチェック・POSTからSESSIONへ受け渡し
if($_SESSION['input_token'] === $_POST['input_token']) {
  $_SESSION = $_POST;
  $tokenValidateError = false;
} else {
  $tokenValidateError = true;
}
?>
<?php
// 任意入力項目の配列が空の場合のエラーメッセージ制御
error_reporting(E_ALL ^ E_NOTICE);

// サーバーサイドバリデーション
$postData = $_POST;
$isValidateError = true;
$validateErrors = array();
function formValidation($postData) {

  // エラーメッセージ初期化
  $validateErrors = array();

  // 必須項目チェック対象指定
  $requiredCheck = array(
    'お名前' => $postData['name'],
    'メールアドレス' => $postData['e-mail'],
    'お問い合わせ内容' => $postData['message']
  );

  // 名前チェック対象指定
  $doubleByteCheck = array(
    'お名前' => $postData['name']
  );
  // メールアドレスフォーマットチェック対象指定
  $emailFormatCheck = array(
    'メールアドレス' => $postData['e-mail']
  );

  // 必須項目バリデートチェック
  foreach ($requiredCheck as $key => $value) {
    if(empty($value)) {
      $validateErrors[] = $key.'の項目は必須入力です';
    }
  }

  // 名前バリデートチェック
  foreach ($doubleByteCheck as $key => $value) {
    if(!preg_match('/^[ぁ-んァ-ヶーa-zA-Z0-9ー-龠０-９、。._-]+$/',$value)) {
      $validateErrors[] = $key.'を正しく入力してください';
    }
  }

  // メールアドレスバリデートチェック
  foreach ($emailFormatCheck as $key => $value) {
    if(!preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/',$value)) {
      $validateErrors[] = $key.'を正しく入力してください';
    }
  }

  return $validateErrors;
}
$validateErrors = formValidation($postData);
if(empty($validateErrors)) {
  $isValidateError = false;
} else {
  $isValidateError = true;
}
?>

<!-- エラーメッセージを表示させる -->
<?php if($isValidateError): ?>
  <ul>
    <?php foreach ($validateErrors as $value): ?>
        <li class="check_list">
          <?php echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); ?>
        </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
<body class="check_body">
  <form method="post" action="./send.php">
    <h1 class="check_title">※お間違いないですか？</h1>
    <div class="check-txt">
      <p>お名前</p>
      <div class="c_emphasis">
        <?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); ?>
      </div>
      <p>メールアドレス</p>
      <div class="c_emphasis">
        <?php echo htmlspecialchars($_POST['e-mail'], ENT_QUOTES, 'UTF-8'); ?>
      </div>
      <p>お問い合わせ内容</p>
      <textarea cols="30" rows="10">
        <?php echo htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8'); ?>
      </textarea>
    </div>
    <table class="check_btn">
      <tr>
        <td colspan="2">
          <input type="button" onclick="history.back()" value="Back">
          <?php if(!$tokenValidateError): ?>
            <input type="submit" value="Send！">
            <?php endif; ?>
          </td>
        </tr>
      </table>
    </form>
  </body>

