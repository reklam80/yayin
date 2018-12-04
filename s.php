<?php

/**
 * @author reklam80
 * @copyright 2018
 */

@header('Content-Type: text/html; charset=utf-8');

$bas = '</tv>';

$dosya_adi="kanalepg.xml";
            
                    
$yaz=fopen($dosya_adi, "a+"); // dosyamýzý açýtýk
fwrite($yaz,$bas);// dosya içeriðimizi oluþturduk.
fclose($yaz); // dosya mýzý kapattýk yazma iþlemini bitirdik.

?>