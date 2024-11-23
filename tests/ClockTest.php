<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum;

use Innmind\TimeContinuum\{
    Clock,
    Format,
};
use PHPUnit\Framework\{
    TestCase,
    Attributes\DataProvider,
};
use Psr\Log\{
    LoggerInterface,
    LoggerTrait,
};
use Innmind\BlackBox\{
    PHPUnit\BlackBox,
    Set,
};
use Fixtures\Innmind\TimeContinuum\PointInTime;

class ClockTest extends TestCase
{
    use BlackBox;

    public function testUtcIsDefaultTimezones()
    {
        $live = Clock::live();

        $utc = $live->switch(static fn($timezones) => $timezones->utc());

        $this->assertSame(
            $live->now()->format(Format::of('Y-m-d H:i.P')),
            $utc->now()->format(Format::of('Y-m-d H:i.P')),
        );
    }

    #[DataProvider('zones')]
    public function testSwitchTimezone($switch)
    {
        $live = Clock::live();
        $clock = $live->switch($switch);

        $this->assertNotEquals($live, $clock);
        $this->assertIsString($clock->now()->format(Format::iso8601()));
    }

    public function testTimezoneDifferences()
    {
        $this
            ->forAll(
                Set\Elements::of(...\array_values(\iterator_to_array(self::america())))
                    ->map(static fn($switch) => $switch[0]),
                Set\Either::any(
                    Set\Elements::of(...\array_values(\iterator_to_array(self::africa()))),
                    Set\Elements::of(...\array_values(\iterator_to_array(self::europe()))),
                    Set\Elements::of(...\array_values(\iterator_to_array(self::india()))),
                    Set\Elements::of(...\array_values(\iterator_to_array(self::asia()))),
                    Set\Elements::of(...\array_values(\iterator_to_array(self::australia()))),
                )
                    ->map(static fn($switch) => $switch[0]),
            )
            ->then(function($america, $other) {
                $america = Clock::live()->switch($america);
                $other = Clock::live()->switch($other);

                $this->assertNotSame(
                    $america->now()->toString(),
                    $other->now()->toString(),
                );
            });
    }

    public function testFrozenClockDoesntChangeItsTimezone()
    {
        $this
            ->forAll(PointInTime::any())
            ->then(function($point) {
                $frozen = Clock::frozen($point);
                $clock = $frozen->switch(static fn($timezones) => $timezones->europe()->paris());

                $this->assertSame(
                    $point->toString(),
                    $clock->now()->toString(),
                );
                $this->assertSame(
                    $frozen->now()->toString(),
                    $clock->now()->toString(),
                );
                $this->assertSame(
                    $frozen->now()->toString(),
                    $clock->at($point->toString())->match(
                        static fn($point) => $point->toString(),
                        static fn() => null,
                    ),
                );
            });
    }

    public function testLoggerUseNewTimezone()
    {
        $this
            ->forAll(
                Set\Elements::of(...\array_values(\iterator_to_array(self::america())))
                    ->map(static fn($switch) => $switch[0]),
                Set\Either::any(
                    Set\Elements::of(...\array_values(\iterator_to_array(self::africa()))),
                    Set\Elements::of(...\array_values(\iterator_to_array(self::europe()))),
                    Set\Elements::of(...\array_values(\iterator_to_array(self::india()))),
                    Set\Elements::of(...\array_values(\iterator_to_array(self::asia()))),
                    Set\Elements::of(...\array_values(\iterator_to_array(self::australia()))),
                )
                    ->map(static fn($switch) => $switch[0]),
            )
            ->then(function($america, $other) {
                $gather = new class implements LoggerInterface {
                    use LoggerTrait;

                    public array $logs = [];

                    public function log($level, string|\Stringable $message, array $context = []): void
                    {
                        $this->logs[] = $context;
                    }
                };
                $america = Clock::logger(Clock::live(), $gather)->switch($america);
                $new = $america->switch($other);

                $now1 = $america->now();
                $now2 = $new->now();

                $this->assertSame(
                    $now1->toString(),
                    $gather->logs[0]['point'],
                );
                $this->assertSame(
                    $now2->toString(),
                    $gather->logs[1]['point'],
                );
                $this->assertNotSame(
                    $gather->logs[0],
                    $gather->logs[1],
                );
            });
    }

    public static function zones()
    {
        yield from self::africa();
        yield from self::america();
        yield from self::antartica();
        yield 'longyearbyen' => [static fn($timezones) => $timezones->arctic()->longyearbyen()];
        yield from self::asia();
        yield from self::atlantic();
        yield from self::australia();
        yield from self::europe();
        yield from self::india();
        yield from self::pacific();
    }

