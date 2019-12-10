<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Singapore,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SingaporeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Singapore;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
