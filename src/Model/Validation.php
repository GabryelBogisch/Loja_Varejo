<?php

namespace APP\Model;

class Validation
{
    public static function validateName(string $name): bool
    {
        return mb_strlen($name) > 2;
    }

    public static function validateNumber(float $number)
    {
        return $number > 0;
    }

    public static function validateCnpj(string $cnpj)
    {
        return $cnpj = 14;
    }

    public static function validatePhone(string $phone): int
    {
        return $phone > 9 && $phone < 11;
    }

    public static function validatePublicPlace(string $publicPlace)
    {
        return mb_strlen($publicPlace) > 3;
    }
    public static function validateNumberOfStreet(string $numberOfStreet)
    {
        return $numberOfStreet >= 1;
    }
    public static function validateComplement(string $complement)
    {
        return $complement > 0;
    }   
    public static function validateNeighborhood(string $neighborhood)
    {
        return mb_strlen($neighborhood) > 0;
    }   
    public static function validateCity(string $city)
    {
        return mb_strlen ($city) > 0;
    }
    public static function validateZipCode(string $zipCode)
    {
        return $zipCode > 0;
    }

}
