<?php

/**
 * @author reklam80
 * @copyright 2018
 */
include ("ayar.php");

$a = $ti1;

$b = file_get_contents($a);

$d = explode('<div class="pro-epg-viewport-guide-line program-line">',$b);
$e = explode('</div>',$d[1]);
$f = explode('</div>',$d[2]);
$g = explode('</div>',$d[3]);
$h = explode('</div>',$d[4]);


    
for($i=0; $i<12; $i++){

preg_match_all("@<div class=\"pro-epg-viewport-guide-line-item\" data-proadmin-id=\"el-pro-epg-viewport-guide-line-item\" data-program-title=\"(.*?)\" data-program-description=\"-\" data-program-time-interval=\"(.*?)\" data-channel-referral-url=\"/canli-yayin\" style=\"(.*?)\">@si",$e[$i],$j);
preg_match_all("@<div class=\"pro-epg-viewport-guide-line-item\" data-proadmin-id=\"el-pro-epg-viewport-guide-line-item\" data-program-title=\"(.*?)\" data-program-description=\"-\" data-program-time-interval=\"(.*?)\" data-channel-referral-url=\"https://www.tivibu.com.tr\" style=\"(.*?)\">@si",$f[$i],$k);
preg_match_all("@<div class=\"pro-epg-viewport-guide-line-item\" data-proadmin-id=\"el-pro-epg-viewport-guide-line-item\" data-program-title=\"(.*?)\" data-program-description=\"-\" data-program-time-interval=\"(.*?)\" data-channel-referral-url=\"https://www.tivibu.com.tr\" style=\"(.*?)\">@si",$g[$i],$l);
preg_match_all("@<div class=\"pro-epg-viewport-guide-line-item\" data-proadmin-id=\"el-pro-epg-viewport-guide-line-item\" data-program-title=\"(.*?)\" data-program-description=\"-\" data-program-time-interval=\"(.*?)\" data-channel-referral-url=\"https://www.tivibu.com.tr\" style=\"(.*?)\">@si",$h[$i],$m);
                 
 for($n=0; $n<count($m[1]); $n++){

    $t4mac = $m[1][$n];
    $t4saat = explode("-",$m[2][$n]);
    $t4start = str_replace(":","",$t4saat[0]);$t4stop = str_replace(":","",$t4saat[1]);
    $t3mac = $l[1][$n];
    $t3saat = explode("-",$l[2][$n]);
    $t3start = str_replace(":","",$t3saat[0]);$t3stop = str_replace(":","",$t3saat[1]);
    $t2mac = $k[1][$n];
    $t2saat = explode("-",$k[2][$n]);
    $t2start = str_replace(":","",$t2saat[0]);$t2stop = str_replace(":","",$t2saat[1]);
    $t1mac = $j[1][$n];
    $t1saat = explode("-",$j[2][$n]);
    $t1start = str_replace(":","",$t1saat[0]);$t1stop = str_replace(":","",$t1saat[1]);
    $t = date("Ymd");
	
    if(empty($m1[1][$n])){
        
        $baslik = $t4mac;
        $keys = "tivibuspor4";
        $starttime = trim($t4start);
        $endtime = trim($t4stop)."00";
        $start = '<programme start="'.$t.$starttime.'00 +0300" stop="' . $t.$endtime .
                        ' +0300" channel="'.$keys.'">
                    <title lang="tr">' . $baslik . '</title>
                   	<desc lang="tr"></desc>
                    <category lang="tr">Spor</category>
                   	<icon src="'.$site.'/dsmart/images/spor.jpg"/>
                   	<credits>
                    <actor></actor>
                    </credits>
                    <date></date>';
                    $end = '</programme>';
                    $dosya_adi = "kanalepg.xml";
                        
                        $yaz = fopen($dosya_adi, "a"); // dosyamýzý açýtýk
                        fwrite($yaz, $start . $end); // dosya içeriðimizi oluþturduk.
                        fclose($yaz); // dosya mýzý kapattýk yazma iþlemini bitirdik.
    }
    if(($l[1][$n])){
        $baslik = $t3mac;
        $keys = "tivibuspor3";
        $starttime = trim($t3start);
        $endtime = trim($t3stop)."00";
        $start = '<programme start="'.$t.$starttime.'00 +0300" stop="' . $t.$endtime .
                        ' +0300" channel="'.$keys.'">
                    <title lang="tr">' . $baslik . '</title>
                   	<desc lang="tr"></desc>
                    <category lang="tr">Spor</category>
                   	<icon src="'.$site.'/dsmart/images/spor.jpg"/>
                   	<credits>
                    <actor></actor>
                    </credits>
                    <date></date>';
                    $end = '</programme>';
                    $dosya_adi = "kanalepg.xml";

                        
                        $yaz = fopen($dosya_adi, "a"); // dosyamýzý açýtýk
                        fwrite($yaz, $start . $end); // dosya içeriðimizi oluþturduk.
                        fclose($yaz); // dosya mýzý kapattýk yazma iþlemini bitirdik.
    }
    if(($k[1][$n])){
        $baslik = $t2mac;
        $keys = "tivibuspor2";
        $starttime = trim($t2start);
        $endtime = trim($t2stop)."00";
        $start = '<programme start="'.$t.$starttime.'00 +0300" stop="' . $t.$endtime .
                        ' +0300" channel="'.$keys.'">
                    <title lang="tr">' . $baslik . '</title>
                   	<desc lang="tr"></desc>
                    <category lang="tr">Spor</category>
                   	<icon src="'.$site.'/dsmart/images/spor.jpg"/>
                   	<credits>
                    <actor></actor>
                    </credits>
                    <date></date>';
                    $end = '</programme>';
                    $dosya_adi = "kanalepg.xml";

                        
                        $yaz = fopen($dosya_adi, "a"); // dosyamýzý açýtýk
                        fwrite($yaz, $start . $end); // dosya içeriðimizi oluþturduk.
                        fclose($yaz); // dosya mýzý kapattýk yazma iþlemini bitirdik.
    }
    if(($j[1][$n])){
        $baslik = $t1mac;
        $keys = "tivibuspor1";
        $starttime = trim($t1start);
        $endtime = trim($t1stop)."00";
        $start = '<programme start="'.$t.$starttime.'00 +0300" stop="' . $t.$endtime .
                        ' +0300" channel="'.$keys.'">
                    <title lang="tr">' . $baslik . '</title>
                   	<desc lang="tr"></desc>
                    <category lang="tr">Spor</category>
                   	<icon src="'.$site.'/dsmart/images/spor.jpg"/>
                   	<credits>
                    <actor></actor>
                    </credits>
                    <date></date>';
                    $end = '</programme>';
                    $dosya_adi = "kanalepg.xml";
                        
                        
                        $yaz = fopen($dosya_adi, "a"); // dosyamýzý açýtýk
                        fwrite($yaz, $start . $end); // dosya içeriðimizi oluþturduk.
                        fclose($yaz); // dosya mýzý kapattýk yazma iþlemini bitirdik.
    }
    
                        
                    
                        
    
}
}

?>