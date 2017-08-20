<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\{
    Format\W3C,
    FormatInterface
};
use PHPUnit\Framework\TestCase;

class W3CTest extends TestCase
{
    public function testInterface()
    {
        $format = new W3C;

        $this->assertInstanceOf(FormatInterface::class, $format);
        $this->assertSame(\DateTime::W3C, (string) $format);
    }
}
