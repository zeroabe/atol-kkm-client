<?php

namespace KKMClient\Queries\Enums;


class CheckTypes
{

    const SALE              = 0; //Продажа
    const REFUND            = 1; //Возврат
    const EGAIS             = 8; //ЕГАИС
    const EGAIS_REFUND      = 9; //Возврат ЕГАИС
    const PURCHASE          = 10;//Покупка
    const PURCHASE_REFUND   = 11;//Возврат средств за покупку

    //Для чеков коррекции
    const SALE_CORRECTION               = 2; //Корректировка продажи
    const REFUND_CORRECTION             = 3; //Корректировка возврата продажи
    const PURCHASE_CORRECTION           = 12; //Корректировка покупки
    const PURCHASE_REFUND_CORRECTION    = 13; //Корректировка возврата покупки
}