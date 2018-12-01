<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Budapest,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BudapestTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Budapest;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
