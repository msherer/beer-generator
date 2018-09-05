<?php
namespace msherer\BeersGenerator;

class BeersGeneratorProvider extends \Faker\Provider\Base
{
   /**
    * @var array
    */
    protected static $beerNames = ['Pliny The Elder', 'Founders Kentucky Breakfast', 'Trappistes Rochefort 10', 'HopSlam Ale', 'Stone Imperial Russian Stout', 'St. Bernardus Abt 12', 'Founders Breakfast Stout', 'Weihenstephaner Hefeweissbier', 'Péché Mortel', 'Celebrator Doppelbock', 'Duvel', 'Dreadnaught IPA', 'Nugget Nectar', 'La Fin Du Monde', 'Bourbon County Stout', 'Old Rasputin Russian Imperial Stout', 'Two Hearted Ale', 'Ruination IPA', 'Schneider Aventinus', 'Double Bastard Ale', '90 Minute IPA', 'Hop Rod Rye', 'Trappistes Rochefort 8', 'Chimay Grande Réserve', 'Stone IPA', 'Arrogant Bastard Ale', 'Edmund Fitzgerald Porter', 'Chocolate St', 'Oak Aged Yeti Imperial Stout', 'Ten FIDY', 'Storm King Stout', 'Shakespeare Oatmeal', 'Alpha King Pale Ale', 'Westmalle Trappist Tripel', 'Samuel Smith’s Imperial IPA', 'Yeti Imperial Stout', 'Hennepin', 'Samuel Smith’s Oatmeal Stout', 'Brooklyn Black', 'Oaked Arrogant Bastard Ale', 'Sublimely Self-Righteous Ale', 'Trois Pistoles', 'Bell’s Expedition', 'Sierra Nevada Celebration Ale', 'Sierra Nevada Bigfoot Barleywine Style Ale', 'Racer 5 India Pale Ale, Bear Republic Bre', 'Orval Trappist Ale', 'Hercules Double IPA', 'Maharaj', 'Maudite'];

    /**
     * @var array
     */
    protected static $beerTypes = ['Altbier', 'Altbier', 'Amber ale', 'Barley wine', 'Berliner Weisse', 'Bière de Garde', 'Bitter', 'Blonde Ale', 'Bock', 'Brown ale', 'California Common/Steam Beer', 'Cream Ale', 'Dortmunder Export', 'Doppelbock', 'Dunkel', 'Dunkelweizen', 'Eisbock', 'Flanders red ale', 'Golden/Summer ale', 'Gose', 'Gueuze', 'Hefeweizen', 'Helles', 'India pale ale', 'Kölsch', 'Lambic', 'Light ale', 'Maibock/Helles bock', 'Malt liquor', 'Mild', 'Oktoberfestbier/Märzenbier', 'Old ale', 'Oud bruin', 'Pale ale', 'Pilsener/Pilsner/Pils', 'Porter', 'Red ale', 'Roggenbier', 'Saison', 'Scotch ale', 'Stout', 'Schwarzbier', 'Vienna lager', 'Witbier', 'Weissbier', 'Weizenbock'];

    /**
     * @var array
     */
    protected static $beerMalts = ['Amber Malt', 'Aromatic Malt', 'Belgian Pils', 'Biscuit Malt', 'Black Barley', 'Black Malt (Patent)', 'Brown Malt', 'Crystal/Caramel Malts', 'CaraMunich', 'CaraPils', 'Chocolate Malt', 'English Pale Malt', 'Flaked Barley', 'Flaked Maize', 'Flaked Oats', 'Flaked Rye', 'Flaked Wheat', 'Honey Malt', 'Lager Malt', 'Munich Malt', 'Pale Ale Malt', 'Pilsner Malt', 'Roasted Barley', 'Rye', 'Smoked Malt', 'Special B', 'Torrified Grains (Wheat and Rice)', 'Victory Malt', 'Vienna Malt', 'Wheat Malt'];

    /**
     * @var array
     */
    protected static $beerHops = ['Ahtanum', 'Amarillo', 'Bitter Gold', 'Bravo', 'Brewer’s Gold', 'Bullion', 'Cascade', 'Cashmere', 'Centennial', 'Chelan', 'Chinook', 'Citra', 'Cluster', 'Columbia', 'Columbus', 'Comet', 'Crystal', 'Equinox', 'Eroica', 'Fuggle', 'Galena', 'Glacier', 'Golding', 'Hallertau', 'Horizon', 'Liberty', 'Magnum', 'Millennium', 'Mosaic', 'Mt. Hood', 'Mt. Rainier', 'Newport', 'Northern Brewer', 'Nugget', 'Olympic', 'Palisade', 'Perle', 'Saaz', 'Santiam', 'Simcoe', 'Sorachi Ace', 'Sterling', 'Summit', 'Tahoma', 'Tettnang', 'TriplePearl', 'Ultra', 'Vanguard', 'Warrior', 'Willamette', 'Yakima Gol'];

    /**
     * @var array
     */
    protected static $beerNameFormats = [
        '{{beerName}}',
        '{{beerTypes}}',
        '{{beerMalts}}',
        '{{beerHops}}'
    ];

    /**
     * @return mixed
     */
    public static function beerName()
    {
        return static::randomElement(static::$beerNames);
    }

    /**
     * @return mixed
     */
    public static function beerType()
    {
        return static::randomElement(static::$beerTypes);
    }

    /**
     * @return mixed
     */
    public static function beerMalt()
    {
        return static::randomElement(static::$beerMalts);
    }

    /**
     * @return mixed
     */
    public static function beerHop()
    {
        return static::randomElement(static::$beerHops);
    }
}
