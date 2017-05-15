<?php

namespace KKMClient\Queries\Enums;


class Taxes
{
    /*
     * Общая система налогообложения
     */
    const GENERAL = 0;

    /*
     * Упрощённая система налогооблажения (доход)
     */
    const SIMPLIFIED_ON_PROFIT = 1;

    /*
     * Упрощённая система налогооблажения (доходы минус расходы)
     */
    const SIMPLIFIED_WO_EXPENSES = 2;

    /*
     * Единый налог на вменённый доход
     */
    const SINGLE_TAX = 3;

    /*
     * Единый сельскохозяйственный налог
     */
    const AGRICULTURAL_TAX = 4;

    /*
     * Патентная система
     */
    const PATENT_SYSTEM  = 5;
}