<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Lima,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class LimaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lima;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
