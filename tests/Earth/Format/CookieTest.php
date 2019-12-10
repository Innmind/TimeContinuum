<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Format;

use Innmind\TimeContinuum\{
    Earth\Format\Cookie,
    Format,
};
use PHPUnit\Framework\TestCase;

class CookieTest extends TestCase
{
    public function testInterface()
    {
        $format = new Cookie;

        $this->assertInstanceOf(Format::class, $format);
        $this->assertSame(\DateTime::COOKIE, (string) $format);
    }
}
