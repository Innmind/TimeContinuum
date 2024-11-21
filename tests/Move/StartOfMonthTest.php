<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    Move\StartOfMonth,
    PointInTime,
    Format,
};
use PHPUnit\Framework\TestCase;

class StartOfMonthTest extends TestCase
{
    /**
     * @dataProvider cases
     */
    public function testInterface($time, $expected)
    {
        $startOfMonth = new StartOfMonth;

        $point = $startOfMonth(PointInTime::at($time));

        $this->assertSame($expected, $point->format(Format::of('Y-m-d H:i:s.u')));
    }

    public static function cases(): array
    {
        return [
            ['2016-02-29 13:12:11.675', '2016-02-01 00:00:00.000000'],
            ['2018-04-28 01:12:11.675', '2018-04-01 00:00:00.000000'],
            ['2018-04-01 00:00:00.000', '2018-04-01 00:00:00.000000'],
        ];
    }
}