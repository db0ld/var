<?

$boutonOFF="60799f";
$boutonON="8388b9";
$couleurbarre="ffffff";
$couleurtexte="ffffff";
$listefond="4f5b77";
$showbg=1;
$autoplay=1;
$play_random=1;
$vol=75;
$showliste=0;

//Nom des fichiers servant de fond à la radio - Name of files used as background for the radio
//Ex : array("radio.jpg","animcool.swf","picture.jpg");
$fonds = array("fondradio1.jpg");


//////////// NE PAS TOUCHER EN DESSOUS DE CETTE LIGNE  - DON'T TOUCH ANYTHING UNDER ///////////////////
$nombrefonds = count($fonds);
$handle=opendir('./mp3');
$totalchanson = 0;
$chansons = array();
while (false!==($filename = readdir($handle))){
	if((!is_dir($filename)) && ($filename != '.') && ($filename != '..') && (substr($filename, -3, 3)=="mp3")){
        $tab=explode(".",$filename);
        $titre=$tab[0];
        array_push($chansons,$titre);
		$totalchanson++;
	}
}
sort($chansons);
reset($chansons);
for($i=0;$i<=$totalchanson - 1;$i++){
	echo "&chanson" . ($i+1) . "=" . $chansons[$i];
}

echo "&nombrefonds=" . $nombrefonds;
for($i = 0;$i<= $nombrefonds-1;$i++){
	echo "&fond" . ($i+1) . "=" . $fonds[$i];
}
echo "&boutonOFF=" . $boutonOFF . "&boutonON=" . $boutonON . "&couleurbarre=" . $couleurbarre . "&couleurtexte=" . $couleurtexte . "&couleurtitre=" . $couleurtitre . "&couleuroptions=" . $couleuroptions . "&listefond=" . $listefond . "&listeselec=" . $listeselec . "&totalchanson=" . $totalchanson . "&autoplay=" . $autoplay . "&showbg=" . $showbg . "&showliste=" . $showliste . "&play_random=" . $play_random;


//© zanorg.com - kek
?>