<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\{
    Format\RSS,
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
