<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Cayman,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CaymanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Cayman;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
