<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Move;

use Innmind\TimeContinuum\{
    Earth\Move\EndOfDay,
    PointInTime as PointInTimeInterface,
    Earth\PointInTime\PointInTime,
    Format,
};
use PHPUnit\Framework\TestCase;

class EndOfDayTest extends TestCase
{
    /**
     * @dataProvider cases
     */
    public function testInterface($time, $expected)
    {
        $endOfDay = new EndOfDay;

        $point = $endOfDay(new PointInTime($time));

        $this->assertInstanceOf(PointInTimeInterface::class, $point);
        $this->assertSame($expected, $point->format(new class implements Format {
            public function toString(): string
            {
                return 'Y-m-d H:i:s.u';
            }
        }));
    }

    public static function cases(): array
    {
        return [
            ['2016-02-29 13:12:11.675', '2016-02-29 23:59:59.999000'],
            ['2018-04-28 01:12:11.675', '2018-04-28 23:59:59.999000'],
            ['2018-04-01 00:00:00.000', '2018-04-01 23:59:59.999000'],
            ['2018-04-01 23:59:59.999', '2018-04-01 23:59:59.999000'],
        ];
    }
}
