<?php
use Bitrix\Main\Localization\Loc;
if(!check_bitrix_sessid()) 
    return;

echo CAdminMessage::ShowNote(Loc::getMessage("MOD_INST_OK"));
?>
<form action="<?echo $APPLICATION->GetCurPage()?>">
    <input type="hidden" name="lang" value="<?echo LANGUAGE_ID ?>">
    <input type="submit" value="<?echo Loc::getMessage("MOD_BACK")?>">
</form>
<?php
var_dump($_POST);