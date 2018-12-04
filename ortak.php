<?php

/**
 * @author reklam80
 * @copyright 2018
 */
 
header('Content-Type: text/html; charset=utf-8');
include("ayar.php");

$bas = '<?xml version="1.0" encoding="UTF-8"?>
<tv>
<channel id="tivibuspor1">
    <display-name lang="tr">TIVIBU SPOR 1 HD</display-name>
    <url>http://www.tivibuspor1.tv</url>
  <icon src="'.$site.'/dsmart/images/tivibuspor.png"/></channel>
  <channel id="tivibuspor2">
    <display-name lang="tr">TIVIBU SPOR 2 HD</display-name>
    <url>http://www.tivibuspor2.tv</url>
  <icon src="'.$site.'/dsmart/images/tivibuspor2.png"/></channel>
  <channel id="tivibuspor3">
    <display-name lang="tr">TIVIBU SPOR 3 HD</display-name>
    <url>http://www.tivibuspor3.tv</url>
  <icon src="'.$site.'/dsmart/images/tivibuspor3.png"/></channel>
  <channel id="tivibuspor4">
    <display-name lang="tr">TIVIBU SPOR 4 HD</display-name>
    <url>http://www.tivibuspor4.tv</url>
  <icon src="'.$site.'/dsmart/images/tivibuspor4.png"/></channel>
 <channel id="sporsmart">
    <display-name lang="tr">Spor Smart </display-name>
    <url>http://www.tivibuspor1.tv</url>
  <icon src="'.$site.'/dsmart/images/sporsmart.png"/></channel>
<channel id="lifeplus">
    <display-name lang="tr">LIFEPLUS </display-name>
    <url>http://www.lifeplus.tv</url>
  <icon src="'.$site.'/dsmart/images/lifeplus.jpg"/></channel>
<channel id="ssport">
    <display-name lang="tr">S SPORT </display-name>
    <url>http://www.ssport.tv</url>
  <icon src="'.$site.'/dsmart/images/ssport.png"/></channel>
<channel id="fxhd">
    <display-name lang="tr">FX HD </display-name>
    <url>http://www.fxhd.tv</url>
  <icon src="'.$site.'/dsmart/images/fx.png"/></channel>
<channel id="foxcrimehd">
    <display-name lang="tr">FOX CRIME HD </display-name>
    <url>http://www.foxcrimehd.tv</url>
  <icon src="'.$site.'/dsmart/images/foxcrime.png"/></channel>
<channel id="filtvhd">
    <display-name lang="tr">Fil TV HD </display-name>
    <url>http://www.filtvhd.tv</url>
  <icon src="'.$site.'/dsmart/images/filtv.png"/></channel>
<channel id="sonychannel">
    <display-name lang="tr">SONY CHANNEL </display-name>
    <url>http://www.sonychannel.tv</url>
  <icon src="'.$site.'/dsmart/images/sonychannel.jpg"/></channel>
<channel id="sinemaailehd">
    <display-name lang="tr">SINEMA AILE HD </display-name>
    <url>http://www.sinemaailehd.tv</url>
  <icon src="'.$site.'/dsmart/images/sinemaaile.png"/></channel>
<channel id="sinematv1001hd">
    <display-name lang="tr">SINEMA TV 1001 HD </display-name>
    <url>http://www.sinematv1001hd.tv</url>
  <icon src="'.$site.'/dsmart/images/sinema1001.png"/></channel>
<channel id="sinematvaksiyonhd">
    <display-name lang="tr">SINEMA TV AKSIYON HD </display-name>
    <url>http://www.sinematvaksiyonhd.tv</url>
  <icon src="'.$site.'/dsmart/images/sinematvaksiyon.png"/></channel>
<channel id="trt1hd">
    <display-name lang="tr">TRT1 HD </display-name>
    <url>http://www.trt1hd.tv</url>
  <icon src="'.$site.'/dsmart/images/trt1.png"/></channel>
<channel id="kanaldhd">
    <display-name lang="tr">KANAL D HD </display-name>
    <url>http://www.kanaldhd.tv</url>
  <icon src="'.$site.'/dsmart/images/kanald.png"/></channel>
