<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Havana,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class HavanaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Havana;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
