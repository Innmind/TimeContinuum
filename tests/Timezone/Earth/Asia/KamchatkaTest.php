<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Kamchatka,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KamchatkaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kamchatka;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
