<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Nicosia,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NicosiaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Nicosia;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
