<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum;

use Innmind\TimeContinuum\Format;
use Innmind\BlackBox\PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class FormatTest extends TestCase
{
    #[DataProvider('formats')]
    public function testFormat($format, $expected)
    {
        $this->assertSame($expected, $format->toString());
    }

    public static function formats()
    {
        yield [Format::cookie(), \DateTime::COOKIE];
        yield [Format::iso8601(), \DateTime::ATOM];
        yield [Format::rfc1036(), \DateTime::RFC1036];
        yield [Format::rfc1123(), \DateTime::RFC1123];
        yield [Format::rfc2822(), \DateTime::RFC2822];
        yield [Format::rfc822(), \DateTime::RFC822];
        yield [Format::rfc850(), \DateTime::RFC850];
        yield [Format::rss(), \DateTime::RSS];
        yield [Format::w3c(), \DateTime::W3C];
    }
}
