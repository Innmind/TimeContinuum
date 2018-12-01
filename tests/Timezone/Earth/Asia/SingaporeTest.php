<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Singapore,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SingaporeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Singapore;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
