<?php
$arSelect = Array("ID", "NAME", "CITY", "PROPERTY_CITY", "PROPERTY_STREET", "PROPERTY_NUMBER", "PROPERTY_FLAT");
$arFilter = Array("IBLOCK_ID"=> 4);
$res =  CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);

$time_items = array();
while($ob = $res->GetNextElement())
{
  $arFields = $ob->GetFields();
  $time_items[] = $arFields;
}

$arResult["TIME_ITEM"] = $time_items;
?>