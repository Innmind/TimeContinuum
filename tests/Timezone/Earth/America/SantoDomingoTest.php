<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\SantoDomingo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SantoDomingoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SantoDomingo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