    public static function africa()
    {
        yield 'lome' => [static fn($timezones) => $timezones->africa()->lome()];
        yield 'ceuta' => [static fn($timezones) => $timezones->africa()->ceuta()];
        yield 'elAaiun' => [static fn($timezones) => $timezones->africa()->elAaiun()];
        yield 'portoNovo' => [static fn($timezones) => $timezones->africa()->portoNovo()];
        yield 'djibouti' => [static fn($timezones) => $timezones->africa()->djibouti()];
        yield 'windhoek' => [static fn($timezones) => $timezones->africa()->windhoek()];
        yield 'algiers' => [static fn($timezones) => $timezones->africa()->algiers()];
        yield 'ouagadougou' => [static fn($timezones) => $timezones->africa()->ouagadougou()];
        yield 'bamako' => [static fn($timezones) => $timezones->africa()->bamako()];
        yield 'harare' => [static fn($timezones) => $timezones->africa()->harare()];
        yield 'bujumbura' => [static fn($timezones) => $timezones->africa()->bujumbura()];
        yield 'douala' => [static fn($timezones) => $timezones->africa()->douala()];
        yield 'brazzaville' => [static fn($timezones) => $timezones->africa()->brazzaville()];
        yield 'tripoli' => [static fn($timezones) => $timezones->africa()->tripoli()];
        yield 'casablanca' => [static fn($timezones) => $timezones->africa()->casablanca()];
        yield 'niamey' => [static fn($timezones) => $timezones->africa()->niamey()];
        yield 'mbabane' => [static fn($timezones) => $timezones->africa()->mbabane()];
        yield 'blantyre' => [static fn($timezones) => $timezones->africa()->blantyre()];
        yield 'conakry' => [static fn($timezones) => $timezones->africa()->conakry()];
        yield 'khartoum' => [static fn($timezones) => $timezones->africa()->khartoum()];
        yield 'luanda' => [static fn($timezones) => $timezones->africa()->luanda()];
        yield 'libreville' => [static fn($timezones) => $timezones->africa()->libreville()];
        yield 'maseru' => [static fn($timezones) => $timezones->africa()->maseru()];
        yield 'lusaka' => [static fn($timezones) => $timezones->africa()->lusaka()];
        yield 'darEsSalaam' => [static fn($timezones) => $timezones->africa()->darEsSalaam()];
        yield 'nairobi' => [static fn($timezones) => $timezones->africa()->nairobi()];
        yield 'banjul' => [static fn($timezones) => $timezones->africa()->banjul()];
        yield 'bissau' => [static fn($timezones) => $timezones->africa()->bissau()];
        yield 'nouakchott' => [static fn($timezones) => $timezones->africa()->nouakchott()];
        yield 'johannesburg' => [static fn($timezones) => $timezones->africa()->johannesburg()];
        yield 'timbuktu' => [static fn($timezones) => $timezones->africa()->timbuktu()];
        yield 'saoTome' => [static fn($timezones) => $timezones->africa()->saoTome()];
        yield 'freetown' => [static fn($timezones) => $timezones->africa()->freetown()];
        yield 'kampala' => [static fn($timezones) => $timezones->africa()->kampala()];
        yield 'dakar' => [static fn($timezones) => $timezones->africa()->dakar()];
        yield 'lagos' => [static fn($timezones) => $timezones->africa()->lagos()];
        yield 'cairo' => [static fn($timezones) => $timezones->africa()->cairo()];
        yield 'mogadishu' => [static fn($timezones) => $timezones->africa()->mogadishu()];
        yield 'gaborone' => [static fn($timezones) => $timezones->africa()->gaborone()];
        yield 'tunis' => [static fn($timezones) => $timezones->africa()->tunis()];
        yield 'kigali' => [static fn($timezones) => $timezones->africa()->kigali()];
        yield 'malabo' => [static fn($timezones) => $timezones->africa()->malabo()];
        yield 'abidjan' => [static fn($timezones) => $timezones->africa()->abidjan()];
        yield 'accra' => [static fn($timezones) => $timezones->africa()->accra()];
        yield 'asmera' => [static fn($timezones) => $timezones->africa()->asmera()];
        yield 'ndjamena' => [static fn($timezones) => $timezones->africa()->ndjamena()];
        yield 'lubumbashi' => [static fn($timezones) => $timezones->africa()->lubumbashi()];
        yield 'juba' => [static fn($timezones) => $timezones->africa()->juba()];
        yield 'monrovia' => [static fn($timezones) => $timezones->africa()->monrovia()];
        yield 'maputo' => [static fn($timezones) => $timezones->africa()->maputo()];
        yield 'kinshasa' => [static fn($timezones) => $timezones->africa()->kinshasa()];
        yield 'asmara' => [static fn($timezones) => $timezones->africa()->asmara()];
        yield 'bangui' => [static fn($timezones) => $timezones->africa()->bangui()];
        yield 'addisAbaba' => [static fn($timezones) => $timezones->africa()->addisAbaba()];
    }

