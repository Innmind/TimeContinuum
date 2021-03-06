<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\ComodRivadavia,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ComodRivadaviaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new ComodRivadavia;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
