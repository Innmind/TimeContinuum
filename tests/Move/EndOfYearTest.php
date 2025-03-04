<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    Move\EndOfYear,
    PointInTime,
    Format,
};
use Innmind\BlackBox\PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class EndOfYearTest extends TestCase
{
    #[DataProvider('cases')]
    public function testInterface($time, $expected)
    {
        $endOfYear = new EndOfYear;

        $point = $endOfYear(PointInTime::at(new \DateTimeImmutable($time)));

        $this->assertSame($expected, $point->format(Format::of('Y-m-d H:i:s.u')));
    }

    public static function cases(): array
    {
        return [
            ['2016-02-29 13:12:11.675', '2016-12-31 23:59:59.999999'],
            ['2018-04-28 01:12:11.675', '2018-12-31 23:59:59.999999'],
            ['2018-04-01 00:00:00.000', '2018-12-31 23:59:59.999999'],
            ['2018-01-01 00:00:00.000', '2018-12-31 23:59:59.999999'],
            ['2018-12-31 23:59:59.999', '2018-12-31 23:59:59.999999'],
        ];
    }
}
