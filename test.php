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
    "NotPrint"          => false,
    "NumberCopies"      => 0,
    "CashierName"       => "Kазакова Н.А.",
    "ClientAddress"     => "client@server.ru",
    "TaxVariant"        => "",
//    "CheckProps"        => [
//        [ "Print" => true, "PrintInHeader" => true, "Teg" => 1005, "Prop" => "I need your bike... and KKM too" ],
//        [ "Print" => true, "PrintInHeader" => true, "Teg" => 1010, "Prop" => 10.25 ],
//        [ "Print" => true, "PrintInHeader" => true, "Teg" => 1073, "Prop" => "8(985)775-44-61" ],
//    ],
//    "AdditionalProps"   => [
//        [ "Print" => true, "PrintInHeader" => false, "NameProp" => "Дата транзакции", "Prop" => "10.11.2016 10:30" ],
//    ],
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
                "Name"       => "Отсутствующий кассовый аппарат...",
                "Quantity"   => 1,
                "Price"      => 1,
                "Amount"     => 0.01,
                "Department" => 0,
                "Tax"        => 0,
                "EAN13"      => "1254789547853",
//                "EGAIS"      => [
//                    "Barcode" => "22N0000154NUCPRZ3R8381461004001003499NKAQ0ZBUVDNV62JQAR69PEV878RO93V",
//                    "Ean"     => "3423290167937",
//                    "Volume"  => 0.7500,
//                ],
            ],
            "BarCode"  => [
                "BarcodeType" => "EAN13",
                "Barcode"     => "1254789547853",
            ],
        ],
//        [
//            "PrintText" => [
//                "Text"      => "Очень неудобно так работать...",
//                "Font"      => 4, // 1-4, 0 - по настройкам ККМ
//                "Intensity" => 15, // 1-15, 0 - по настройкам ККМ
//            ],
//            "Register"  => [
//                "Name"       => "Горе и муки от работы в слепую",
//                "Quantity"   => 3,
//                "Price"      => 100,
//                "Amount"     => 0.00,
//                "Department" => 1,
//                "Tax"        => -1,
//                "EAN13"      => "1254789547853",
//            ],
////            "BarCode"   => [
////                "BarcodeType" => "QR",
////                "Barcode"     => "12345DFG Proba pera, Print barcode 1234567890. 12345DFG Proba pera, Print barcode 1234567890",
////            ],
//        ],
    ],
    "Cash"              => 1,
    "CashLessType1"     => 0.01,
    "CashLessType2"     => 0,
    "CashLessType3"     => 0
];
//$xReport = new \KKMClient\Models\Queries\Commands\XReport();
//$command = new \KKMClient\Models\Queries\Commands\ZReport();
//$command = new \KKMClient\Models\Queries\Commands\OpenShift();
//$client->executeCommand($openCommand);

//$command = new \KKMClient\Models\Queries\Commands\RegisterCheck();
//$string = new \KKMClient\Models\Queries\Chunks\CheckString();
//$printText = new \KKMClient\Models\Queries\Chunks\PrintTextChunk();
//$printText->setText("I need your bike... and KKM too");
//$printText->setFont(2);
//$printText->setIntensity(5);
//$barcode = new \KKMClient\Models\Queries\Chunks\BarcodeChunk();
//$barcode->setBarcodeType('PDF417');
//$barcode->setBarcode("12345DFG Proba pera, Print barcode 1234567890");
//$string->setBarcode($barcode);
//$string->setPrintText($printText);
//
//$command->addString($string);

$command = $client->resolveCommand($attributes);
//$command = new \KKMClient\Models\Queries\Commands\DeviceList();

//$command = new \KKMClient\Models\Queries\Commands\DeviceInformation(1);

//$command = new \KKMClient\Models\Queries\Commands\DeviceList();
//var_dump($command->getStrings());
$client->executeCommand($command);