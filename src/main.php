<?php
if (isset($_GET["p"]))
    $Page = $_GET["p"];
else
    $Page = "home";
if (!isset($Website[$Page]))
    $Page = "home";
if (!isset($Website[$Page]))
    die ();
$Website = $Website[$Page];

// First visit
$FirstVisit = !isset($_COOKIE['FirstVisit']) ? "true" : "false";
setcookie("FirstVisit", true, time() + 60 * 60 * 24 * 365);
setcookie("Previous", $Page, time() + 60 * 60 * 24 * 365);
if (isset($_COOKIE["Previous"]))
    $Previous = $_COOKIE["Previous"];
else
    $Previous = $Page;
?>
<!DOCTYPE html>
<html lang="<?=$LanguageSign; ?>">
    <head>
	<meta charset="utf-8" />
    <!--   __________________________________________________________________
     - -  /                                                                 /\
    - -  /_________________________________________________________________/  \
     - -  \////////////////////////////////////////////////////////////////\   \
    - -    \/////     //     //      //     //     //     ///\/////       //\   \
     - -    \///_____//_____//__  __//_____//_____//_____///  \_//_______////\   \
    - -      \//\    \ \    \ \ \_\ \ \    \ |    \ \  /   \ /  \   \\  \/////\   \
     - -      \//\    \ \____\ \    /\ \    \ \    \ \_____/\____\   \\  \____/\   \
    - -        \//\  / \/\  //\ \  ///\ \  / \/\    \///   \ \  //\  / \ /   ///\   \
     - -        \//\___|//\////\/\/////\/\___|//\___|//_____\/\////\/___\___/////\  /
    - -          \________________________________________________________________\/
     - -
    - -  Jason Brillante "Damdoshi" - Hanged Bunny Studio 2014-<?=date("Y", time()); ?>
    -->
	<title>Hanged Bunny Studio</title>
	<link rel="stylesheet" type="text/css" href="style/structure.css" />
	<link rel="stylesheet" type="text/css" href="style/color.css" />
	<link rel="stylesheet" type="text/css" href="style/carousel.css" />
	<?php if ($IsMobile) {?>
	    <link rel="stylesheet" type="text/css" href="style/mobile.css" />
	    <script>
	     function toggle_menu()
	     {
		 var menu = document.getElementById("menu_links");

		 if (menu.style.display === "block")
		 {
		     menu.style.display = "none";
		 }
		 else
		 {
		     menu.style.display = "block";
		 }
	     }
	    </script>
	<?php } else { ?>
	    <link rel="stylesheet" type="text/css" href="style/pc.css" />
	<?php } ?>
	<script>
	 <?php
	 foreach (glob("./src/*.js") as $index => $file) {
	     require_once ($file);
	 }
	 ?>
	</script>
	<?php if (isset($GoogleAds) && $GoogleAds != "") { ?>
	    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	    <script>
	     (adsbygoogle = window.adsbygoogle || []).push({
		 google_ad_client: "<?=$GoogleAds; ?>",
		 enable_page_level_ads: true
	     });
	    </script>
	<?php } ?>
	<script src="tools/pixi.min.js"></script>

	<link rel="icon" size="72x72" href="favicon72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon16.png" />
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
	<meta name="msapplication-TileColor" content="#da532c" />
	<meta name="theme-color" content="#ffffff" />
    </head>
    <body>

	<?php if ($FirstVisit != "true") { ?>
	    <div id="loading">
		<?php if (file_exists("src/loading.php")) { ?>
		    <?php require_once("src/loading.php"); ?>
		<?php } ?>
	    </div>
	<?php } ?>

	<div id="message_box">
	    <a onclick="CloseMessage();">
		<div id="close_button">
		    X
		</div>
	    </a>
	    <span id="message">
		<?php if ($FirstVisit == "true" && EuropeanIp()) { ?>
		    <?php require_once("src/rgpd.php"); ?>
		<?php } ?>
	    </span>
	</div>

	<?php if (isset($GoogleId) && strlen($GoogleId)) { ?>
	    <script async src="https://www.googletagmanager.com/gtag/js?id=<?=$GoogleId; ?>">
	    </script>
	    <script>
	     window.dataLayer = window.dataLayer || [];
	     function gtag(){ dataLayer.push(arguments); }
	     gtag('js', new Date());
	     gtag('config', '<?=$GoogleId; ?>');
	    </script>
	<?php } ?>

	<div class="head">
	    <a href="index.php" class="logo_link">
		<div class="logo"></div>
	    </a>
	    <div id="menu_links">
		<?php foreach ($Website["head"] as $label => $page) { ?>
		    <?php if (!$IsMobile || $Page != $page) { ?>
			<a class="black_text_lining" href="index.php?p=<?=$page; ?>">
			    <?=safe_upper($Dictionnary[$label]); ?>
			</a>
		    <?php } ?>
		<?php } ?>
	    </div>

	    <?php if ($IsMobile) { ?>
		<div onclick="toggle_menu();" class="menu_icon">
		    ☰
		</div>
	    <?php } ?>
	</div>

	<div class="body">
	    <?php if (file_exists($Website["body"])) { ?>
		<?php require_once ($Website["body"]); ?>
	    <?php } ?>
	    <br />
	    <br />
	    <br />
	    <br />
	</div>

	<div class="foot">
	    <a href="index.php?p=language">
		<div class="language_button black_text_lining">
		    <?=safe_upper($Dictionnary["Language"]); ?>
		</div>
	    </a>
	    <a href="index.php?p=account">
		<div class="profile_button black_text_lining">
		    <?=safe_upper($Dictionnary["MyAccount"]); ?>
		</div>
	    </a>
	</div>

	<script>
	 <?php if ($FirstVisit != "true" && EuropeanIp()) { ?>
	 document.getElementById("message_box").style.display = "none";
	 <?php } ?>
	</script>
    </body>
</html>

