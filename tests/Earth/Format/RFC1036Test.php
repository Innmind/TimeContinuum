<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\{
    Earth\Format\RFC1036,
    Format,
};
use PHPUnit\Framework\TestCase;

class RFC1036Test extends TestCase
{
    public function testInterface()
    {
        $format = new RFC1036;

        $this->assertInstanceOf(Format::class, $format);
        $this->assertSame(\DateTime::RFC1036, (string) $format);
    }
}
