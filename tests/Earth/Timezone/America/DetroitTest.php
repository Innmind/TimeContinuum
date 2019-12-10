<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Detroit,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DetroitTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Detroit;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
