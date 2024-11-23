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
    public static function new(callable $of): self
    {
        return new self($of);
    }

    public function manila(): Timezone
    {
        return ($this->of)('Asia/Manila');
    }

    public function baghdad(): Timezone
    {
        return ($this->of)('Asia/Baghdad');
    }

    public function ulaanbaatar(): Timezone
    {
        return ($this->of)('Asia/Ulaanbaatar');
    }

    public function almaty(): Timezone
    {
        return ($this->of)('Asia/Almaty');
    }

    public function samarkand(): Timezone
    {
        return ($this->of)('Asia/Samarkand');
    }

    public function ustNera(): Timezone
    {
        return ($this->of)('Asia/Ust-Nera');
    }

    public function pontianak(): Timezone
    {
        return ($this->of)('Asia/Pontianak');
    }

    public function tehran(): Timezone
    {
        return ($this->of)('Asia/Tehran');
    }

    public function saigon(): Timezone
    {
        return ($this->of)('Asia/Saigon');
    }

    public function krasnoyarsk(): Timezone
    {
        return ($this->of)('Asia/Krasnoyarsk');
    }

    public function hebron(): Timezone
    {
        return ($this->of)('Asia/Hebron');
    }

    public function kuching(): Timezone
    {
        return ($this->of)('Asia/Kuching');
    }

    public function katmandu(): Timezone
    {
        return ($this->of)('Asia/Katmandu');
    }

    public function shanghai(): Timezone
    {
        return ($this->of)('Asia/Shanghai');
    }

    public function calcutta(): Timezone
    {
        return ($this->of)('Asia/Calcutta');
    }

    public function jayapura(): Timezone
    {
        return ($this->of)('Asia/Jayapura');
    }

    public function muscat(): Timezone
    {
        return ($this->of)('Asia/Muscat');
    }

    public function omsk(): Timezone
    {
        return ($this->of)('Asia/Omsk');
    }

    public function aqtau(): Timezone
    {
        return ($this->of)('Asia/Aqtau');
    }

    public function khandyga(): Timezone
    {
        return ($this->of)('Asia/Khandyga');
    }

    public function riyadh(): Timezone
    {
        return ($this->of)('Asia/Riyadh');
    }

    public function bangkok(): Timezone
    {
        return ($this->of)('Asia/Bangkok');
    }

    public function thimphu(): Timezone
    {
        return ($this->of)('Asia/Thimphu');
    }

    public function aden(): Timezone
    {
        return ($this->of)('Asia/Aden');
    }

    public function yekaterinburg(): Timezone
    {
        return ($this->of)('Asia/Yekaterinburg');
    }

    public function oral(): Timezone
    {
        return ($this->of)('Asia/Oral');
    }

    public function novokuznetsk(): Timezone
    {
        return ($this->of)('Asia/Novokuznetsk');
    }

    public function bishkek(): Timezone
    {
        return ($this->of)('Asia/Bishkek');
    }

    public function macau(): Timezone
    {
        return ($this->of)('Asia/Macau');
    }

    public function qyzylorda(): Timezone
    {
        return ($this->of)('Asia/Qyzylorda');
    }

    public function seoul(): Timezone
    {
        return ($this->of)('Asia/Seoul');
    }

    public function irkutsk(): Timezone
    {
        return ($this->of)('Asia/Irkutsk');
    }

    public function aqtobe(): Timezone
    {
        return ($this->of)('Asia/Aqtobe');
    }

    public function chongqing(): Timezone
    {
        return ($this->of)('Asia/Chongqing');
    }

    public function kabul(): Timezone
    {
        return ($this->of)('Asia/Kabul');
    }

    public function thimbu(): Timezone
    {
        return ($this->of)('Asia/Thimbu');
    }

    public function karachi(): Timezone
    {
        return ($this->of)('Asia/Karachi');
    }

    public function jakarta(): Timezone
    {
        return ($this->of)('Asia/Jakarta');
    }

    public function harbin(): Timezone
    {
        return ($this->of)('Asia/Harbin');
    }

    public function novosibirsk(): Timezone
    {
        return ($this->of)('Asia/Novosibirsk');
    }

    public function dili(): Timezone
    {
        return ($this->of)('Asia/Dili');
    }

    public function colombo(): Timezone
    {
        return ($this->of)('Asia/Colombo');
    }

    public function ashkhabad(): Timezone
    {
        return ($this->of)('Asia/Ashkhabad');
    }

    public function dacca(): Timezone
    {
        return ($this->of)('Asia/Dacca');
    }

    public function ashgabat(): Timezone
    {
        return ($this->of)('Asia/Ashgabat');
    }

    public function ujungPandang(): Timezone
    {
        return ($this->of)('Asia/Ujung_Pandang');
    }

    public function qatar(): Timezone
    {
        return ($this->of)('Asia/Qatar');
    }

    public function tokyo(): Timezone
    {
        return ($this->of)('Asia/Tokyo');
    }

    public function macao(): Timezone
    {
        return ($this->of)('Asia/Macao');
    }

    public function tashkent(): Timezone
    {
        return ($this->of)('Asia/Tashkent');
    }

    public function baku(): Timezone
    {
        return ($this->of)('Asia/Baku');
    }

    public function pyongyang(): Timezone
    {
        return ($this->of)('Asia/Pyongyang');
    }

    public function tbilisi(): Timezone
    {
        return ($this->of)('Asia/Tbilisi');
    }

    public function amman(): Timezone
    {
        return ($this->of)('Asia/Amman');
    }

    public function vladivostok(): Timezone
    {
        return ($this->of)('Asia/Vladivostok');
    }

    public function damascus(): Timezone
    {
        return ($this->of)('Asia/Damascus');
    }

    public function bahrain(): Timezone
    {
        return ($this->of)('Asia/Bahrain');
    }

    public function vientiane(): Timezone
    {
        return ($this->of)('Asia/Vientiane');
    }

    public function hovd(): Timezone
    {
        return ($this->of)('Asia/Hovd');
    }

    public function kuwait(): Timezone
    {
        return ($this->of)('Asia/Kuwait');
    }

    public function magadan(): Timezone
    {
        return ($this->of)('Asia/Magadan');
    }

    public function ulanBator(): Timezone
    {
        return ($this->of)('Asia/Ulan_Bator');
    }

    public function nicosia(): Timezone
    {
        return ($this->of)('Asia/Nicosia');
    }

    public function telAviv(): Timezone
    {
        return ($this->of)('Asia/Tel_Aviv');
    }

    public function choibalsan(): Timezone
    {
        return ($this->of)('Asia/Choibalsan');
    }

    public function brunei(): Timezone
    {
        return ($this->of)('Asia/Brunei');
    }

    public function kualaLumpur(): Timezone
    {
        return ($this->of)('Asia/Kuala_Lumpur');
    }

    public function kathmandu(): Timezone
    {
        return ($this->of)('Asia/Kathmandu');
    }

    public function srednekolymsk(): Timezone
    {
        return ($this->of)('Asia/Srednekolymsk');
    }

    public function dubai(): Timezone
    {
        return ($this->of)('Asia/Dubai');
    }

    public function yakutsk(): Timezone
    {
        return ($this->of)('Asia/Yakutsk');
    }

    public function beirut(): Timezone
    {
        return ($this->of)('Asia/Beirut');
    }

    public function gaza(): Timezone
    {
        return ($this->of)('Asia/Gaza');
    }

    public function singapore(): Timezone
    {
        return ($this->of)('Asia/Singapore');
    }

    public function rangoon(): Timezone
    {
        return ($this->of)('Asia/Rangoon');
    }

    public function sakhalin(): Timezone
    {
        return ($this->of)('Asia/Sakhalin');
    }

    public function phnomPenh(): Timezone
    {
        return ($this->of)('Asia/Phnom_Penh');
    }

    public function kamchatka(): Timezone
    {
        return ($this->of)('Asia/Kamchatka');
    }

    public function yerevan(): Timezone
    {
        return ($this->of)('Asia/Yerevan');
    }

    public function chungking(): Timezone
    {
        return ($this->of)('Asia/Chungking');
    }

    public function hoChiMinh(): Timezone
    {
        return ($this->of)('Asia/Ho_Chi_Minh');
    }

    public function chita(): Timezone
    {
        return ($this->of)('Asia/Chita');
    }

    public function istanbul(): Timezone
    {
        return ($this->of)('Asia/Istanbul');
    }

    public function hongKong(): Timezone
    {
        return ($this->of)('Asia/Hong_Kong');
    }

    public function dhaka(): Timezone
    {
        return ($this->of)('Asia/Dhaka');
    }

    public function jerusalem(): Timezone
    {
        return ($this->of)('Asia/Jerusalem');
    }

    public function makassar(): Timezone
    {
        return ($this->of)('Asia/Makassar');
    }

    public function kolkata(): Timezone
    {
        return ($this->of)('Asia/Kolkata');
    }

    public function taipei(): Timezone
    {
        return ($this->of)('Asia/Taipei');
    }

    public function dushanbe(): Timezone
    {
        return ($this->of)('Asia/Dushanbe');
    }

    public function anadyr(): Timezone
    {
        return ($this->of)('Asia/Anadyr');
    }
}
