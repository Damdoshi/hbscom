<style>
 .body
 {
     background-image: url('./res/magnetic_angel/background.png');
     background-repeat: both;
 }
</style>
<div class="title_entry" style="background-image: url('./res/magnetic_angel/title.png">
</div>
<div class="entry" style="height: 50px; border: 0;">
</div>

<div class="entry wide_entry" style="border: 0;">
    <iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/f22PZFnRW2s?controls=0&amp;autoplay=0&amp;origin=http://hangedbunnystudio.com" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<style>
 .paragraph
 {
     background-position: center center;
     background-size: cover;
     text-align: justify;
     background-repeat: no-repeat;
     vertical-align: top;
     margin: 0;
 }
 .insetbox
 {
     box-shadow:
	 0px 0px 10px black inset,
	 0px 0px 10px black inset,
	 0px 0px 10px black inset,
	 0px 0px 10px black,
	 0px 0px 10px black
	 ;
 }
 <?php if ($IsMobile) { ?>
 .paragraph
 {
     width: 100%;
     height: 1000px;
     font-size: 35px;
 }
 <?php } else { ?>
 .paragraph
 {
     width: calc(100% / 2);
     height: 400px;
     float: left;
 }
 <?php } ?>
</style>

<div class="white_text paragraph">
    <div style="margin: 5% 5% 5% 5%;">
	<?=$Dictionnary["MagneticAngel"]; ?>
    </div>
</div>
<?php if (!$IsMobile) { ?>
    <div class="white_text paragraph insetbox" style="background-image: url('./res/magnetic_angel/pic0.png');">
    </div>
<?php } ?>

<div class="networks">
    <a href="https://ldjam.com/events/ludum-dare/46/magnetic-angel">
	<div style="background-image: url('./res/ludum.png');">
	</div>
    </a>
    <a href="./res/magnetic_angel/magnetic_angel.zip" target="_blank">
	<div style="background-image: url('./res/windows.png');">
	</div>
    </a>
    <a href="./res/magnetic_angel/magnetic_angel.tar.gz" target="_blank">
	<div style="background-image: url('./res/linux.png');">
	</div>
    </a>
</div>
