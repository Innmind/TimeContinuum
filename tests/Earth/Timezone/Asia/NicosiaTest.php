<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Nicosia,
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
