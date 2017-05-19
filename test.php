<?php
include 'vendor/autoload.php';

$client            = new \KKMClient\Client('10.10.5.232:5893/Execute/sync', 'Admin', '');

$attributes        = [
    "Command"           => "RegisterCheck",
    "NumDevice"         => 0,
    "InnKkm"            => "",
    "KktNumber"         => "",
    "Timeout"           => 30,
    "IdCommand"         => null,
    "IsFiscalCheck"     => true,
    "TypeCheck"         => \KKMClient\Models\Queries\Enums\CheckTypes::SALE,
    "CancelOpenedCheck" => true,
    "NotPrint"          => false, //true,
    "NumberCopies"      => 0,
    "CashierName"       => "Kазакова Н.А.",
    "ClientAddress"     => "client@server.ru",
    "TaxVariant"        => "",
    "CheckProps"        => [
        [ "Print" => true, "PrintInHeader" => true, "Teg" => 1005, "Prop" => "Москва, ул. Трехгорка д.13" ],
        [ "Print" => true, "PrintInHeader" => true, "Teg" => 1010, "Prop" => 10.25 ],
        [ "Print" => true, "PrintInHeader" => true, "Teg" => 1073, "Prop" => "8(985)775-44-61" ],
    ],
    "AdditionalProps"   => [
        [ "Print" => true, "PrintInHeader" => false, "NameProp" => "Дата транзакции", "Prop" => "10.11.2016 10:30" ],
    ],
    "ClientId"          => "23FG4GV4D2956",
    "KPP"               => "782543005",
    "CheckStrings"      => [
        [
            "BarCode" => [
                "BarcodeType" => "PDF417",
                "Barcode"     => "12345DFG Proba pera, Print barcode 1234567890",
            ],
        ],
        [
            "PrintText" => [
                "Text" => ">#2#<ООО \"Рога и копыта\"",
                "Font" => 1,
            ],
        ],
        [ "PrintText" => [ "Text" => "Пример №1 печати поля:<#16#>154,41" ], ],
        [ "PrintText" => [ "Text" => "2-рое поле:<#16#>4,00" ], ],
        [ "PrintText" => [ "Text" => "Пример №2 печати поля:<#8#>>4,00" ], ],
        [ "PrintText" => [ "Text" => "2-рое поле:<#8#>>1544,00" ], ],
        [
            "PrintText" => [
                "Text"      => "Шрифт № 1",
                "Font"      => 1, // 1-4, 0 - по настройкам ККМ
                "Intensity" => 15, // 1-15, 0 - по настройкам ККМ
            ],
        ],
        [
            "PrintText" => [
                "Text"      => "Шрифт № 2",
                "Font"      => 2, // 1-4, 0 - по настройкам ККМ
                "Intensity" => 10, // 1-15, 0 - по настройкам ККМ
            ],
        ],
        [
            "PrintText" => [
                "Text"      => "Шрифт № 3",
                "Font"      => 3, // 1-4, 0 - по настройкам ККМ
                "Intensity" => 5, // 1-15, 0 - по настройкам ККМ
            ],
        ],
        [
            "PrintText" => [
                "Text"      => "Шрифт № 4",
                "Font"      => 4, // 1-4, 0 - по настройкам ККМ
                "Intensity" => 0, // 1-15, 0 - по настройкам ККМ
            ],
        ],
        [
            "Register" => [
                "Name"       => "Сапоги женские DF-3099",
                "Quantity"   => 3,
                "Price"      => 100,
                "Amount"     => 0.01,
                "Department" => 0,
                "Tax"        => 18,
                "EAN13"      => "1254789547853",
                "EGAIS"      => [
                    "Barcode" => "22N0000154NUCPRZ3R8381461004001003499NKAQ0ZBUVDNV62JQAR69PEV878RO93V",
                    "Ean"     => "3423290167937",
                    "Volume"  => 0.7500,
                ],
            ],
            "BarCode"  => [
                "BarcodeType" => "EAN13",
                "Barcode"     => "1254789547853",
            ],
        ],
        [
            "PrintText" => [
                "Text"      => "Это мега крутой товар. Продается во всех магазинах страны. Покупайте только у нас",
                "Font"      => 2, // 1-4, 0 - по настройкам ККМ
                "Intensity" => 0, // 1-15, 0 - по настройкам ККМ
            ],
            "Register"  => [
                "Name"       => "Шаровары мужские красные: НИМБУС-2000",
                "Quantity"   => 3,
                "Price"      => 100,
                "Amount"     => 0.00,
                "Department" => 1,
                "Tax"        => -1,
                "EAN13"      => "1254789547853",
            ],
            "BarCode"   => [
                "BarcodeType" => "QR",
                "Barcode"     => "12345DFG Proba pera, Print barcode 1234567890. 12345DFG Proba pera, Print barcode 1234567890",
            ],
        ],
    ],
    "Cash"              => 800,
    "CashLessType1"     => 0.01,
    "CashLessType2"     => 0,
    "CashLessType3"     => 0
];

$command = $client->resolveCommand($attributes);
var_dump($command->getName());
$client->executeCommand($command);