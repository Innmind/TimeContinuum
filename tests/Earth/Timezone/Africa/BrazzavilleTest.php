<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Brazzaville,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BrazzavilleTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Brazzaville;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
