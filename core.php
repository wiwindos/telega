<?php
include(dirname(__FILE__).'/core/getDataFromChat.php');
include(dirname(__FILE__).'/core/methods.php');
include(dirname(__FILE__).'/core/defaultSettings.php');


$stream = webHook::getData();					//подрубаем входящие данные
//$logs = Logs::setLog();							//подрубаем логи удалил из class

/////////////////////////////////////// обновление BD, большой кейс (проверка состояния по сессии, инлайн, сообщения с команд, кнопок и тд)
//SendMessage::send($q2);
//https://api.telegram.org/bot410244451:AAGrJ83kT1E0ohx_lgLPmw4OY_QjkIWHTIM/setWebhook?url=https://dnup.ru/bot/.php
echo("asd");
?>