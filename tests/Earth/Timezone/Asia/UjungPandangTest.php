<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\UjungPandang,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class UjungPandangTest extends TestCase
{
    public function testInterface()
    {
        $zone = new UjungPandang;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
