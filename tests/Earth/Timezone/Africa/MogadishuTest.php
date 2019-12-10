<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Mogadishu,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MogadishuTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mogadishu;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
