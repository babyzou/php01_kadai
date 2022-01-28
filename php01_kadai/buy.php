<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購入画面</title>
    <link rel='stylesheet' href='css/reset.css'>
  <link rel='stylesheet' href='css/style.css'>
</head>
<body>
<?=
$worries =$_POST["worries"];
if($worries == "weight"){
    header('Location:https://www.amazon.co.jp/s?k=%E3%81%94%E3%81%BC%E3%81%86+%E8%8C%B6+amazon&adgrpid=104240549486&gclid=Cj0KCQiAosmPBhCPARIsAHOen-M4gy-LkK2TB6pVwLHorbrZAKxogPykRppUimWT-QkFroFA3mlB30AaAtQ8EALw_wcB&hvadid=553911163861&hvdev=c&hvlocphy=1009094&hvnetw=g&hvqmt=b&hvrand=10115936232902040370&hvtargid=kwd-316594937938&hydadcr=27487_14478848&jp-ad-ap=0&tag=googhydr-22&ref=pd_sl_9gwm6rkctd_b_p52');
}elseif($worries == "appetite"){
    header("Location:https://www.amazon.co.jp/dp/B085216N2Z/ref=redir_mobile_desktop?_encoding=UTF8&aaxitk=229fe0a2f08f2941d4d7799909a99009&hsa_cr_id=3301007300203&pd_rd_plhdr=t&pd_rd_r=c840f19c-3067-4299-a67b-25b48eca211f&pd_rd_w=60Bb1&pd_rd_wg=3Rj4C&ref_=sbx_be_s_sparkle_mcd_asin_0_img&th=1");
}elseif($worries == "kuma"){
    header("Location:https://www.amazon.co.jp/%E3%82%81%E3%81%90%E3%82%8A%E3%82%BA%E3%83%A0-%E3%80%90Amazon-co-jp%E9%99%90%E5%AE%9A%E3%80%91%E3%80%90%E5%A4%A7%E5%AE%B9%E9%87%8F%E3%80%91%E3%82%81%E3%81%90%E3%82%8A%E3%82%BA%E3%83%A0%E8%92%B8%E6%B0%97%E3%81%A7%E3%83%9B%E3%83%83%E3%83%88%E3%82%A2%E3%82%A4%E3%83%9E%E3%82%B9%E3%82%AF-%E5%AE%8C%E7%86%9F%E3%82%86%E3%81%9A%E3%81%AE%E9%A6%99%E3%82%8A-16%E6%9E%9A%E5%85%A5/dp/B07ZGV9W29/ref=sr_1_1_sspa?crid=2QDT2XYII5FFS&keywords=%E8%92%B8%E6%B0%97%E3%81%A7%E3%83%9B%E3%83%83%E3%83%88%E3%82%A2%E3%82%A4%E3%83%9E%E3%82%B9%E3%82%AF&qid=1643334727&s=hpc&sprefix=%E8%92%B8%E6%B0%97%E3%81%A7%2Chpc%2C212&sr=1-1-spons&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFKOEE1VUJBRzBEVlImZW5jcnlwdGVkSWQ9QTAyNzkyMjhHTlZTTEdPWVBDOVYmZW5jcnlwdGVkQWRJZD1BM0lNU1pMMEQ3TzRMQSZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU&th=1");
};
?>
</body>
</html>