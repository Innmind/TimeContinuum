<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Resolute,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ResoluteTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Resolute;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
