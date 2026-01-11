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
    #[\NoDiscard]
    public static function new(callable $of): self
    {
        return new self($of);
    }

    #[\NoDiscard]
    public function lome(): Timezone
    {
        return ($this->of)('Africa/Lome');
    }

    #[\NoDiscard]
    public function ceuta(): Timezone
    {
        return ($this->of)('Africa/Ceuta');
    }

    #[\NoDiscard]
    public function elAaiun(): Timezone
    {
        return ($this->of)('Africa/El_Aaiun');
    }

    #[\NoDiscard]
    public function portoNovo(): Timezone
    {
        return ($this->of)('Africa/Porto-Novo');
    }

    #[\NoDiscard]
    public function djibouti(): Timezone
    {
        return ($this->of)('Africa/Djibouti');
    }

    #[\NoDiscard]
    public function windhoek(): Timezone
    {
        return ($this->of)('Africa/Windhoek');
    }

    #[\NoDiscard]
    public function algiers(): Timezone
    {
        return ($this->of)('Africa/Algiers');
    }

    #[\NoDiscard]
    public function ouagadougou(): Timezone
    {
        return ($this->of)('Africa/Ouagadougou');
    }

    #[\NoDiscard]
    public function bamako(): Timezone
    {
        return ($this->of)('Africa/Bamako');
    }

    #[\NoDiscard]
    public function harare(): Timezone
    {
        return ($this->of)('Africa/Harare');
    }

    #[\NoDiscard]
    public function bujumbura(): Timezone
    {
        return ($this->of)('Africa/Bujumbura');
    }

    #[\NoDiscard]
    public function douala(): Timezone
    {
        return ($this->of)('Africa/Douala');
    }

    #[\NoDiscard]
    public function brazzaville(): Timezone
    {
        return ($this->of)('Africa/Brazzaville');
    }

    #[\NoDiscard]
    public function tripoli(): Timezone
    {
        return ($this->of)('Africa/Tripoli');
    }

    #[\NoDiscard]
    public function casablanca(): Timezone
    {
        return ($this->of)('Africa/Casablanca');
    }

    #[\NoDiscard]
    public function niamey(): Timezone
    {
        return ($this->of)('Africa/Niamey');
    }

    #[\NoDiscard]
    public function mbabane(): Timezone
    {
        return ($this->of)('Africa/Mbabane');
    }

    #[\NoDiscard]
    public function blantyre(): Timezone
    {
        return ($this->of)('Africa/Blantyre');
    }

    #[\NoDiscard]
    public function conakry(): Timezone
    {
        return ($this->of)('Africa/Conakry');
    }

    #[\NoDiscard]
    public function khartoum(): Timezone
    {
        return ($this->of)('Africa/Khartoum');
    }

    #[\NoDiscard]
    public function luanda(): Timezone
    {
        return ($this->of)('Africa/Luanda');
    }

    #[\NoDiscard]
    public function libreville(): Timezone
    {
        return ($this->of)('Africa/Libreville');
    }

    #[\NoDiscard]
    public function maseru(): Timezone
    {
        return ($this->of)('Africa/Maseru');
    }

    #[\NoDiscard]
    public function lusaka(): Timezone
    {
        return ($this->of)('Africa/Lusaka');
    }

    #[\NoDiscard]
    public function darEsSalaam(): Timezone
    {
        return ($this->of)('Africa/Dar_es_Salaam');
    }

    #[\NoDiscard]
    public function nairobi(): Timezone
    {
        return ($this->of)('Africa/Nairobi');
    }

    #[\NoDiscard]
    public function banjul(): Timezone
    {
        return ($this->of)('Africa/Banjul');
    }

    #[\NoDiscard]
    public function bissau(): Timezone
    {
        return ($this->of)('Africa/Bissau');
    }

    #[\NoDiscard]
    public function nouakchott(): Timezone
    {
        return ($this->of)('Africa/Nouakchott');
    }

    #[\NoDiscard]
    public function johannesburg(): Timezone
    {
        return ($this->of)('Africa/Johannesburg');
    }

    #[\NoDiscard]
    public function timbuktu(): Timezone
    {
        return ($this->of)('Africa/Timbuktu');
    }

    #[\NoDiscard]
    public function saoTome(): Timezone
    {
        return ($this->of)('Africa/Sao_Tome');
    }

    #[\NoDiscard]
    public function freetown(): Timezone
    {
        return ($this->of)('Africa/Freetown');
    }

    #[\NoDiscard]
    public function kampala(): Timezone
    {
        return ($this->of)('Africa/Kampala');
    }

    #[\NoDiscard]
    public function dakar(): Timezone
    {
        return ($this->of)('Africa/Dakar');
    }

    #[\NoDiscard]
    public function lagos(): Timezone
    {
        return ($this->of)('Africa/Lagos');
    }

    #[\NoDiscard]
    public function cairo(): Timezone
    {
        return ($this->of)('Africa/Cairo');
    }

    #[\NoDiscard]
    public function mogadishu(): Timezone
    {
        return ($this->of)('Africa/Mogadishu');
    }

    #[\NoDiscard]
    public function gaborone(): Timezone
    {
        return ($this->of)('Africa/Gaborone');
    }

    #[\NoDiscard]
    public function tunis(): Timezone
    {
        return ($this->of)('Africa/Tunis');
    }

    #[\NoDiscard]
    public function kigali(): Timezone
    {
        return ($this->of)('Africa/Kigali');
    }

    #[\NoDiscard]
    public function malabo(): Timezone
    {
        return ($this->of)('Africa/Malabo');
    }

    #[\NoDiscard]
    public function abidjan(): Timezone
    {
        return ($this->of)('Africa/Abidjan');
    }

    #[\NoDiscard]
    public function accra(): Timezone
    {
        return ($this->of)('Africa/Accra');
    }

    #[\NoDiscard]
    public function asmera(): Timezone
    {
        return ($this->of)('Africa/Asmera');
    }

    #[\NoDiscard]
    public function ndjamena(): Timezone
    {
        return ($this->of)('Africa/Ndjamena');
    }

    #[\NoDiscard]
    public function lubumbashi(): Timezone
    {
        return ($this->of)('Africa/Lubumbashi');
    }

    #[\NoDiscard]
    public function juba(): Timezone
    {
        return ($this->of)('Africa/Juba');
    }

    #[\NoDiscard]
    public function monrovia(): Timezone
    {
        return ($this->of)('Africa/Monrovia');
    }

    #[\NoDiscard]
    public function maputo(): Timezone
    {
        return ($this->of)('Africa/Maputo');
    }

    #[\NoDiscard]
    public function kinshasa(): Timezone
    {
        return ($this->of)('Africa/Kinshasa');
    }

    #[\NoDiscard]
    public function asmara(): Timezone
    {
        return ($this->of)('Africa/Asmara');
    }

    #[\NoDiscard]
    public function bangui(): Timezone
    {
        return ($this->of)('Africa/Bangui');
    }

    #[\NoDiscard]
    public function addisAbaba(): Timezone
    {
        return ($this->of)('Africa/Addis_Ababa');
    }
}
