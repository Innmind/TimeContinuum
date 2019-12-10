<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Denver,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DenverTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Denver;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
