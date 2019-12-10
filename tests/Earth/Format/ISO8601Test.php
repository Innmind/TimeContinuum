<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\{
    Earth\Format\ISO8601,
    Format,
};
use PHPUnit\Framework\TestCase;

class ISO8601Test extends TestCase
{
    public function testInterface()
    {
        $format = new ISO8601;

        $this->assertInstanceOf(Format::class, $format);
        $this->assertSame(\DateTime::ATOM, (string) $format);
    }
}
