<?php
namespace msherer\BeersGenerator;

class BeersGeneratorProvider extends \Faker\ProviderBase
{
   /**
    * @var array
    */
    protected static $beerNames = ['Pliny The Elder', 'Founders Kentucky Breakfast', 'Trappistes Rochefort 10', 'HopSlam Ale', 'Stone Imperial Russian Stout', 'St. Bernardus Abt 12', 'Founders Breakfast Stout', 'Weihenstephaner Hefeweissbier', 'Péché Mortel', 'Celebrator Doppelbock', 'Duvel', 'Dreadnaught IPA', 'Nugget Nectar', 'La Fin Du Monde', 'Bourbon County Stout', 'Old Rasputin Russian Imperial Stout', 'Two Hearted Ale', 'Ruination IPA', 'Schneider Aventinus', 'Double Bastard Ale', '90 Minute IPA', 'Hop Rod Rye', 'Trappistes Rochefort 8', 'Chimay Grande Réserve', 'Stone IPA', 'Arrogant Bastard Ale', 'Edmund Fitzgerald Porter', 'Chocolate St', 'Oak Aged Yeti Imperial Stout', 'Ten FIDY', 'Storm King Stout', 'Shakespeare Oatmeal', 'Alpha King Pale Ale', 'Westmalle Trappist Tripel', 'Samuel Smith’s Imperial IPA', 'Yeti Imperial Stout', 'Hennepin', 'Samuel Smith’s Oatmeal Stout', 'Brooklyn Black', 'Oaked Arrogant Bastard Ale', 'Sublimely Self-Righteous Ale', 'Trois Pistoles', 'Bell’s Expedition', 'Sierra Nevada Celebration Ale', 'Sierra Nevada Bigfoot Barleywine Style Ale', 'Racer 5 India Pale Ale, Bear Republic Bre', 'Orval Trappist Ale', 'Hercules Double IPA', 'Maharaj', 'Maudite'];

    protected static $beerNameFormats = [
        '{{beerName}}'
    ];

    public static function beerGenerator()
    {
        return static::randomElement(static::$beerNames);
    }
}
