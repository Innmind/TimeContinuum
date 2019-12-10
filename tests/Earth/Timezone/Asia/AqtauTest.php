<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Aqtau,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AqtauTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Aqtau;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
