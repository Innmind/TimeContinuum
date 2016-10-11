<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\{
    Format\RFC1123,
    FormatInterface
};

class RFC1123Test extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $format = new RFC1123;

        $this->assertInstanceOf(FormatInterface::class, $format);
        $this->assertSame(\DateTime::RFC1123, (string) $format);
    }
}
