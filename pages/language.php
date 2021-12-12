<style>
 .flag
 {
     background-size: 100% 100%;
 }
</style>

<?php foreach ($Languages as $lng => $language) { ?>
    <a href="index.php?p=<?=$Previous; ?>&amp;Language=<?=$lng; ?>">
	<div class="entry flag" style="background-image: url('./res/flags/<?=$lng; ?>.png');">
	    <?=$lng; ?>
	</div>
    </a>
<?php } ?>

<a href="index.php?p=<?=$Previous; ?>">
    <div class="entry black_text_lining big_entry_text" style="height: 100px; line-height: 120px;">
	<?=safe_upper($Dictionnary["Back"]); ?>
    </div>
</a>

