<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Jakarta,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class JakartaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Jakarta;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
