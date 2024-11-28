<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\Timezone;

final class Africa
{
    /**
     * @param callable(non-empty-string): Timezone $of
     */
    private function __construct(
        private $of,
    ) {
    }

    /**
     * @internal
     *
     * @param callable(non-empty-string): Timezone $of
     */
    public static function new(callable $of): self
    {
        return new self($of);
    }

    public function lome(): Timezone
    {
        return ($this->of)('Africa/Lome');
    }

    public function ceuta(): Timezone
    {
        return ($this->of)('Africa/Ceuta');
    }

    public function elAaiun(): Timezone
    {
        return ($this->of)('Africa/El_Aaiun');
    }

    public function portoNovo(): Timezone
    {
        return ($this->of)('Africa/Porto-Novo');
    }

    public function djibouti(): Timezone
    {
        return ($this->of)('Africa/Djibouti');
    }

    public function windhoek(): Timezone
    {
        return ($this->of)('Africa/Windhoek');
    }

    public function algiers(): Timezone
    {
        return ($this->of)('Africa/Algiers');
    }

    public function ouagadougou(): Timezone
    {
        return ($this->of)('Africa/Ouagadougou');
    }

    public function bamako(): Timezone
    {
        return ($this->of)('Africa/Bamako');
    }

    public function harare(): Timezone
    {
        return ($this->of)('Africa/Harare');
    }

    public function bujumbura(): Timezone
    {
        return ($this->of)('Africa/Bujumbura');
    }

    public function douala(): Timezone
    {
        return ($this->of)('Africa/Douala');
    }

    public function brazzaville(): Timezone
    {
        return ($this->of)('Africa/Brazzaville');
    }

    public function tripoli(): Timezone
    {
        return ($this->of)('Africa/Tripoli');
    }

    public function casablanca(): Timezone
    {
        return ($this->of)('Africa/Casablanca');
    }

    public function niamey(): Timezone
    {
        return ($this->of)('Africa/Niamey');
    }

    public function mbabane(): Timezone
    {
        return ($this->of)('Africa/Mbabane');
    }

    public function blantyre(): Timezone
    {
        return ($this->of)('Africa/Blantyre');
    }

    public function conakry(): Timezone
    {
        return ($this->of)('Africa/Conakry');
    }

    public function khartoum(): Timezone
    {
        return ($this->of)('Africa/Khartoum');
    }

    public function luanda(): Timezone
    {
        return ($this->of)('Africa/Luanda');
    }

    public function libreville(): Timezone
    {
        return ($this->of)('Africa/Libreville');
    }

    public function maseru(): Timezone
    {
        return ($this->of)('Africa/Maseru');
    }

    public function lusaka(): Timezone
    {
        return ($this->of)('Africa/Lusaka');
    }

    public function darEsSalaam(): Timezone
    {
        return ($this->of)('Africa/Dar_es_Salaam');
    }

    public function nairobi(): Timezone
    {
        return ($this->of)('Africa/Nairobi');
    }

    public function banjul(): Timezone
    {
        return ($this->of)('Africa/Banjul');
    }

    public function bissau(): Timezone
    {
        return ($this->of)('Africa/Bissau');
    }

    public function nouakchott(): Timezone
    {
        return ($this->of)('Africa/Nouakchott');
    }

    public function johannesburg(): Timezone
    {
        return ($this->of)('Africa/Johannesburg');
    }

    public function timbuktu(): Timezone
    {
        return ($this->of)('Africa/Timbuktu');
    }

    public function saoTome(): Timezone
    {
        return ($this->of)('Africa/Sao_Tome');
    }

    public function freetown(): Timezone
    {
        return ($this->of)('Africa/Freetown');
    }

    public function kampala(): Timezone
    {
        return ($this->of)('Africa/Kampala');
    }

    public function dakar(): Timezone
    {
        return ($this->of)('Africa/Dakar');
    }

    public function lagos(): Timezone
    {
        return ($this->of)('Africa/Lagos');
    }

    public function cairo(): Timezone
    {
        return ($this->of)('Africa/Cairo');
    }

    public function mogadishu(): Timezone
    {
        return ($this->of)('Africa/Mogadishu');
    }

    public function gaborone(): Timezone
    {
        return ($this->of)('Africa/Gaborone');
    }

    public function tunis(): Timezone
    {
        return ($this->of)('Africa/Tunis');
    }

    public function kigali(): Timezone
    {
        return ($this->of)('Africa/Kigali');
    }

    public function malabo(): Timezone
    {
        return ($this->of)('Africa/Malabo');
    }

    public function abidjan(): Timezone
    {
        return ($this->of)('Africa/Abidjan');
    }

    public function accra(): Timezone
    {
        return ($this->of)('Africa/Accra');
    }

    public function asmera(): Timezone
    {
        return ($this->of)('Africa/Asmera');
    }

    public function ndjamena(): Timezone
    {
        return ($this->of)('Africa/Ndjamena');
    }

    public function lubumbashi(): Timezone
    {
        return ($this->of)('Africa/Lubumbashi');
    }

    public function juba(): Timezone
    {
        return ($this->of)('Africa/Juba');
    }

    public function monrovia(): Timezone
    {
        return ($this->of)('Africa/Monrovia');
    }

    public function maputo(): Timezone
    {
        return ($this->of)('Africa/Maputo');
    }

    public function kinshasa(): Timezone
    {
        return ($this->of)('Africa/Kinshasa');
    }

    public function asmara(): Timezone
    {
        return ($this->of)('Africa/Asmara');
    }

    public function bangui(): Timezone
    {
        return ($this->of)('Africa/Bangui');
    }

    public function addisAbaba(): Timezone
    {
        return ($this->of)('Africa/Addis_Ababa');
    }
}
