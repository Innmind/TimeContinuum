<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\Timezone;

final class Europe
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

    public function uzhgorod(): Timezone
    {
        return ($this->of)('Europe/Uzhgorod');
    }

    public function riga(): Timezone
    {
        return ($this->of)('Europe/Riga');
    }

    public function paris(): Timezone
    {
        return ($this->of)('Europe/Paris');
    }

    public function guernsey(): Timezone
    {
        return ($this->of)('Europe/Guernsey');
    }

    public function samara(): Timezone
    {
        return ($this->of)('Europe/Samara');
    }

    public function athens(): Timezone
    {
        return ($this->of)('Europe/Athens');
    }

    public function tirane(): Timezone
    {
        return ($this->of)('Europe/Tirane');
    }

    public function london(): Timezone
    {
        return ($this->of)('Europe/London');
    }

    public function helsinki(): Timezone
    {
        return ($this->of)('Europe/Helsinki');
    }

    public function oslo(): Timezone
    {
        return ($this->of)('Europe/Oslo');
    }

    public function podgorica(): Timezone
    {
        return ($this->of)('Europe/Podgorica');
    }

    public function minsk(): Timezone
    {
        return ($this->of)('Europe/Minsk');
    }

    public function monaco(): Timezone
    {
        return ($this->of)('Europe/Monaco');
    }

    public function lisbon(): Timezone
    {
        return ($this->of)('Europe/Lisbon');
    }

    public function tallinn(): Timezone
    {
        return ($this->of)('Europe/Tallinn');
    }

    public function berlin(): Timezone
    {
        return ($this->of)('Europe/Berlin');
    }

    public function gibraltar(): Timezone
    {
        return ($this->of)('Europe/Gibraltar');
    }

    public function prague(): Timezone
    {
        return ($this->of)('Europe/Prague');
    }

    public function stockholm(): Timezone
    {
        return ($this->of)('Europe/Stockholm');
    }

    public function moscow(): Timezone
    {
        return ($this->of)('Europe/Moscow');
    }

    public function bucharest(): Timezone
    {
        return ($this->of)('Europe/Bucharest');
    }

    public function andorra(): Timezone
    {
        return ($this->of)('Europe/Andorra');
    }

    public function vilnius(): Timezone
    {
        return ($this->of)('Europe/Vilnius');
    }

    public function rome(): Timezone
    {
        return ($this->of)('Europe/Rome');
    }

    public function kiev(): Timezone
    {
        return ($this->of)('Europe/Kiev');
    }

    public function copenhagen(): Timezone
    {
        return ($this->of)('Europe/Copenhagen');
    }

    public function belgrade(): Timezone
    {
        return ($this->of)('Europe/Belgrade');
    }

    public function isleOfMan(): Timezone
    {
        return ($this->of)('Europe/Isle_of_Man');
    }

    public function budapest(): Timezone
    {
        return ($this->of)('Europe/Budapest');
    }

    public function tiraspol(): Timezone
    {
        return ($this->of)('Europe/Tiraspol');
    }

    public function vaduz(): Timezone
    {
        return ($this->of)('Europe/Vaduz');
    }

    public function sarajevo(): Timezone
    {
        return ($this->of)('Europe/Sarajevo');
    }

    public function amsterdam(): Timezone
    {
        return ($this->of)('Europe/Amsterdam');
    }

    public function mariehamn(): Timezone
    {
        return ($this->of)('Europe/Mariehamn');
    }

    public function skopje(): Timezone
    {
        return ($this->of)('Europe/Skopje');
    }

    public function kaliningrad(): Timezone
    {
        return ($this->of)('Europe/Kaliningrad');
    }

    public function bratislava(): Timezone
    {
        return ($this->of)('Europe/Bratislava');
    }

    public function sanMarino(): Timezone
    {
        return ($this->of)('Europe/San_Marino');
    }

    public function busingen(): Timezone
    {
        return ($this->of)('Europe/Busingen');
    }

    public function zaporozhye(): Timezone
    {
        return ($this->of)('Europe/Zaporozhye');
    }

    public function chisinau(): Timezone
    {
        return ($this->of)('Europe/Chisinau');
    }

    public function brussels(): Timezone
    {
        return ($this->of)('Europe/Brussels');
    }

    public function luxembourg(): Timezone
    {
        return ($this->of)('Europe/Luxembourg');
    }

    public function belfast(): Timezone
    {
        return ($this->of)('Europe/Belfast');
    }

    public function vienna(): Timezone
    {
        return ($this->of)('Europe/Vienna');
    }

    public function ljubljana(): Timezone
    {
        return ($this->of)('Europe/Ljubljana');
    }

    public function simferopol(): Timezone
    {
        return ($this->of)('Europe/Simferopol');
    }

    public function dublin(): Timezone
    {
        return ($this->of)('Europe/Dublin');
    }

    public function nicosia(): Timezone
    {
        return ($this->of)('Europe/Nicosia');
    }

    public function zagreb(): Timezone
    {
        return ($this->of)('Europe/Zagreb');
    }

    public function jersey(): Timezone
    {
        return ($this->of)('Europe/Jersey');
    }

    public function madrid(): Timezone
    {
        return ($this->of)('Europe/Madrid');
    }

    public function vatican(): Timezone
    {
        return ($this->of)('Europe/Vatican');
    }

    public function istanbul(): Timezone
    {
        return ($this->of)('Europe/Istanbul');
    }

    public function zurich(): Timezone
    {
        return ($this->of)('Europe/Zurich');
    }

    public function sofia(): Timezone
    {
        return ($this->of)('Europe/Sofia');
    }

    public function volgograd(): Timezone
    {
        return ($this->of)('Europe/Volgograd');
    }

    public function malta(): Timezone
    {
        return ($this->of)('Europe/Malta');
    }

    public function warsaw(): Timezone
    {
        return ($this->of)('Europe/Warsaw');
    }
}
