<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach ($arResult['ITEMS'] as $arItem):?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><? echo $arItem["NAME"]?></h3>
            <p class="card-text"><? echo $arItem["DISPLAY_PROPERTIES"]["FIO"]["NAME"] . ' : ' . $arItem["DISPLAY_PROPERTIES"]["FIO"]["VALUE"] ?></p>
            <p class="card-text"><? echo $arItem["DISPLAY_PROPERTIES"]["TELEPHONE"]["NAME"] . ' : ' . $arItem["DISPLAY_PROPERTIES"]["TELEPHONE"]["VALUE"] ?></p>
            <?foreach ($arResult['TIME_ITEM'] as $arItem2):?>
                <? if ($arItem["DISPLAY_PROPERTIES"]["ADDRESS"]["~VALUE"] == $arItem2["ID"]) :?>
                    <p class="card-text"><? echo $arItem["DISPLAY_PROPERTIES"]["ADDRESS"]["NAME"] . ' : ' . $arItem2["PROPERTY_CITY_VALUE"]. ' ул.' . $arItem2["PROPERTY_STREET_VALUE"]. '  ' . $arItem2["PROPERTY_NUMBER_VALUE"]. ' кв.' . $arItem2["PROPERTY_FLAT_VALUE"] ?></p>
                <?endif?>
                
            <?endforeach?> 
        </div>
    </div>
<?endforeach?>