    public static function america()
    {
        yield 'rioGallegos' => [static fn($timezones) => $timezones->america()->argentina()->rioGallegos()];
        yield 'mendoza' => [static fn($timezones) => $timezones->america()->argentina()->mendoza()];
        yield 'buenosAires' => [static fn($timezones) => $timezones->america()->argentina()->buenosAires()];
        yield 'ushuaia' => [static fn($timezones) => $timezones->america()->argentina()->ushuaia()];
        yield 'sanJuan' => [static fn($timezones) => $timezones->america()->argentina()->sanJuan()];
        yield 'laRioja' => [static fn($timezones) => $timezones->america()->argentina()->laRioja()];
        yield 'salta' => [static fn($timezones) => $timezones->america()->argentina()->salta()];
        yield 'sanLuis' => [static fn($timezones) => $timezones->america()->argentina()->sanLuis()];
        yield 'jujuy' => [static fn($timezones) => $timezones->america()->argentina()->jujuy()];
        yield 'tucuman' => [static fn($timezones) => $timezones->america()->argentina()->tucuman()];
        yield 'comodRivadavia' => [static fn($timezones) => $timezones->america()->argentina()->comodRivadavia()];
        yield 'argantina catamarca' => [static fn($timezones) => $timezones->america()->argentina()->catamarca()];
        yield 'cordoba' => [static fn($timezones) => $timezones->america()->argentina()->cordoba()];
        yield 'vincennes' => [static fn($timezones) => $timezones->america()->indiana()->vincennes()];
        yield 'marengo' => [static fn($timezones) => $timezones->america()->indiana()->marengo()];
        yield 'tellCity' => [static fn($timezones) => $timezones->america()->indiana()->tellCity()];
        yield 'knox' => [static fn($timezones) => $timezones->america()->indiana()->knox()];
        yield 'vevay' => [static fn($timezones) => $timezones->america()->indiana()->vevay()];
        yield 'indianapolis' => [static fn($timezones) => $timezones->america()->indiana()->indianapolis()];
        yield 'petersburg' => [static fn($timezones) => $timezones->america()->indiana()->petersburg()];
        yield 'winamac' => [static fn($timezones) => $timezones->america()->indiana()->winamac()];
        yield 'beulah' => [static fn($timezones) => $timezones->america()->northDakota()->beulah()];
        yield 'newSalem' => [static fn($timezones) => $timezones->america()->northDakota()->newSalem()];
        yield 'center' => [static fn($timezones) => $timezones->america()->northDakota()->center()];
        yield 'montreal' => [static fn($timezones) => $timezones->america()->montreal()];
        yield 'guatemala' => [static fn($timezones) => $timezones->america()->guatemala()];
        yield 'boaVista' => [static fn($timezones) => $timezones->america()->boaVista()];
        yield 'portoAcre' => [static fn($timezones) => $timezones->america()->portoAcre()];
        yield 'winnipeg' => [static fn($timezones) => $timezones->america()->winnipeg()];
        yield 'santiago' => [static fn($timezones) => $timezones->america()->santiago()];
        yield 'virgin' => [static fn($timezones) => $timezones->america()->virgin()];
        yield 'moncton' => [static fn($timezones) => $timezones->america()->moncton()];
        yield 'noronha' => [static fn($timezones) => $timezones->america()->noronha()];
        yield 'recife' => [static fn($timezones) => $timezones->america()->recife()];
        yield 'saintKitts' => [static fn($timezones) => $timezones->america()->saintKitts()];
        yield 'rankinInlet' => [static fn($timezones) => $timezones->america()->rankinInlet()];
        yield 'jamaica' => [static fn($timezones) => $timezones->america()->jamaica()];
        yield 'lima' => [static fn($timezones) => $timezones->america()->lima()];
        yield 'rosario' => [static fn($timezones) => $timezones->america()->rosario()];
        yield 'cambridgeBay' => [static fn($timezones) => $timezones->america()->cambridgeBay()];
        yield 'coralHarbour' => [static fn($timezones) => $timezones->america()->coralHarbour()];
        yield 'fortWayne' => [static fn($timezones) => $timezones->america()->fortWayne()];
        yield 'nassau' => [static fn($timezones) => $timezones->america()->nassau()];
        yield 'mazatlan' => [static fn($timezones) => $timezones->america()->mazatlan()];
        yield 'grandTurk' => [static fn($timezones) => $timezones->america()->grandTurk()];
        yield 'merida' => [static fn($timezones) => $timezones->america()->merida()];
        yield 'ensenada' => [static fn($timezones) => $timezones->america()->ensenada()];
        yield 'rainyRiver' => [static fn($timezones) => $timezones->america()->rainyRiver()];
        yield 'bahiaBanderas' => [static fn($timezones) => $timezones->america()->bahiaBanderas()];
        yield 'guadeloupe' => [static fn($timezones) => $timezones->america()->guadeloupe()];
        yield 'cuiaba' => [static fn($timezones) => $timezones->america()->cuiaba()];
        yield 'scoresbysund' => [static fn($timezones) => $timezones->america()->scoresbysund()];
        yield 'maceio' => [static fn($timezones) => $timezones->america()->maceio()];
        yield 'curacao' => [static fn($timezones) => $timezones->america()->curacao()];
        yield 'aruba' => [static fn($timezones) => $timezones->america()->aruba()];
        yield 'monterrey' => [static fn($timezones) => $timezones->america()->monterrey()];
        yield 'hermosillo' => [static fn($timezones) => $timezones->america()->hermosillo()];
        yield 'guayaquil' => [static fn($timezones) => $timezones->america()->guayaquil()];
        yield 'managua' => [static fn($timezones) => $timezones->america()->managua()];
        yield 'matamoros' => [static fn($timezones) => $timezones->america()->matamoros()];
        yield 'losAngeles' => [static fn($timezones) => $timezones->america()->losAngeles()];
        yield 'tegucigalpa' => [static fn($timezones) => $timezones->america()->tegucigalpa()];
        yield 'monticello' => [static fn($timezones) => $timezones->america()->monticello()];
        yield 'nome' => [static fn($timezones) => $timezones->america()->nome()];
        yield 'montevideo' => [static fn($timezones) => $timezones->america()->montevideo()];
        yield 'gooseBay' => [static fn($timezones) => $timezones->america()->gooseBay()];
        yield 'boise' => [static fn($timezones) => $timezones->america()->boise()];
        yield 'belem' => [static fn($timezones) => $timezones->america()->belem()];
        yield 'atikokan' => [static fn($timezones) => $timezones->america()->atikokan()];
        yield 'swiftCurrent' => [static fn($timezones) => $timezones->america()->swiftCurrent()];
        yield 'detroit' => [static fn($timezones) => $timezones->america()->detroit()];
        yield 'laPaz' => [static fn($timezones) => $timezones->america()->laPaz()];
        yield 'chicago' => [static fn($timezones) => $timezones->america()->chicago()];
        yield 'creston' => [static fn($timezones) => $timezones->america()->creston()];
        yield 'nipigon' => [static fn($timezones) => $timezones->america()->nipigon()];
        yield 'costaRica' => [static fn($timezones) => $timezones->america()->costaRica()];
        yield 'halifax' => [static fn($timezones) => $timezones->america()->halifax()];
        yield 'yellowknife' => [static fn($timezones) => $timezones->america()->yellowknife()];
        yield 'puertoRico' => [static fn($timezones) => $timezones->america()->puertoRico()];
        yield 'edmonton' => [static fn($timezones) => $timezones->america()->edmonton()];
        yield 'mexicoCity' => [static fn($timezones) => $timezones->america()->mexicoCity()];
        yield 'saoPaulo' => [static fn($timezones) => $timezones->america()->saoPaulo()];
        yield 'yakutat' => [static fn($timezones) => $timezones->america()->yakutat()];
        yield 'saintThomas' => [static fn($timezones) => $timezones->america()->saintThomas()];
        yield 'chihuahua' => [static fn($timezones) => $timezones->america()->chihuahua()];
        yield 'grenada' => [static fn($timezones) => $timezones->america()->grenada()];
        yield 'elSalvador' => [static fn($timezones) => $timezones->america()->elSalvador()];
        yield 'santoDomingo' => [static fn($timezones) => $timezones->america()->santoDomingo()];
        yield 'montserrat' => [static fn($timezones) => $timezones->america()->montserrat()];
        yield 'portoVelho' => [static fn($timezones) => $timezones->america()->portoVelho()];
        yield 'panama' => [static fn($timezones) => $timezones->america()->panama()];
        yield 'antigua' => [static fn($timezones) => $timezones->america()->antigua()];
        yield 'santarem' => [static fn($timezones) => $timezones->america()->santarem()];
        yield 'dawson' => [static fn($timezones) => $timezones->america()->dawson()];
        yield 'saintBarthelemy' => [static fn($timezones) => $timezones->america()->saintBarthelemy()];
        yield 'iqaluit' => [static fn($timezones) => $timezones->america()->iqaluit()];
        yield 'eirunepe' => [static fn($timezones) => $timezones->america()->eirunepe()];
        yield 'inuvik' => [static fn($timezones) => $timezones->america()->inuvik()];
        yield 'anguilla' => [static fn($timezones) => $timezones->america()->anguilla()];
        yield 'portOfSpain' => [static fn($timezones) => $timezones->america()->portOfSpain()];
        yield 'araguaina' => [static fn($timezones) => $timezones->america()->araguaina()];
        yield 'guyana' => [static fn($timezones) => $timezones->america()->guyana()];
        yield 'fortaleza' => [static fn($timezones) => $timezones->america()->fortaleza()];
        yield 'blancSablon' => [static fn($timezones) => $timezones->america()->blancSablon()];
        yield 'juneau' => [static fn($timezones) => $timezones->america()->juneau()];
        yield 'cayman' => [static fn($timezones) => $timezones->america()->cayman()];
        yield 'menominee' => [static fn($timezones) => $timezones->america()->menominee()];
        yield 'cayenne' => [static fn($timezones) => $timezones->america()->cayenne()];
        yield 'pangnirtung' => [static fn($timezones) => $timezones->america()->pangnirtung()];
        yield 'metlakatla' => [static fn($timezones) => $timezones->america()->metlakatla()];
        yield 'asuncion' => [static fn($timezones) => $timezones->america()->asuncion()];
        yield 'saintLucia' => [static fn($timezones) => $timezones->america()->saintLucia()];
        yield 'saintVincent' => [static fn($timezones) => $timezones->america()->saintVincent()];
        yield 'martinique' => [static fn($timezones) => $timezones->america()->martinique()];
        yield 'kralendijk' => [static fn($timezones) => $timezones->america()->kralendijk()];
        yield 'newYork' => [static fn($timezones) => $timezones->america()->newYork()];
        yield 'vancouver' => [static fn($timezones) => $timezones->america()->vancouver()];
        yield 'bogota' => [static fn($timezones) => $timezones->america()->bogota()];
        yield 'dominica' => [static fn($timezones) => $timezones->america()->dominica()];
        yield 'danmarkshavn' => [static fn($timezones) => $timezones->america()->danmarkshavn()];
        yield 'anchorage' => [static fn($timezones) => $timezones->america()->anchorage()];
        yield 'marigot' => [static fn($timezones) => $timezones->america()->marigot()];
        yield 'rioBranco' => [static fn($timezones) => $timezones->america()->rioBranco()];
        yield 'paramaribo' => [static fn($timezones) => $timezones->america()->paramaribo()];
        yield 'caracas' => [static fn($timezones) => $timezones->america()->caracas()];
        yield 'resolute' => [static fn($timezones) => $timezones->america()->resolute()];
        yield 'godthab' => [static fn($timezones) => $timezones->america()->godthab()];
        yield 'catamarca' => [static fn($timezones) => $timezones->america()->catamarca()];
        yield 'glaceBay' => [static fn($timezones) => $timezones->america()->glaceBay()];
        yield 'regina' => [static fn($timezones) => $timezones->america()->regina()];
        yield 'toronto' => [static fn($timezones) => $timezones->america()->toronto()];
        yield 'barbados' => [static fn($timezones) => $timezones->america()->barbados()];
        yield 'santaIsabel' => [static fn($timezones) => $timezones->america()->santaIsabel()];
        yield 'miquelon' => [static fn($timezones) => $timezones->america()->miquelon()];
        yield 'havana' => [static fn($timezones) => $timezones->america()->havana()];
        yield 'ojinaga' => [static fn($timezones) => $timezones->america()->ojinaga()];
        yield 'denver' => [static fn($timezones) => $timezones->america()->denver()];
        yield 'cancun' => [static fn($timezones) => $timezones->america()->cancun()];
        yield 'thunderBay' => [static fn($timezones) => $timezones->america()->thunderBay()];
        yield 'adak' => [static fn($timezones) => $timezones->america()->adak()];
        yield 'saintJohns' => [static fn($timezones) => $timezones->america()->saintJohns()];
        yield 'portAuPrince' => [static fn($timezones) => $timezones->america()->portAuPrince()];
        yield 'whitehorse' => [static fn($timezones) => $timezones->america()->whitehorse()];
        yield 'louisville' => [static fn($timezones) => $timezones->america()->louisville()];
        yield 'manaus' => [static fn($timezones) => $timezones->america()->manaus()];
        yield 'lowerPrinces' => [static fn($timezones) => $timezones->america()->lowerPrinces()];
        yield 'sitka' => [static fn($timezones) => $timezones->america()->sitka()];
        yield 'thule' => [static fn($timezones) => $timezones->america()->thule()];
        yield 'campoGrande' => [static fn($timezones) => $timezones->america()->campoGrande()];
        yield 'phoenix' => [static fn($timezones) => $timezones->america()->phoenix()];
        yield 'shiprock' => [static fn($timezones) => $timezones->america()->shiprock()];
        yield 'bahia' => [static fn($timezones) => $timezones->america()->bahia()];
        yield 'tortola' => [static fn($timezones) => $timezones->america()->tortola()];
        yield 'dawsonCreek' => [static fn($timezones) => $timezones->america()->dawsonCreek()];
        yield 'tijuana' => [static fn($timezones) => $timezones->america()->tijuana()];
        yield 'belize' => [static fn($timezones) => $timezones->america()->belize()];
        yield 'atka' => [static fn($timezones) => $timezones->america()->atka()];
    }

