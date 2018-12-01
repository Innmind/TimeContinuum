<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Ashkhabad,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AshkhabadTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ashkhabad;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
