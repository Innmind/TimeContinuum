<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Srednekolymsk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SrednekolymskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Srednekolymsk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
