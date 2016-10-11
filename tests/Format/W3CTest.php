<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\{
    Format\W3C,
    FormatInterface
};

class W3CTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $format = new W3C;

        $this->assertInstanceOf(FormatInterface::class, $format);
        $this->assertSame(\DateTime::W3C, (string) $format);
    }
}
