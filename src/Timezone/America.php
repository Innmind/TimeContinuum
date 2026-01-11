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
    #[\NoDiscard]
    public static function new(callable $of): self
    {
        return new self($of);
    }

    #[\NoDiscard]
    public function argentina(): Argentina
    {
        return Argentina::new($this->of);
    }

    #[\NoDiscard]
    public function indiana(): Indiana
    {
        return Indiana::new($this->of);
    }

    #[\NoDiscard]
    public function northDakota(): NorthDakota
    {
        return NorthDakota::new($this->of);
    }

    #[\NoDiscard]
    public function montreal(): Timezone
    {
        return ($this->of)('America/Montreal');
    }

    #[\NoDiscard]
    public function guatemala(): Timezone
    {
        return ($this->of)('America/Guatemala');
    }

    #[\NoDiscard]
    public function boaVista(): Timezone
    {
        return ($this->of)('America/Boa_Vista');
    }

    #[\NoDiscard]
    public function portoAcre(): Timezone
    {
        return ($this->of)('America/Porto_Acre');
    }

    #[\NoDiscard]
    public function winnipeg(): Timezone
    {
        return ($this->of)('America/Winnipeg');
    }

    #[\NoDiscard]
    public function santiago(): Timezone
    {
        return ($this->of)('America/Santiago');
    }

    #[\NoDiscard]
    public function virgin(): Timezone
    {
        return ($this->of)('America/Virgin');
    }

    #[\NoDiscard]
    public function moncton(): Timezone
    {
        return ($this->of)('America/Moncton');
    }

    #[\NoDiscard]
    public function noronha(): Timezone
    {
        return ($this->of)('America/Noronha');
    }

    #[\NoDiscard]
    public function recife(): Timezone
    {
        return ($this->of)('America/Recife');
    }

    #[\NoDiscard]
    public function saintKitts(): Timezone
    {
        return ($this->of)('America/St_Kitts');
    }

    #[\NoDiscard]
    public function rankinInlet(): Timezone
    {
        return ($this->of)('America/Rankin_Inlet');
    }

    #[\NoDiscard]
    public function jamaica(): Timezone
    {
        return ($this->of)('America/Jamaica');
    }

    #[\NoDiscard]
    public function lima(): Timezone
    {
        return ($this->of)('America/Lima');
    }

    #[\NoDiscard]
    public function rosario(): Timezone
    {
        return ($this->of)('America/Rosario');
    }

    #[\NoDiscard]
    public function cambridgeBay(): Timezone
    {
        return ($this->of)('America/Cambridge_Bay');
    }

    #[\NoDiscard]
    public function coralHarbour(): Timezone
    {
        return ($this->of)('America/Coral_Harbour');
    }

    #[\NoDiscard]
    public function fortWayne(): Timezone
    {
        return ($this->of)('America/Fort_Wayne');
    }

    #[\NoDiscard]
    public function nassau(): Timezone
    {
        return ($this->of)('America/Nassau');
    }

    #[\NoDiscard]
    public function mazatlan(): Timezone
    {
        return ($this->of)('America/Mazatlan');
    }

    #[\NoDiscard]
    public function grandTurk(): Timezone
    {
        return ($this->of)('America/Grand_Turk');
    }

    #[\NoDiscard]
    public function merida(): Timezone
    {
        return ($this->of)('America/Merida');
    }

    #[\NoDiscard]
    public function ensenada(): Timezone
    {
        return ($this->of)('America/Ensenada');
    }

    #[\NoDiscard]
    public function rainyRiver(): Timezone
    {
        return ($this->of)('America/Rainy_River');
    }

    #[\NoDiscard]
    public function bahiaBanderas(): Timezone
    {
        return ($this->of)('America/Bahia_Banderas');
    }

    #[\NoDiscard]
    public function guadeloupe(): Timezone
    {
        return ($this->of)('America/Guadeloupe');
    }

    #[\NoDiscard]
    public function cuiaba(): Timezone
    {
        return ($this->of)('America/Cuiaba');
    }

    #[\NoDiscard]
    public function scoresbysund(): Timezone
    {
        return ($this->of)('America/Scoresbysund');
    }

    #[\NoDiscard]
    public function maceio(): Timezone
    {
        return ($this->of)('America/Maceio');
    }

    #[\NoDiscard]
    public function curacao(): Timezone
    {
        return ($this->of)('America/Curacao');
    }

    #[\NoDiscard]
    public function aruba(): Timezone
    {
        return ($this->of)('America/Aruba');
    }

    #[\NoDiscard]
    public function monterrey(): Timezone
    {
        return ($this->of)('America/Monterrey');
    }

    #[\NoDiscard]
    public function hermosillo(): Timezone
    {
        return ($this->of)('America/Hermosillo');
    }

    #[\NoDiscard]
    public function guayaquil(): Timezone
    {
        return ($this->of)('America/Guayaquil');
    }

    #[\NoDiscard]
    public function managua(): Timezone
    {
        return ($this->of)('America/Managua');
    }

    #[\NoDiscard]
    public function matamoros(): Timezone
    {
        return ($this->of)('America/Matamoros');
    }

    #[\NoDiscard]
    public function losAngeles(): Timezone
    {
        return ($this->of)('America/Los_Angeles');
    }

    #[\NoDiscard]
    public function tegucigalpa(): Timezone
    {
        return ($this->of)('America/Tegucigalpa');
    }

    #[\NoDiscard]
    public function monticello(): Timezone
    {
        return ($this->of)('America/Kentucky/Monticello');
    }

    #[\NoDiscard]
    public function nome(): Timezone
    {
        return ($this->of)('America/Nome');
    }

    #[\NoDiscard]
    public function montevideo(): Timezone
    {
        return ($this->of)('America/Montevideo');
    }

    #[\NoDiscard]
    public function gooseBay(): Timezone
    {
        return ($this->of)('America/Goose_Bay');
    }

    #[\NoDiscard]
    public function boise(): Timezone
    {
        return ($this->of)('America/Boise');
    }

    #[\NoDiscard]
    public function belem(): Timezone
    {
        return ($this->of)('America/Belem');
    }

    #[\NoDiscard]
    public function atikokan(): Timezone
    {
        return ($this->of)('America/Atikokan');
    }

    #[\NoDiscard]
    public function swiftCurrent(): Timezone
    {
        return ($this->of)('America/Swift_Current');
    }

    #[\NoDiscard]
    public function detroit(): Timezone
    {
        return ($this->of)('America/Detroit');
    }

    #[\NoDiscard]
    public function laPaz(): Timezone
    {
        return ($this->of)('America/La_Paz');
    }

    #[\NoDiscard]
    public function chicago(): Timezone
    {
        return ($this->of)('America/Chicago');
    }

    #[\NoDiscard]
    public function creston(): Timezone
    {
        return ($this->of)('America/Creston');
    }

    #[\NoDiscard]
    public function nipigon(): Timezone
    {
        return ($this->of)('America/Nipigon');
    }

    #[\NoDiscard]
    public function costaRica(): Timezone
    {
        return ($this->of)('America/Costa_Rica');
    }

    #[\NoDiscard]
    public function halifax(): Timezone
    {
        return ($this->of)('America/Halifax');
    }

    #[\NoDiscard]
    public function yellowknife(): Timezone
    {
        return ($this->of)('America/Yellowknife');
    }

    #[\NoDiscard]
    public function puertoRico(): Timezone
    {
        return ($this->of)('America/Puerto_Rico');
    }

    #[\NoDiscard]
    public function edmonton(): Timezone
    {
        return ($this->of)('America/Edmonton');
    }

    #[\NoDiscard]
    public function mexicoCity(): Timezone
    {
        return ($this->of)('America/Mexico_City');
    }

    #[\NoDiscard]
    public function saoPaulo(): Timezone
    {
        return ($this->of)('America/Sao_Paulo');
    }

    #[\NoDiscard]
    public function yakutat(): Timezone
    {
        return ($this->of)('America/Yakutat');
    }

    #[\NoDiscard]
    public function saintThomas(): Timezone
    {
        return ($this->of)('America/St_Thomas');
    }

    #[\NoDiscard]
    public function chihuahua(): Timezone
    {
        return ($this->of)('America/Chihuahua');
    }

    #[\NoDiscard]
    public function grenada(): Timezone
    {
        return ($this->of)('America/Grenada');
    }

    #[\NoDiscard]
    public function elSalvador(): Timezone
    {
        return ($this->of)('America/El_Salvador');
    }

    #[\NoDiscard]
    public function santoDomingo(): Timezone
    {
        return ($this->of)('America/Santo_Domingo');
    }

    #[\NoDiscard]
    public function montserrat(): Timezone
    {
        return ($this->of)('America/Montserrat');
    }

    #[\NoDiscard]
    public function portoVelho(): Timezone
    {
        return ($this->of)('America/Porto_Velho');
    }

    #[\NoDiscard]
    public function panama(): Timezone
    {
        return ($this->of)('America/Panama');
    }

    #[\NoDiscard]
    public function antigua(): Timezone
    {
        return ($this->of)('America/Antigua');
    }

    #[\NoDiscard]
    public function santarem(): Timezone
    {
        return ($this->of)('America/Santarem');
    }

    #[\NoDiscard]
    public function dawson(): Timezone
    {
        return ($this->of)('America/Dawson');
    }

    #[\NoDiscard]
    public function saintBarthelemy(): Timezone
    {
        return ($this->of)('America/St_Barthelemy');
    }

    #[\NoDiscard]
    public function iqaluit(): Timezone
    {
        return ($this->of)('America/Iqaluit');
    }

    #[\NoDiscard]
    public function eirunepe(): Timezone
    {
        return ($this->of)('America/Eirunepe');
    }

    #[\NoDiscard]
    public function inuvik(): Timezone
    {
        return ($this->of)('America/Inuvik');
    }

    #[\NoDiscard]
    public function anguilla(): Timezone
    {
        return ($this->of)('America/Anguilla');
    }

    #[\NoDiscard]
    public function portOfSpain(): Timezone
    {
        return ($this->of)('America/Port_of_Spain');
    }

    #[\NoDiscard]
    public function araguaina(): Timezone
    {
        return ($this->of)('America/Araguaina');
    }

    #[\NoDiscard]
    public function guyana(): Timezone
    {
        return ($this->of)('America/Guyana');
    }

    #[\NoDiscard]
    public function fortaleza(): Timezone
    {
        return ($this->of)('America/Fortaleza');
    }

    #[\NoDiscard]
    public function blancSablon(): Timezone
    {
        return ($this->of)('America/Blanc-Sablon');
    }

    #[\NoDiscard]
    public function juneau(): Timezone
    {
        return ($this->of)('America/Juneau');
    }

    #[\NoDiscard]
    public function cayman(): Timezone
    {
        return ($this->of)('America/Cayman');
    }

    #[\NoDiscard]
    public function menominee(): Timezone
    {
        return ($this->of)('America/Menominee');
    }

    #[\NoDiscard]
    public function cayenne(): Timezone
    {
        return ($this->of)('America/Cayenne');
    }

    #[\NoDiscard]
    public function pangnirtung(): Timezone
    {
        return ($this->of)('America/Pangnirtung');
    }

    #[\NoDiscard]
    public function metlakatla(): Timezone
    {
        return ($this->of)('America/Metlakatla');
    }

    #[\NoDiscard]
    public function asuncion(): Timezone
    {
        return ($this->of)('America/Asuncion');
    }

    #[\NoDiscard]
    public function saintLucia(): Timezone
    {
        return ($this->of)('America/St_Lucia');
    }

    #[\NoDiscard]
    public function saintVincent(): Timezone
    {
        return ($this->of)('America/St_Vincent');
    }

    #[\NoDiscard]
    public function martinique(): Timezone
    {
        return ($this->of)('America/Martinique');
    }

    #[\NoDiscard]
    public function kralendijk(): Timezone
    {
        return ($this->of)('America/Kralendijk');
    }

    #[\NoDiscard]
    public function newYork(): Timezone
    {
        return ($this->of)('America/New_York');
    }

    #[\NoDiscard]
    public function vancouver(): Timezone
    {
        return ($this->of)('America/Vancouver');
    }

    #[\NoDiscard]
    public function bogota(): Timezone
    {
        return ($this->of)('America/Bogota');
    }

    #[\NoDiscard]
    public function dominica(): Timezone
    {
        return ($this->of)('America/Dominica');
    }

    #[\NoDiscard]
    public function danmarkshavn(): Timezone
    {
        return ($this->of)('America/Danmarkshavn');
    }

    #[\NoDiscard]
    public function anchorage(): Timezone
    {
        return ($this->of)('America/Anchorage');
    }

    #[\NoDiscard]
    public function marigot(): Timezone
    {
        return ($this->of)('America/Marigot');
    }

    #[\NoDiscard]
    public function rioBranco(): Timezone
    {
        return ($this->of)('America/Rio_Branco');
    }

    #[\NoDiscard]
    public function paramaribo(): Timezone
    {
        return ($this->of)('America/Paramaribo');
    }

    #[\NoDiscard]
    public function caracas(): Timezone
    {
        return ($this->of)('America/Caracas');
    }

    #[\NoDiscard]
    public function resolute(): Timezone
    {
        return ($this->of)('America/Resolute');
    }

    #[\NoDiscard]
    public function godthab(): Timezone
    {
        return ($this->of)('America/Godthab');
    }

    #[\NoDiscard]
    public function catamarca(): Timezone
    {
        return ($this->of)('America/Catamarca');
    }

    #[\NoDiscard]
    public function glaceBay(): Timezone
    {
        return ($this->of)('America/Glace_Bay');
    }

    #[\NoDiscard]
    public function regina(): Timezone
    {
        return ($this->of)('America/Regina');
    }

    #[\NoDiscard]
    public function toronto(): Timezone
    {
        return ($this->of)('America/Toronto');
    }

    #[\NoDiscard]
    public function barbados(): Timezone
    {
        return ($this->of)('America/Barbados');
    }

    #[\NoDiscard]
    public function santaIsabel(): Timezone
    {
        return ($this->of)('America/Santa_Isabel');
    }

    #[\NoDiscard]
    public function miquelon(): Timezone
    {
        return ($this->of)('America/Miquelon');
    }

    #[\NoDiscard]
    public function havana(): Timezone
    {
        return ($this->of)('America/Havana');
    }

    #[\NoDiscard]
    public function ojinaga(): Timezone
    {
        return ($this->of)('America/Ojinaga');
    }

    #[\NoDiscard]
    public function denver(): Timezone
    {
        return ($this->of)('America/Denver');
    }

    #[\NoDiscard]
    public function cancun(): Timezone
    {
        return ($this->of)('America/Cancun');
    }

    #[\NoDiscard]
    public function thunderBay(): Timezone
    {
        return ($this->of)('America/Thunder_Bay');
    }

    #[\NoDiscard]
    public function adak(): Timezone
    {
        return ($this->of)('America/Adak');
    }

    #[\NoDiscard]
    public function saintJohns(): Timezone
    {
        return ($this->of)('America/St_Johns');
    }

    #[\NoDiscard]
    public function portAuPrince(): Timezone
    {
        return ($this->of)('America/Port-au-Prince');
    }

    #[\NoDiscard]
    public function whitehorse(): Timezone
    {
        return ($this->of)('America/Whitehorse');
    }

    #[\NoDiscard]
    public function louisville(): Timezone
    {
        return ($this->of)('America/Louisville');
    }

    #[\NoDiscard]
    public function manaus(): Timezone
    {
        return ($this->of)('America/Manaus');
    }

    #[\NoDiscard]
    public function lowerPrinces(): Timezone
    {
        return ($this->of)('America/Lower_Princes');
    }

    #[\NoDiscard]
    public function sitka(): Timezone
    {
        return ($this->of)('America/Sitka');
    }

    #[\NoDiscard]
    public function thule(): Timezone
    {
        return ($this->of)('America/Thule');
    }

    #[\NoDiscard]
    public function campoGrande(): Timezone
    {
        return ($this->of)('America/Campo_Grande');
    }

    #[\NoDiscard]
    public function phoenix(): Timezone
    {
        return ($this->of)('America/Phoenix');
    }

    #[\NoDiscard]
    public function shiprock(): Timezone
    {
        return ($this->of)('America/Shiprock');
    }

    #[\NoDiscard]
    public function bahia(): Timezone
    {
        return ($this->of)('America/Bahia');
    }

    #[\NoDiscard]
    public function tortola(): Timezone
    {
        return ($this->of)('America/Tortola');
    }

    #[\NoDiscard]
    public function dawsonCreek(): Timezone
    {
        return ($this->of)('America/Dawson_Creek');
    }

    #[\NoDiscard]
    public function tijuana(): Timezone
    {
        return ($this->of)('America/Tijuana');
    }

    #[\NoDiscard]
    public function belize(): Timezone
    {
        return ($this->of)('America/Belize');
    }

    #[\NoDiscard]
    public function atka(): Timezone
    {
        return ($this->of)('America/Atka');
    }
}
