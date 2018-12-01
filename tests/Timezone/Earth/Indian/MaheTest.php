<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    Timezone\Earth\Indian\Mahe,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MaheTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mahe;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
