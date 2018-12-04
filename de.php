<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="tr" />
<?php

/**
 * @author reklam80
 * @copyright 2018
 */
include ("ayar.php");

error_reporting(E_ALL);
ini_set('display_errors', TRUE); 
ini_set('display_startup_errors', TRUE); 

header('Content-Type: text/html; charset=utf-8');

$tarih = date("Ymd");

require 'ortak.php';

for($i=1; $i<21; $i++){//Toplam sayfa sayýsý 20 tane 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$de1.$i.'&limit=10');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__file__) . '/diji.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__file__) . '/diji.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','charset=utf-8'));
curl_setopt($ch, CURLOPT_REFERER, $de2);
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36');
$r2 = curl_exec($ch);
curl_close($ch);

$t = json_decode($r2, true);

foreach($t['items'] as $k){

    $kanaladi =  $k['channel_name'];
    $kanal = mb_strtolower($k['channel_name'],"utf-8"); //Kanal adý
    $kanal = iconv("UTF-8", "iso-8859-9", $kanal);
    $kanal = replace_tr($kanal);
    @$logo = $de3.$k['logo'];//kanal logo adresi
    $sis_id = $de4.$k['sis_id'];
    //file_download($logo,$kanal);//Resimleri sunucuya indiriyoruz
    //unlink("./dsmart/images/".$kanal.".png");
    $kanalid = $de5.$k['_id']."&day=".$tarih;//kanal bilgileri
    
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
    $sis_id);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__file__) . '/diji.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__file__) . '/diji.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','charset=utf-8'));
curl_setopt($ch, CURLOPT_REFERER, $de2);
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36');
$r3 = curl_exec($ch);
curl_close($ch);

$r = json_decode($r3, true);

if(in_array($kanal,$dsmart)){
   $b = '<channel id="' . $kanal . '">
    <display-name lang="tr">' .$kanaladi. ' </display-name>
    <url>http://www.'.$kanal.'.tv</url>
  <icon src="'.$site.'"/dsmart/images/'.$kanal.'.png"/></channel>';
  
  echo $kanal."<br>";
   
}
if(isset($r['stream'])){
$day = date("d.m.Y");
foreach($r['stream'] as $p){
	
    if($p['day']==$day){
     
     
        foreach($p['events'] as $m){


            $proghour =  $m['hour'];//Program baþlama saati
            $progid =  $m['id'];
            $progname = $m['program'];//Program adý
            $progdetay = $de6.$progid;
            $g = file_get_contents($progdetay);
            
            $c = json_decode($g, true);
            $progadi = str_replace(array("&","/"),array("&amp;"," "),$c['name']);
            $aciklama = str_replace(array("&","/"),array("&amp;"," "),$c['content']);
            $oyuncular = str_replace(array("&","/"),array("&amp;"," "),$c['subject']);//Oyuncular , progamram adý ve tür bilgisi
            $sure = $c['time'];//Programýn süresi
            $kanalda = $c['channelName'];//Hangi kanalda yayýnlandýðý
            $dkanal = mb_strtolower($c['channelName'],"utf-8"); //Kanal adý
            $dkanal = iconv("UTF-8", "iso-8859-9", $dkanal);
            $dkanal = replace_tr($dkanal);
            $psure = $c['streamHour'];
            $al = explode("-",$psure);
            
            ##########Programýn TOPLAM SÜRESÝNÝ HESAPLAMA######################
            $saat1 = $al[0].":00";  

            $saat2 = strtotime($al[1].":00"); 
            
            list($saat,$dakika,$saniye) = explode(':', $saat1);   
            $psuresi = @date("H:i:s", $saat2- ($saat*3600)- ($dakika*60)- $saniye);//Programýn toplam süresi
            $s1 = $proghour.":00";  //Programýn orjinal baþlama saatini yazýyoruz
            $s2 = strtotime($psuresi); //Daha önce topladýðýmýz program süresiini ekliyoruz.
            list($sat,$dakka,$saniy) = explode(':', $s1);   
            $progbitissuresi = date("H:i:s", $s2+ ($sat*3600)+ ($dakka*60)+ $saniy);//Programýn toplam süresi
            $basladi = $tarih.$s1;
            $bitti = $progbitissuresi;
            $basladi = str_replace(array(":","-"),array("",""),$basladi);
            $bitti = str_replace(array(":"),array(""),$bitti);
            $uzanti = @end(explode(".",$logo));

            if(in_array($kanal,$dsmart)){
				
                        $start = '<programme start="' . $basladi . ' +0300" stop="' . $tarih.$bitti .
                            ' +0300" channel="'.$kanal.'">
                        <title lang="tr">' . $progadi . '</title>
                       	<desc lang="tr">' . $aciklama . '</desc>
                        <category lang="tr">'.'</category>
                       	<icon src="'.$site.'/dsmart/images/'.$kanal.'.png"/>
                       	<credits>
                        <actor>' . $oyuncular. '</actor>
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

}  
}
}
}

?>