    public static function antartica()
    {
        yield 'davis' => [static fn($timezones) => $timezones->antartica()->davis()];
        yield 'palmer' => [static fn($timezones) => $timezones->antartica()->palmer()];
        yield 'syowa' => [static fn($timezones) => $timezones->antartica()->syowa()];
        yield 'casey' => [static fn($timezones) => $timezones->antartica()->casey()];
        yield 'troll' => [static fn($timezones) => $timezones->antartica()->troll()];
        yield 'mcMurdo' => [static fn($timezones) => $timezones->antartica()->mcMurdo()];
        yield 'vostok' => [static fn($timezones) => $timezones->antartica()->vostok()];
        yield 'rothera' => [static fn($timezones) => $timezones->antartica()->rothera()];
        yield 'mawson' => [static fn($timezones) => $timezones->antartica()->mawson()];
        yield 'macquarie' => [static fn($timezones) => $timezones->antartica()->macquarie()];
        yield 'southPole' => [static fn($timezones) => $timezones->antartica()->southPole()];
        yield 'dumontDUrville' => [static fn($timezones) => $timezones->antartica()->dumontDUrville()];
    }

    public static function asia()
    {
        yield 'manila' => [static fn($timezones) => $timezones->asia()->manila()];
        yield 'baghdad' => [static fn($timezones) => $timezones->asia()->baghdad()];
        yield 'ulaanbaatar' => [static fn($timezones) => $timezones->asia()->ulaanbaatar()];
        yield 'almaty' => [static fn($timezones) => $timezones->asia()->almaty()];
        yield 'samarkand' => [static fn($timezones) => $timezones->asia()->samarkand()];
        yield 'ustNera' => [static fn($timezones) => $timezones->asia()->ustNera()];
        yield 'pontianak' => [static fn($timezones) => $timezones->asia()->pontianak()];
        yield 'tehran' => [static fn($timezones) => $timezones->asia()->tehran()];
        yield 'saigon' => [static fn($timezones) => $timezones->asia()->saigon()];
        yield 'krasnoyarsk' => [static fn($timezones) => $timezones->asia()->krasnoyarsk()];
        yield 'hebron' => [static fn($timezones) => $timezones->asia()->hebron()];
        yield 'kuching' => [static fn($timezones) => $timezones->asia()->kuching()];
        yield 'katmandu' => [static fn($timezones) => $timezones->asia()->katmandu()];
        yield 'shanghai' => [static fn($timezones) => $timezones->asia()->shanghai()];
        yield 'calcutta' => [static fn($timezones) => $timezones->asia()->calcutta()];
        yield 'jayapura' => [static fn($timezones) => $timezones->asia()->jayapura()];
        yield 'muscat' => [static fn($timezones) => $timezones->asia()->muscat()];
        yield 'omsk' => [static fn($timezones) => $timezones->asia()->omsk()];
        yield 'aqtau' => [static fn($timezones) => $timezones->asia()->aqtau()];
        yield 'khandyga' => [static fn($timezones) => $timezones->asia()->khandyga()];
        yield 'riyadh' => [static fn($timezones) => $timezones->asia()->riyadh()];
        yield 'bangkok' => [static fn($timezones) => $timezones->asia()->bangkok()];
        yield 'thimphu' => [static fn($timezones) => $timezones->asia()->thimphu()];
        yield 'aden' => [static fn($timezones) => $timezones->asia()->aden()];
        yield 'yekaterinburg' => [static fn($timezones) => $timezones->asia()->yekaterinburg()];
        yield 'oral' => [static fn($timezones) => $timezones->asia()->oral()];
        yield 'novokuznetsk' => [static fn($timezones) => $timezones->asia()->novokuznetsk()];
        yield 'bishkek' => [static fn($timezones) => $timezones->asia()->bishkek()];
        yield 'macau' => [static fn($timezones) => $timezones->asia()->macau()];
        yield 'qyzylorda' => [static fn($timezones) => $timezones->asia()->qyzylorda()];
        yield 'seoul' => [static fn($timezones) => $timezones->asia()->seoul()];
        yield 'irkutsk' => [static fn($timezones) => $timezones->asia()->irkutsk()];
        yield 'aqtobe' => [static fn($timezones) => $timezones->asia()->aqtobe()];
        yield 'chongqing' => [static fn($timezones) => $timezones->asia()->chongqing()];
        yield 'kabul' => [static fn($timezones) => $timezones->asia()->kabul()];
        yield 'thimbu' => [static fn($timezones) => $timezones->asia()->thimbu()];
        yield 'karachi' => [static fn($timezones) => $timezones->asia()->karachi()];
        yield 'jakarta' => [static fn($timezones) => $timezones->asia()->jakarta()];
        yield 'harbin' => [static fn($timezones) => $timezones->asia()->harbin()];
        yield 'novosibirsk' => [static fn($timezones) => $timezones->asia()->novosibirsk()];
        yield 'dili' => [static fn($timezones) => $timezones->asia()->dili()];
        yield 'colombo' => [static fn($timezones) => $timezones->asia()->colombo()];
        yield 'ashkhabad' => [static fn($timezones) => $timezones->asia()->ashkhabad()];
        yield 'dacca' => [static fn($timezones) => $timezones->asia()->dacca()];
        yield 'ashgabat' => [static fn($timezones) => $timezones->asia()->ashgabat()];
        yield 'ujungPandang' => [static fn($timezones) => $timezones->asia()->ujungPandang()];
        yield 'qatar' => [static fn($timezones) => $timezones->asia()->qatar()];
        yield 'tokyo' => [static fn($timezones) => $timezones->asia()->tokyo()];
        yield 'macao' => [static fn($timezones) => $timezones->asia()->macao()];
        yield 'tashkent' => [static fn($timezones) => $timezones->asia()->tashkent()];
        yield 'baku' => [static fn($timezones) => $timezones->asia()->baku()];
        yield 'pyongyang' => [static fn($timezones) => $timezones->asia()->pyongyang()];
        yield 'tbilisi' => [static fn($timezones) => $timezones->asia()->tbilisi()];
        yield 'amman' => [static fn($timezones) => $timezones->asia()->amman()];
        yield 'vladivostok' => [static fn($timezones) => $timezones->asia()->vladivostok()];
        yield 'damascus' => [static fn($timezones) => $timezones->asia()->damascus()];
        yield 'bahrain' => [static fn($timezones) => $timezones->asia()->bahrain()];
        yield 'vientiane' => [static fn($timezones) => $timezones->asia()->vientiane()];
        yield 'hovd' => [static fn($timezones) => $timezones->asia()->hovd()];
        yield 'kuwait' => [static fn($timezones) => $timezones->asia()->kuwait()];
        yield 'magadan' => [static fn($timezones) => $timezones->asia()->magadan()];
        yield 'ulanBator' => [static fn($timezones) => $timezones->asia()->ulanBator()];
        yield 'asia nicosia' => [static fn($timezones) => $timezones->asia()->nicosia()];
        yield 'telAviv' => [static fn($timezones) => $timezones->asia()->telAviv()];
        yield 'choibalsan' => [static fn($timezones) => $timezones->asia()->choibalsan()];
        yield 'brunei' => [static fn($timezones) => $timezones->asia()->brunei()];
        yield 'kualaLumpur' => [static fn($timezones) => $timezones->asia()->kualaLumpur()];
        yield 'kathmandu' => [static fn($timezones) => $timezones->asia()->kathmandu()];
        yield 'srednekolymsk' => [static fn($timezones) => $timezones->asia()->srednekolymsk()];
        yield 'dubai' => [static fn($timezones) => $timezones->asia()->dubai()];
        yield 'yakutsk' => [static fn($timezones) => $timezones->asia()->yakutsk()];
        yield 'beirut' => [static fn($timezones) => $timezones->asia()->beirut()];
        yield 'gaza' => [static fn($timezones) => $timezones->asia()->gaza()];
        yield 'singapore' => [static fn($timezones) => $timezones->asia()->singapore()];
        yield 'rangoon' => [static fn($timezones) => $timezones->asia()->rangoon()];
        yield 'sakhalin' => [static fn($timezones) => $timezones->asia()->sakhalin()];
        yield 'phnomPenh' => [static fn($timezones) => $timezones->asia()->phnomPenh()];
        yield 'kamchatka' => [static fn($timezones) => $timezones->asia()->kamchatka()];
        yield 'yerevan' => [static fn($timezones) => $timezones->asia()->yerevan()];
        yield 'chungking' => [static fn($timezones) => $timezones->asia()->chungking()];
        yield 'hoChiMinh' => [static fn($timezones) => $timezones->asia()->hoChiMinh()];
        yield 'chita' => [static fn($timezones) => $timezones->asia()->chita()];
        yield 'asia istanbul' => [static fn($timezones) => $timezones->asia()->istanbul()];
        yield 'hongKong' => [static fn($timezones) => $timezones->asia()->hongKong()];
        yield 'dhaka' => [static fn($timezones) => $timezones->asia()->dhaka()];
        yield 'jerusalem' => [static fn($timezones) => $timezones->asia()->jerusalem()];
        yield 'makassar' => [static fn($timezones) => $timezones->asia()->makassar()];
        yield 'kolkata' => [static fn($timezones) => $timezones->asia()->kolkata()];
        yield 'taipei' => [static fn($timezones) => $timezones->asia()->taipei()];
        yield 'dushanbe' => [static fn($timezones) => $timezones->asia()->dushanbe()];
        yield 'anadyr' => [static fn($timezones) => $timezones->asia()->anadyr()];
    }

