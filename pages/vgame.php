
<style>
 .entry
 {
     height: 100px;
     line-height: 110px;
 }
 .illustrated_entry
 {
     height: 200px;
     font-size: 70px;
     line-height: 200px;
 }
</style>

<div class="entry black_text_lining big_entry_text">
    <?=$Dictionnary["CommercialGames"]; ?>
</div>

<?php foreach (["melordandek", "macroboyy", "allan"] as $v) { ?>
<a href="index.php?p=<?=$v; ?>">
    <div class="entry illustrated_entry wide_entry"
	 style="background-image: url('./res/<?=$v; ?>/vgame<?=$Ext; ?>.png');"
    >
    </div>
</a>
<?php } ?>


<div class="entry black_text_lining big_entry_text">
    <?=$Dictionnary["GameJamGames"]; ?>
</div>

<?php
$jam = [
    "magnetic_angel" => "Magnetic Angel",
    "pacfox" => "PacFox",
    "electronic_supremacy" => "Electronic Supremacy",
    "allan" => "Allan",
    "sexy_shooter" => "Sexy Shooter",
    "the_infiltrator" => "The Infiltrator",
    "shadows" => "Shadows",
    "sewer_glue" => "Sewer Glue",
    "kobang" => "Kobang",
    "antalis" => "Antalis",
    "team_of_myself" => "Team Of Myself",
    "bunnyix" => "Bunnyix",
];
?>
<?php foreach ($jam as $v => $i) { ?>
<a href="index.php?p=<?=$v; ?>">
    <div class="entry illustrated_entry black_text_lining"
	 style="background-image: url('./res/<?=$v; ?>/vgame<?=$Ext; ?>.png');"
    >
	&nbsp;&nbsp;&nbsp;&nbsp;<?=$i; ?>
    </div>
</a>
<?php } ?>

<div class="entry black_text_lining big_entry_text">
    <?=$Dictionnary["Prototypes"]; ?>
</div>

<?php
$jam = [
    "coloraiser" => "Coloraiser",
    "space_fighter" => "Space Fighter",
    "morsure" => "La Morsure des Ténèbres",
];
?>
<?php foreach ($jam as $v => $i) { ?>
<a href="index.php?p=<?=$v; ?>">
    <div class="entry illustrated_entry black_text_lining"
	 style="background-image: url('./res/<?=$v; ?>/vgame<?=$Ext; ?>.png');"
    >
	&nbsp;&nbsp;&nbsp;&nbsp;<?=$i; ?>
    </div>
</a>
<?php } ?>