<channel id="startvhd">
    <display-name lang="tr">STAR TV HD </display-name>
    <url>http://www.startvhd.tv</url>
  <icon src="'.$site.'/dsmart/images/star.png"/></channel>
<channel id="atvhd">
    <display-name lang="tr">ATV HD </display-name>
    <url>http://www.atvhd.tv</url>
  <icon src="'.$site.'/dsmart/images/atv.png"/></channel>
<channel id="showtvhd">
    <display-name lang="tr">SHOW TV HD </display-name>
    <url>http://www.showtvhd.tv</url>
  <icon src="'.$site.'/dsmart/images/showtv.png"/></channel>
<channel id="foxhd">
    <display-name lang="tr">FOX HD </display-name>
    <url>http://www.foxhd.tv</url>
  <icon src="'.$site.'/dsmart/images/fox.png"/></channel>
<channel id="tv8hd">
    <display-name lang="tr">TV8 HD </display-name>
    <url>http://www.tv8hd.tv</url>
  <icon src="'.$site.'/dsmart/images/tv8.png"/></channel>
<channel id="tv85">
    <display-name lang="tr">TV8,5 </display-name>
    <url>http://www.tv85.tv</url>
  <icon src="'.$site.'/dsmart/images/tv85.png"/></channel>
<channel id="a2hd">
    <display-name lang="tr">A2 HD </display-name>
    <url>http://www.a2hd.tv</url>
  <icon src="'.$site.'/dijiturk/images/a2hd.png"/></channel>
<channel id="tlc">
    <display-name lang="tr">TLC </display-name>
    <url>http://www.tlc.tv</url>
  <icon src="'.$site.'/dijiturk/images/tlc.png"/></channel>
<channel id="lifetime">
    <display-name lang="tr">LIFETIME </display-name>
    <url>http://www.lifetime.tv</url>
  <icon src="'.$site.'/dsmart/images/lifetime.png"/></channel>
<channel id="teve2hd">
    <display-name lang="tr">TEVE2 HD </display-name>
    <url>http://www.teve2hd.tv</url>
  <icon src="'.$site.'/dsmart/images/teve2.png"/></channel>
<channel id="kanal7hd">
    <display-name lang="tr">KANAL 7 HD </display-name>
    <url>http://www.kanal7hd.tv</url>
  <icon src="'.$site.'/dsmart/images/kanal7.png"/></channel>
<channel id="beyaztvhd">
    <display-name lang="tr">BEYAZ TV HD </display-name>
    <url>http://www.beyaztvhd.tv</url>
  <icon src="'.$site.'/dsmart/images/beyaztv.png"/></channel>
<channel id="flashtv">
    <display-name lang="tr">FLASH TV </display-name>
    <url>http://www.flashtv.tv</url>
  <icon src="'.$site.'/dijiturk/images/flashtv.png"/></channel>
<channel id="360hd">
    <display-name lang="tr">360 HD </display-name>
    <url>http://www.360hd.tv</url>
  <icon src="'.$site.'/dsmart/images/360.png"/></channel>
<channel id="dmaxhd">
    <display-name lang="tr">DMAX HD </display-name>
    <url>http://www.dmaxhd.tv</url>
  <icon src="'.$site.'/dsmart/images/dmax.png"/></channel>
<channel id="halktv">
    <display-name lang="tr">HALK TV </display-name>
    <url>http://www.halktv.tv</url>
  <icon src="'.$site.'/dijiturk/images/halktv.png"/></channel>
<channel id="cemtv">
    <display-name lang="tr">CEM TV </display-name>
    <url>http://www.cemtv.tv</url>
  <icon src="'.$site.'/dsmart/images/cemtv.jpg"/></channel>
<channel id="cnnturkhd">
    <display-name lang="tr">CNN TURK HD </display-name>
    <url>http://www.cnnturkhd.tv</url>
  <icon src="'.$site.'/dsmart/images/cnnturk.png"/></channel>
<channel id="ntvhd">
    <display-name lang="tr">NTV HD </display-name>
    <url>http://www.ntvhd.tv</url>
  <icon src="'.$site.'/dsmart/images/ntv.png"/></channel>
