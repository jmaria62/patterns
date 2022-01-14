
<?php

interface carCouponGenerator {
   function addSeasonDiscount($isHighSeason);
   function addStockDiscount($bigStock);
}

class BmwCouponGenerator implements carCouponGenerator {

   function addSeasonDiscount($isHighSeason){
      if(!$isHighSeason){
       return 5;
      }
      return 0;

   }
   function addStockDiscount($bigStock){
      if($bigStock) {
          return 7;
      }
      return 0;

   }

}


class MercedesCouponGenerator implements carCouponGenerator {

   function addSeasonDiscount($isHighSeason){
      if(!$isHighSeason){
         return 4;
        }
        return 0;

   }
   function addStockDiscount($bigStock){
      if($bigStock) {
         return 10;
     }
     return 0;

   }

}


function cupounGenerator($car) {

$discount = 0;
$isHighSeason = false;
$bigStock = true;

if($car == "bmw"){
   //  if(!$isHighSeason) {$discount += 5;}
   // if($bigStock) {$discount += 7;}
   $discount = (new BmwCouponGenerator())->addSeasonDiscount($isHighSeason) + (new BmwCouponGenerator())->addStockDiscount($bigStock) ;

} else if($car == "mercedes") {
   // if(!$isHighSeason) {$discount += 4;}
   // if($bigStock) {$discount += 10;}
   $discount = (new MercedesCouponGenerator())->addSeasonDiscount($isHighSeason) + (new MercedesCouponGenerator())->addStockDiscount($bigStock) ;

}
return $cupoun = "Get {$discount}% off the price of your new car.\n";
}
echo cupounGenerator("bmw"); 
echo cupounGenerator("mercedes"); 

?>