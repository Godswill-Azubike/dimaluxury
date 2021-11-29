<?php

namespace App\Helper;

use Illuminate\Support\Facades\Http;

class Helper
{
    public static function your_money_format($value)
    {
        return number_format($value, 2);
    }

    public static function get_initials(String $firstName, String $lastName)
    {
        $fullName = strtoupper($firstName) . " " . strtoupper($lastName);
        $words = explode(" ", $fullName);
        $acronym = "";

        foreach ($words as $w) {
            $acronym .= $w[0];
        }

        return $acronym;
    }

    public static function get_random_str($length = 25)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
