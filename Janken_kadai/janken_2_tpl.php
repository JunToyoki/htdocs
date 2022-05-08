<?php
$amount = $_POST["amount"];
$player_1 = $_POST["player_1"];
$player_2 = $_POST["player_2"];
$player_3 = $_POST["player_3"];
$player_4 = $_POST["player_4"];
$player_5 = $_POST["player_5"];
?>

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
    <div class = "jankencall">男気ジャンケン、ジャンケン、、、</div>
    <div class="poibox">
      <div id = "poi">ポイ</div>
    </div>

    <table class="amount_table">
      <tr>
        <th class="amount_number">総額</th>
        <td id="amountNumber_cfm"></td>
      </tr>

    <table class="players_2">
      <tr>
        <th class="player_1_cfm"><?php echo $player_1; ?></th>
        <td id="player_1_poi">  </td>
        <td id="player_1_payment"> </td>
      </tr>
      <tr>
        <th class="player_2_cfm"><?php echo $player_2; ?></th>
        <td id="player_2_poi">  </td>
        <td id="player_2_payment"> </td>
      </tr>
      <tr>
        <th class="player_3_cfm"><?php echo $player_3; ?></th>
        <td id="player_3_poi">  </td>
        <td id="player_3_payment"> </td>
      </tr>
      <tr>
        <th class="player_4_cfm"><?php echo $player_4; ?></th>
        <td id="player_4_poi">  </td>
        <td id="player_4_payment"> </td>
      </tr>
      <tr>
        <th class="player_5_cfm"><?php echo $player_5; ?></th>
        <td id="player_5_poi">  </td>
        <td id="player_5_payment"> </td>
      </tr>
  </table>

</main>

<footer>

</footer>

<script>
// 金額に３桁のカンマを入れる
const text_amount = document.getElementById("amountNumber_cfm");
const amountImport = <?php echo $amount; ?>;
const amountComma = amountImport.toLocaleString();
text_amount.innerText = amountComma + "円";

