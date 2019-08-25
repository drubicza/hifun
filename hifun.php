<?php
function bucin()
{
    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL,"http://222.124.10.204/kata.php");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"GET");

    $headers   = array();
    $headers[] = "Connection: keep-alive";
    $headers[] = "Cache-Control: max-age=0";
    $headers[] = "Upgrade-Insecure-Requests: 1";
    $headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36";
    $headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
    $headers[] = "Accept-Encoding: gzip, deflate, br";

    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    $bcin = curl_exec($ch);
    return $bcin;
}

function api()
{
    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL,"http://52.36.169.120/uploads/api.php");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"GET");

    $headers   = array();
    $headers[] = "Connection: keep-alive";
    $headers[] = "Cache-Control: max-age=0";
    $headers[] = "Upgrade-Insecure-Requests: 1";
    $headers[] = "User-Agent: Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1";
    $headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3";
    $headers[] = "Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";

    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    $result = curl_exec($ch);
    return $result;
}

function guest()
{
    $body = "";
    $ch   = curl_init();

    curl_setopt($ch,CURLOPT_URL,"http://hifunapi.kaixin001.com/login/guest/");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$body);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_ENCODING,"gzip");

    $h   = array();
    $h[] = "User-Agent: Android";

    curl_setopt($ch,CURLOPT_HTTPHEADER,$h);
    $result = curl_exec($ch);
    return $result;
}

function bind()
{
    $regapi = json_decode(api());
    $fn     = $regapi->msg->first;
    $fl     = $regapi->msg->last;
    $pic    = $regapi->msg->picture;
    $ss     = json_decode(guest());
    $token  = $ss->msg->token;
    $a      = rand(0,999999);
    $b      = rand(0,999999);
    $c      = rand(0,999999);
    $aa     = "5108".$a."994178";
    $bb     = "866590".$b."607";
    $cc     = "5766".$c."109";
    $http   = "1.0.8|android|6.0.1|OPPO|OPPO|0|0|".$aa."||720x1280|".$bb."|".$bb."|kaixin_main_app|".$cc."|2";
    $andro  = rand(0,9999999);
    $d      = "100909883".$andro."6120028";
    $regx   = "uniqueId=".$d."&channelId=2048&sex=0&nickname=".$fn." ".$fl."&type=7&unionId=&avatar=".$pic."&token=".$token."";
    $bind   = "unicode=".$d."&type=7&token=".$token."";
    $ch     = curl_init();

    curl_setopt($ch,CURLOPT_URL,"http://hifunapi.kaixin001.com/user/isBind/");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$bind);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_ENCODING,"gzip");

    $h   = array();
    $h[] = "User-Agent: Android";
    $h[] = "http-client-data : ".$http."";
    $h[] = "Content-Type: application/x-www-form-urlencoded; charset=utf-8";

    curl_setopt($ch,CURLOPT_HTTPHEADER,$h);
    $result = curl_exec($ch);

    curl_setopt($ch,CURLOPT_HTTPHEADER,$h);
    curl_setopt($ch,CURLOPT_URL,"http://hifunapi.kaixin001.com/login/third/");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$regx);
    curl_setopt($ch,CURLOPT_ENCODING,"gzip, deflate");

    $h   = array();
    $h[] = "Content-Type: application/x-www-form-urlencoded; charset=utf-8";
    $h[] = "user-agent: Android";
    $h[] = "http-client-data : ".$http."";

    curl_setopt($ch,CURLOPT_HTTPHEADER,$h);
    $result = curl_exec($ch);
    return $result;
}

function reff($ref)
{
    $tokenreff = json_decode(bind());
    $tkn       = $tokenreff->msg->token;
    $a         = rand(0,999999);
    $b         = rand(0,999999);
    $c         = rand(0,999999);
    $aa        = "51081".$a."99134178";
    $bb        = "8665290".$b."603CURLOPT_POST";
    $cc        = "57646".$c."10149";
    $https     = "1.0.8|android|6.0.1|OPPO|OPPO|0|0|".$aa."||720x1280|".$bb."|".$bb."|kaixin_main_app|".$cc."|2";
    $body      = "code=".$ref."&token=".$tkn."";
    $ch        = curl_init();

    curl_setopt($ch,CURLOPT_URL,"http://hifunapi.kaixin001.com/invite/setUserCode/");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$body);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_ENCODING,"gzip");

    $h   = array();
    $h[] = "Content-Type: application/x-www-form-urlencoded; charset=utf-8";
    $h[] = "http-client-data: ".$https."";
    $h[] = "Content-Type: application/json; charset=utf-8";
    $h[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0.1; Redmi 4A MIUI/V8.5.7.0.MCCMIED)";
    $h[] = "Host: hifunapi.kaixin001.com";
    $h[] = "Connection: Keep-Alive";

    curl_setopt($ch,CURLOPT_HTTPHEADER,$h);
    $result = curl_exec($ch);
    return $result;
}

$bcin = bucin();
sleep(2);
echo "\x1b[1;36m[#INFO]\x1b[0m : Created by Charles Giovanni\n";
sleep(3);
echo "\x1b[1;36m[#INFO]\x1b[0m : Bot Invite Hifun\n";
sleep(4);
echo "\x1b[1;36m[#INFO]\x1b[0m : Made with \x1b[1;31m 💔 💔 💔 💔 💔\x1b[0m\n";
sleep(3);
echo"\033[1;33m[#QUOTE]: $bcin \033[0m\r\n";
echo "\n";
sleep(2));

echo "Refferal : ";
$ref = trim(fgets(STDIN));

echo "Jumlah : ";
$jum = trim(fgets(STDIN));

echo "Delay : ";
$delay = trim(fgets(STDIN));

for($a = 0; $a < $jum; $a++) {
    sleep($delay);
    $reslt     = reff($ref,$a,$delay);
    $tokenreff = json_decode(reff($ref));
    $tkn       = $tokenreff->code;

    echo "SUCCESS | Respon : ".$tkn."\n";
}
?>
