<?php
define("SECRET_KEY", "sdust");
define("IV", "................");
define("METHOD", "aes-128-cbc"); 
//highlight_file(__FILE__);

$v = '1234567890abcdef;admin=0';
//二进制转换成16进制
echo "v.admin>> ".$v."<br />";
$enc = bin2hex(openssl_encrypt($v.$admin, METHOD, SECRET_KEY, OPENSSL_RAW_DATA, IV));

//openssl_encrypt ( string $data , string $method , string $password [, bool $raw_output = false [, string $iv = "" ]] )
//
echo "enc>> ".$enc."<br />";

echo "cookie >>" . $_COOKIE['user'];
$b = isset($_COOKIE['user'])?$_COOKIE['user']:$enc;

echo "b>> ".$b."<br />";


$user = openssl_decrypt(hex2bin($b), METHOD, SECRET_KEY, OPENSSL_RAW_DATA, IV);
echo "user>> ".$user;

echo "<br />";

$admin = substr($user,-1);
echo $admin;
// if($admin == 1){
//     include 'flag.php';
//     echo $flag;
// }
?>
//P5Q31M