<channel id="haberturkhd">
    <display-name lang="tr">HABERTURK HD </display-name>
    <url>http://www.haberturkhd.tv</url>
  <icon src="'.$site.'/dsmart/images/haberturk.png"/></channel>
<channel id="ahaberhd">
    <display-name lang="tr">A HABER HD </display-name>
    <url>http://www.ahaberhd.tv</url>
  <icon src="'.$site.'/dsmart/images/ahaber.png"/></channel>
<channel id="trthaberhd">
    <display-name lang="tr">TRT HABER HD </display-name>
    <url>http://www.trthaberhd.tv</url>
  <icon src="'.$site.'/dsmart/images/trthaber.png"/></channel>
<channel id="24hd">
    <display-name lang="tr">24 HD </display-name>
    <url>http://www.24hd.tv</url>
  <icon src="'.$site.'/dsmart/images/24.png"/></channel>
<channel id="ulketvhd">
    <display-name lang="tr">ULKE TV HD </display-name>
    <url>http://www.ulketvhd.tv</url>
  <icon src="'.$site.'/dsmart/images/ulketv.png"/></channel>
<channel id="tgrthaber">
    <display-name lang="tr">TGRT HABER </display-name>
    <url>http://www.tgrthaber.tv</url>
  <icon src="'.$site.'/dsmart/images/tgrthaber.png"/></channel>
<channel id="tvnethd">
    <display-name lang="tr">TVNET HD </display-name>
    <url>http://www.tvnethd.tv</url>
  <icon src="'.$site.'/dsmart/images/tvnet.png"/></channel>
<channel id="bloomberghthd">
    <display-name lang="tr">BLOOMBERG HT HD </display-name>
    <url>http://www.bloomberghthd.tv</url>
  <icon src="'.$site.'/dsmart/images/bloomberght.png"/></channel>
<channel id="trtworldhd">
    <display-name lang="tr">TRT World HD </display-name>
    <url>http://www.trtworldhd.tv</url>
  <icon src="'.$site.'/dijiturk/images/trtworldhd.png"/></channel>
<channel id="trtsporhd">
    <display-name lang="tr">TRT SPOR HD </display-name>
    <url>http://www.trtsporhd.tv</url>
  <icon src="'.$site.'/dsmart/images/trtspor.png"/></channel>
<channel id="asporhd">
    <display-name lang="tr">A SPOR HD </display-name>
    <url>http://www.asporhd.tv</url>
  <icon src="'.$site.'/dsmart/images/aspor.png"/></channel>
<channel id="fbtv">
    <display-name lang="tr">FB TV </display-name>
    <url>http://www.fbtv.tv</url>
  <icon src="'.$site.'/dsmart/images/fbtv.png"/></channel>
<channel id="nbatvhd">
    <display-name lang="tr">NBA TV HD </display-name>
    <url>http://www.nbatvhd.tv</url>
  <icon src="'.$site.'/dsmart/images/nbatv.png"/></channel>
<channel id="eurosport1hd">
    <display-name lang="tr">EUROSPORT 1 HD </display-name>
    <url>http://www.eurosport1hd.tv</url>
  <icon src="'.$site.'/dsmart/images/eurosport.png"/></channel>
<channel id="eurosport2hd">
    <display-name lang="tr">EUROSPORT 2 HD </display-name>
    <url>http://www.eurosport2hd.tv</url>
  <icon src="'.$site.'/dsmart/images/eurosport2.png"/></channel>
<channel id="fightboxhd">
    <display-name lang="tr">FIGHTBOX HD </display-name>
    <url>http://www.fightboxhd.tv</url>
  <icon src="'.$site.'/dsmart/images/fightbox.png"/></channel>
<channel id="trtbelgeselhd">
    <display-name lang="tr">TRT BELGESEL HD </display-name>
    <url>http://www.trtbelgeselhd.tv</url>
  <icon src="'.$site.'/dsmart/images/trtbelgesel.png"/></channel>
<channel id="yabantv">
    <display-name lang="tr">YABAN TV </display-name>
    <url>http://www.yabantv.tv</url>
  <icon src="'.$site.'/dsmart/images/yabantv.png"/></channel>
