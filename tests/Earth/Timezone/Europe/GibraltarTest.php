<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Gibraltar,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class GibraltarTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Gibraltar;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
