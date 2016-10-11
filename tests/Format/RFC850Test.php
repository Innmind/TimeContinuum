<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\{
    Format\RFC850,
    FormatInterface
};

class RFC850Test extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $format = new RFC850;

        $this->assertInstanceOf(FormatInterface::class, $format);
        $this->assertSame(\DateTime::RFC850, (string) $format);
    }
}
