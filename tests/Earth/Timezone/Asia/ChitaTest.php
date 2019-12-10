<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Chita,
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