<channel id="natgeowildhd">
    <display-name lang="tr">NAT GEO WILD HD </display-name>
    <url>http://www.natgeowildhd.tv</url>
  <icon src="'.$site.'/dsmart/images/natgeowild.png"/></channel>
<channel id="natgeopeoplehd">
    <display-name lang="tr">NATIONAL GEO PEOPLE HD</display-name>
    <url>http://www.natgeopeople.tv</url>
  <icon src="'.$site.'/dsmart/images/natgeopeople.png"/></channel>
<channel id="discoverychannelhd">
    <display-name lang="tr">DISCOVERY CHANNEL HD </display-name>
    <url>http://www.discoverychannelhd.tv</url>
  <icon src="'.$site.'/dsmart/images/discovery.png"/></channel>
<channel id="discoverysciencehd">
    <display-name lang="tr">DISCOVERY SCIENCE HD </display-name>
    <url>http://www.discoverysciencehd.tv</url>
  <icon src="'.$site.'/dsmart/images/discoveryscience.png"/></channel>
<channel id="animalplanet">
    <display-name lang="tr">ANIMAL PLANET </display-name>
    <url>http://www.animalplanet.tv</url>
  <icon src="'.$site.'/dsmart/images/animalplanet.png"/></channel>
<channel id="davincihd">
    <display-name lang="tr">DA VINCI HD </display-name>
    <url>http://www.davincihd.tv</url>
  <icon src="'.$site.'/dsmart/images/davincilearning.png"/></channel>
<channel id="disneychannel">
    <display-name lang="tr">DISNEY CHANNEL </display-name>
    <url>http://www.disneychannel.tv</url>
  <icon src="'.$site.'/dsmart/images/disneychannel.png"/></channel>
<channel id="cartoonnetwork">
    <display-name lang="tr">CARTOON NETWORK </display-name>
    <url>http://www.cartoonnetwork.tv</url>
  <icon src="'.$site.'/dsmart/images/cartoonnetwork.png"/></channel>
<channel id="minikacocuk">
    <display-name lang="tr">MINIKA COCUK </display-name>
    <url>http://www.minikacocuk.tv</url>
  <icon src="'.$site.'/dsmart/images/minikacocuk.png"/></channel>
<channel id="minikago">
    <display-name lang="tr">MINIKA GO </display-name>
    <url>http://www.minikago.tv</url>
  <icon src="'.$site.'/dsmart/images/minikago.png"/></channel>
<channel id="trtcocukhd">
    <display-name lang="tr">TRT COCUK HD </display-name>
    <url>http://www.trtcocukhd.tv</url>
  <icon src="'.$site.'/dsmart/images/trtcocuk.png"/></channel>
<channel id="planetcocuk">
    <display-name lang="tr">PLANET COCUK </display-name>
    <url>http://www.planetcocuk.tv</url>
  <icon src="'.$site.'/dsmart/images/planetcocuk.jpg"/></channel>
<channel id="kidzanimez">
    <display-name lang="tr">KIDZ ANIMEZ </display-name>
    <url>http://www.kidzanimez.tv</url>
  <icon src="'.$site.'/dsmart/images/kidzanimez.png"/></channel>
<channel id="benguturk">
    <display-name lang="tr">BENGUTURK </display-name>
    <url>http://www.benguturk.tv</url>
  <icon src="'.$site.'/dsmart/images/benguturktv.png"/></channel>
<channel id="tarimtv">
    <display-name lang="tr">TARIM TV </display-name>
    <url>http://www.tarimtv.tv</url>
  <icon src="'.$site.'/dsmart/images/tarimtv.png"/></channel>
<channel id="powerturkhd">
    <display-name lang="tr">POWER TURK HD </display-name>
    <url>http://www.powerturkhd.tv</url>
  <icon src="'.$site.'/dsmart/images/powerturk.png"/></channel>
<channel id="number1tvhd">
    <display-name lang="tr">NUMBER1 TV HD </display-name>
    <url>http://www.number1tvhd.tv</url>
  <icon src="'.$site.'/dsmart/images/nr1.png"/></channel>
