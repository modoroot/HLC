<?php
if(isset($_COOKIE['MiCookie'])){
    echo $_COOKIE['MiCookie']['foo'];
}else{
    setcookie("MiCookie[foo]",'galleta de vainilla',time()+60);
    setcookie("MiCookie[bar]",'galleta de fresa',time()+60);
}
?>