    public static function atlantic()
    {
        yield 'faroe' => [static fn($timezones) => $timezones->atlantic()->faroe()];
        yield 'southGeorgia' => [static fn($timezones) => $timezones->atlantic()->southGeorgia()];
        yield 'capeVerde' => [static fn($timezones) => $timezones->atlantic()->capeVerde()];
        yield 'faeroe' => [static fn($timezones) => $timezones->atlantic()->faeroe()];
        yield 'bermuda' => [static fn($timezones) => $timezones->atlantic()->bermuda()];
        yield 'janMayen' => [static fn($timezones) => $timezones->atlantic()->janMayen()];
        yield 'reykjavik' => [static fn($timezones) => $timezones->atlantic()->reykjavik()];
        yield 'saintHelena' => [static fn($timezones) => $timezones->atlantic()->saintHelena()];
        yield 'canary' => [static fn($timezones) => $timezones->atlantic()->canary()];
        yield 'madeira' => [static fn($timezones) => $timezones->atlantic()->madeira()];
        yield 'azores' => [static fn($timezones) => $timezones->atlantic()->azores()];
        yield 'stanley' => [static fn($timezones) => $timezones->atlantic()->stanley()];
    }

    public static function australia()
    {
        yield 'lindeman' => [static fn($timezones) => $timezones->australia()->lindeman()];
        yield 'currie' => [static fn($timezones) => $timezones->australia()->currie()];
        yield 'victoria' => [static fn($timezones) => $timezones->australia()->victoria()];
        yield 'adelaide' => [static fn($timezones) => $timezones->australia()->adelaide()];
        yield 'perth' => [static fn($timezones) => $timezones->australia()->perth()];
        yield 'brisbane' => [static fn($timezones) => $timezones->australia()->brisbane()];
        yield 'west' => [static fn($timezones) => $timezones->australia()->west()];
        yield 'australianCapitalTerritory' => [static fn($timezones) => $timezones->australia()->australianCapitalTerritory()];
        yield 'north' => [static fn($timezones) => $timezones->australia()->north()];
        yield 'eucla' => [static fn($timezones) => $timezones->australia()->eucla()];
        yield 'lordeHoweIsland' => [static fn($timezones) => $timezones->australia()->lordeHoweIsland()];
        yield 'newSouthWales' => [static fn($timezones) => $timezones->australia()->newSouthWales()];
        yield 'queensland' => [static fn($timezones) => $timezones->australia()->queensland()];
        yield 'south' => [static fn($timezones) => $timezones->australia()->south()];
        yield 'melbourne' => [static fn($timezones) => $timezones->australia()->melbourne()];
        yield 'yancowinna' => [static fn($timezones) => $timezones->australia()->yancowinna()];
        yield 'canberra' => [static fn($timezones) => $timezones->australia()->canberra()];
        yield 'sydney' => [static fn($timezones) => $timezones->australia()->sydney()];
        yield 'darwin' => [static fn($timezones) => $timezones->australia()->darwin()];
        yield 'hobart' => [static fn($timezones) => $timezones->australia()->hobart()];
        yield 'brokenHill' => [static fn($timezones) => $timezones->australia()->brokenHill()];
        yield 'tasmania' => [static fn($timezones) => $timezones->australia()->tasmania()];
    }