<channel id="trtmuzik">
    <display-name lang="tr">TRT MUZIK </display-name>
    <url>http://www.trtmuzik.tv</url>
  <icon src="'.$site.'/dsmart/images/trtmuzik.png"/></channel>
<channel id="powertvhd">
    <display-name lang="tr">POWER TV HD </display-name>
    <url>http://www.powertvhd.tv</url>
  <icon src="'.$site.'/dsmart/images/powertv.png"/></channel>
<channel id="dreamtv">
    <display-name lang="tr">DREAM TV </display-name>
    <url>http://www.dreamtv.tv</url>
  <icon src="'.$site.'/dsmart/images/dreamtv.png"/></channel>
<channel id="dreamturk">
    <display-name lang="tr">DREAM TURK </display-name>
    <url>http://www.dreamturk.tv</url>
  <icon src="'.$site.'/dsmart/images/dreamturk.png"/></channel>
<channel id="planetturk">
    <display-name lang="tr">PLANET TURK </display-name>
    <url>http://www.planetturk.tv</url>
  <icon src="'.$site.'/dsmart/images/planetturk.png"/></channel>
<channel id="sonymutfak">
    <display-name lang="tr">SONY MUTFAK </display-name>
    <url>http://www.sonymutfak.tv</url>
  <icon src="'.$site.'/dsmart/images/sonymutfak.jpg"/></channel>
<channel id="fashionboxhd">
    <display-name lang="tr">FASHIONBOX HD </display-name>
    <url>http://www.fashionboxhd.tv</url>
  <icon src="'.$site.'/dsmart/images/fashionbox.png"/></channel>
<channel id="akillitv">
    <display-name lang="tr">AKILLI TV </display-name>
    <url>http://www.akillitv.tv</url>
  <icon src="'.$site.'/dsmart/images/akillitv.png"/></channel>
<channel id="trtavaz">
    <display-name lang="tr">TRT AVAZ </display-name>
    <url>http://www.trtavaz.tv</url>
  <icon src="'.$site.'/dijiturk/images/trtavaz.png"/></channel>
<channel id="semerkandhd">
    <display-name lang="tr">SEMERKAND HD </display-name>
    <url>http://www.semerkandhd.tv</url>
  <icon src="'.$site.'/dsmart/images/semerkandtv.png"/></channel>
<channel id="moviesmartpremium">
    <display-name lang="tr">MovieSmart Premium </display-name>
    <url>http://www.moviesmartpremium.tv</url>
  <icon src="'.$site.'/dsmart/images/moviesmartpremium.png"/></channel>
<channel id="moviesmartpremium2">
    <display-name lang="tr">MovieSmart Premium 2 </display-name>
    <url>http://www.moviesmartpremium2.tv</url>
  <icon src="'.$site.'/dsmart/images/moviesmartpremium2.png"/></channel>
<channel id="moviesmartplatin">
    <display-name lang="tr">MovieSmart Platin </display-name>
    <url>http://www.moviesmartplatin.tv</url>
  <icon src="'.$site.'/dsmart/images/moviesmartplatin.png"/></channel>
<channel id="moviesmartplatin2">
    <display-name lang="tr">MovieSmart Platin 2 </display-name>
    <url>http://www.moviesmartplatin2.tv</url>
  <icon src="'.$site.'/dsmart/images/moviesmartplatin2.png"/></channel>
<channel id="moviesmartgold">
    <display-name lang="tr">MovieSmart Gold </display-name>
    <url>http://www.moviesmartgold.tv</url>
  <icon src="'.$site.'/dsmart/images/moviesmartgold.png"/></channel>
<channel id="moviesmartaction">
    <display-name lang="tr">MovieSmart Action </display-name>
    <url>http://www.moviesmartaction.tv</url>
  <icon src="'.$site.'/dsmart/images/moviesmartaction.png"/></channel>
<channel id="moviesmartfest">
    <display-name lang="tr">MovieSmart Fest </display-name>
    <url>http://www.moviesmartfest.tv</url>
  <icon src="'.$site.'/dsmart/images/moviesmartfest.png"/></channel>
