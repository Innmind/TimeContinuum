<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Managua,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ManaguaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Managua;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
