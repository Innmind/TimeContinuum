<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\Mawson,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MawsonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Mawson;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
