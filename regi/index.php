<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?>

 <h1>Регистрация нового пользователя</h1>
<form method="post">
        <div class="row">
        <div>ФИО: </div>
        <div><input type="text" placeholder="ФИО" name="fio"></div>
    </div>
    <div class="row">
        <div>Логин: </div>
        <div><input type="text" placeholder="Логин" name="login"></div>
    </div>
     <div class="row">
        <div>Пароль: </div>
        <div><input type="password" placeholder="Password" name="password"></div>
    </div>
    <div class="row">
        <div>Email: </div>
        <div><input type="email" placeholder="Email" name="email"></div>
    </div>
    <div class="row">
        <div>Телефон: </div>
        <div><input type="text" placeholder="Телефон" name="phone"></div>
    </div>
    <div class="row">
        <div class="btn"><input type="submit" value="Регистрация"></div>
    </div>
</form>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>