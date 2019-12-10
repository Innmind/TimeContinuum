<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Budapest,
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
