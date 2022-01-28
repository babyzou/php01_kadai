<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>あなたにおすすめ健康食品</title>
    <link rel='stylesheet' href='css/reset.css'>
  <link rel='stylesheet' href='css/style.css'>
</head>


<body>
<!-- <form method="get" action="get_confirm.php"> -->
   
    
<!-- </form> -->
<div class='contents'>
    <form action='post_confirm.php' method="post">
        <p>お名前:<input type="text" name="name" size="20" require></p>
        <p>MAIL:<input type="text" name="mail" size="20"></p>
        <p>あなたの年齢は</p>
            <input type='radio' name="old" value="twenty">20代
            <input type='radio' name="old" value="thirty">30代
            <input type='radio' name="old" value="fourty">40代

        <p>何について悩んでいますか</p>
            <input type='radio' name="worries" value="weight">体重が減らない
            <input type='radio' name="worries" value="appetite">食欲がない
            <input type='radio' name="worries" value="kuma">クマがすごい
        <button type="submit" value="送信！">送信</button>
    </form>



</div>
</body>
</html>