<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Move;

use Innmind\TimeContinuum\{
    Earth\Move\EndOfMonth,
    PointInTime as PointInTimeInterface,
    Earth\PointInTime\PointInTime,
    Format,
};
use PHPUnit\Framework\TestCase;

class EndOfMonthTest extends TestCase
{
    /**
     * @dataProvider cases
     */
    public function testInterface($time, $expected)
    {
        $endOfMonth = new EndOfMonth;

        $point = $endOfMonth(new PointInTime($time));

        $this->assertInstanceOf(PointInTimeInterface::class, $point);
        $this->assertSame($expected, $point->format(new class implements Format {
            public function toString(): string
            {
                return 'Y-m-d H:i:s.u';
            }
        }));
    }

    public function cases(): array
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
