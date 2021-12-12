<?php

$CarouselCount = 0;

function SetCarousel(array $pic, $height, $auto = false)
{
    global $CarouselCount;

    echo '<div id="Carousel'.$CarouselCount.'" class="carousel" style="height: '.$height.';">';
    $i = 0;
    foreach ($pic as $p)
    {
	echo '<div id="Carousel'.$CarouselCount.'_Slide'.$i.'" class="carousel_slide" style="background-image: url(\''.$p.'\');"></div>';
	$i += 1;
    }

    echo '<div class="carousel_control">';
    echo '<div class="black_text_lining" onclick="carousel(\'Carousel'.$CarouselCount.'\', -1);">&larr;</div>';
    echo '<div class="black_text_lining" onclick="carousel(\'Carousel'.$CarouselCount.'\', +1);">&rarr;</div>';
    echo '</div>';

    echo '</div>';

?>
   <script>
    carousel_status["Carousel<?=$CarouselCount; ?>"] = 0;
    document.getElementById("Carousel<?=$CarouselCount; ?>_Slide0").style.zIndex = 1;
    carousel_length["Carousel<?=$CarouselCount; ?>"] = <?=$i; ?>;
    <?=$auto ? 'auto_carousel["Carousel'.$CarouselCount.'"] = true' : ""; ?>
   </script>
<?php
    $CarouselCount += 1;
}
