<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\{
    Timezone,
    Timezone\America\Argentina,
    Timezone\America\Indiana,
    Timezone\America\NorthDakota,
};

final class America
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

    public function argentina(): Argentina
    {
        return Argentina::new($this->of);
    }

    public function indiana(): Indiana
    {
        return Indiana::new($this->of);
    }

    public function northDakota(): NorthDakota
    {
        return NorthDakota::new($this->of);
    }

    public function montreal(): Timezone
    {
        return ($this->of)('America/Montreal');
    }

    public function guatemala(): Timezone
    {
        return ($this->of)('America/Guatemala');
    }

    public function boaVista(): Timezone
    {
        return ($this->of)('America/Boa_Vista');
    }

    public function portoAcre(): Timezone
    {
        return ($this->of)('America/Porto_Acre');
    }

    public function winnipeg(): Timezone
    {
        return ($this->of)('America/Winnipeg');
    }

    public function santiago(): Timezone
    {
        return ($this->of)('America/Santiago');
    }

    public function virgin(): Timezone
    {
        return ($this->of)('America/Virgin');
    }

    public function moncton(): Timezone
    {
        return ($this->of)('America/Moncton');
    }

    public function noronha(): Timezone
    {
        return ($this->of)('America/Noronha');
    }

    public function recife(): Timezone
    {
        return ($this->of)('America/Recife');
    }

    public function saintKitts(): Timezone
    {
        return ($this->of)('America/St_Kitts');
    }

    public function rankinInlet(): Timezone
    {
        return ($this->of)('America/Rankin_Inlet');
    }

    public function jamaica(): Timezone
    {
        return ($this->of)('America/Jamaica');
    }

    public function lima(): Timezone
    {
        return ($this->of)('America/Lima');
    }

    public function rosario(): Timezone
    {
        return ($this->of)('America/Rosario');
    }

    public function cambridgeBay(): Timezone
    {
        return ($this->of)('America/Cambridge_Bay');
    }

    public function coralHarbour(): Timezone
    {
        return ($this->of)('America/Coral_Harbour');
    }

    public function fortWayne(): Timezone
    {
        return ($this->of)('America/Fort_Wayne');
    }

    public function nassau(): Timezone
    {
        return ($this->of)('America/Nassau');
    }

    public function mazatlan(): Timezone
    {
        return ($this->of)('America/Mazatlan');
    }

    public function grandTurk(): Timezone
    {
        return ($this->of)('America/Grand_Turk');
    }

    public function merida(): Timezone
    {
        return ($this->of)('America/Merida');
    }

    public function ensenada(): Timezone
    {
        return ($this->of)('America/Ensenada');
    }

    public function rainyRiver(): Timezone
    {
        return ($this->of)('America/Rainy_River');
    }

    public function bahiaBanderas(): Timezone
    {
        return ($this->of)('America/Bahia_Banderas');
    }

    public function guadeloupe(): Timezone
    {
        return ($this->of)('America/Guadeloupe');
    }

    public function cuiaba(): Timezone
    {
        return ($this->of)('America/Cuiaba');
    }

    public function scoresbysund(): Timezone
    {
        return ($this->of)('America/Scoresbysund');
    }

    public function maceio(): Timezone
    {
        return ($this->of)('America/Maceio');
    }

    public function curacao(): Timezone
    {
        return ($this->of)('America/Curacao');
    }

    public function aruba(): Timezone
    {
        return ($this->of)('America/Aruba');
    }

    public function monterrey(): Timezone
    {
        return ($this->of)('America/Monterrey');
    }

    public function hermosillo(): Timezone
    {
        return ($this->of)('America/Hermosillo');
    }

    public function guayaquil(): Timezone
    {
        return ($this->of)('America/Guayaquil');
    }

    public function managua(): Timezone
    {
        return ($this->of)('America/Managua');
    }

    public function matamoros(): Timezone
    {
        return ($this->of)('America/Matamoros');
    }

    public function losAngeles(): Timezone
    {
        return ($this->of)('America/Los_Angeles');
    }

    public function tegucigalpa(): Timezone
    {
        return ($this->of)('America/Tegucigalpa');
    }

    public function monticello(): Timezone
    {
        return ($this->of)('America/Kentucky/Monticello');
    }

    public function nome(): Timezone
    {
        return ($this->of)('America/Nome');
    }

    public function montevideo(): Timezone
    {
        return ($this->of)('America/Montevideo');
    }

    public function gooseBay(): Timezone
    {
        return ($this->of)('America/Goose_Bay');
    }

    public function boise(): Timezone
    {
        return ($this->of)('America/Boise');
    }

    public function belem(): Timezone
    {
        return ($this->of)('America/Belem');
    }

    public function atikokan(): Timezone
    {
        return ($this->of)('America/Atikokan');
    }

    public function swiftCurrent(): Timezone
    {
        return ($this->of)('America/Swift_Current');
    }

    public function detroit(): Timezone
    {
        return ($this->of)('America/Detroit');
    }

    public function laPaz(): Timezone
    {
        return ($this->of)('America/La_Paz');
    }

    public function chicago(): Timezone
    {
        return ($this->of)('America/Chicago');
    }

    public function creston(): Timezone
    {
        return ($this->of)('America/Creston');
    }

    public function nipigon(): Timezone
    {
        return ($this->of)('America/Nipigon');
    }

    public function costaRica(): Timezone
    {
        return ($this->of)('America/Costa_Rica');
    }

    public function halifax(): Timezone
    {
        return ($this->of)('America/Halifax');
    }

    public function yellowknife(): Timezone
    {
        return ($this->of)('America/Yellowknife');
    }

    public function puertoRico(): Timezone
    {
        return ($this->of)('America/Puerto_Rico');
    }

    public function edmonton(): Timezone
    {
        return ($this->of)('America/Edmonton');
    }

    public function mexicoCity(): Timezone
    {
        return ($this->of)('America/Mexico_City');
    }

    public function saoPaulo(): Timezone
    {
        return ($this->of)('America/Sao_Paulo');
    }

    public function yakutat(): Timezone
    {
        return ($this->of)('America/Yakutat');
    }

    public function saintThomas(): Timezone
    {
        return ($this->of)('America/St_Thomas');
    }

    public function chihuahua(): Timezone
    {
        return ($this->of)('America/Chihuahua');
    }

    public function grenada(): Timezone
    {
        return ($this->of)('America/Grenada');
    }

    public function elSalvador(): Timezone
    {
        return ($this->of)('America/El_Salvador');
    }

    public function santoDomingo(): Timezone
    {
        return ($this->of)('America/Santo_Domingo');
    }

    public function montserrat(): Timezone
    {
        return ($this->of)('America/Montserrat');
    }

    public function portoVelho(): Timezone
    {
        return ($this->of)('America/Porto_Velho');
    }

    public function panama(): Timezone
    {
        return ($this->of)('America/Panama');
    }

    public function antigua(): Timezone
    {
        return ($this->of)('America/Antigua');
    }

    public function santarem(): Timezone
    {
        return ($this->of)('America/Santarem');
    }

    public function dawson(): Timezone
    {
        return ($this->of)('America/Dawson');
    }

    public function saintBarthelemy(): Timezone
    {
        return ($this->of)('America/St_Barthelemy');
    }

    public function iqaluit(): Timezone
    {
        return ($this->of)('America/Iqaluit');
    }

    public function eirunepe(): Timezone
    {
        return ($this->of)('America/Eirunepe');
    }

    public function inuvik(): Timezone
    {
        return ($this->of)('America/Inuvik');
    }

    public function anguilla(): Timezone
    {
        return ($this->of)('America/Anguilla');
    }

    public function portOfSpain(): Timezone
    {
        return ($this->of)('America/Port_of_Spain');
    }

    public function araguaina(): Timezone
    {
        return ($this->of)('America/Araguaina');
    }

    public function guyana(): Timezone
    {
        return ($this->of)('America/Guyana');
    }

    public function fortaleza(): Timezone
    {
        return ($this->of)('America/Fortaleza');
    }

    public function blancSablon(): Timezone
    {
        return ($this->of)('America/Blanc-Sablon');
    }

    public function juneau(): Timezone
    {
        return ($this->of)('America/Juneau');
    }

    public function cayman(): Timezone
    {
        return ($this->of)('America/Cayman');
    }

    public function menominee(): Timezone
    {
        return ($this->of)('America/Menominee');
    }

    public function cayenne(): Timezone
    {
        return ($this->of)('America/Cayenne');
    }

    public function pangnirtung(): Timezone
    {
        return ($this->of)('America/Pangnirtung');
    }

    public function metlakatla(): Timezone
    {
        return ($this->of)('America/Metlakatla');
    }

    public function asuncion(): Timezone
    {
        return ($this->of)('America/Asuncion');
    }

    public function saintLucia(): Timezone
    {
        return ($this->of)('America/St_Lucia');
    }

    public function saintVincent(): Timezone
    {
        return ($this->of)('America/St_Vincent');
    }

    public function martinique(): Timezone
    {
        return ($this->of)('America/Martinique');
    }

    public function kralendijk(): Timezone
    {
        return ($this->of)('America/Kralendijk');
    }

    public function newYork(): Timezone
    {
        return ($this->of)('America/New_York');
    }

    public function vancouver(): Timezone
    {
        return ($this->of)('America/Vancouver');
    }

    public function bogota(): Timezone
    {
        return ($this->of)('America/Bogota');
    }

    public function dominica(): Timezone
    {
        return ($this->of)('America/Dominica');
    }

    public function danmarkshavn(): Timezone
    {
        return ($this->of)('America/Danmarkshavn');
    }

    public function anchorage(): Timezone
    {
        return ($this->of)('America/Anchorage');
    }

    public function marigot(): Timezone
    {
        return ($this->of)('America/Marigot');
    }

    public function rioBranco(): Timezone
    {
        return ($this->of)('America/Rio_Branco');
    }

    public function paramaribo(): Timezone
    {
        return ($this->of)('America/Paramaribo');
    }

    public function caracas(): Timezone
    {
        return ($this->of)('America/Caracas');
    }

    public function resolute(): Timezone
    {
        return ($this->of)('America/Resolute');
    }

    public function godthab(): Timezone
    {
        return ($this->of)('America/Godthab');
    }

    public function catamarca(): Timezone
    {
        return ($this->of)('America/Catamarca');
    }

    public function glaceBay(): Timezone
    {
        return ($this->of)('America/Glace_Bay');
    }

    public function regina(): Timezone
    {
        return ($this->of)('America/Regina');
    }

    public function toronto(): Timezone
    {
        return ($this->of)('America/Toronto');
    }

    public function barbados(): Timezone
    {
        return ($this->of)('America/Barbados');
    }

    public function santaIsabel(): Timezone
    {
        return ($this->of)('America/Santa_Isabel');
    }

    public function miquelon(): Timezone
    {
        return ($this->of)('America/Miquelon');
    }

    public function havana(): Timezone
    {
        return ($this->of)('America/Havana');
    }

    public function ojinaga(): Timezone
    {
        return ($this->of)('America/Ojinaga');
    }

    public function denver(): Timezone
    {
        return ($this->of)('America/Denver');
    }

    public function cancun(): Timezone
    {
        return ($this->of)('America/Cancun');
    }

    public function thunderBay(): Timezone
    {
        return ($this->of)('America/Thunder_Bay');
    }

    public function adak(): Timezone
    {
        return ($this->of)('America/Adak');
    }

    public function saintJohns(): Timezone
    {
        return ($this->of)('America/St_Johns');
    }

    public function portAuPrince(): Timezone
    {
        return ($this->of)('America/Port-au-Prince');
    }

    public function whitehorse(): Timezone
    {
        return ($this->of)('America/Whitehorse');
    }

    public function louisville(): Timezone
    {
        return ($this->of)('America/Louisville');
    }

    public function manaus(): Timezone
    {
        return ($this->of)('America/Manaus');
    }

    public function lowerPrinces(): Timezone
    {
        return ($this->of)('America/Lower_Princes');
    }

    public function sitka(): Timezone
    {
        return ($this->of)('America/Sitka');
    }

    public function thule(): Timezone
    {
        return ($this->of)('America/Thule');
    }

    public function campoGrande(): Timezone
    {
        return ($this->of)('America/Campo_Grande');
    }

    public function phoenix(): Timezone
    {
        return ($this->of)('America/Phoenix');
    }

    public function shiprock(): Timezone
    {
        return ($this->of)('America/Shiprock');
    }

    public function bahia(): Timezone
    {
        return ($this->of)('America/Bahia');
    }

    public function tortola(): Timezone
    {
        return ($this->of)('America/Tortola');
    }

    public function dawsonCreek(): Timezone
    {
        return ($this->of)('America/Dawson_Creek');
    }

    public function tijuana(): Timezone
    {
        return ($this->of)('America/Tijuana');
    }

    public function belize(): Timezone
    {
        return ($this->of)('America/Belize');
    }

    public function atka(): Timezone
    {
        return ($this->of)('America/Atka');
    }
}
