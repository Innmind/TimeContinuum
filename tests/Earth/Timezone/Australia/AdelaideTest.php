<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Adelaide,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AdelaideTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Adelaide;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
