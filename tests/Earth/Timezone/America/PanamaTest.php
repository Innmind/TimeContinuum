<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Panama,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PanamaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Panama;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
