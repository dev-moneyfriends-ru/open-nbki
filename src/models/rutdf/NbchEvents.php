<?php

namespace mfteam\nbch\models\rutdf;

class NbchEvents
{
    public const EVENT_1_1 = "1.1";
    public const EVENT_1_2 = "1.2";
    public const EVENT_1_3 = "1.3";
    public const EVENT_1_4A = "1.4A";
    public const EVENT_1_4B = "1.4B";
    public const EVENT_1_4C = "1.4C";
    public const EVENT_1_4_1 = "1.4.1";
    public const EVENT_1_7 = "1.7";
    public const EVENT_1_9 = "1.9";
    public const EVENT_1_10 = "1.10";
    public const EVENT_2_1A = "2.1A";
    public const EVENT_2_1B = "2.1B";
    public const EVENT_2_2A = "2.2A";
    public const EVENT_2_2B = "2.2B";
    public const EVENT_2_2_1A = "2.2.1A";
    public const EVENT_2_2_1B = "2.2.1B";
    public const EVENT_2_3A = "2.3A";
    public const EVENT_2_3B = "2.3B";
    public const EVENT_2_4 = "2.4";
    public const EVENT_2_5A = "2.5A";
    public const EVENT_2_5B = "2.5B";
    public const EVENT_2_6 = "2.6";
    public const EVENT_2_10 = "2.10";
    public const EVENT_2_11 = "2.11";
    public const EVENT_2_11_1A = "2.11.1A";
    public const EVENT_2_11_1B = "2.11.1B";
    public const EVENT_2_12 = "2.12";
    
    public static function list()
    {
        return [
            self::EVENT_1_1 => '1.1 Субъект обратился к источнику с предложением совершить сделку',
            self::EVENT_1_2 => '1.2 Источник одобрил обращение (направил ему [субъекту] оферту) или изменились сведения об обращении',
            self::EVENT_1_3 => '1.3 Источник отказался от совершения сделки по обращению',
            self::EVENT_1_4A => '1.4.а Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу для денежного обязательства субъекта',
            self::EVENT_1_4B => '1.4.б Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу для неденежного обязательства источника',
            self::EVENT_1_4C => '1.4.в Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу для неденежного обязательства субъекта',
            self::EVENT_1_4_1 => '1.4.1 Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю',
            self::EVENT_1_7 => '1.7 Изменились сведения титульной части КИ субъекта',
            self::EVENT_1_9 => '1.9 Изменились сведения о субъекте в основной части КИ, кроме сведений о дееспособности, банкротстве, индивидуальном рейтинге и кредитной оценке',
            self::EVENT_1_10 => '1.10 Изменились сведения о дееспособности субъекта',
            self::EVENT_2_1A => '2.1а Изменились сведения об условиях обязательства субъекта для денежного обязательства',
            self::EVENT_2_1B => '2.1б Изменились сведения об условиях обязательства субъекта для неденежного обязательства',
            self::EVENT_2_2A => '2.2а Субъекту передана сумма займа (кредита) для денежного обязательства',
            self::EVENT_2_2B => '2.2б Субъекту передана сумма займа (кредита) для неденежного обязательства',
            self::EVENT_2_2_1A => '2.2.1а Субъект стал принципалом по гарантии или поручителем по сделке для денежного обязательства',
            self::EVENT_2_2_1B => '2.2.1б Субъект стал принципалом по гарантии или поручителем по сделке для неденежного обязательства',
            self::EVENT_2_3A => '2.3а Изменились сведения об исполнении обязательства субъектом, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму для денежного обязательства',
            self::EVENT_2_3B => '2.3б Изменились сведения об исполнении обязательства субъектом, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму для неденежного обязательства',
            self::EVENT_2_4 => '2.4 Изменились сведения об обеспечении исполнения обязательства',
            self::EVENT_2_5A => '2.5а Обязательство субъекта прекратилось для денежного обязательства',
            self::EVENT_2_5B => '2.5б Обязательство субъекта прекратилось для неденежного обязательства',
            self::EVENT_2_6 => '2.6 Изменились сведения о судебном споре или требовании по обязательству',
            self::EVENT_2_10 => '2.10 Источник прекратил передачу информации по обязательству',
            self::EVENT_2_11 => '2.11 Права кредитора по обязательству полностью перешли к другому лицу',
            self::EVENT_2_11_1A => '2.11.1а Права кредитора по обязательству частично перешли к другому лицу для денежного обязательства',
            self::EVENT_2_11_1B => '2.11.1б Права кредитора по обязательству частично перешли к другому лицу для неденежного обязательства',
            self::EVENT_2_12 => '2.12 Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)',
        ];
    }
    
