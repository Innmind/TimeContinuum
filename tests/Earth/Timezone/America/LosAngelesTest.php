<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\LosAngeles,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class LosAngelesTest extends TestCase
{
    public function testInterface()
    {
        $zone = new LosAngeles;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
