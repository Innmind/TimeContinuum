<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Argentina;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Argentina\Salta,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SaltaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Salta;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
