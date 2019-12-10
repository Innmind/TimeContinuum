<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\NewYork,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class NewYorkTest extends TestCase
{
    public function testInterface()
    {
        $zone = new NewYork;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
