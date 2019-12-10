<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Santiago,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SantiagoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Santiago;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
