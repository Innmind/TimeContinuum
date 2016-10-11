<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\{
    Format\RFC822,
    FormatInterface
};

class RFC822Test extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $format = new RFC822;

        $this->assertInstanceOf(FormatInterface::class, $format);
        $this->assertSame(\DateTime::RFC822, (string) $format);
    }
}
