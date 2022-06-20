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
	<input type="hidden" name="step" value="2">
	<br>
    <p>text</p>
    <input type="text" name="text">
    <p>textarea</p>
    <textarea name="textarea" cols="30" rows="10"></textarea>
    <p></p>
    <input type="submit" name="inst" value="<?echo Loc::getMessage('YLAB_IMPORT_NEXT_STEP')?>">
</form>