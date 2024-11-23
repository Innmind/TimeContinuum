<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    Move\StartOfDay,
    PointInTime,
    Format,
};
use Innmind\BlackBox\PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class StartOfDayTest extends TestCase
{
    #[DataProvider('cases')]
    public function testInterface($time, $expected)
    {
        $startOfDay = new StartOfDay;

        $point = $startOfDay(PointInTime::at($time));

        $this->assertSame($expected, $point->format(Format::of('Y-m-d H:i:s.u')));
    }

    public static function cases(): array
    {
        return [
            ['2016-02-29 13:12:11.675', '2016-02-29 00:00:00.000000'],
            ['2018-04-28 01:12:11.675', '2018-04-28 00:00:00.000000'],
            ['2018-04-01 00:00:00.000', '2018-04-01 00:00:00.000000'],
            ['2018-11-30T12:13:14.000+0100', '2018-11-30 00:00:00.000000'],
        ];
    }
}
