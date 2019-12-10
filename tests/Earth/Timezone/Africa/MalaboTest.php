<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Malabo,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MalaboTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Malabo;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
