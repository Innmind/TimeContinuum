<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\{
    Earth\Format\RFC1123,
    Format,
};
use PHPUnit\Framework\TestCase;

class RFC1123Test extends TestCase
{
    public function testInterface()
    {
        $format = new RFC1123;

        $this->assertInstanceOf(Format::class, $format);
        $this->assertSame(\DateTime::RFC1123, $format->toString());
    }
}
