<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="tr" />
<?php

/**
 * @author reklam80
 * @copyright 2018
 */
 
include("ayar.php");
 
 header('Content-Type: text/html; charset=utf-8');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$tu1);
curl_setopt($ch, CURLOPT_HEADER , true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $tu4);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__file__) . '/diji.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__file__) . '/diji.txt');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json;charset=UTF-8',
'Content-Encoding: gzip, deflate, br','Accept: application/json, text/plain, */*','Referer: https://web.tvplus.com.tr/tv',
'Connection: keep-alive',
'Content-Type: text/plain;charset=UTF-8','Access-Control-Allow-Credentials: true','Accept-Language: en-GB,en-US;q=0.9,en;q=0.8',
'Access-Control-Allow-Origin: https://web.tvplus.com.tr','Vary: Accept-Encoding','Access-Control-Allow-Methods: *',
'Transfer-Encoding: chunked','Access-Control-Allow-Headers: accept, origin, content-type,Authorization,authorization,X_CSRFToken',
'Content-Length:'.strlen($tu4)));
curl_setopt($ch, CURLOPT_REFERER, $tu3);
curl_setopt($ch, CURLOPT_USERAGENT,
    'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36');
$r2 = curl_exec($ch);

preg_match("/JSESSIONID=(.*?);/si",$r2,$ses);

$tk = json_decode($r2,true);

$sesid = @$ses[1];

foreach($hr as $kanal => $id) {

$keys = mb_strtolower($kanal,"utf-8");
$keys = iconv("UTF-8", "iso-8859-9", $keys);
$keys = replace_tr($keys);
$j = '<channel id="' . $keys . '">
    <display-name lang="tr">' .$kanal. ' </display-name>
    <url>http://www.'.$keys.'.tv</url>
  <icon src="resimyok"/></channel>';
  
echo $id." - ".$kanal."<br>";

$dun = mktime(0,0,0,date("m"),date("d")-1,date("Y"));  
$endtime = date("Ymd")."235959";
$begintime = date("Ymd", $dun)."000000";
$b = array("type" =>"2","channelid" => $id,"begintime" =>$begintime,"endtime" => $endtime );
$ta = json_encode($b);

  
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$tu2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $ta);
curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__file__) . '/diji.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__file__) . '/diji.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','charset=utf-8','Cookie: JSESSIONID='.$sesid.''));
curl_setopt($ch, CURLOPT_REFERER, $tu3);
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36');
$r3 = curl_exec($ch);
curl_close($ch);

$jk = json_decode($r3,true);

if (isset($jk['playbilllist']) && is_array($jk['playbilllist'])) {
foreach($jk['playbilllist'] as $bugun){
    
    
        $ayniresim = array("france24english","fashiononetv","lifeplus","carouselinternational","fastandfunhd","edgesporthd","karadenizturktv","skynewsarabia","360tunebox","tv5monde","france24arabic","planetturk","docuboxhd","gametoonhd","davincihd","lovenaturehd","rtespanolhd","dmaxhd","kanal16","akillitv","englishclubtv","natgeowildhd","sonychannel","tarimtv","euronews","abmoteurs","skynewsarabia","fashionboxhd","channelonerussia","aljazeeraenglish","aljazeeraarabic","animaux","trtelarabia","viasatexplore","animalplanet");
        $baslik = str_replace(array("&"),array("&amp;"),$bugun['name']);
        $aciklama = isset($bugun['introduce']) ? $bugun['introduce'] : '';//Açýklama boþta olabiliyor
        $starttime = str_replace(array("-",":"," ","UTC+0300"),array("","","",""),$bugun['starttime']);
        $endtime = str_replace(array("-",":"," ","UTC+0300"),array("","","",""),$bugun['endtime']);
        $cnlid = $bugun['channelid'];
        $kanalid = $bugun['id'];
        $oyuncular = isset($bugun['cast']['actor']) ? $bugun['cast']['actor'] : '';
        $yonetmen = isset($bugun['cast']['director']) ? " Yonetmen: ".$bugun['cast']['director'] : '';
        $key = array_search($cnlid, $hr);
        $resim = @explode(",",$bugun['picture']['poster']);
        $uzanti = @end(explode(".",$resim[0]));//resimin uzantýsýný alýyoruz.
        $uzanti = ($uzanti) ? $uzanti : '';
        $rez = isset($resim[0]) ? $resim[0] : 'resimyok.jpg';
        
        
        echo $baslik. "</br> ";
        /*
        if(in_array($keys,$ayniresim)){
            //file_download($resim[0],$keys);//resmi sunucularýmýza indiriyoruz.
            $icon = ($uzanti) ? $keys.".".$uzanti : 'resimyok.jpg';
            //unlink("./tvplus/images/".$keys.".".$uzanti);
        }else{
            //file_download($resim[0],$starttime.$keys);//resmi sunucularýmýza indiriyoruz.
            $icon = ($uzanti) ? $starttime.$keys.".".$uzanti : 'resimyok.jpg';
            //unlink("./tvplus/images/".$starttime.$keys.".".$uzanti);
            
        }
        */
        $res = '<img src="'.$resim[0].'"/>';
        $programturu = isset($bugun['genres']) ? " Tur: ".$bugun['genres'] : '';//Program adý boþ alabiliyor


                    $start = '<programme start="' . $starttime . ' +0300" stop="' . $endtime .
                        ' +0300" channel="'.$keys.'">
                    <title lang="tr">' . $baslik . '</title>
                   	<desc lang="tr">' . $aciklama . '</desc>
                    <category lang="tr">'.$programturu.'</category>
                   	<icon src="'.$rez.'"/>
                   	<credits>
                    <actor>' . $oyuncular.$yonetmen . '</actor>
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