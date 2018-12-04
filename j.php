<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="tr" />
<?php

/**
 * @author reklam80
 * @copyright 2018
 */
error_reporting(0);
include ("ayar.php");
header('Content-Type: text/html; charset=utf-8');

$tarih = date("Y-m-d");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$d1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__file__) . '/diji.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__file__) . '/diji.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','charset=utf-8'));
curl_setopt($ch, CURLOPT_REFERER, 'no-referrer-when-downgrade');
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36');
$r2 = curl_exec($ch);
curl_close($ch);

$t = json_decode($r2, true);

$i = 0;
foreach ($t['init']['channels'] as $chn) {

    $kanal = mb_strtolower($chn['Title'],"utf-8"); //Kanal ad�
    $kanal = iconv("UTF-8", "iso-8859-9", $kanal);
    $kanal = replace_tr($kanal);
    $kanal2 = $chn['Title']; //Kanal ad�
    $desc = $chn['Description']; //Kanal a��klamas�
    $logo = $d2 . $chn['Id'] .
        '/Image/' . $chn['FileName']; //Kanal logosu
    $kanalno = $chn['Id']; //Kanal numaras�
    $uzanti = @end(explode(".",$logo));
    //$kontrol = ($uzanti) ? $uzanti : 'png';
    //file_download($logo,$kanal);

if(in_array($kanal,$dijiturk)){
  
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$d3 . $kanalno . '/' . $tarih .'/0');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__file__) . '/diji.txt');
    curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__file__) . '/diji.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','charset=utf-8'));
    curl_setopt($ch, CURLOPT_REFERER, $d4);
    curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36');
    $r1 = curl_exec($ch);
    curl_close($ch);

    $s = json_decode($r1, true);

    foreach ($s['listings'] as $chn) {

        foreach ($chn as $k) {

            $program = str_replace(array("&"),array("&amp;"),$k['ProgramName']); //Program ad�
            $ingprogram = str_replace(array("&"),array("&amp;"),$k['OrginalName']); //Program�n ingilizce ad�
            $yapimyil = $k['Year']; //Program�n yada filmin yap�m y�l�
            $basla = str_replace(array(
                "T",
                ":",
                "-"), array(
                "",
                "",
                ""), $k['BroadcastStart']); //Ba�lang�� saati
            $finish = str_replace(array(
                "T",
                ":",
                "-"), array(
                "",
                "",
                ""), $k['BroadcastEnd']); //Program biti� saati
            $aciklama = str_replace(array("&"),array("&amp;"),$k['LongDescription']); //program a��klamas�
            $ozet = str_replace(array("&"),array("&amp;"),$k['Synopsis']); //Program �zeti
            $oyuncu = $k['Actors']; //Program konu�u veya filmin oyuncular�
            $epgid = $k['EPGBroadcastID']; //Kanal detaylar� yeralmaktad�r

                if(in_array($kanal,$dijiturk)){

                    $start = '<programme start="' . $basla . ' +0300" stop="' . $finish .
                        ' +0300" channel="' . $kanal . '">
                    <title lang="tr">' . $program . '</title>
                   	<desc lang="tr">' . $ozet . $aciklama . '</desc>
                    <category lang="tr"></category>
                   	<icon src="'.$site.'/dijiturk/images/'.$kanal.'.'.$uzanti.'"/>
                   	<credits>
                    <actor>' . $oyuncu . '</actor>
                    </credits>
                    <date>' . $yapimyil . '</date>';
                    $end = '</programme>';
                    
                    $dosya_adi = "kanalepg.xml";
                    $yaz = fopen($dosya_adi, "a"); // dosyam�z� a��t�k
                    fwrite($yaz, $start . $end); // dosya i�eri�imizi olu�turduk.
                    fclose($yaz); // dosya m�z� kapatt�k yazma i�lemini bitirdik.
                    
               }
        }

    }
++$i;
}

}
?>