<channel id="moviesmartfamily">
    <display-name lang="tr">MovieSmart Family </display-name>
    <url>http://www.moviesmartfamily.tv</url>
  <icon src="'.$site.'/dsmart/images/moviesmartfamily.png"/></channel>
<channel id="moviesmartclassic">
    <display-name lang="tr">MovieSmart Classic </display-name>
    <url>http://www.moviesmartclassic.tv</url>
  <icon src="'.$site.'/dsmart/images/moviesmartclassic.png"/></channel>
<channel id="moviesmartturk">
    <display-name lang="tr">MovieSmart Türk </display-name>
    <url>http://www.moviesmartturk.tv</url>
  <icon src="'.$site.'/dsmart/images/moviesmartturk.png"/></channel>
<channel id="dizismartpremium">
    <display-name lang="tr">Dizi Smart Premium </display-name>
    <url>http://www.dizismartpremium.tv</url>
  <icon src="'.$site.'/dsmart/images/dizismartpremium.png"/></channel>
<channel id="foxlife">
    <display-name lang="tr">Fox Life </display-name>
    <url>http://www.foxlife.tv</url>
  <icon src="'.$site.'/dsmart/images/foxlife.png"/></channel>
<channel id="tvem">
    <display-name lang="tr">TV em </display-name>
    <url>http://www.tvem.tv</url>
  <icon src="'.$site.'/dsmart/images/tvem.png"/></channel>
<channel id="viasathistory">
    <display-name lang="tr">Viasat History </display-name>
    <url>http://www.viasathistory.tv</url>
  <icon src="'.$site.'/dsmart/images/viasathistory.png"/></channel>
<channel id="id">
    <display-name lang="tr">ID </display-name>
    <url>http://www.id.tv</url>
  <icon src="'.$site.'/dsmart/images/id.png"/></channel>
<channel id="natgeo">
    <display-name lang="tr">Nat Geo </display-name>
    <url>http://www.natgeo.tv</url>
  <icon src="'.$site.'/dsmart/images/natgeo.png"/></channel>
<channel id="taytv">
    <display-name lang="tr">TAY TV </display-name>
    <url>http://www.taytv.tv</url>
  <icon src="'.$site.'/dsmart/images/taytv.png"/></channel>
<channel id="tv4">
    <display-name lang="tr">TV4 </display-name>
    <url>http://www.tv4.tv</url>
  <icon src="'.$site.'/dsmart/images/tv4.png"/></channel>
<channel id="ulusaltv">
    <display-name lang="tr">Ulusal TV </display-name>
    <url>http://www.ulusaltv.tv</url>
  <icon src="'.$site.'/dsmart/images/ulusaltv.png"/></channel>
<channel id="showmax">
    <display-name lang="tr">ShowMax </display-name>
    <url>http://www.showmax.tv</url>
  <icon src="'.$site.'/dsmart/images/showmax.png"/></channel>
<channel id="kraltv">
    <display-name lang="tr">Kral TV </display-name>
    <url>http://www.kraltv.tv</url>
  <icon src="'.$site.'/dsmart/images/kraltv.png"/></channel>
<channel id="tgrtbelgesel">
    <display-name lang="tr">TGRT Belgesel </display-name>
    <url>http://www.tgrtbelgesel.tv</url>
  <icon src="'.$site.'/dsmart/images/tgrtbelgesel.png"/></channel>
<channel id="koytv">
    <display-name lang="tr">Köy TV </display-name>
    <url>http://www.koytv.tv</url>
  <icon src="'.$site.'/dsmart/images/koytv.png"/></channel>
<channel id="berekettv">
    <display-name lang="tr">Bereket TV </display-name>
    <url>http://www.berekettv.tv</url>
  <icon src="'.$site.'/dsmart/images/berekettv.png"/></channel>
<channel id="berekettv">
    <display-name lang="tr">Haber Global </display-name>
    <url>http://www.haberglobal.tv</url>
  <icon src="'.$site.'/dsmart/images/haberglobal.jpg"/></channel>
