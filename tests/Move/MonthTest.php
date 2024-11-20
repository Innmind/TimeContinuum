<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Move;

use Innmind\TimeContinuum\{
    Move\Month,
    PointInTime,
    Format,
};
use PHPUnit\Framework\TestCase;

class MonthTest extends TestCase
{
    /**
     * @dataProvider cases
     */
    public function testInterface($time, $expectedForward, $expectedBackward)
    {
        $format = Format::of('Y-m-d H:i:s.u');
        $forward = Month::forward(1);
        $backward = Month::backward(1);

        $point = $forward(PointInTime::at($time));

        $this->assertSame($expectedForward, $point->format($format));

        $point = $backward(PointInTime::at($time));

        $this->assertSame($expectedBackward, $point->format($format));
    }

    public static function cases(): array
    {
        return [
            ['2016-02-29 13:12:11.675', '2016-03-29 13:12:11.675000', '2016-01-29 13:12:11.675000'],
            ['2016-01-30 13:12:11.675', '2016-02-29 13:12:11.675000', '2015-12-30 13:12:11.675000'],
            ['2017-12-31 13:12:11.675', '2018-01-31 13:12:11.675000', '2017-11-30 13:12:11.675000'],
        ];
    }
}
