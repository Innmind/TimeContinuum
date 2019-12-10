<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\{
    Earth\Timezone\Indian\Kerguelen,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KerguelenTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kerguelen;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