    /**
     * Блоки формируемые по событию для ФЛ
     * @return \int[][]
     */
    public static function personBlocks(): array
    {
        return [
            self::EVENT_1_1 => [
                1, 2, 3, 4, 5, 6, 7,
                55,
            ],
            self::EVENT_1_2 => [
                1, 2, 3, 4, 5, 6, 7,
                55,
            ],
            self::EVENT_1_3 => [
                1, 2, 3, 4, 5, 6, 7,
                55, 57,
            ],
            self::EVENT_1_4A => [
                1, 2, 3, 4, 5, 6, 7,
                8, 9, 10, 11, 12,
                17, 18, 19, 20, 21, 22, 54, 55,
            ],
            self::EVENT_1_4B => [
                1, 2, 3, 4, 5, 6, 7,
                8, 9, 10, 11, 12,
                17, 18, 20, 22, 30, 54, 55,
            ],
            self::EVENT_1_4C => [
                1, 2, 3, 4, 5, 6, 7,
                8, 9, 10, 11, 12,
                17, 18, 20, 22, 31, 54, 55,
            ],
            self::EVENT_1_4_1 => [
                1, 2, 3, 4, 5, 6, 7,
                8, 9, 10, 11, 12,
                17, 18, 19, 20, 21,
                24, 25, 26, 27, 28, 30, 54, 55, 56,
            ],
            self::EVENT_1_7 => [
                1, 2, 3, 4, 5, 6, 7,
            ],
            self::EVENT_1_9 => [
                1, 2, 3, 4, 5, 6, 7,
                8, 9, 10, 11,
            ],
            self::EVENT_1_10 => [
                1, 2, 3, 4, 5, 6, 7,
                12,
            ],
            self::EVENT_2_1A => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                18,
                19,
                20,
                21,
                22,
                23,
                24, 25, 26, 27, 28, 29,
                54,
            ],
            self::EVENT_2_1B => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                18,
                20,
                23,
                31,
                54,
            ],
            self::EVENT_2_2A => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                18,
                19, 21, 22, 24, 25, 26, 27, 28, 29,
                54, 56,
            ],
            self::EVENT_2_2B => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                18,
                30, 31,
                54, 56,
            ],
            self::EVENT_2_2_1A => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                18,
                19, 21, 22, 24, 25,
                54, 56,
            ],
            self::EVENT_2_2_1B => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                18,
                31,
                54, 56,
            ],
            self::EVENT_2_3A => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                18,
                19, 21, 22, 24, 25, 26, 27, 28, 29,
                54, 56,
            ],
            self::EVENT_2_3B => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                18,
                31,
                54, 56,
            ],
            self::EVENT_2_4 => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                32, 33, 34, 35, 36, 37,
            ],
            self::EVENT_2_5A => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                18,
                19, 21, 22, 24, 25, 26, 27, 28, 29,
                38, 54, 56,
            ],
            self::EVENT_2_5B => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                18,
                31,
                38, 54, 56,
            ],
            self::EVENT_2_6 => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                39,
            ],
            self::EVENT_2_10 => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                45,
            ],
            self::EVENT_2_11 => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                45, 51, 52, 54,
            ],
            self::EVENT_2_11_1A => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                18,
                19,
                20,
                21, 22, 24, 25, 26, 27, 28, 29,
                51, 52,
                54,
                56,
            ],
            self::EVENT_2_11_1B => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                18,
                20,
                31,
                51, 52,
                56,
            ],
            self::EVENT_2_12 => [
                1, 2, 3, 4, 5, 6, 7,
                17,
                53, 54,
            ],
        ];
    }
    
    /**
     * Блоки формируемые по событию для ЮЛ
     * @return \int[][]
     */
    public static function legalBlocks()
    {
        return [
            self::EVENT_1_1 => [
                1, 2, 3, 4, 5,
                45,
            ],
            self::EVENT_1_2 => [
                1, 2, 3, 4, 5,
                45,
            ],
            self::EVENT_1_3 => [
                1, 2, 3, 4, 5,
                45, 47,
            ],
            self::EVENT_1_4A => [
                1, 2, 3, 4, 5,
                10, 11,
                12,
                13,
                14,
                44,
                45,
            ],
            self::EVENT_1_4B => [
                1, 2, 3, 4, 5,
                10, 11,
                13,
                21,
                44, 45,
            ],
            self::EVENT_1_4C => [
                1, 2, 3, 4, 5,
                10, 11,
                13,
                22,
                44, 45,
            ],
            self::EVENT_1_4_1 => [
                1, 2, 3, 4, 5,
                10, 11, 12, 13, 14,
                16, 17, 18, 19, 20, 21,
                44, 45, 46,
            ],
            self::EVENT_1_7 => [
                1, 2, 3, 4, 5,
            ],
            self::EVENT_2_1A => [
                1, 2, 3, 4, 5,
                10,
                11,
                12,
                13,
                14,
                15,
                16, 17, 18, 19, 20,
                44,
            ],
            self::EVENT_2_1B => [
                1, 2, 3, 4, 5,
                10,
                11,
                13,
                15,
                22,
                44,
            ],
            self::EVENT_2_2A => [
                1, 2, 3, 4, 5,
                10,
                11,
                12, 14,
                16, 17, 18, 19, 20,
                44, 46,
            ],
            self::EVENT_2_2B => [
                1, 2, 3, 4, 5,
                10,
                11,
                21, 22,
                44, 46,
            ],
            self::EVENT_2_2_1A => [
                1, 2, 3, 4, 5,
                10,
                11,
                12, 14, 16, 17,
                44, 46,
            ],
            self::EVENT_2_2_1B => [
                1, 2, 3, 4, 5,
                10,
                11,
                22,
                44, 46,
            ],
            self::EVENT_2_3A => [
                1, 2, 3, 4, 5,
                10,
                11,
                12, 14, 16, 17, 18, 19, 20,
                44, 46,
            ],
            self::EVENT_2_3B => [
                1, 2, 3, 4, 5,
                10,
                11,
                22,
                44, 46,
            ],
            self::EVENT_2_4 => [
                1, 2, 3, 4, 5,
                10,
                23, 24, 25, 26, 27, 28,
            ],
            self::EVENT_2_5A => [
                1, 2, 3, 4, 5,
                10,
                11,
                12, 14, 16, 17, 18, 19, 20,
                29, 44, 46,
            ],
            self::EVENT_2_5B => [
                1, 2, 3, 4, 5,
                10,
                11,
                22,
                29, 44, 46,
            ],
            self::EVENT_2_6 => [
                1, 2, 3, 4, 5,
                10,
                30,
            ],
            self::EVENT_2_10 => [
                1, 2, 3, 4, 5,
                10,
                35,
            ],
            self::EVENT_2_11 => [
                1, 2, 3, 4, 5,
                10,
                17, 30,
            ],
            self::EVENT_2_11_1A => [
                1, 2, 3, 4, 5,
                10,
                11,
                12,
                13,
                14, 16, 17, 18, 19, 20,
                41, 42,
                44,
                46,
            ],
            self::EVENT_2_11_1B => [
                1, 2, 3, 4, 5,
                10,
                11,
                13,
                22,
                41, 42,
                46,
            ],
            self::EVENT_2_12 => [
                1, 2, 3, 4, 5,
                10,
                43, 44,
            ],
        ];
    }
    
    /**
     * @return string[]
     */
    public static function personBlockCode()
    {
        return [
            1 => "C1_NAME",
            2 => "C2_PREVNAME",
            3 => "C3_BIRTH",
            4 => "C4_ID",
            5 => "C5_PREVID",
            6 => "C6_REGNUM",
            7 => "C7_SNILS",
            8 => "C8_REGADDR",
            9 => "C9_ACTUALADDR",
            10 => "C10_CONTACTINFO",
            11 => "C11_ENTREP",
            12 => "C12_CAPABILITY",
            17 => "C17_UID",
            18 => "C18_TRADE",
            19 => "C19_ACCOUNTAMT",
            20 => "C20_COBORROWER",
            21 => "C21_PAYMTCONDITION",
            22 => "C22_OVERALLVAL",
            23 => "C23_AMENDMENT",
            24 => "C24_FUNDDATE",
            25 => "C25_ARREAR",
            26 => "C26_DUEARREAR",
            27 => "C27_PASTDUEARREAR",
            28 => "C28_PAYMT",
            29 => "C29_MONTHAVERPAYMT",
            30 => "C30_SOURCENONMONETOBLIG",
            31 => "C31_SUBJECTNONMONETOBLIG",
            32 => "C32_COLLATERAL",
            33 => "C33_GUARANTOR",
            34 => "C34_INDEPGUARANTOR",
            35 => "C35_COLLATINSURED",
            36 => "C36_COLLATREPAY",
            37 => "C37_GUARANTEEREPAY",
            38 => "C38_OBLIGTERMINATION",
            39 => "C39_LEGALRECORD",
            45 => "C45_SUBMITHOLD",
            54 => "C54_OBLIGACCOUNT",
            55 => "C55_APPLICATION",
            56 => "C56_OBLIGPARTTAKE",
            57 => "C57_APPLREJECT",
        ];
    }
    
    /**
     * @return string[]
     */
    public static function legalBlockCode()
    {
        return [
            1 => "B1_NAME",
            2 => "B2_ADDR",
            3 => "B3_REGNUM",
            4 => "B4_TAXPAYERID",
            5 => "B5_REORG",
            6 => "B6_BANKRUPTCY",
            7 => "B7_SETTLED",
            8 => "B8_PREVCRED",
            10 => "B10_UID",
            11 => "B11_TRADE",
            12 => "B12_ACCOUNTAMT",
            13 => "B13_COBORROWER",
            14 => "B14_PAYMTCONDITION",
            15 => "B15_AMENDMENT",
            16 => "B16_FUNDDATE",
            17 => "B17_ARREAR",
            18 => "B18_DUEARREAR",
            19 => "B19_PASTDUEARREAR",
            20 => "B20_PAYMT",
            21 => "B21_SOURCENONMONETOBLIG",
            22 => "B22_SUBJECTNONMONETOBLIG",
            23 => "B23_COLLATERAL",
            24 => "B24_GUARANTOR",
            25 => "B25_INDEPGUARANTOR",
            26 => "B26_COLLATINSURED",
            27 => "B27_COLLATREPAY",
            28 => "B28_GUARANTEEREPAY",
            29 => "B29_OBLIGTERMINATION",
            30 => "B30_LEGALRECORD",
            35 => "B35_SUBMITHOLD",
            44 => "B44_OBLIGACCOUNT",
            45 => "B45_APPLICATION",
            46 => "B46_OBLIGPARTTAKE",
            47 => "B47_APPLREJECT",
        ];
    }
    
    /**
     * @param string $eventId
     * @param bool $isLegal
     * @return string[]
     */
    public static function getEventBlocks(string $eventId, bool $isLegal): array
    {
        $blocks = [];
        if ($isLegal) {
            if (empty(self::legalBlocks()[$eventId])) {
                throw new \LogicException('Unknown Event ID');
            }
            foreach (self::legalBlocks()[$eventId] as $num){
                if(isset(self::legalBlockCode()[$num])){
                    $blocks[] = self::legalBlockCode()[$num];
                }
            }
        }else{
            if (empty(self::personBlocks()[$eventId])) {
                throw new \LogicException('Unknown Event ID');
            }
            foreach (self::personBlocks()[$eventId] as $num){
                if(isset(self::personBlockCode()[$num])){
                    $blocks[] = self::legalBlockCode()[$num];
                }
            }
        }
        
        return $blocks;
    }
}