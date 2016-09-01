<?php

namespace spec\VictoriaPlum\MoneyMoneyMoney;

use PhpSpec\ObjectBehavior;

class BulkMoneyParserSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            [
                [
                    'item_code' => 'CAMGR001',
                    'price_with_tax' => 199,
                    'tax_rate' => 0.2,
                ],
                [
                    'item_code' => 'HAMP01',
                    'price_with_tax' => 44.99,
                    'tax_rate' => 0.2,
                ],
                [
                    'item_code' => 'ELIZ01',
                    'price_with_tax' => 279,
                    'discount_with_tax' => 27.9,
                    'tax_rate' => 0.2,
                ],
                [
                    'item_code' => 'OUT06',
                    'price_with_tax' => 16.99,
                    'tax_rate' => 0.2,
                ],
                [
                    'item_code' => 'BLIGHT002',
                    'price_with_tax' => 169,
                    'tax_rate' => 0.2,
                ],
                [
                    'item_code' => 'CAMFP55',
                    'price_with_tax' => 129,
                    'tax_rate' => 0.2,
                ],
                [
                    'item_code' => 'ARESPNLS02',
                    'price_with_tax' => 79.99,
                    'tax_rate' => 0.2,
                ],
                [
                    'item_code' => 'CAMHLWH',
                    'price_with_tax' => 429,
                    'tax_rate' => 0.2,
                ],
                [
                    'item_code' => 'HAMPACK7',
                    'price_with_tax' => 179,
                    'tax_rate' => 0.2,
                ],
                [
                    'item_code' => 'SHA1764B',
                    'price_with_tax' => 529,
                    'tax_rate' => 0.2,
                ],
                [
                    'item_code' => 'OCMEM01',
                    'price_with_tax' => 69.99,
                    'tax_rate' => 0.2,
                ],
            ]
        );
    }

    function it_can_output_prices_for_a_batch_of_products()
    {
        $this->process()->shouldReturn(
            [
                [
                    'item_code' => 'CAMGR001',
                    'pence_with_tax' => 19900,
                    'pence_without_tax' => 16583,
                    'pounds_with_tax' => 199.0,
                    'pounds_without_tax' => 165.83,
                ],
                [
                    'item_code' => 'HAMP01',
                    'pence_with_tax' => 4499,
                    'pence_without_tax' => 3749,
                    'pounds_with_tax' => 44.99,
                    'pounds_without_tax' => 37.49,
                ],
                [
                    'item_code' => 'ELIZ01',
                    'pence_with_tax' => 25110,
                    'pence_without_tax' => 20925,
                    'pounds_with_tax' => 251.10,
                    'pounds_without_tax' => 209.25,
                ],
                [
                    "item_code" => "OUT06",
                    "pence_with_tax" => 1699,
                    "pence_without_tax" => 1416,
                    "pounds_with_tax" => 16.99,
                    "pounds_without_tax" => 14.16,
                ],
                [
                    'item_code' => 'BLIGHT002',
                    'pence_with_tax' => 16900,
                    'pence_without_tax' => 14083,
                    'pounds_with_tax' => 169.0,
                    'pounds_without_tax' => 140.83,
                ],
                [
                    'item_code' => 'CAMFP55',
                    'pence_with_tax' => 12900,
                    'pence_without_tax' => 10750,
                    'pounds_with_tax' => 129.0,
                    'pounds_without_tax' => 107.5,
                ],
                [
                    "item_code" => "ARESPNLS02",
                    "pence_with_tax" => 7999,
                    "pence_without_tax" => 6666,
                    "pounds_with_tax" => 79.99,
                    "pounds_without_tax" => 66.66,
                ],
                [
                    'item_code' => 'CAMHLWH',
                    'pence_with_tax' => 42900,
                    'pence_without_tax' => 35750,
                    'pounds_with_tax' => 429.0,
                    'pounds_without_tax' => 357.5,
                ],
                [
                    'item_code' => 'HAMPACK7',
                    'pence_with_tax' => 17900,
                    'pence_without_tax' => 14917,
                    'pounds_with_tax' => 179.0,
                    'pounds_without_tax' => 149.17,
                ],
                [
                    'item_code' => 'SHA1764B',
                    'pence_with_tax' => 52900,
                    'pence_without_tax' => 44083,
                    'pounds_with_tax' => 529.0,
                    'pounds_without_tax' => 440.83,
                ],
                [
                    "item_code" => "OCMEM01",
                    "pence_with_tax" => 6999,
                    "pence_without_tax" => 5833,
                    "pounds_with_tax" => 69.99,
                    "pounds_without_tax" => 58.33,
                ]
            ]
        );
    }
}
