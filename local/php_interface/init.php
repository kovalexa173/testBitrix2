<?
define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/local/log/log.txt");
// регистрируем обработчик
AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("MyClass", "OnAfterIBlockElementAddHandler"));

class MyClass
{
    // создаем обработчик события "OnAfterIBlockElementAdd"
    function OnAfterIBlockElementAddHandler(&$arFields)
    {
        AddMessage2Log("Запись с названием " . $arFields['NAME'] . " добавлена.");
    }
}