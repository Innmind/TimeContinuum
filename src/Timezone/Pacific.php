<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\Timezone;

final class Pacific
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
    public function kosrae(): Timezone
    {
        return ($this->of)('Pacific/Kosrae');
    }

    #[\NoDiscard]
    public function enderbury(): Timezone
    {
        return ($this->of)('Pacific/Enderbury');
    }

    #[\NoDiscard]
    public function apia(): Timezone
    {
        return ($this->of)('Pacific/Apia');
    }

    #[\NoDiscard]
    public function noumea(): Timezone
    {
        return ($this->of)('Pacific/Noumea');
    }

    #[\NoDiscard]
    public function chatham(): Timezone
    {
        return ($this->of)('Pacific/Chatham');
    }

    #[\NoDiscard]
    public function wake(): Timezone
    {
        return ($this->of)('Pacific/Wake');
    }

    #[\NoDiscard]
    public function wallis(): Timezone
    {
        return ($this->of)('Pacific/Wallis');
    }

    #[\NoDiscard]
    public function johnston(): Timezone
    {
        return ($this->of)('Pacific/Johnston');
    }

    #[\NoDiscard]
    public function saipan(): Timezone
    {
        return ($this->of)('Pacific/Saipan');
    }

    #[\NoDiscard]
    public function tarawa(): Timezone
    {
        return ($this->of)('Pacific/Tarawa');
    }

    #[\NoDiscard]
    public function pitcairn(): Timezone
    {
        return ($this->of)('Pacific/Pitcairn');
    }

    #[\NoDiscard]
    public function niue(): Timezone
    {
        return ($this->of)('Pacific/Niue');
    }

    #[\NoDiscard]
    public function ponape(): Timezone
    {
        return ($this->of)('Pacific/Ponape');
    }

    #[\NoDiscard]
    public function guam(): Timezone
    {
        return ($this->of)('Pacific/Guam');
    }

    #[\NoDiscard]
    public function auckland(): Timezone
    {
        return ($this->of)('Pacific/Auckland');
    }

    #[\NoDiscard]
    public function pagoPago(): Timezone
    {
        return ($this->of)('Pacific/Pago_Pago');
    }

    #[\NoDiscard]
    public function chuuk(): Timezone
    {
        return ($this->of)('Pacific/Chuuk');
    }

    #[\NoDiscard]
    public function kwajalein(): Timezone
    {
        return ($this->of)('Pacific/Kwajalein');
    }

    #[\NoDiscard]
    public function fakaofo(): Timezone
    {
        return ($this->of)('Pacific/Fakaofo');
    }

    #[\NoDiscard]
    public function majuro(): Timezone
    {
        return ($this->of)('Pacific/Majuro');
    }

    #[\NoDiscard]
    public function guadalcanal(): Timezone
    {
        return ($this->of)('Pacific/Guadalcanal');
    }

    #[\NoDiscard]
    public function efate(): Timezone
    {
        return ($this->of)('Pacific/Efate');
    }

    #[\NoDiscard]
    public function tongatapu(): Timezone
    {
        return ($this->of)('Pacific/Tongatapu');
    }

    #[\NoDiscard]
    public function pohnpei(): Timezone
    {
        return ($this->of)('Pacific/Pohnpei');
    }

    #[\NoDiscard]
    public function honolulu(): Timezone
    {
        return ($this->of)('Pacific/Honolulu');
    }

    #[\NoDiscard]
    public function bougainville(): Timezone
    {
        return ($this->of)('Pacific/Bougainville');
    }

    #[\NoDiscard]
    public function galapagos(): Timezone
    {
        return ($this->of)('Pacific/Galapagos');
    }

    #[\NoDiscard]
    public function gambier(): Timezone
    {
        return ($this->of)('Pacific/Gambier');
    }

    #[\NoDiscard]
    public function palau(): Timezone
    {
        return ($this->of)('Pacific/Palau');
    }

    #[\NoDiscard]
    public function midway(): Timezone
    {
        return ($this->of)('Pacific/Midway');
    }

    #[\NoDiscard]
    public function marquesas(): Timezone
    {
        return ($this->of)('Pacific/Marquesas');
    }

    #[\NoDiscard]
    public function funafuti(): Timezone
    {
        return ($this->of)('Pacific/Funafuti');
    }

    #[\NoDiscard]
    public function norfolk(): Timezone
    {
        return ($this->of)('Pacific/Norfolk');
    }

    #[\NoDiscard]
    public function portMoresby(): Timezone
    {
        return ($this->of)('Pacific/Port_Moresby');
    }

    #[\NoDiscard]
    public function tahiti(): Timezone
    {
        return ($this->of)('Pacific/Tahiti');
    }

    #[\NoDiscard]
    public function fiji(): Timezone
    {
        return ($this->of)('Pacific/Fiji');
    }

    #[\NoDiscard]
    public function kiritimati(): Timezone
    {
        return ($this->of)('Pacific/Kiritimati');
    }

    #[\NoDiscard]
    public function truk(): Timezone
    {
        return ($this->of)('Pacific/Truk');
    }

    #[\NoDiscard]
    public function easter(): Timezone
    {
        return ($this->of)('Pacific/Easter');
    }

    #[\NoDiscard]
    public function rarotonga(): Timezone
    {
        return ($this->of)('Pacific/Rarotonga');
    }

    #[\NoDiscard]
    public function yap(): Timezone
    {
        return ($this->of)('Pacific/Yap');
    }

    #[\NoDiscard]
    public function nauru(): Timezone
    {
        return ($this->of)('Pacific/Nauru');
    }
}
