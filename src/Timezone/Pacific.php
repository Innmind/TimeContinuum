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
    public static function new(callable $of): self
    {
        return new self($of);
    }

    public function kosrae(): Timezone
    {
        return ($this->of)('Pacific/Kosrae');
    }

    public function enderbury(): Timezone
    {
        return ($this->of)('Pacific/Enderbury');
    }

    public function apia(): Timezone
    {
        return ($this->of)('Pacific/Apia');
    }

    public function noumea(): Timezone
    {
        return ($this->of)('Pacific/Noumea');
    }

    public function chatham(): Timezone
    {
        return ($this->of)('Pacific/Chatham');
    }

    public function wake(): Timezone
    {
        return ($this->of)('Pacific/Wake');
    }

    public function wallis(): Timezone
    {
        return ($this->of)('Pacific/Wallis');
    }

    public function johnston(): Timezone
    {
        return ($this->of)('Pacific/Johnston');
    }

    public function saipan(): Timezone
    {
        return ($this->of)('Pacific/Saipan');
    }

    public function tarawa(): Timezone
    {
        return ($this->of)('Pacific/Tarawa');
    }

    public function pitcairn(): Timezone
    {
        return ($this->of)('Pacific/Pitcairn');
    }

    public function niue(): Timezone
    {
        return ($this->of)('Pacific/Niue');
    }

    public function ponape(): Timezone
    {
        return ($this->of)('Pacific/Ponape');
    }

    public function guam(): Timezone
    {
        return ($this->of)('Pacific/Guam');
    }

    public function auckland(): Timezone
    {
        return ($this->of)('Pacific/Auckland');
    }

    public function pagoPago(): Timezone
    {
        return ($this->of)('Pacific/Pago_Pago');
    }

    public function chuuk(): Timezone
    {
        return ($this->of)('Pacific/Chuuk');
    }

    public function kwajalein(): Timezone
    {
        return ($this->of)('Pacific/Kwajalein');
    }

    public function fakaofo(): Timezone
    {
        return ($this->of)('Pacific/Fakaofo');
    }

    public function majuro(): Timezone
    {
        return ($this->of)('Pacific/Majuro');
    }

    public function guadalcanal(): Timezone
    {
        return ($this->of)('Pacific/Guadalcanal');
    }

    public function efate(): Timezone
    {
        return ($this->of)('Pacific/Efate');
    }

    public function tongatapu(): Timezone
    {
        return ($this->of)('Pacific/Tongatapu');
    }

    public function pohnpei(): Timezone
    {
        return ($this->of)('Pacific/Pohnpei');
    }

    public function honolulu(): Timezone
    {
        return ($this->of)('Pacific/Honolulu');
    }

    public function bougainville(): Timezone
    {
        return ($this->of)('Pacific/Bougainville');
    }

    public function galapagos(): Timezone
    {
        return ($this->of)('Pacific/Galapagos');
    }

    public function gambier(): Timezone
    {
        return ($this->of)('Pacific/Gambier');
    }

    public function palau(): Timezone
    {
        return ($this->of)('Pacific/Palau');
    }

    public function midway(): Timezone
    {
        return ($this->of)('Pacific/Midway');
    }

    public function marquesas(): Timezone
    {
        return ($this->of)('Pacific/Marquesas');
    }

    public function funafuti(): Timezone
    {
        return ($this->of)('Pacific/Funafuti');
    }

    public function norfolk(): Timezone
    {
        return ($this->of)('Pacific/Norfolk');
    }

    public function portMoresby(): Timezone
    {
        return ($this->of)('Pacific/Port_Moresby');
    }

    public function tahiti(): Timezone
    {
        return ($this->of)('Pacific/Tahiti');
    }

    public function fiji(): Timezone
    {
        return ($this->of)('Pacific/Fiji');
    }

    public function kiritimati(): Timezone
    {
        return ($this->of)('Pacific/Kiritimati');
    }

    public function truk(): Timezone
    {
        return ($this->of)('Pacific/Truk');
    }

    public function easter(): Timezone
    {
        return ($this->of)('Pacific/Easter');
    }

    public function rarotonga(): Timezone
    {
        return ($this->of)('Pacific/Rarotonga');
    }

    public function yap(): Timezone
    {
        return ($this->of)('Pacific/Yap');
    }

    public function nauru(): Timezone
    {
        return ($this->of)('Pacific/Nauru');
    }
}
