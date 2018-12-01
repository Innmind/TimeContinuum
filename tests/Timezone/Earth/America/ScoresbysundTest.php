<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Scoresbysund,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ScoresbysundTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Scoresbysund;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
