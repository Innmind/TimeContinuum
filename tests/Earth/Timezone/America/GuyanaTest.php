<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Guyana,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class GuyanaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Guyana;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