    public static function europe()
    {
        yield 'uzhgorod' => [static fn($timezones) => $timezones->europe()->uzhgorod()];
        yield 'riga' => [static fn($timezones) => $timezones->europe()->riga()];
        yield 'paris' => [static fn($timezones) => $timezones->europe()->paris()];
        yield 'guernsey' => [static fn($timezones) => $timezones->europe()->guernsey()];
        yield 'samara' => [static fn($timezones) => $timezones->europe()->samara()];
        yield 'athens' => [static fn($timezones) => $timezones->europe()->athens()];
        yield 'tirane' => [static fn($timezones) => $timezones->europe()->tirane()];
        yield 'london' => [static fn($timezones) => $timezones->europe()->london()];
        yield 'helsinki' => [static fn($timezones) => $timezones->europe()->helsinki()];
        yield 'oslo' => [static fn($timezones) => $timezones->europe()->oslo()];
        yield 'podgorica' => [static fn($timezones) => $timezones->europe()->podgorica()];
        yield 'minsk' => [static fn($timezones) => $timezones->europe()->minsk()];
        yield 'monaco' => [static fn($timezones) => $timezones->europe()->monaco()];
        yield 'lisbon' => [static fn($timezones) => $timezones->europe()->lisbon()];
        yield 'tallinn' => [static fn($timezones) => $timezones->europe()->tallinn()];
        yield 'berlin' => [static fn($timezones) => $timezones->europe()->berlin()];
        yield 'gibraltar' => [static fn($timezones) => $timezones->europe()->gibraltar()];
        yield 'prague' => [static fn($timezones) => $timezones->europe()->prague()];
        yield 'stockholm' => [static fn($timezones) => $timezones->europe()->stockholm()];
        yield 'moscow' => [static fn($timezones) => $timezones->europe()->moscow()];
        yield 'bucharest' => [static fn($timezones) => $timezones->europe()->bucharest()];
        yield 'andorra' => [static fn($timezones) => $timezones->europe()->andorra()];
        yield 'vilnius' => [static fn($timezones) => $timezones->europe()->vilnius()];
        yield 'rome' => [static fn($timezones) => $timezones->europe()->rome()];
        yield 'kiev' => [static fn($timezones) => $timezones->europe()->kiev()];
        yield 'copenhagen' => [static fn($timezones) => $timezones->europe()->copenhagen()];
        yield 'belgrade' => [static fn($timezones) => $timezones->europe()->belgrade()];
        yield 'isleOfMan' => [static fn($timezones) => $timezones->europe()->isleOfMan()];
        yield 'budapest' => [static fn($timezones) => $timezones->europe()->budapest()];
        yield 'tiraspol' => [static fn($timezones) => $timezones->europe()->tiraspol()];
        yield 'vaduz' => [static fn($timezones) => $timezones->europe()->vaduz()];
        yield 'sarajevo' => [static fn($timezones) => $timezones->europe()->sarajevo()];
        yield 'amsterdam' => [static fn($timezones) => $timezones->europe()->amsterdam()];
        yield 'mariehamn' => [static fn($timezones) => $timezones->europe()->mariehamn()];
        yield 'skopje' => [static fn($timezones) => $timezones->europe()->skopje()];
        yield 'kaliningrad' => [static fn($timezones) => $timezones->europe()->kaliningrad()];
        yield 'bratislava' => [static fn($timezones) => $timezones->europe()->bratislava()];
        yield 'sanMarino' => [static fn($timezones) => $timezones->europe()->sanMarino()];
        yield 'busingen' => [static fn($timezones) => $timezones->europe()->busingen()];
        yield 'zaporozhye' => [static fn($timezones) => $timezones->europe()->zaporozhye()];
        yield 'chisinau' => [static fn($timezones) => $timezones->europe()->chisinau()];
        yield 'brussels' => [static fn($timezones) => $timezones->europe()->brussels()];
        yield 'luxembourg' => [static fn($timezones) => $timezones->europe()->luxembourg()];
        yield 'belfast' => [static fn($timezones) => $timezones->europe()->belfast()];
        yield 'vienna' => [static fn($timezones) => $timezones->europe()->vienna()];
        yield 'ljubljana' => [static fn($timezones) => $timezones->europe()->ljubljana()];
        yield 'simferopol' => [static fn($timezones) => $timezones->europe()->simferopol()];
        yield 'dublin' => [static fn($timezones) => $timezones->europe()->dublin()];
        yield 'europe nicosia' => [static fn($timezones) => $timezones->europe()->nicosia()];
        yield 'zagreb' => [static fn($timezones) => $timezones->europe()->zagreb()];
        yield 'jersey' => [static fn($timezones) => $timezones->europe()->jersey()];
        yield 'madrid' => [static fn($timezones) => $timezones->europe()->madrid()];
        yield 'vatican' => [static fn($timezones) => $timezones->europe()->vatican()];
        yield 'europe istanbul' => [static fn($timezones) => $timezones->europe()->istanbul()];
        yield 'zurich' => [static fn($timezones) => $timezones->europe()->zurich()];
        yield 'sofia' => [static fn($timezones) => $timezones->europe()->sofia()];
        yield 'volgograd' => [static fn($timezones) => $timezones->europe()->volgograd()];
        yield 'malta' => [static fn($timezones) => $timezones->europe()->malta()];
        yield 'warsaw' => [static fn($timezones) => $timezones->europe()->warsaw()];
    }

