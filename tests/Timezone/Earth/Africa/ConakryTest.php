<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Conakry,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ConakryTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Conakry;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
