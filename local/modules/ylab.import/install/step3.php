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
	<input type="hidden" name="step" value="4">
	<br>
    <p>select</p>
    <select name="selectbox" >
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <p>multiselect</p>
    <select name="multiselectbox" multiple>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <p></p>
	<input type="submit" name="inst" value="<?echo Loc::getMessage('YLAB_IMPORT_NEXT_STEP')?>">
</form>
<?php
var_dump($_POST);