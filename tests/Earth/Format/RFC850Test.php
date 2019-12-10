<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\{
    Earth\Format\RFC850,
    Format,
};
use PHPUnit\Framework\TestCase;

class RFC850Test extends TestCase
{
    public function testInterface()
    {
        $format = new RFC850;

        $this->assertInstanceOf(Format::class, $format);
        $this->assertSame(\DateTime::RFC850, $format->toString());
    }
}
