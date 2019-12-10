<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\SantoDomingo,
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
