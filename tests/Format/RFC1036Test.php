<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\{
    Format\RFC1036,
    FormatInterface
};

class RFC1036Test extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $format = new RFC1036;

        $this->assertInstanceOf(FormatInterface::class, $format);
        $this->assertSame(\DateTime::RFC1036, (string) $format);
    }
}
