<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\Macquarie,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MacquarieTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Macquarie;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
