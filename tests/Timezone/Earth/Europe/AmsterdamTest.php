<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Amsterdam,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AmsterdamTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Amsterdam;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
