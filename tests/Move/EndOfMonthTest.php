<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    Move\EndOfMonth,
    PointInTime,
    Format,
};
use Innmind\BlackBox\PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class EndOfMonthTest extends TestCase
{
    #[DataProvider('cases')]
    public function testInterface($time, $expected)
    {
        $endOfMonth = new EndOfMonth;

        $point = $endOfMonth(PointInTime::at(new \DateTimeImmutable($time)));

        $this->assertSame($expected, $point->format(Format::of('Y-m-d H:i:s.u')));
    }

    public static function cases(): array
    {
        return [
            ['2016-02-01 00:00:00.000', '2016-02-29 23:59:59.999000'],
            ['2016-02-05 00:00:00.000', '2016-02-29 23:59:59.999000'],
            ['2018-02-01 00:00:00.000', '2018-02-28 23:59:59.999000'],
            ['2018-04-01 00:00:00.000', '2018-04-30 23:59:59.999000'],
            ['2018-01-01 00:00:00.000', '2018-01-31 23:59:59.999000'],
            ['2018-04-30 23:59:59.999', '2018-04-30 23:59:59.999000'],
        ];
    }
}
