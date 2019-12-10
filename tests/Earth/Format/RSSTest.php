<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\{
    Earth\Format\RSS,
    FormatInterface,
};
use PHPUnit\Framework\TestCase;

class RSSTest extends TestCase
{
    public function testInterface()
    {
        $format = new RSS;

        $this->assertInstanceOf(FormatInterface::class, $format);
        $this->assertSame(\DateTime::RSS, (string) $format);
    }
}
