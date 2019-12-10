<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Chisinau,
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
