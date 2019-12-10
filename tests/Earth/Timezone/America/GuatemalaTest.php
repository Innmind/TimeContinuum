<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Guatemala,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class GuatemalaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Guatemala;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