document.getElementById("poi").onclick = function(){ 
  // 0=グー 1=チョキ　2=パー
let p1_num = Math.floor ( Math.random () * 3 );
let p2_num = Math.floor ( Math.random () * 3 );
let p3_num = Math.floor ( Math.random () * 3 );
let p4_num = Math.floor ( Math.random () * 3 );
let p5_num = Math.floor ( Math.random () * 3 );

if (p1_num==0)
    {
      document.getElementById("player_1_poi").innerHTML="<img src='img/gu.png'>";
    }
    else if (p1_num==1)
    {
      document.getElementById("player_1_poi").innerHTML="<img src='img/choki.png'>";
    }
    else if (p1_num==2)
    {
      document.getElementById("player_1_poi").innerHTML="<img src='img/pa.png'>";
    };

if (p2_num==0)
    {
      document.getElementById("player_2_poi").innerHTML="<img src='img/gu.png'>";
    }
    else if (p2_num==1)
    {
      document.getElementById("player_2_poi").innerHTML="<img src='img/choki.png'>";
    }
    else if (p2_num==2)
    {
      document.getElementById("player_2_poi").innerHTML="<img src='img/pa.png'>";
    };
    
if (p3_num==0)
    {
      document.getElementById("player_3_poi").innerHTML="<img src='img/gu.png'>";
    }
    else if (p3_num==1)
    {
      document.getElementById("player_3_poi").innerHTML="<img src='img/choki.png'>";
    }
    else if (p3_num==2)
    {
      document.getElementById("player_3_poi").innerHTML="<img src='img/pa.png'>";
    };

if (p4_num==0)
    {
      document.getElementById("player_4_poi").innerHTML="<img src='img/gu.png'>";
    }
    else if (p4_num==1)
    {
      document.getElementById("player_4_poi").innerHTML="<img src='img/choki.png'>";
    }
    else if (p4_num==2)
    {
      document.getElementById("player_4_poi").innerHTML="<img src='img/pa.png'>";
    };

if (p5_num==0)
    {
      document.getElementById("player_5_poi").innerHTML="<img src='img/gu.png'>";
    }
    else if (p5_num==1)
    {
      document.getElementById("player_5_poi").innerHTML="<img src='img/choki.png'>";
    }
    else if (p5_num==2)
    {
      document.getElementById("player_5_poi").innerHTML="<img src='img/pa.png'>";
    };

let array = "" + p1_num + p2_num + p3_num + p4_num + p5_num;
console.log(array);
let array_2 = [p1_num,p2_num,p3_num,p4_num,p5_num];
console.log(array_2);
const array_2_gu_count = array_2.filter(n => n === 0).length;
const array_2_cho_count = array_2.filter(n => n === 1).length;
const array_2_pa_count = array_2.filter(n => n === 2).length;

// グーがない時に-1が返ってくる→勝敗がつく
const non_gu = array_2.indexOf(0);
console.log(non_gu);

const non_cho = array_2.indexOf(1);
console.log(non_cho);

const non_pa = array_2.indexOf(2);
console.log(non_pa);

if (array==00000)
    {
      document.getElementById("poi").textContent="あいこでしょ";
    }
  else if (array==11111)
    {
      document.getElementById("poi").textContent="あいこでしょ";
    }
  else if (array==22222)
    {
      document.getElementById("poi").textContent="あいこでしょ";
    }
  else if (non_gu==-1)
    {
      let result = confirm("結果が出ました！結果を見ますか？");
      if (result)
      {
        let finalAmount_1_kiriageMae = <?php echo $amount; ?> / array_2_cho_count;
        let finalAmount_1_CommaMae = Math.ceil(finalAmount_1_kiriageMae);
        let finalAmount_1 = finalAmount_1_CommaMae.toLocaleString();
        if (p1_num == 1)
        {
          document.getElementById("player_1_payment").textContent=finalAmount_1 + "円";
          document.getElementById("poi").textContent="決着";
        }
        if (p2_num == 1)
        {
          document.getElementById("player_2_payment").textContent=finalAmount_1 + "円";
          document.getElementById("poi").textContent="決着";
        }
        if (p3_num == 1)
        {
          document.getElementById("player_3_payment").textContent=finalAmount_1 + "円";
          document.getElementById("poi").textContent="決着";
        }
        if (p4_num == 1)
        {
          document.getElementById("player_4_payment").textContent=finalAmount_1 + "円";
          document.getElementById("poi").textContent="決着";
        }
        if (p5_num == 1)
        {
          document.getElementById("player_5_payment").textContent=finalAmount_1 + "円";
          document.getElementById("poi").textContent="決着";
        } 
      else 
      {
        alert("男気が足りん！！");
      }
      }
    }
    else if (non_cho==-1)
    {
      let result = confirm("結果が出ました！結果を見ますか？");
      if (result)
      {
        let finalAmount_2_kiriageMae = <?php echo $amount; ?> / array_2_pa_count;
        let finalAmount_2_CommaMae = Math.ceil(finalAmount_2_kiriageMae);
        let finalAmount_2 = finalAmount_2_CommaMae.toLocaleString();
        if (p1_num == 2)
        {
          document.getElementById("player_1_payment").textContent=finalAmount_2 + "円";
          document.getElementById("poi").textContent="決着";
        }
        if (p2_num == 2)
        {
          document.getElementById("player_2_payment").textContent=finalAmount_2 + "円";
          document.getElementById("poi").textContent="決着";
        }
        if (p3_num == 2)
        {
          document.getElementById("player_3_payment").textContent=finalAmount_2 + "円";
          document.getElementById("poi").textContent="決着";
        }
        if (p4_num == 2)
        {
          document.getElementById("player_4_payment").textContent=finalAmount_2 + "円";
          document.getElementById("poi").textContent="決着";
        }
        if (p5_num == 2)
        {
          document.getElementById("player_5_payment").textContent=finalAmount_2 + "円";
          document.getElementById("poi").textContent="決着";
        } 
      } else {
        alert("男気が足りん！！");
      }
    }
    else if (non_pa==-1)
    {
      let result = confirm("結果が出ました！結果を見ますか？");
      if (result)
      {
        let finalAmount_3_kiriageMae = <?php echo $amount; ?> / array_2_gu_count;
        let finalAmount_3_CommaMae = Math.ceil(finalAmount_3_kiriageMae);
        let finalAmount_3 = finalAmount_3_CommaMae.toLocaleString();
        if (p1_num == 0)
        {
          document.getElementById("player_1_payment").textContent=finalAmount_3 + "円";
          document.getElementById("poi").textContent="決着";
        }
        if (p2_num == 0)
        {
          document.getElementById("player_2_payment").textContent=finalAmount_3 + "円";
          document.getElementById("poi").textContent="決着";
        }
        if (p3_num == 0)
        {
          document.getElementById("player_3_payment").textContent=finalAmount_3 + "円";
          document.getElementById("poi").textContent="決着";
        }
        if (p4_num == 0)
        {
          document.getElementById("player_4_payment").textContent=finalAmount_3 + "円";
          document.getElementById("poi").textContent="決着";
        }
        if (p5_num == 0)
        {
          document.getElementById("player_5_payment").textContent=finalAmount_3 + "円";
          document.getElementById("poi").textContent="決着";
        } 
      } else {
        alert("男気が足りん！！");
      }
    }
    else
    {
      document.getElementById("poi").textContent="あいこでしょ";
    };
};

</script>

</body>
</html>