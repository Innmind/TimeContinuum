<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Yellowknife,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class YellowknifeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Yellowknife;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
