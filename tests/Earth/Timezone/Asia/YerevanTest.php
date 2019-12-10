<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Yerevan,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class YerevanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Yerevan;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
