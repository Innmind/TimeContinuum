<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Move;

use Innmind\TimeContinuum\{
    Earth\Move\EndOfYear,
    PointInTimeInterface,
    Earth\PointInTime\PointInTime,
    FormatInterface,
};
use PHPUnit\Framework\TestCase;

class EndOfYearTest extends TestCase
{
    /**
     * @dataProvider cases
     */
    public function testInterface($time, $expected)
    {
        $endOfYear = new EndOfYear;

        $point = $endOfYear(new PointInTime($time));

        $this->assertInstanceOf(PointInTimeInterface::class, $point);
        $this->assertSame($expected, $point->format(new class implements FormatInterface {
            public function __toString(): string
            {
                return 'Y-m-d H:i:s.u';
            }
        }));
    }

    public function cases(): array
    {
        return [
            ['2016-02-29 13:12:11.675', '2016-12-31 23:59:59.999000'],
            ['2018-04-28 01:12:11.675', '2018-12-31 23:59:59.999000'],
            ['2018-04-01 00:00:00.000', '2018-12-31 23:59:59.999000'],
            ['2018-01-01 00:00:00.000', '2018-12-31 23:59:59.999000'],
            ['2018-12-31 23:59:59.999', '2018-12-31 23:59:59.999000'],
        ];
    }
}
