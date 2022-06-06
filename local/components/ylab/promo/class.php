<?php
use Bitrix\Main\Context;
use Bitrix\Main\Loader;
use Bitrix\Sale\Fuser;
use CBitrixComponent;
use Bitrix\Sale\Basket;

class PromoComponent extends CBitrixComponent{
    private $cost = 500;
    private $totalQuant = 3;

    public function executeComponent(){
        Loader::includeModule("catalog");
        $basket = Basket::loadItemsForFUser(Fuser::getId(), Context::getCurrent()->getSite());
        $this->arResult['BASKET_ITEMS'] = $basket->getBasketItems();
        $this->arResult["IF_PROMO"] = $this->checkIfGivePromo($basket);
        $this->includeComponentTemplate();
    }

    public function checkIfGivePromo($basket):bool{
        $res = true;
        foreach ($basket as $basketItem){
            if ($this->cost > $basketItem->getPrice()){
                $res = false;
            };
        };
        return array_sum($basket->getQuantityList()) >= $this->totalQuant and $res;
    }
};

$quant = (int) $_POST['quant'];
// добавление товара в корзину
Loader::includeModule("catalog");

$fields = [
    'PRODUCT_ID' => 321, // ID товара, обязательно
    'QUANTITY' => $quant, // количество, обязательно
];

$r = Bitrix\Catalog\Product\Basket::addProduct($fields);





