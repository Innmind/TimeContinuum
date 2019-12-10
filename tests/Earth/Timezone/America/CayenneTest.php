<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Cayenne,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CayenneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Cayenne;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
