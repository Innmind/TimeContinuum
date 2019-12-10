<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Andorra,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AndorraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Andorra;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
