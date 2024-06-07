<?php
namespace App\Enums;

enum Role:int{

case SuperAdministrator = 1;

case Agent              = 5;
case Customer           = 6;





    public static function getAllCases(): array
    {
        $cases = [];
        foreach (self::cases() as $case) {
            //$cases[$case->name] = $case->value;
            $userType = new \stdClass();
            $userType->name = $case->name;
            $userType->value = $case->value;

            array_push($cases, $userType);

        }
        return $cases;
    }


    public static function getCaseName(int $value): ?string
    {
        foreach (self::cases() as $case) {
            if ($case->value === $value) {
                return $case->name;
            }
        }
        return null; // or throw an exception if preferred
    }

}



