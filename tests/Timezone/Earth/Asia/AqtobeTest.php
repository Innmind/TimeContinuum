<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Aqtobe,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AqtobeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Aqtobe;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
