<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><div class="listlink" style="width: 400px">
    <a class="close">X</a>
    
    <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "SET_TITLE" => "N",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH."/includes/spravka_text.php"
                                )
                            );?>
    
    
    
</div>

<div class="header_text">
        <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "SET_TITLE" => "N",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH."/includes/time_text.php"
                                )
                            );?> 

</div>
<div class="cont_form">

     <form action='/bitrix/templates/urist/form.php' method="post" class="contact">
         <a class="close_1">X</a>
         <h3 align="center">Задайте свой вопрос юристу</h3>
        <fieldset class="contact-inner">
      <p class="contact-input">
        <input type="text" name="name" placeholder="Ваше имя..." autofocus required>
      </p>
        <p class="contact-input">
        <input type="text" name="email" placeholder="Ваше e-mail.." autofocus required>
      </p>
                <p class="contact-input">
        <input type="text" name="phone" placeholder="Ваше телефон.." autofocus required>
      </p>
      <p class="contact-input">
        <label for="select" class="select"> <!--# ЗДЕСЬ ЗАКОНЧИЛИ 20 ФЕВРАЛЯ-->
          <select name="service" id="select">
            <option value="устная консультация" selected>устная консультация</option>
            <option value="письменная консультация">письменная консультация</option>
            <option value="консультация по телефону">консультация по телефону</option>
            <option value="Другие">Другие</option>
          </select>
        </label>
      </p>

      <p class="contact-input">
        <textarea name="message" placeholder="Ваше вопрос"></textarea>
      </p>

      <p class="contact-submit">
        <input type="submit" value="Отправить">
      </p>
    </fieldset>
  </form>
</div>
<h1>Предоставляем услуги юриста в Туле</h1>
<div style="background-image: url('/bitrix/templates/urist/images/main.png'); height: 550px; background-size: 100% 100%;padding-top: 14px" class="main_img">
    <h2 class="h2_h">Запись на консультацию</h2>
    <p style="width: 300px; margin-left: 60px;text-align: center; font-size: 22px; font-weight: 400">производиться после прохождения процедуры регистрации и авторизации и доступна личном кабинете клиента</p>

</div>
<a class="btn_spinf">Справочная информация для граждан</a>
<a class="btn_urist">Задать вопрос юристу</a>
<script src="/bitrix/templates/urist/js/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('.btn_spinf').on('click', function(){
            $('.listlink').show();
        });
        $('.close').on('click', function(){
            $('.listlink').hide();
        });

        $('.btn_urist').on('click', function(){
            $('.cont_form').show();
        });
        $('.close_1').on('click', function(){
            $('.cont_form').hide();
        });
    });

</script><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>