<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true){
    die();
}
use Bitrix\Main\Localization\Loc;

?>

<div class="list">
    <b><?= Loc::getMessage('YLAB.PROMO.ITEMS')?></b>
    <?php foreach ($arResult['BASKET_ITEMS'] as $basketItem) { ?>
        <div>
            <p><?= $basketItem->getField('NAME') . ' - ' . $basketItem->getQuantity(). '<br />' ?></p>
        </div>
        <hr>
        <?php } ?>
</div>

<div>
    <b><?= Loc::getMessage('YLAB.PROMO.IF_YES')?></b>
    <?php if ($arResult['IF_PROMO']) { ?>
        <?= Loc::getMessage('YLAB.PROMO.YES')?>
        <form class="row g-3"  method="POST">
            <div class="col-12">
            <label for="inputName" class="form-label"><?= Loc::getMessage('YLAB.PROMO.QUANTI')?></label>
            <input type="text" name="quant" class="form-control" id="inputName">
            </div>
            <div class="col-12">
            <button type="submit" class="btn btn-primary"><?= Loc::getMessage('YLAB.PROMO.BUTTON')?></button>
            </div>
        </form>
    <?php } else{ ?>
        <?= Loc::getMessage('YLAB.PROMO.NO')?>
    <?php } ?>
</div>



