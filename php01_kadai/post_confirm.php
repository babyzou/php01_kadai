<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/reset.css'>
  <link rel='stylesheet' href='css/style.css'>
    <title>おすすめ商品紹介</title>
</head>
<body>
    <?php
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    ?>

<p><?=$name. "さんあなたにおすすめの商品はこちら";?></p>

<?=
$worries =$_POST["worries"];
$old =$_POST["old"];
if($old =="twenty" ||$worries == "weight"){
    echo "$name.さんへのおすすめ商品はモリモリ黒ごぼう茶です。";
}elseif($old =="thirty" ||$worries == "weight"){
    echo "おすすめ商品はモリモリ黒ごぼう茶です。";
}elseif($old =="fourty" ||$worries == "weight"){
    echo "おすすめ商品はモリモリ黒ごぼう茶です。";
}elseif($old =="twenty" ||$worries == "appetite"){
    echo "おすすめ商品は胃腸薬です。";
}elseif($old =="thirty" ||$worries == "appetite"){
    echo "おすすめ商品は胃腸薬です。";
}elseif($old =="twenty" ||$worries == "appetite"){
    echo "おすすめ商品は胃腸薬です。";
}elseif($old =="twenty" ||$worries == "kuma"){
    echo "おすすめ商品は蒸気でホットアイマスクです。";
}elseif($old =="thirty" ||$worries == "kuma"){
    echo "おすすめ商品は蒸気でホットアイマスクです。";
}elseif($old =="foury" ||$worries == "kuma"){
    echo "おすすめ商品は蒸気でホッとアイマスクです。";
}
?>

<!-- ポイント抽選 -->
<!-- 
$num = random(0,10);
if ($num == 0){
    echo "ポイント100倍！！！！";
}elseif(9>= $num > 0){
echo "ポイント10倍！！！！";
}elseif($num == 10){
echo "ポイント2倍！！！！";
}; -->






<!-- 商品リンク先に遷移 -->
<form action="buy.php" method="post">
<button type="submit">この商品を購入する</button>
</form>


<!-- <p>MAIL<?=$mail?></p> -->
</body>
</html>

<!-- switchボツ -->
<!-- //switch ($worries){
    case $worries =="weight" :
    $shohin = モリモリ黒ごぼう茶;
    break;
    case "appetite" ;
    $shohin = ビタアルト;
    break;
    case "kuma" ;
    $shohin = 蒸気でホットアイマスク;
    break;
    default:
-->