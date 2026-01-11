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
    #[\NoDiscard]
    public static function new(callable $of): self
    {
        return new self($of);
    }

    #[\NoDiscard]
    public function uzhgorod(): Timezone
    {
        return ($this->of)('Europe/Uzhgorod');
    }

    #[\NoDiscard]
    public function riga(): Timezone
    {
        return ($this->of)('Europe/Riga');
    }

    #[\NoDiscard]
    public function paris(): Timezone
    {
        return ($this->of)('Europe/Paris');
    }

    #[\NoDiscard]
    public function guernsey(): Timezone
    {
        return ($this->of)('Europe/Guernsey');
    }

    #[\NoDiscard]
    public function samara(): Timezone
    {
        return ($this->of)('Europe/Samara');
    }

    #[\NoDiscard]
    public function athens(): Timezone
    {
        return ($this->of)('Europe/Athens');
    }

    #[\NoDiscard]
    public function tirane(): Timezone
    {
        return ($this->of)('Europe/Tirane');
    }

    #[\NoDiscard]
    public function london(): Timezone
    {
        return ($this->of)('Europe/London');
    }

    #[\NoDiscard]
    public function helsinki(): Timezone
    {
        return ($this->of)('Europe/Helsinki');
    }

    #[\NoDiscard]
    public function oslo(): Timezone
    {
        return ($this->of)('Europe/Oslo');
    }

    #[\NoDiscard]
    public function podgorica(): Timezone
    {
        return ($this->of)('Europe/Podgorica');
    }

    #[\NoDiscard]
    public function minsk(): Timezone
    {
        return ($this->of)('Europe/Minsk');
    }

    #[\NoDiscard]
    public function monaco(): Timezone
    {
        return ($this->of)('Europe/Monaco');
    }

    #[\NoDiscard]
    public function lisbon(): Timezone
    {
        return ($this->of)('Europe/Lisbon');
    }

    #[\NoDiscard]
    public function tallinn(): Timezone
    {
        return ($this->of)('Europe/Tallinn');
    }

    #[\NoDiscard]
    public function berlin(): Timezone
    {
        return ($this->of)('Europe/Berlin');
    }

    #[\NoDiscard]
    public function gibraltar(): Timezone
    {
        return ($this->of)('Europe/Gibraltar');
    }

    #[\NoDiscard]
    public function prague(): Timezone
    {
        return ($this->of)('Europe/Prague');
    }

    #[\NoDiscard]
    public function stockholm(): Timezone
    {
        return ($this->of)('Europe/Stockholm');
    }

    #[\NoDiscard]
    public function moscow(): Timezone
    {
        return ($this->of)('Europe/Moscow');
    }

    #[\NoDiscard]
    public function bucharest(): Timezone
    {
        return ($this->of)('Europe/Bucharest');
    }

    #[\NoDiscard]
    public function andorra(): Timezone
    {
        return ($this->of)('Europe/Andorra');
    }

    #[\NoDiscard]
    public function vilnius(): Timezone
    {
        return ($this->of)('Europe/Vilnius');
    }

    #[\NoDiscard]
    public function rome(): Timezone
    {
        return ($this->of)('Europe/Rome');
    }

    #[\NoDiscard]
    public function kiev(): Timezone
    {
        return ($this->of)('Europe/Kiev');
    }

    #[\NoDiscard]
    public function copenhagen(): Timezone
    {
        return ($this->of)('Europe/Copenhagen');
    }

    #[\NoDiscard]
    public function belgrade(): Timezone
    {
        return ($this->of)('Europe/Belgrade');
    }

    #[\NoDiscard]
    public function isleOfMan(): Timezone
    {
        return ($this->of)('Europe/Isle_of_Man');
    }

    #[\NoDiscard]
    public function budapest(): Timezone
    {
        return ($this->of)('Europe/Budapest');
    }

    #[\NoDiscard]
    public function tiraspol(): Timezone
    {
        return ($this->of)('Europe/Tiraspol');
    }

    #[\NoDiscard]
    public function vaduz(): Timezone
    {
        return ($this->of)('Europe/Vaduz');
    }

    #[\NoDiscard]
    public function sarajevo(): Timezone
    {
        return ($this->of)('Europe/Sarajevo');
    }

    #[\NoDiscard]
    public function amsterdam(): Timezone
    {
        return ($this->of)('Europe/Amsterdam');
    }

    #[\NoDiscard]
    public function mariehamn(): Timezone
    {
        return ($this->of)('Europe/Mariehamn');
    }

    #[\NoDiscard]
    public function skopje(): Timezone
    {
        return ($this->of)('Europe/Skopje');
    }

    #[\NoDiscard]
    public function kaliningrad(): Timezone
    {
        return ($this->of)('Europe/Kaliningrad');
    }

    #[\NoDiscard]
    public function bratislava(): Timezone
    {
        return ($this->of)('Europe/Bratislava');
    }

    #[\NoDiscard]
    public function sanMarino(): Timezone
    {
        return ($this->of)('Europe/San_Marino');
    }

    #[\NoDiscard]
    public function busingen(): Timezone
    {
        return ($this->of)('Europe/Busingen');
    }

    #[\NoDiscard]
    public function zaporozhye(): Timezone
    {
        return ($this->of)('Europe/Zaporozhye');
    }

    #[\NoDiscard]
    public function chisinau(): Timezone
    {
        return ($this->of)('Europe/Chisinau');
    }

    #[\NoDiscard]
    public function brussels(): Timezone
    {
        return ($this->of)('Europe/Brussels');
    }

    #[\NoDiscard]
    public function luxembourg(): Timezone
    {
        return ($this->of)('Europe/Luxembourg');
    }

    #[\NoDiscard]
    public function belfast(): Timezone
    {
        return ($this->of)('Europe/Belfast');
    }

    #[\NoDiscard]
    public function vienna(): Timezone
    {
        return ($this->of)('Europe/Vienna');
    }

    #[\NoDiscard]
    public function ljubljana(): Timezone
    {
        return ($this->of)('Europe/Ljubljana');
    }

    #[\NoDiscard]
    public function simferopol(): Timezone
    {
        return ($this->of)('Europe/Simferopol');
    }

    #[\NoDiscard]
    public function dublin(): Timezone
    {
        return ($this->of)('Europe/Dublin');
    }

    #[\NoDiscard]
    public function nicosia(): Timezone
    {
        return ($this->of)('Europe/Nicosia');
    }

    #[\NoDiscard]
    public function zagreb(): Timezone
    {
        return ($this->of)('Europe/Zagreb');
    }

    #[\NoDiscard]
    public function jersey(): Timezone
    {
        return ($this->of)('Europe/Jersey');
    }

    #[\NoDiscard]
    public function madrid(): Timezone
    {
        return ($this->of)('Europe/Madrid');
    }

    #[\NoDiscard]
    public function vatican(): Timezone
    {
        return ($this->of)('Europe/Vatican');
    }

    #[\NoDiscard]
    public function istanbul(): Timezone
    {
        return ($this->of)('Europe/Istanbul');
    }

    #[\NoDiscard]
    public function zurich(): Timezone
    {
        return ($this->of)('Europe/Zurich');
    }

    #[\NoDiscard]
    public function sofia(): Timezone
    {
        return ($this->of)('Europe/Sofia');
    }

    #[\NoDiscard]
    public function volgograd(): Timezone
    {
        return ($this->of)('Europe/Volgograd');
    }

    #[\NoDiscard]
    public function malta(): Timezone
    {
        return ($this->of)('Europe/Malta');
    }

    #[\NoDiscard]
    public function warsaw(): Timezone
    {
        return ($this->of)('Europe/Warsaw');
    }
}