    public static function india()
    {
        yield 'cocos' => [static fn($timezones) => $timezones->india()->cocos()];
        yield 'antananarivo' => [static fn($timezones) => $timezones->india()->antananarivo()];
        yield 'reunion' => [static fn($timezones) => $timezones->india()->reunion()];
        yield 'chagos' => [static fn($timezones) => $timezones->india()->chagos()];
        yield 'comoro' => [static fn($timezones) => $timezones->india()->comoro()];
        yield 'mayotte' => [static fn($timezones) => $timezones->india()->mayotte()];
        yield 'maldives' => [static fn($timezones) => $timezones->india()->maldives()];
        yield 'mauritius' => [static fn($timezones) => $timezones->india()->mauritius()];
        yield 'mahe' => [static fn($timezones) => $timezones->india()->mahe()];
        yield 'kerguelen' => [static fn($timezones) => $timezones->india()->kerguelen()];
        yield 'christmas' => [static fn($timezones) => $timezones->india()->christmas()];
    }

    public static function pacific()
    {
        yield 'kosrae' => [static fn($timezones) => $timezones->pacific()->kosrae()];
        yield 'enderbury' => [static fn($timezones) => $timezones->pacific()->enderbury()];
        yield 'apia' => [static fn($timezones) => $timezones->pacific()->apia()];
        yield 'noumea' => [static fn($timezones) => $timezones->pacific()->noumea()];
        yield 'chatham' => [static fn($timezones) => $timezones->pacific()->chatham()];
        yield 'wake' => [static fn($timezones) => $timezones->pacific()->wake()];
        yield 'wallis' => [static fn($timezones) => $timezones->pacific()->wallis()];
        yield 'johnston' => [static fn($timezones) => $timezones->pacific()->johnston()];
        yield 'saipan' => [static fn($timezones) => $timezones->pacific()->saipan()];
        yield 'tarawa' => [static fn($timezones) => $timezones->pacific()->tarawa()];
        yield 'pitcairn' => [static fn($timezones) => $timezones->pacific()->pitcairn()];
        yield 'niue' => [static fn($timezones) => $timezones->pacific()->niue()];
        yield 'ponape' => [static fn($timezones) => $timezones->pacific()->ponape()];
        yield 'guam' => [static fn($timezones) => $timezones->pacific()->guam()];
        yield 'auckland' => [static fn($timezones) => $timezones->pacific()->auckland()];
        yield 'pagoPago' => [static fn($timezones) => $timezones->pacific()->pagoPago()];
        yield 'chuuk' => [static fn($timezones) => $timezones->pacific()->chuuk()];
        yield 'kwajalein' => [static fn($timezones) => $timezones->pacific()->kwajalein()];
        yield 'fakaofo' => [static fn($timezones) => $timezones->pacific()->fakaofo()];
        yield 'majuro' => [static fn($timezones) => $timezones->pacific()->majuro()];
        yield 'guadalcanal' => [static fn($timezones) => $timezones->pacific()->guadalcanal()];
        yield 'efate' => [static fn($timezones) => $timezones->pacific()->efate()];
        yield 'tongatapu' => [static fn($timezones) => $timezones->pacific()->tongatapu()];
        yield 'pohnpei' => [static fn($timezones) => $timezones->pacific()->pohnpei()];
        yield 'honolulu' => [static fn($timezones) => $timezones->pacific()->honolulu()];
        yield 'bougainville' => [static fn($timezones) => $timezones->pacific()->bougainville()];
        yield 'galapagos' => [static fn($timezones) => $timezones->pacific()->galapagos()];
        yield 'gambier' => [static fn($timezones) => $timezones->pacific()->gambier()];
        yield 'palau' => [static fn($timezones) => $timezones->pacific()->palau()];
        yield 'midway' => [static fn($timezones) => $timezones->pacific()->midway()];
        yield 'marquesas' => [static fn($timezones) => $timezones->pacific()->marquesas()];
        yield 'funafuti' => [static fn($timezones) => $timezones->pacific()->funafuti()];
        yield 'norfolk' => [static fn($timezones) => $timezones->pacific()->norfolk()];
        yield 'portMoresby' => [static fn($timezones) => $timezones->pacific()->portMoresby()];
        yield 'tahiti' => [static fn($timezones) => $timezones->pacific()->tahiti()];
        yield 'fiji' => [static fn($timezones) => $timezones->pacific()->fiji()];
        yield 'kiritimati' => [static fn($timezones) => $timezones->pacific()->kiritimati()];
        yield 'truk' => [static fn($timezones) => $timezones->pacific()->truk()];
        yield 'easter' => [static fn($timezones) => $timezones->pacific()->easter()];
        yield 'rarotonga' => [static fn($timezones) => $timezones->pacific()->rarotonga()];
        yield 'yap' => [static fn($timezones) => $timezones->pacific()->yap()];
        yield 'nauru' => [static fn($timezones) => $timezones->pacific()->nauru()];
    }
}
