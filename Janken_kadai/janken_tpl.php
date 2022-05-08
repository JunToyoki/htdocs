<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="js/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="janken_css/janken.css">
<title>男気ジャンケンアプリ</title>
</head>
<body>

<header>
  <div class="headers">
    <div class="headerimg">
      <img src="img/yukarian.jpeg" width="1200px">
    </div>
    <h1>男気ジャンケン<br>精算アプリ</h1>
  </div>
</header>

<main>
<div class="setsumei">金額と参加者を入力してください。<br>必ず5人登録してください。</div>

<form method="POST" action="janken_2_tpl.php">
    <div class="table">
    <table class="players">
      <tr>
        <th class="amount_number">金額</th>
        <td class="amount_input">
          <input type="number" name="amount" class="formtext"></td>
      </tr>
      <tr>
        <th class="player_name">Player.1</th>
        <td class="player_1_input">
          <input type="text" name="player_1" class="formtext"></td>
      </tr>
      <tr>
        <th class="player_name">Player.2</th>
        <td class="player_2_input">
          <input type="text" name="player_2" class="formtext"></td>
      </tr>
      <tr>
        <th class="player_name">Player.3</th>
        <td class="player_3_input">
          <input type="text" name="player_3" class="formtext"></td>
      </tr>
      <tr>
        <th class="player_name">Player.4</th>
        <td class="player_4_input">
          <input type="text" name="player_4" class="formtext"></td>
      </tr>
      <tr>
        <th class="player_name">Player.5</th>
        <td class="player_5_input">
          <input type="text" name="player_5" class="formtext"></td>
      </tr>
    </div>
      <div class="submitbutton">
        <input type="submit" value="登録" class="button">
      </div>
  </form>

</main>

<footer></footer>
<script>


</script>
</body>
</html>

<?php
$amount_cfm = $_POST["amount"]
?>