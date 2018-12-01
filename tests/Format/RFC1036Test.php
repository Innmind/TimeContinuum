<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\{
    Format\RFC1036,
    FormatInterface,
};
use PHPUnit\Framework\TestCase;

class RFC1036Test extends TestCase
{
    public function testInterface()
    {
        $format = new RFC1036;

        $this->assertInstanceOf(FormatInterface::class, $format);
        $this->assertSame(\DateTime::RFC1036, (string) $format);
    }
}
