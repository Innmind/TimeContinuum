<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Tahiti,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TahitiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tahiti;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
