<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Currie,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CurrieTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Currie;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
