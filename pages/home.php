<?php
$img = [
    "./res/melordandek/carousel$Ext.png",
    "./res/macroboyy/carousel$Ext.png",
    "./res/allan/carousel$Ext.png",
];
$height = "85%";
$auto = true;
SetCarousel($img, $height, $auto);
?>

<style>
    .intro
    {
	font-size: <?=$IsMobile ? "50px" : "20px"; ?>;
	line-height: <?=$IsMobile ? "50px" : "20px"; ?>;
	text-align: center;
    }
</style>
<div class="white_text intro">
    <?=$Dictionnary["Intro"]; ?>
</div>

<style>
 <?php if ($IsMobile) { ?>
 .character
 {
     width: 100%;
     height: 800px;
     font-size: 35px;
 }
 .portrait
 {
     background-position: center center;
     background-size: cover;
     width: 100%;
     height: 50%;
     max-height: 400px;
 }
 .text
 {
     text-align: center;
     height: 50%;
 }
 <?php } else { ?>
 .character
 {
     width: calc(100% / 3);
     height: 400px;
     float: left;
 }
  .portrait
 {
     background-position: center center;
     background-size: cover;
     width: 100%;
     height: 50%;
     max-height: 400px;
 }
 .text
 {
     text-align: center;
     height: 50%;
 }
 <?php } ?>
</style>

<div class="character">
    <div class="portrait" style="background-image: url('./res/damdoshi.png');">
    </div>
    <div class="white_text text">
	<p>Jason Brillante "Damdoshi"</p>
	<?=$Dictionnary["Damdoshi"]; ?>
    </div>
</div>

<div class="character">
    <div class="portrait" style="background-image: url('./res/leeza.png');">
    </div>
    <div class="white_text text">
	<p>"Leeza"</p>
	<?=$Dictionnary["Leeza"]; ?>
    </div>
</div>


<div class="character">
    <div class="portrait" style="background-image: url('./res/dinelo.png');">
    </div>
    <div class="white_text text">
	<p>"Dinelo"</p>
	<?=$Dictionnary["Dinelo"]; ?>
    </div>
</div>

<div class="networks">
    <a href="https://www.youtube.com/user/Damdoshi/videos" target="_blank">
	<div style="background-image: url('./res/youtube.png');">
	</div>
    </a>
    <a href="https://store.steampowered.com/developer/hangedbunnystudio" target="_blank">
	<div style="background-image: url('./res/steam.png');">
	</div>
    </a>
    <a href="https://fr.tipeee.com/hangedbunnystudio" target="_blank">
	<div style="background-image: url('./res/tipeee.png');">
	</div>
    </a>
    <a href="https://ldjam.com/users/damdoshi" target="_blank">
	<div style="background-image: url('./res/ludum.png');">
	</div>
    </a>
    <a href="https://www.facebook.com/hangedbunnystudio/" target="_blank">
	<div style="background-image: url('./res/facebook.png');">
	</div>
    </a>
    <a href="https://discord.gg/Vzapwxa">
	<div style="background-image: url('./res/discord.png');">
	</div>
    </a>
    <a href="https://twitter.com/hangedbunny?lang=fr" target="_blank">
	<div style="background-image: url('./res/twitter.png');">
	</div>
    </a>
    <a href="https://www.twitch.tv/hangedbunnystudio" target="_blank">
	<div style="background-image: url('./res/twitch.png');">
	</div>
    </a>
    <a href="https://hangedbunnystudio.itch.io/" target="_blank">
	<div style="background-image: url('./res/itchio.png');">
	</div>
    </a>
</div>
