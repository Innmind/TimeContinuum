<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\{
    Format\RFC822,
    FormatInterface
};
use PHPUnit\Framework\TestCase;

class RFC822Test extends TestCase
{
    public function testInterface()
    {
        $format = new RFC822;

        $this->assertInstanceOf(FormatInterface::class, $format);
        $this->assertSame(\DateTime::RFC822, (string) $format);
    }
}
