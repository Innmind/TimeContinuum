<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Rarotonga,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class RarotongaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Rarotonga;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
