<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Chita,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChitaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chita;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
