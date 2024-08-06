<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead();?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta charset="UTF-8">
    <title><?$APPLICATION->ShowTitle();?></title>
    <meta name="description" content="описание сайта">
    <link rel="stylesheet" href="/bitrix/templates/urist/app.css">
</head>
<body>
    <div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
<div class="background">
    <div class="blur"></div>
</div>

<header class="header">
    <img src="/bitrix/templates/urist/images/logo.png" width="128px" class="logo">
    <p>
            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "SET_TITLE" => "N",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH."/includes/header_text.php"
                                )
                            );?>
    </p>
    <div class="clear"></div>
</header>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"topmenu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "topmenu"
	),
	false
);?>
<main class="content">