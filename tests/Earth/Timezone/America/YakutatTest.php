<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Yakutat,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class YakutatTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Yakutat;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