<channel id="berekettv">
    <display-name lang="tr">A PARA</display-name>
    <url>http://www.apara.tv</url>
  <icon src="'.$site.'/dsmart/images/apara.jpg"/></channel>
<channel id="beinseriesscifihd">
    <display-name lang="tr">beIN SERIES SCI-FI HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinseriesscifihd.png"/></channel>
<channel id="beinseriescomedyhd">
    <display-name lang="tr">beIN SERIES COMEDY HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinseriescomedyhd.png"/></channel>
<channel id="beinseriesvicehd">
    <display-name lang="tr">beIN SERIES VICE HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinseriesvicehd.png"/></channel>
<channel id="beinseriesdramahd">
    <display-name lang="tr">beIN SERIES DRAMA HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinseriesdramahd.png"/></channel>
<channel id="beinmoviescomedyhd">
    <display-name lang="tr">beIN MOVIES COMEDY HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinmoviescomedyhd.png"/></channel>
<channel id="beinmoviesfestivalhd">
    <display-name lang="tr">beIN MOVIES FESTIVAL HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinmoviesfestivalhd.png"/></channel>
<channel id="beinmoviespremierehd">
    <display-name lang="tr">beIN MOVIES PREMIERE HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinmoviespremierehd.png"/></channel>
<channel id="beinmoviespremiere2hd">
    <display-name lang="tr">beIN MOVIES PREMIERE 2 HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinmoviespremiere2hd.png"/></channel>
<channel id="beinmoviesstarshd">
    <display-name lang="tr">beIN MOVIES STARS HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinmoviesstarshd.png"/></channel>
<channel id="beinmoviesactionhd">
    <display-name lang="tr">beIN MOVIES ACTION HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinmoviesactionhd.png"/></channel>
<channel id="beinmoviesaction2hd">
    <display-name lang="tr">beIN MOVIES ACTION 2 HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinmoviesaction2hd.png"/></channel>
<channel id="beinmoviesfamilyhd">
    <display-name lang="tr">beIN MOVIES FAMILY HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinmoviesfamilyhd.png"/></channel>
<channel id="beinmoviesturkhd">
    <display-name lang="tr">beIN MOVIES TURK HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinmoviesturkhd.png"/></channel>
<channel id="beinizhd">
    <display-name lang="tr">beIN İZ HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinizhd.png"/></channel>
<channel id="beingurmehd">
    <display-name lang="tr">beIN GURME HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beingurmehd.png"/></channel>
<channel id="gstvhd">
    <display-name lang="tr">Bursaspor TV TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/gstvhd.gif"/></channel>
<channel id="fbtvhd">
    <display-name lang="tr">BJK TV HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/bjktvhd.png"/></channel>
<channel id="beinsportshd1">
    <display-name lang="tr">GS TV HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/gstvhd.gif"/></channel>
<channel id="disneyxd">
    <display-name lang="tr">Baby TV TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/babytv.png"/></channel>
<channel id="boomeranghd">
    <display-name lang="tr">Baby First TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/babyfirst.png"/></channel>
<channel id="cartoonnetwork">
    <display-name lang="tr">Disney Junior TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/disneyjunior.png"/></channel>
<channel id="minikago">
    <display-name lang="tr">Disney XD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/disneyxd.png"/></channel>
<channel id="natgeowildhd">
    <display-name lang="tr">Nickelodeon TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/nickelodeon.png"/></channel>
<channel id="historyhd">
    <display-name lang="tr">beIN İZ HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinizhd.png"/></channel>
<channel id="discoverychannelhd">
    <display-name lang="tr">BBC EARTH HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/bbcearthhd.png"/></channel>
<channel id="discoverysciencehd">
    <display-name lang="tr">Nat Geo People HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/natgeopeoplehd.png"/></channel>
<channel id="beinboxoffice3hd">
    <display-name lang="tr">History HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/historyhd.png"/></channel>
<channel id="trtworldhd">
    <display-name lang="tr">beIN BOX OFFICE 1 HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinboxoffice1hd.png"/></channel>
<channel id="nickelodeonhd">
    <display-name lang="tr">beIN BOX OFFICE 2 HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinboxoffice2hd.png"/></channel>
