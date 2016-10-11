<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\{
    Format\RFC2822,
    FormatInterface
};

class RFC2822Test extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $format = new RFC2822;

        $this->assertInstanceOf(FormatInterface::class, $format);
        $this->assertSame(\DateTime::RFC2822, (string) $format);
    }
}