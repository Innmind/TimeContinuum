<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Zagreb,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ZagrebTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Zagreb;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
