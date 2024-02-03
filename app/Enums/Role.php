<?php
namespace App\Enums;

enum Role:int{

case SuperAdministrator = 1;
case Moderator          = 2;
case RealEstateManager  = 3;
case MarketingManager   = 4;
case SalesManager       = 5;
case Customer           = 6;

}



