<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\{
    Earth\Format\RFC2822,
    Format,
};
use PHPUnit\Framework\TestCase;

class RFC2822Test extends TestCase
{
    public function testInterface()
    {
        $format = new RFC2822;

        $this->assertInstanceOf(Format::class, $format);
        $this->assertSame(\DateTime::RFC2822, (string) $format);
    }
}
