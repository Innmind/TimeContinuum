<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Earth\Timezone\Indian\Mayotte,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MayotteTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mayotte;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
