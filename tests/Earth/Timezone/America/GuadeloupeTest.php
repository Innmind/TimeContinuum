<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Guadeloupe,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class GuadeloupeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Guadeloupe;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
