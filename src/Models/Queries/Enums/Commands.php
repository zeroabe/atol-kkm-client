<?php

namespace KKMClient\Models\Queries\Enums;


class Commands
{
    //Печать чека
    const REGISTER_CHECK    = "RegisterCheck";

    //Открытие смены
    const REGISTER_SHIFT    = "OpenShift";

    //Печать Z-отчёта
    const Z_REPORT          = "ZReport";

    //Печать X-отчёта
    const X_REPORT          = "XReport";

    //Внесение наличных
    const CASH_DEPOSITING   = "DepositingCash";

    //Изъятие наличных
    const CASH_REFUNDING    = "PaymentCash";

    //Открытие денежного ящика
    const OPEN_CASH_DRAWER  = "OpenCashDrawer";

    //Запрос ширины строки в символах
    const GET_LINE_LENGTH   = "GetLineLength";

    //Регистрация и фискализация ККТ
    const KKM_REGISTRATION  = "KkmRegOfd";

    //Запрос состояния ККТ
    const GET_DEVICE_STATUS = "GetDataKKT";

    //Запрос списка устройств
    const GET_DEVICE_LIST   = "List";

    //Получить статус выполнения команды
    const GET_COMMAND_STATUS    = "GetRezult";
}