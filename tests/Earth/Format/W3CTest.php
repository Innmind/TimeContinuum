<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\{
    Earth\Format\W3C,
    Format,
};
use PHPUnit\Framework\TestCase;

class W3CTest extends TestCase
{
    public function testInterface()
    {
        $format = new W3C;

        $this->assertInstanceOf(Format::class, $format);
        $this->assertSame(\DateTime::W3C, $format->toString());
    }
}
