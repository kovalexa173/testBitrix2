<?php
use Bitrix\Main\Localization\Loc;
if(!check_bitrix_sessid()) 
    return;

Loc::loadMessages(__FILE__);
?>

<form action="<?echo $APPLICATION->GetCurPage()?>">
<?=bitrix_sessid_post()?>
	<input type="hidden" name="lang" value="<?echo LANGUAGE_ID?>">
	<input type="hidden" name="id" value="ylab.import">
	<input type="hidden" name="install" value="Y">
	<input type="hidden" name="step" value="3">
	<br>
    <p>checkbox</p>
    <input type="checkbox" name="checkbox">
    <p>password</p>
    <input type="password" name="password">
    <p></p>
	<input type="submit" name="inst" value="<?echo Loc::getMessage('YLAB_IMPORT_NEXT_STEP')?>">
</form>
<?php
//var_dump($_GET);