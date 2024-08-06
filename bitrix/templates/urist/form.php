<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if(CModule::IncludeModule('iblock')){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$message = $_POST['message'];

$ar = [
    'IBLOCK_ID' => 1,
    'NAME' => $name.' '.$email.' '.$phone.' '.$service.' '.$message,
    'ACTIVE' => 'Y'
];

$el = new CIBlockElement;
$el->Add($ar);
header('Location: /index.php');
exit;
}
?>