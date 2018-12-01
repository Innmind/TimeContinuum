<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Chisinau,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChisinauTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chisinau;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
