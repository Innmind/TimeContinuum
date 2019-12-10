<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Earth\Timezone\Indian\Mahe,
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
