<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Nassau,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class NassauTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Nassau;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
