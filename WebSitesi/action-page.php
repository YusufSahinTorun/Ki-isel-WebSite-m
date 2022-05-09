<?php

error_reporting(0);

function Yonlendir($url,$zaman = 0)
{
    if($zaman != 0)
    {
        header("Refresh: $zaman; url=$url");
    }
    else header("Location: $url");
}
$user = 'b211210094@sakarya.edu.tr';
$pass = 'b211210094';

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $index = strpos($username, "@sakarya.edu.tr");
    
    if($username == $user && $password == $pass){
        Yonlendir("Websitesi.html",3);
        echo "Hoşgeldiniz Kullanıcı " .$_POST['password'];
        
    }
    else {
        Yonlendir("Giris.php",1);
        echo "Yeniden Deneyiniz.. ";
    }    
}
if(empty($_POST['username'])){
    echo "Kullanıcı Adı Boş Bırakılamaz.. ";
}
if(empty($_POST['password'])){
    echo "Şifre Boş Bırakılamaz.. ";
}
if($index < 1){
    echo "Kullanıcı adı Mail adresi olmalıdır..";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sayfası</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css">
</head>
<body>

</div>
</body>
</html>