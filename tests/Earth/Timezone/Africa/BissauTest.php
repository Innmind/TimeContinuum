<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Bissau,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BissauTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bissau;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
