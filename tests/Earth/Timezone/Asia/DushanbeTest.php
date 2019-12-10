<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Dushanbe,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DushanbeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dushanbe;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
