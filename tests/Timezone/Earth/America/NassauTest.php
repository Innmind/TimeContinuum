<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Nassau,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NassauTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Nassau;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
