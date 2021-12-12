<?php
$RootMenu = [
    "Home" => "home",
    "VideoGame" => "vgame",
    "Software" => "software",
    "Events" => "events",
];

if ($IsMobile)
    $VideoGameMenu =
	[
	    "Back" => "vgame",
	    "MelordandekTitle" => "melordandek",
	    "MacroboyYTitle" => "macroboy",
	    "AllanTitle" => "allan",
	    "MagneticAngelTitle" => "magnetic_angel",
	    "PacFoxTitle" => "pacfox",
	    "ElectronicSupremacyTitle" => "electronic_supremacy",
	    "SexyShooterTitle" => "sexy_shooter",
	    "TheInfiltratorTitle" => "the_infiltrator",
	    "ShadowsTitle" => "shadows",
	    "SewerGlueTitle" => "sewer_glue",
	    "KobangTitle" => "kobang",
	    "AntalisTitle" => "antalis",
	    "TeamOfMyselfTitle" => "team_of_myself",
	    "BunnyixTitle" => "bunnyix",
	    "ColoraiserTitle" => "coloraiser",
	    "SpaceFighterTitle" => "space_fighter",
	    "MorsureTitle" => "morsure",
	];
else
    $VideoGameMenu = $RootMenu;

$Website = [
    "home" => [
	"head" => $RootMenu,
	"body" => "pages/home.php"
    ],
    "account" => [
	"head" => $RootMenu,
	"body" => "pages/account.php"
    ],
    "language" => [
	"head" => $RootMenu,
	"body" => "pages/language.php"
    ],
    "vgame" => [
	"head" => $RootMenu,
	"body" => "pages/vgame.php"
    ],
    "software" => [
	"head" => $RootMenu,
	"body" => "pages/software.php"
    ],
    "events" => [
	"head" => $RootMenu,
	"body" => "pages/events.php"
    ],

    "melordandek" => [
	"head" => $VideoGameMenu,
	"body" => "pages/melordandek.php"
    ],
    "macroboyy" => [
	"head" => $VideoGameMenu,
	"body" => "pages/macroboyy.php"
    ],
    "allan" => [
	"head" => $VideoGameMenu,
	"body" => "pages/allan.php"
    ],
    "magnetic_angel" => [
	"head" => $VideoGameMenu,
	"body" => "pages/magnetic_angel.php"
    ],
    "pacfox" => [
	"head" => $VideoGameMenu,
	"body" => "pages/pacfox.php"
    ],
    "electronic_supremacy" => [
	"head" => $VideoGameMenu,
	"body" => "pages/electronic_supremacy.php"
    ],
    "sexy_shooter" => [
	"head" => $VideoGameMenu,
	"body" => "pages/sexy_shooter.php"
    ],
    "the_infiltrator" => [
	"head" => $VideoGameMenu,
	"body" => "pages/the_infiltrator.php"
    ],
    "shadows" => [
	"head" => $VideoGameMenu,
	"body" => "pages/shadows.php"
    ],
    "sewer_glue" => [
	"head" => $VideoGameMenu,
	"body" => "pages/sewer_glue.php"
    ],
    "kobang" => [
	"head" => $VideoGameMenu,
	"body" => "pages/kobang.php"
    ],
    "antalis" => [
	"head" => $VideoGameMenu,
	"body" => "pages/antalis.php"
    ],
    "team_of_myself" => [
	"head" => $VideoGameMenu,
	"body" => "pages/team_of_myself.php"
    ],
    "bunnyix" => [
	"head" => $VideoGameMenu,
	"body" => "pages/bunnyix.php"
    ],
    "coloraiser" => [
	"head" => $VideoGameMenu,
	"body" => "pages/coloraiser.php"
    ],
    "space_fighter" => [
	"head" => $VideoGameMenu,
	"body" => "pages/space_fighter.php"
    ],
    "morsure" => [
	"head" => $VideoGameMenu,
	"body" => "pages/morsure.php"
    ],
];

