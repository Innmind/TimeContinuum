<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Format;

use Innmind\TimeContinuum\{
    Format\Cookie,
    FormatInterface
};

class CookieTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $format = new Cookie;

        $this->assertInstanceOf(FormatInterface::class, $format);
        $this->assertSame(\DateTime::COOKIE, (string) $format);
    }
}
