<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Winnipeg,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class WinnipegTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Winnipeg;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
