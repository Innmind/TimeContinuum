<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Norfolk,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class NorfolkTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Norfolk;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
