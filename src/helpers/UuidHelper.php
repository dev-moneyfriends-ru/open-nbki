<?php

namespace mfteam\nbch\helpers;

class UuidHelper
{
    /**
     * @param string $uuid
     * @return string
     */
    public static function getUuidControlSum(string $uuid): string
    {
        $uuid = preg_replace('/[^a-z\d]/i', '', $uuid);
        $chars = str_split($uuid);
        $sum = 0;
        $i = 1;
        foreach ($chars as $char) {
            $number = base_convert($char, 16, 10);
            $sum += $number * $i;
            if ($i === 10) {
                $i = 1;
            } else {
                $i++;
            }
        }
        $key = $sum % 16;
        return base_convert($key, 10, 16);
    }

    /**
     * @param string|null $uuid
     * @return string
     */
    public static function getUuidWithControl(?string $uuid): ?string
    {
        if(empty($uuid)){
            return null;
        }
        return $uuid . '-' . self::getUuidControlSum($uuid);
    }
}
