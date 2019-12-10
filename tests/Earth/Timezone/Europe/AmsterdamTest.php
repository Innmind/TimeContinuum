<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Amsterdam,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AmsterdamTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Amsterdam;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
