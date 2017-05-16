<?php

namespace KKMClient\Queries\Enums;


class PropertyTags
{
    // Адрес оператора по переводу денежных средств
    const MONEY_TRANSFER_OPERATOR_ADDRESS   = 1005;

    //ИНН оператора по переводу денежных средств
    const MONEY_TRANSFER_OPERATOR_INN       = 1016;

    //Наименование оператора по переводу денежных средств
    const MONEY_TRANSFER_OPERATOR_NAME      = 1026;

    // Операция банковского агента
    const BANK_AGENT_OPERATION              = 1044;

    //Операция банковского субагента
    const BANK_SUBAGENT_OPERATION           = 1045;

    //Телефон банковского агента
    const BANK_AGENT_PHONE                  = 1073;

    //Телефон платёжного агента
    const PAYMENT_AGENT_PHONE               = 1074;

    //Телефон оператора по переводу денежных средств
    const MONEY_TRANSFER_OPERATOR_PHONE     = 1075;

    //Телефон банковского субагента
    const BANK_SUBAGENT_PHONE               = 1082;

    //Телефон платёжного субагента
    const PAYMENT_SUBAGENT_PHONE            = 1083;

    //Телефон оператора по приёму платежей
    const BILLING_OPERATOR_PHONE            = 1119;
}