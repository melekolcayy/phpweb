<?php

@require_once("yonetim/ayarlar/baglanti.php");

function temiz ($text){
    $text=strip_tags($text);
    $text=preg_replace('/<a\s+.*?href="([^"]+)"[^>]*>([^<]+)<\/a>/is', '\2 (\1)', $text);
    $text=preg_replace('/<!--.+?-->/', '', $text);
    $text=preg_replace( '/&nbsp;/',' ', $text);
    $text=preg_replace( '/&amp;/', ' ', $text);
    $text=preg_replace( '/&quot;/', ' ', $text);
    $text=htmlspecialchars($text);
    $text=addslashes($text);
    return $text;
}
function g($par){
    $par=temiz(@$_GET[$par]);
    return $par;
}
function p($par){
    $par=htmlspecialchars(addslashes(trim(@$_POST[$par])));
    return $par;
}
function git($par){
    header("Location:{$par}");
}
function s($par){
    $par=$_SESSION[$par];
    return $par;
}
function yoneticikontrol(){
    if(!$_SESSION || !$_SESSION['yetki']=='1'){
        header("Location:giris.php");
    }
}

?>