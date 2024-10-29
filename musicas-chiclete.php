<?php
/**
 * @package Músicas Chiclete
 * @version 1.0
 */
/*
Plugin Name: Músicas Chiclete
Description: This is not just a plugin, it symbolizes doom in your day, you will only be able to get rid of those lyrics with other more sticky lyrics.
Author: Catraca Livre
Version: 1.0
Author URI: https://catracalivre.com.br
Text Domain: musicas-chiclete
*/

function musicas_chiclete() {
	$musicas = array(
		[
			'letra' => "Abra suas asas, solte suas feras.",
			'link' => "https://youtu.be/NDPhClCghmY"
		],
		[
			'letra' => "I'm all 'bout that bass, 'bout that bass, no treble. I'm all 'bout that bass, 'bout that bass, no treble.",
			'link' => "https://youtu.be/7PCkvCPvDXk"
		],
		[
			'letra' => "Quem te vê passar assim por mim. Não sabe o que é sofrer. Oh, Anna Júlia. Oh, Anna Júlia.",
			'link' => "https://youtu.be/umMIcZODm2k"
		],
		[
			'letra' => "Ela veio quente, hoje eu tô fervendo.",
			'link' => "https://youtu.be/kzOkza_u3Z8"
		],
		[
			'letra' => "Sabe, Thurururu. Estou louco pra te ver. Oh yes! Cabe, Thurururu. Entre nós dois, um querer. Iê, iê, iê, iê!",
			'link' => "https://youtu.be/DOZM3L-bkzw"
		],
		[
			'letra' => "Don't worry, be happy. Don't worry, be happy now. Oo, ooo.",
			'link' => "https://youtu.be/d-diB65scQU"
		],
		[
			'letra' => "Chega de mentiras. De negar o meu desejo. Eu te quero mais que tudo. Eu preciso do seu beijo.",
			'link' => "https://youtu.be/ePjtnSPFWK8"
		],
		[
			'letra' => "Aqui nesse mundinho fechado ela é incrível. Com seu vestidinho preto indefectível. Eu detesto o jeito dela, mas pensando bem.",
			'link' => "https://youtu.be/DjPtwYunRq4"
		],
		[
			'letra' => "E se ficar comigo é porque gosta. Do meu rá rá rá rá rá rá rá o lepo lepo.",
			'link' => "https://youtu.be/AHVS5DW434g"
		],
		[
			'letra' => "Music, music, music. Music makes the people come together.",
			'link' => "https://youtu.be/Sdz2oW0NMFk"
		],
		[
			'letra' => "Mina, seus cabelo é da hora. Seu corpão violão. Meu docinho de coco. Tá me deixando louco.",
			'link' => "https://youtu.be/rmMj8UC5Mig"
		],
		[
			'letra' => "Aserehe rá de re, de hebe tu de hebere. Seibiunouba mahabi, an de bugui an de buididipio.",
			'link' => "https://youtu.be/WAL3abhigwA"
		],
		[
			'letra' => "Shake it off, I shake it off. I, I, I shake it off, I shake it off.",
			'link' => "https://youtu.be/nfWlot6h_JM"
		],
		[
			'letra' => "All the single ladies, all the single ladies. All the single ladies, now put your hands up.",
			'link' => "https://youtu.be/4m1EFMoRFvY"
		],
		[
			'letra' => "Tsamina mina, eh eh. Waka waka, eh eh. Tsamina mina zangalewa.",
			'link' => "https://youtu.be/pRpeEdMmmQ0"
		],
		[
			'letra' => "Yo, I'll say you what I want, what I really really want.",
			'link' => "https://youtu.be/gJLIiF15wjQ"
		],
		[
			'letra' => "We all live in a yellow submarine. Yellow submarine, yellow submarine.",
			'link' => "https://youtu.be/m2uTFF_3MaA"
		],
		[
			'letra' => "O nome dela é Jenifer. Eu encontrei ela no Tinder. Não é minha namorada. Mas poderia ser.",
			'link' => "https://youtu.be/D2rG7pXd2LY"
		],
		[
			'letra' => "Delícia, delícia. Assim você me mata. Ai se eu te pego, ai ai se eu te pego!",
			'link' => "https://youtu.be/lONZoqEQ5m0"
		],
		[
			'letra' => "Isso é pra você aprender a nunca mais me esnobar. Baba baby, baby, baba, baba!",
			'link' => "https://youtu.be/nLNnxNYJJBs"
		],
		[
			'letra' => "Hoje é festa lá no meu apê. Pode aparecer. Vai rolar bundalelê!",
			'link' => "https://youtu.be/sb-2_VSsefQ"
		],
		[
			'letra' => "Oh o gás! Oh o gás! Oh o gás! Essa é a dança do momento. Vem comigo, vem sem medo.",
			'link' => "https://youtu.be/vowlsR3TpfI"
		],
		[
			'letra' => "Oh eh oh eh oh eh oh ah. Dança kuduro morena faz o povo bailar.",
			'link' => "https://youtu.be/-4uwhWh6n1M"
		],
		[
			'letra' => "Dale a tu cuerpo alegria, macarena. Hey macarena. Ay!",
			'link' => "https://youtu.be/8TiR_gJTdl0"
		],
		[
			'letra' => "Onda, onda, olha a onda. Vou te molhar, vou te banhar, vai sacudir vai abalar,",
			'link' => "https://youtu.be/x8f_14x4KWk"
		]
	);
	$musica = $musicas[array_rand($musicas)]; 
	if(empty($musica['link'])) {
		echo "<p id='musicas_chiclete'>♫ ".wptexturize( $musica['letra'] )."</p>";	
	} else {
		echo "<p id='musicas_chiclete'>♫ <a href='".$musica['link']."' target='_blank'>".wptexturize( $musica['letra'] )."</a></p>";
	}
}
add_action( 'admin_notices', 'musicas_chiclete' );

function musicas_chiclete_css() {
	$x = is_rtl() ? 'left' : 'right';
	echo "
	<style type='text/css'>
	#musicas_chiclete {
		float: $x;
		padding-$x: 8px;
		padding-top: 8px;
		margin: 0;
		font-size: 11px;
		font-style: italic;
	}
	</style>
	";
}
add_action( 'admin_head', 'musicas_chiclete_css' );