<?php

namespace KKMClient\Models\Queries\Enums;


class Commands
{
    //Печать чека
    const REGISTER_CHECK        = [
        "name" => "RegisterCheck", "alias" => null
    ];

    //Открытие смены
    const REGISTER_SHIFT        = [
        "name" => "OpenShift", "alias" =>  null
    ];

    //Печать Z-отчёта
    const Z_REPORT              = [
        "name" => "ZReport", "alias" =>  null
    ];

    //Печать X-отчёта
    const X_REPORT              = [
        "name" => "XReport", "alias" =>  null
    ];

    //Внесение наличных
    const CASH_DEPOSITING       = [
        "name" => "DepositingCash", "alias" =>  null
    ];

    //Изъятие наличных
    const CASH_REFUNDING        = [
        "name" => "PaymentCash", "alias" =>  null
    ];

    //Открытие денежного ящика
    const OPEN_CASH_DRAWER      = [
        "name" => "OpenCashDrawer", "alias" =>  null
    ];

    //Запрос ширины строки в символах
    const GET_LINE_LENGTH       = [
        "name" => "GetLineLength", "alias" =>  null
    ];

    //Регистрация и фискализация ККТ
    const KKM_REGISTRATION      = [
        "name" => "KkmRegOfd", "alias" =>  null
    ];

    //Запрос состояния ККТ
    const GET_DEVICE_STATUS     = [
        "name" => "GetDataKKT", "alias" =>  null
    ];

    //Запрос списка устройств
    const GET_DEVICE_LIST       = [
        "name" => "List", "alias" =>  "DeviceList"
    ];

    //Получить статус выполнения команды
    const GET_COMMAND_STATUS    = [
        "name" => "GetRezult", "alias" =>  null
    ];
}