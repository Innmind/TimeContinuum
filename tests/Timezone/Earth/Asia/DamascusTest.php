<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Damascus,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DamascusTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Damascus;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