<channel id="trtbelgeselhd">
    <display-name lang="tr">beIN BOX OFFICE 3 HD TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinboxoffice3hd.png"/></channel>
<channel id="idmanazerbaycan">
    <display-name lang="tr">İdman Azerbaycan TR</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/idmanazerbaycan.png"/></channel>
<channel id="beinsportshd1">
    <display-name lang="tr">beIN SPORTS 1</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinsportshd1.png"/></channel>
<channel id="beinsportshd2">
    <display-name lang="tr">beIN SPORTS 2</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinsportshd2.png"/></channel>
<channel id="beinsportshd3">
    <display-name lang="tr">beIN SPORTS 3</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinsportshd3.png"/></channel>
<channel id="beinsportshd4">
    <display-name lang="tr">beIN SPORTS 4</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinsportshd4.png"/></channel>
<channel id="beinsportsmax1hd">
    <display-name lang="tr">beIN SPORTS MAX 1</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinsportsmax1hd.png"/></channel>
<channel id="beinsportsmax2hd">
    <display-name lang="tr">beIN SPORTS MAX 2</display-name>
    <url>http://www.yo.tv</url>
  <icon src="'.$site.'/dijiturk/images/beinsportsmax2hd.png"/></channel>
<channel id="turkmaxgurme">
    <display-name lang="tr">TURKMAX GURME HD</display-name>
    <url>http://www.turkmaxgurme.tv</url>
  <icon src="'.$site.'/dsmart/images/turkmaxgurme.png"/></channel>
<channel id="yoltv">
    <display-name lang="tr">YOLTV HD</display-name>
    <url>http://www.yoltv.tv</url>
  <icon src="'.$site.'/dsmart/images/yoltv.png"/></channel>
<channel id="dtx">
    <display-name lang="tr">DTX HD</display-name>
    <url>http://www.dtx.tv</url>
  <icon src="'.$site.'/dsmart/images/dtx.png"/></channel>
<channel id="avtv">
    <display-name lang="tr">AV TV HD</display-name>
    <url>http://www.avtv.tv</url>
  <icon src="'.$site.'/dsmart/images/avtv.png"/></channel>
<channel id="babyfirst">
    <display-name lang="tr">BABY FIRST HD</display-name>
    <url>http://www.babyfirst.tv</url>
  <icon src="'.$site.'/dsmart/images/babyfirst.png"/></channel>
<channel id="number1turkhd">
    <display-name lang="tr">NUMBER1 TURK HD</display-name>
    <url>http://www.number1turkhd.tv</url>
  <icon src="'.$site.'/dsmart/images/number1turk.png"/></channel>
<channel id="sinematv">
    <display-name lang="tr">SINEMA TV HD</display-name>
    <url>http://www.sinematv.tv</url>
  <icon src="'.$site.'/dsmart/images/sinematv.png"/></channel>
<channel id="sinematv2">
    <display-name lang="tr">SINEMA TV 2 HD</display-name>
    <url>http://www.sinematv2.tv</url>
  <icon src="'.$site.'/dsmart/images/sinematv2.png"/></channel>
<channel id="sinetivi">
    <display-name lang="tr">SINETIVI HD</display-name>
    <url>http://www.sinetivi.tv</url>
  <icon src="'.$site.'/dsmart/images/sinetivi.png"/></channel>
<channel id="sinetivi2">
    <display-name lang="tr">SINETIVI 2 HD</display-name>
    <url>http://www.sinetivi2.tv</url>
  <icon src="'.$site.'/dsmart/images/sinetivi2.png"/></channel>
<channel id="sinetvadrenalin">
    <display-name lang="tr">SINETIVI ADRENANIL HD</display-name>
    <url>http://www.sinetvadrenalin.tv</url>
  <icon src="'.$site.'/dsmart/images/sinetvadrenalin.png"/></channel>

';

$dosya_adi="kanalepg.xml";
            
                    
$yaz=fopen($dosya_adi, "w+"); // dosyamızı açıtık
fwrite($yaz,$bas);// dosya içeriğimizi oluşturduk.
fclose($yaz); // dosya mızı kapattık yazma işlemini bitirdik.


?>