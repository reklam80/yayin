<?php

/**
 * @author reklam80
 * @copyright 2018
 */

@header('Content-Type: text/html; charset=utf-8');

$bas = '</tv>';

$dosya_adi="kanalepg.xml";
            
                    
$yaz=fopen($dosya_adi, "a+"); // dosyam�z� a��t�k
fwrite($yaz,$bas);// dosya i�eri�imizi olu�turduk.
fclose($yaz); // dosya m�z� kapatt�k yazma i�lemini bitirdik.

?>