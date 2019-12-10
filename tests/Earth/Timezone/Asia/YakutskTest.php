<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Yakutsk,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class YakutskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Yakutsk;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
