# Timezones

A timezone is a [time offset](time-offsets.md) referenced by a city name.

As described in the [terminology](../preface/terminology.md#timezone) section the offset for a city may not always be the same depending when you are in time.

Because it can change, a timezone is handled at the [clock](clocks.md) level. By default the clock offset is `+00:00` but you can change it like this:

```php
use Innmind\TimeContinuum\{
    Clock,
    Timezones,
};

$utc = Clock::live();
$paris = $utc->switch(
    static fn(Timezones $timezones) => $timezones
        ->europe()
        ->paris(),
);
```

We now have two clocks. `#!php $utc` is still at `+00:00` and `#!php $paris` will depend on when this code is called. If you run this the 24 november (of any year) it will use `+01:00` and if run the 1 july (of any year) it will use `+02:00`. Because France use daylight saving time and change its offset twice a year.

!!! note
    Once the timezone offset is applied to the returned clock it no longer changes. This is important if you have long running processes.

    For example if you started a process on the 26th of october 2024, switched to the Paris timezone, and let the process run for multiple days it will always be at `+02:00`. Even though Paris switch to `+01:00` on the 27th of october.

## Available timezones

`#!php $timezones` represents an intance of `Innmind\TimeContinuum\Timezones`.

=== "Africa"
    ```php
    $timezones->africa()->lome();
    $timezones->africa()->ceuta();
    $timezones->africa()->elAaiun();
    $timezones->africa()->portoNovo();
    $timezones->africa()->djibouti();
    $timezones->africa()->windhoek();
    $timezones->africa()->algiers();
    $timezones->africa()->ouagadougou();
    $timezones->africa()->bamako();
    $timezones->africa()->harare();
    $timezones->africa()->bujumbura();
    $timezones->africa()->douala();
    $timezones->africa()->brazzaville();
    $timezones->africa()->tripoli();
    $timezones->africa()->casablanca();
    $timezones->africa()->niamey();
    $timezones->africa()->mbabane();
    $timezones->africa()->blantyre();
    $timezones->africa()->conakry();
    $timezones->africa()->khartoum();
    $timezones->africa()->luanda();
    $timezones->africa()->libreville();
    $timezones->africa()->maseru();
    $timezones->africa()->lusaka();
    $timezones->africa()->darEsSalaam();
    $timezones->africa()->nairobi();
    $timezones->africa()->banjul();
    $timezones->africa()->bissau();
    $timezones->africa()->nouakchott();
    $timezones->africa()->johannesburg();
    $timezones->africa()->timbuktu();
    $timezones->africa()->saoTome();
    $timezones->africa()->freetown();
    $timezones->africa()->kampala();
    $timezones->africa()->dakar();
    $timezones->africa()->lagos();
    $timezones->africa()->cairo();
    $timezones->africa()->mogadishu();
    $timezones->africa()->gaborone();
    $timezones->africa()->tunis();
    $timezones->africa()->kigali();
    $timezones->africa()->malabo();
    $timezones->africa()->abidjan();
    $timezones->africa()->accra();
    $timezones->africa()->asmera();
    $timezones->africa()->ndjamena();
    $timezones->africa()->lubumbashi();
    $timezones->africa()->juba();
    $timezones->africa()->monrovia();
    $timezones->africa()->maputo();
    $timezones->africa()->kinshasa();
    $timezones->africa()->asmara();
    $timezones->africa()->bangui();
    $timezones->africa()->addisAbaba();
    ```

=== "America"
    ```php
    $timezones->america()->argentina()->rioGallegos();
    $timezones->america()->argentina()->mendoza();
    $timezones->america()->argentina()->buenosAires();
    $timezones->america()->argentina()->ushuaia();
    $timezones->america()->argentina()->sanJuan();
    $timezones->america()->argentina()->laRioja();
    $timezones->america()->argentina()->salta();
    $timezones->america()->argentina()->sanLuis();
    $timezones->america()->argentina()->jujuy();
    $timezones->america()->argentina()->tucuman();
    $timezones->america()->argentina()->comodRivadavia();
    $timezones->america()->argentina()->catamarca();
    $timezones->america()->argentina()->cordoba();
    $timezones->america()->indiana()->vincennes();
    $timezones->america()->indiana()->marengo();
    $timezones->america()->indiana()->tellCity();
    $timezones->america()->indiana()->knox();
    $timezones->america()->indiana()->vevay();
    $timezones->america()->indiana()->indianapolis();
    $timezones->america()->indiana()->petersburg();
    $timezones->america()->indiana()->winamac();
    $timezones->america()->northDakota()->beulah();
    $timezones->america()->northDakota()->newSalem();
    $timezones->america()->northDakota()->center();
    $timezones->america()->montreal();
    $timezones->america()->guatemala();
    $timezones->america()->boaVista();
    $timezones->america()->portoAcre();
    $timezones->america()->winnipeg();
    $timezones->america()->santiago();
    $timezones->america()->virgin();
    $timezones->america()->moncton();
    $timezones->america()->noronha();
    $timezones->america()->recife();
    $timezones->america()->saintKitts();
    $timezones->america()->rankinInlet();
    $timezones->america()->jamaica();
    $timezones->america()->lima();
    $timezones->america()->rosario();
    $timezones->america()->cambridgeBay();
    $timezones->america()->coralHarbour();
    $timezones->america()->fortWayne();
    $timezones->america()->nassau();
    $timezones->america()->mazatlan();
    $timezones->america()->grandTurk();
    $timezones->america()->merida();
    $timezones->america()->ensenada();
    $timezones->america()->rainyRiver();
    $timezones->america()->bahiaBanderas();
    $timezones->america()->guadeloupe();
    $timezones->america()->cuiaba();
    $timezones->america()->scoresbysund();
    $timezones->america()->maceio();
    $timezones->america()->curacao();
    $timezones->america()->aruba();
    $timezones->america()->monterrey();
    $timezones->america()->hermosillo();
    $timezones->america()->guayaquil();
    $timezones->america()->managua();
    $timezones->america()->matamoros();
    $timezones->america()->losAngeles();
    $timezones->america()->tegucigalpa();
    $timezones->america()->monticello();
    $timezones->america()->nome();
    $timezones->america()->montevideo();
    $timezones->america()->gooseBay();
    $timezones->america()->boise();
    $timezones->america()->belem();
    $timezones->america()->atikokan();
    $timezones->america()->swiftCurrent();
    $timezones->america()->detroit();
    $timezones->america()->laPaz();
    $timezones->america()->chicago();
    $timezones->america()->creston();
    $timezones->america()->nipigon();
    $timezones->america()->costaRica();
    $timezones->america()->halifax();
    $timezones->america()->yellowknife();
    $timezones->america()->puertoRico();
    $timezones->america()->edmonton();
    $timezones->america()->mexicoCity();
    $timezones->america()->saoPaulo();
    $timezones->america()->yakutat();
    $timezones->america()->saintThomas();
    $timezones->america()->chihuahua();
    $timezones->america()->grenada();
    $timezones->america()->elSalvador();
    $timezones->america()->santoDomingo();
    $timezones->america()->montserrat();
    $timezones->america()->portoVelho();
    $timezones->america()->panama();
    $timezones->america()->antigua();
    $timezones->america()->santarem();
    $timezones->america()->dawson();
    $timezones->america()->saintBarthelemy();
    $timezones->america()->iqaluit();
    $timezones->america()->eirunepe();
    $timezones->america()->inuvik();
    $timezones->america()->anguilla();
    $timezones->america()->portOfSpain();
    $timezones->america()->araguaina();
    $timezones->america()->guyana();
    $timezones->america()->fortaleza();
    $timezones->america()->blancSablon();
    $timezones->america()->juneau();
    $timezones->america()->cayman();
    $timezones->america()->menominee();
    $timezones->america()->cayenne();
    $timezones->america()->pangnirtung();
    $timezones->america()->metlakatla();
    $timezones->america()->asuncion();
    $timezones->america()->saintLucia();
    $timezones->america()->saintVincent();
    $timezones->america()->martinique();
    $timezones->america()->kralendijk();
    $timezones->america()->newYork();
    $timezones->america()->vancouver();
    $timezones->america()->bogota();
    $timezones->america()->dominica();
    $timezones->america()->danmarkshavn();
    $timezones->america()->anchorage();
    $timezones->america()->marigot();
    $timezones->america()->rioBranco();
    $timezones->america()->paramaribo();
    $timezones->america()->caracas();
    $timezones->america()->resolute();
    $timezones->america()->godthab();
    $timezones->america()->catamarca();
    $timezones->america()->glaceBay();
    $timezones->america()->regina();
    $timezones->america()->toronto();
    $timezones->america()->barbados();
    $timezones->america()->santaIsabel();
    $timezones->america()->miquelon();
    $timezones->america()->havana();
    $timezones->america()->ojinaga();
    $timezones->america()->denver();
    $timezones->america()->cancun();
    $timezones->america()->thunderBay();
    $timezones->america()->adak();
    $timezones->america()->saintJohns();
    $timezones->america()->portAuPrince();
    $timezones->america()->whitehorse();
    $timezones->america()->louisville();
    $timezones->america()->manaus();
    $timezones->america()->lowerPrinces();
    $timezones->america()->sitka();
    $timezones->america()->thule();
    $timezones->america()->campoGrande();
    $timezones->america()->phoenix();
    $timezones->america()->shiprock();
    $timezones->america()->bahia();
    $timezones->america()->tortola();
    $timezones->america()->dawsonCreek();
    $timezones->america()->tijuana();
    $timezones->america()->belize();
    $timezones->america()->atka();
    ```

=== "Antartica"
    ```php
    $timezones->antartica()->davis();
    $timezones->antartica()->palmer();
    $timezones->antartica()->syowa();
    $timezones->antartica()->casey();
    $timezones->antartica()->troll();
    $timezones->antartica()->mcMurdo();
    $timezones->antartica()->vostok();
    $timezones->antartica()->rothera();
    $timezones->antartica()->mawson();
    $timezones->antartica()->macquarie();
    $timezones->antartica()->southPole();
    $timezones->antartica()->dumontDUrville();
    ```

=== "Arctic"
    ```php
    $timezones->arctic()->longyearbyen();
    ```

=== "Asia"
    ```php
    $timezones->asia()->manila();
    $timezones->asia()->baghdad();
    $timezones->asia()->ulaanbaatar();
    $timezones->asia()->almaty();
    $timezones->asia()->samarkand();
    $timezones->asia()->ustNera();
    $timezones->asia()->pontianak();
    $timezones->asia()->tehran();
    $timezones->asia()->saigon();
    $timezones->asia()->krasnoyarsk();
    $timezones->asia()->hebron();
    $timezones->asia()->kuching();
    $timezones->asia()->katmandu();
    $timezones->asia()->shanghai();
    $timezones->asia()->calcutta();
    $timezones->asia()->jayapura();
    $timezones->asia()->muscat();
    $timezones->asia()->omsk();
    $timezones->asia()->aqtau();
    $timezones->asia()->khandyga();
    $timezones->asia()->riyadh();
    $timezones->asia()->bangkok();
    $timezones->asia()->thimphu();
    $timezones->asia()->aden();
    $timezones->asia()->yekaterinburg();
    $timezones->asia()->oral();
    $timezones->asia()->novokuznetsk();
    $timezones->asia()->bishkek();
    $timezones->asia()->macau();
    $timezones->asia()->qyzylorda();
    $timezones->asia()->seoul();
    $timezones->asia()->irkutsk();
    $timezones->asia()->aqtobe();
    $timezones->asia()->chongqing();
    $timezones->asia()->kabul();
    $timezones->asia()->thimbu();
    $timezones->asia()->karachi();
    $timezones->asia()->jakarta();
    $timezones->asia()->harbin();
    $timezones->asia()->novosibirsk();
    $timezones->asia()->dili();
    $timezones->asia()->colombo();
    $timezones->asia()->ashkhabad();
    $timezones->asia()->dacca();
    $timezones->asia()->ashgabat();
    $timezones->asia()->ujungPandang();
    $timezones->asia()->qatar();
    $timezones->asia()->tokyo();
    $timezones->asia()->macao();
    $timezones->asia()->tashkent();
    $timezones->asia()->baku();
    $timezones->asia()->pyongyang();
    $timezones->asia()->tbilisi();
    $timezones->asia()->amman();
    $timezones->asia()->vladivostok();
    $timezones->asia()->damascus();
    $timezones->asia()->bahrain();
    $timezones->asia()->vientiane();
    $timezones->asia()->hovd();
    $timezones->asia()->kuwait();
    $timezones->asia()->magadan();
    $timezones->asia()->ulanBator();
    $timezones->asia()->nicosia();
    $timezones->asia()->telAviv();
    $timezones->asia()->choibalsan();
    $timezones->asia()->brunei();
    $timezones->asia()->kualaLumpur();
    $timezones->asia()->kathmandu();
    $timezones->asia()->srednekolymsk();
    $timezones->asia()->dubai();
    $timezones->asia()->yakutsk();
    $timezones->asia()->beirut();
    $timezones->asia()->gaza();
    $timezones->asia()->singapore();
    $timezones->asia()->rangoon();
    $timezones->asia()->sakhalin();
    $timezones->asia()->phnomPenh();
    $timezones->asia()->kamchatka();
    $timezones->asia()->yerevan();
    $timezones->asia()->chungking();
    $timezones->asia()->hoChiMinh();
    $timezones->asia()->chita();
    $timezones->asia()->istanbul();
    $timezones->asia()->hongKong();
    $timezones->asia()->dhaka();
    $timezones->asia()->jerusalem();
    $timezones->asia()->makassar();
    $timezones->asia()->kolkata();
    $timezones->asia()->taipei();
    $timezones->asia()->dushanbe();
    $timezones->asia()->anadyr();
    ```

=== "Atlantic"
    ```php
    $timezones->atlantic()->faroe();
    $timezones->atlantic()->southGeorgia();
    $timezones->atlantic()->capeVerde();
    $timezones->atlantic()->faeroe();
    $timezones->atlantic()->bermuda();
    $timezones->atlantic()->janMayen();
    $timezones->atlantic()->reykjavik();
    $timezones->atlantic()->saintHelena();
    $timezones->atlantic()->canary();
    $timezones->atlantic()->madeira();
    $timezones->atlantic()->azores();
    $timezones->atlantic()->stanley();
    ```

=== "Australia"
    ```php
    $timezones->australia()->lindeman();
    $timezones->australia()->currie();
    $timezones->australia()->victoria();
    $timezones->australia()->adelaide();
    $timezones->australia()->perth();
    $timezones->australia()->brisbane();
    $timezones->australia()->west();
    $timezones->australia()->australianCapitalTerritory();
    $timezones->australia()->north();
    $timezones->australia()->eucla();
    $timezones->australia()->lordeHoweIsland();
    $timezones->australia()->newSouthWales();
    $timezones->australia()->queensland();
    $timezones->australia()->south();
    $timezones->australia()->melbourne();
    $timezones->australia()->yancowinna();
    $timezones->australia()->canberra();
    $timezones->australia()->sydney();
    $timezones->australia()->darwin();
    $timezones->australia()->hobart();
    $timezones->australia()->brokenHill();
    $timezones->australia()->tasmania();
    ```

=== "Europe"
    ```php
    $timezones->europe()->uzhgorod();
    $timezones->europe()->riga();
    $timezones->europe()->paris();
    $timezones->europe()->guernsey();
    $timezones->europe()->samara();
    $timezones->europe()->athens();
    $timezones->europe()->tirane();
    $timezones->europe()->london();
    $timezones->europe()->helsinki();
    $timezones->europe()->oslo();
    $timezones->europe()->podgorica();
    $timezones->europe()->minsk();
    $timezones->europe()->monaco();
    $timezones->europe()->lisbon();
    $timezones->europe()->tallinn();
    $timezones->europe()->berlin();
    $timezones->europe()->gibraltar();
    $timezones->europe()->prague();
    $timezones->europe()->stockholm();
    $timezones->europe()->moscow();
    $timezones->europe()->bucharest();
    $timezones->europe()->andorra();
    $timezones->europe()->vilnius();
    $timezones->europe()->rome();
    $timezones->europe()->kiev();
    $timezones->europe()->copenhagen();
    $timezones->europe()->belgrade();
    $timezones->europe()->isleOfMan();
    $timezones->europe()->budapest();
    $timezones->europe()->tiraspol();
    $timezones->europe()->vaduz();
    $timezones->europe()->sarajevo();
    $timezones->europe()->amsterdam();
    $timezones->europe()->mariehamn();
    $timezones->europe()->skopje();
    $timezones->europe()->kaliningrad();
    $timezones->europe()->bratislava();
    $timezones->europe()->sanMarino();
    $timezones->europe()->busingen();
    $timezones->europe()->zaporozhye();
    $timezones->europe()->chisinau();
    $timezones->europe()->brussels();
    $timezones->europe()->luxembourg();
    $timezones->europe()->belfast();
    $timezones->europe()->vienna();
    $timezones->europe()->ljubljana();
    $timezones->europe()->simferopol();
    $timezones->europe()->dublin();
    $timezones->europe()->nicosia();
    $timezones->europe()->zagreb();
    $timezones->europe()->jersey();
    $timezones->europe()->madrid();
    $timezones->europe()->vatican();
    $timezones->europe()->istanbul();
    $timezones->europe()->zurich();
    $timezones->europe()->sofia();
    $timezones->europe()->volgograd();
    $timezones->europe()->malta();
    $timezones->europe()->warsaw();
    ```

=== "Indian"
    ```php
    $timezones->indian()->cocos();
    $timezones->indian()->antananarivo();
    $timezones->indian()->reunion();
    $timezones->indian()->chagos();
    $timezones->indian()->comoro();
    $timezones->indian()->mayotte();
    $timezones->indian()->maldives();
    $timezones->indian()->mauritius();
    $timezones->indian()->mahe();
    $timezones->indian()->kerguelen();
    $timezones->indian()->christmas();
    ```

=== "Pacific"
    ```php
    $timezones->pacific()->kosrae();
    $timezones->pacific()->enderbury();
    $timezones->pacific()->apia();
    $timezones->pacific()->noumea();
    $timezones->pacific()->chatham();
    $timezones->pacific()->wake();
    $timezones->pacific()->wallis();
    $timezones->pacific()->johnston();
    $timezones->pacific()->saipan();
    $timezones->pacific()->tarawa();
    $timezones->pacific()->pitcairn();
    $timezones->pacific()->niue();
    $timezones->pacific()->ponape();
    $timezones->pacific()->guam();
    $timezones->pacific()->auckland();
    $timezones->pacific()->pagoPago();
    $timezones->pacific()->chuuk();
    $timezones->pacific()->kwajalein();
    $timezones->pacific()->fakaofo();
    $timezones->pacific()->majuro();
    $timezones->pacific()->guadalcanal();
    $timezones->pacific()->efate();
    $timezones->pacific()->tongatapu();
    $timezones->pacific()->pohnpei();
    $timezones->pacific()->honolulu();
    $timezones->pacific()->bougainville();
    $timezones->pacific()->galapagos();
    $timezones->pacific()->gambier();
    $timezones->pacific()->palau();
    $timezones->pacific()->midway();
    $timezones->pacific()->marquesas();
    $timezones->pacific()->funafuti();
    $timezones->pacific()->norfolk();
    $timezones->pacific()->portMoresby();
    $timezones->pacific()->tahiti();
    $timezones->pacific()->fiji();
    $timezones->pacific()->kiritimati();
    $timezones->pacific()->truk();
    $timezones->pacific()->easter();
    $timezones->pacific()->rarotonga();
    $timezones->pacific()->yap();
    $timezones->pacific()->nauru();
    ```
