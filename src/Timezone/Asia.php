<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\Timezone;

final class Asia
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
    public function manila(): Timezone
    {
        return ($this->of)('Asia/Manila');
    }

    #[\NoDiscard]
    public function baghdad(): Timezone
    {
        return ($this->of)('Asia/Baghdad');
    }

    #[\NoDiscard]
    public function ulaanbaatar(): Timezone
    {
        return ($this->of)('Asia/Ulaanbaatar');
    }

    #[\NoDiscard]
    public function almaty(): Timezone
    {
        return ($this->of)('Asia/Almaty');
    }

    #[\NoDiscard]
    public function samarkand(): Timezone
    {
        return ($this->of)('Asia/Samarkand');
    }

    #[\NoDiscard]
    public function ustNera(): Timezone
    {
        return ($this->of)('Asia/Ust-Nera');
    }

    #[\NoDiscard]
    public function pontianak(): Timezone
    {
        return ($this->of)('Asia/Pontianak');
    }

    #[\NoDiscard]
    public function tehran(): Timezone
    {
        return ($this->of)('Asia/Tehran');
    }

    #[\NoDiscard]
    public function saigon(): Timezone
    {
        return ($this->of)('Asia/Saigon');
    }

    #[\NoDiscard]
    public function krasnoyarsk(): Timezone
    {
        return ($this->of)('Asia/Krasnoyarsk');
    }

    #[\NoDiscard]
    public function hebron(): Timezone
    {
        return ($this->of)('Asia/Hebron');
    }

    #[\NoDiscard]
    public function kuching(): Timezone
    {
        return ($this->of)('Asia/Kuching');
    }

    #[\NoDiscard]
    public function katmandu(): Timezone
    {
        return ($this->of)('Asia/Katmandu');
    }

    #[\NoDiscard]
    public function shanghai(): Timezone
    {
        return ($this->of)('Asia/Shanghai');
    }

    #[\NoDiscard]
    public function calcutta(): Timezone
    {
        return ($this->of)('Asia/Calcutta');
    }

    #[\NoDiscard]
    public function jayapura(): Timezone
    {
        return ($this->of)('Asia/Jayapura');
    }

    #[\NoDiscard]
    public function muscat(): Timezone
    {
        return ($this->of)('Asia/Muscat');
    }

    #[\NoDiscard]
    public function omsk(): Timezone
    {
        return ($this->of)('Asia/Omsk');
    }

    #[\NoDiscard]
    public function aqtau(): Timezone
    {
        return ($this->of)('Asia/Aqtau');
    }

    #[\NoDiscard]
    public function khandyga(): Timezone
    {
        return ($this->of)('Asia/Khandyga');
    }

    #[\NoDiscard]
    public function riyadh(): Timezone
    {
        return ($this->of)('Asia/Riyadh');
    }

    #[\NoDiscard]
    public function bangkok(): Timezone
    {
        return ($this->of)('Asia/Bangkok');
    }

    #[\NoDiscard]
    public function thimphu(): Timezone
    {
        return ($this->of)('Asia/Thimphu');
    }

    #[\NoDiscard]
    public function aden(): Timezone
    {
        return ($this->of)('Asia/Aden');
    }

    #[\NoDiscard]
    public function yekaterinburg(): Timezone
    {
        return ($this->of)('Asia/Yekaterinburg');
    }

    #[\NoDiscard]
    public function oral(): Timezone
    {
        return ($this->of)('Asia/Oral');
    }

    #[\NoDiscard]
    public function novokuznetsk(): Timezone
    {
        return ($this->of)('Asia/Novokuznetsk');
    }

    #[\NoDiscard]
    public function bishkek(): Timezone
    {
        return ($this->of)('Asia/Bishkek');
    }

    #[\NoDiscard]
    public function macau(): Timezone
    {
        return ($this->of)('Asia/Macau');
    }

    #[\NoDiscard]
    public function qyzylorda(): Timezone
    {
        return ($this->of)('Asia/Qyzylorda');
    }

    #[\NoDiscard]
    public function seoul(): Timezone
    {
        return ($this->of)('Asia/Seoul');
    }

    #[\NoDiscard]
    public function irkutsk(): Timezone
    {
        return ($this->of)('Asia/Irkutsk');
    }

    #[\NoDiscard]
    public function aqtobe(): Timezone
    {
        return ($this->of)('Asia/Aqtobe');
    }

    #[\NoDiscard]
    public function chongqing(): Timezone
    {
        return ($this->of)('Asia/Chongqing');
    }

    #[\NoDiscard]
    public function kabul(): Timezone
    {
        return ($this->of)('Asia/Kabul');
    }

    #[\NoDiscard]
    public function thimbu(): Timezone
    {
        return ($this->of)('Asia/Thimbu');
    }

    #[\NoDiscard]
    public function karachi(): Timezone
    {
        return ($this->of)('Asia/Karachi');
    }

    #[\NoDiscard]
    public function jakarta(): Timezone
    {
        return ($this->of)('Asia/Jakarta');
    }

    #[\NoDiscard]
    public function harbin(): Timezone
    {
        return ($this->of)('Asia/Harbin');
    }

    #[\NoDiscard]
    public function novosibirsk(): Timezone
    {
        return ($this->of)('Asia/Novosibirsk');
    }

    #[\NoDiscard]
    public function dili(): Timezone
    {
        return ($this->of)('Asia/Dili');
    }

    #[\NoDiscard]
    public function colombo(): Timezone
    {
        return ($this->of)('Asia/Colombo');
    }

    #[\NoDiscard]
    public function ashkhabad(): Timezone
    {
        return ($this->of)('Asia/Ashkhabad');
    }

    #[\NoDiscard]
    public function dacca(): Timezone
    {
        return ($this->of)('Asia/Dacca');
    }

    #[\NoDiscard]
    public function ashgabat(): Timezone
    {
        return ($this->of)('Asia/Ashgabat');
    }

    #[\NoDiscard]
    public function ujungPandang(): Timezone
    {
        return ($this->of)('Asia/Ujung_Pandang');
    }

    #[\NoDiscard]
    public function qatar(): Timezone
    {
        return ($this->of)('Asia/Qatar');
    }

    #[\NoDiscard]
    public function tokyo(): Timezone
    {
        return ($this->of)('Asia/Tokyo');
    }

    #[\NoDiscard]
    public function macao(): Timezone
    {
        return ($this->of)('Asia/Macao');
    }

    #[\NoDiscard]
    public function tashkent(): Timezone
    {
        return ($this->of)('Asia/Tashkent');
    }

    #[\NoDiscard]
    public function baku(): Timezone
    {
        return ($this->of)('Asia/Baku');
    }

    #[\NoDiscard]
    public function pyongyang(): Timezone
    {
        return ($this->of)('Asia/Pyongyang');
    }

    #[\NoDiscard]
    public function tbilisi(): Timezone
    {
        return ($this->of)('Asia/Tbilisi');
    }

    #[\NoDiscard]
    public function amman(): Timezone
    {
        return ($this->of)('Asia/Amman');
    }

    #[\NoDiscard]
    public function vladivostok(): Timezone
    {
        return ($this->of)('Asia/Vladivostok');
    }

    #[\NoDiscard]
    public function damascus(): Timezone
    {
        return ($this->of)('Asia/Damascus');
    }

    #[\NoDiscard]
    public function bahrain(): Timezone
    {
        return ($this->of)('Asia/Bahrain');
    }

    #[\NoDiscard]
    public function vientiane(): Timezone
    {
        return ($this->of)('Asia/Vientiane');
    }

    #[\NoDiscard]
    public function hovd(): Timezone
    {
        return ($this->of)('Asia/Hovd');
    }

    #[\NoDiscard]
    public function kuwait(): Timezone
    {
        return ($this->of)('Asia/Kuwait');
    }

    #[\NoDiscard]
    public function magadan(): Timezone
    {
        return ($this->of)('Asia/Magadan');
    }

    #[\NoDiscard]
    public function ulanBator(): Timezone
    {
        return ($this->of)('Asia/Ulan_Bator');
    }

    #[\NoDiscard]
    public function nicosia(): Timezone
    {
        return ($this->of)('Asia/Nicosia');
    }

    #[\NoDiscard]
    public function telAviv(): Timezone
    {
        return ($this->of)('Asia/Tel_Aviv');
    }

    #[\NoDiscard]
    public function choibalsan(): Timezone
    {
        return ($this->of)('Asia/Choibalsan');
    }

    #[\NoDiscard]
    public function brunei(): Timezone
    {
        return ($this->of)('Asia/Brunei');
    }

    #[\NoDiscard]
    public function kualaLumpur(): Timezone
    {
        return ($this->of)('Asia/Kuala_Lumpur');
    }

    #[\NoDiscard]
    public function kathmandu(): Timezone
    {
        return ($this->of)('Asia/Kathmandu');
    }

    #[\NoDiscard]
    public function srednekolymsk(): Timezone
    {
        return ($this->of)('Asia/Srednekolymsk');
    }

    #[\NoDiscard]
    public function dubai(): Timezone
    {
        return ($this->of)('Asia/Dubai');
    }

    #[\NoDiscard]
    public function yakutsk(): Timezone
    {
        return ($this->of)('Asia/Yakutsk');
    }

    #[\NoDiscard]
    public function beirut(): Timezone
    {
        return ($this->of)('Asia/Beirut');
    }

    #[\NoDiscard]
    public function gaza(): Timezone
    {
        return ($this->of)('Asia/Gaza');
    }

    #[\NoDiscard]
    public function singapore(): Timezone
    {
        return ($this->of)('Asia/Singapore');
    }

    #[\NoDiscard]
    public function rangoon(): Timezone
    {
        return ($this->of)('Asia/Rangoon');
    }

    #[\NoDiscard]
    public function sakhalin(): Timezone
    {
        return ($this->of)('Asia/Sakhalin');
    }

    #[\NoDiscard]
    public function phnomPenh(): Timezone
    {
        return ($this->of)('Asia/Phnom_Penh');
    }

    #[\NoDiscard]
    public function kamchatka(): Timezone
    {
        return ($this->of)('Asia/Kamchatka');
    }

    #[\NoDiscard]
    public function yerevan(): Timezone
    {
        return ($this->of)('Asia/Yerevan');
    }

    #[\NoDiscard]
    public function chungking(): Timezone
    {
        return ($this->of)('Asia/Chungking');
    }

    #[\NoDiscard]
    public function hoChiMinh(): Timezone
    {
        return ($this->of)('Asia/Ho_Chi_Minh');
    }

    #[\NoDiscard]
    public function chita(): Timezone
    {
        return ($this->of)('Asia/Chita');
    }

    #[\NoDiscard]
    public function istanbul(): Timezone
    {
        return ($this->of)('Asia/Istanbul');
    }

    #[\NoDiscard]
    public function hongKong(): Timezone
    {
        return ($this->of)('Asia/Hong_Kong');
    }

    #[\NoDiscard]
    public function dhaka(): Timezone
    {
        return ($this->of)('Asia/Dhaka');
    }

    #[\NoDiscard]
    public function jerusalem(): Timezone
    {
        return ($this->of)('Asia/Jerusalem');
    }

    #[\NoDiscard]
    public function makassar(): Timezone
    {
        return ($this->of)('Asia/Makassar');
    }

    #[\NoDiscard]
    public function kolkata(): Timezone
    {
        return ($this->of)('Asia/Kolkata');
    }

    #[\NoDiscard]
    public function taipei(): Timezone
    {
        return ($this->of)('Asia/Taipei');
    }

    #[\NoDiscard]
    public function dushanbe(): Timezone
    {
        return ($this->of)('Asia/Dushanbe');
    }

    #[\NoDiscard]
    public function anadyr(): Timezone
    {
        return ($this->of)('Asia/Anadyr');
    }
}
