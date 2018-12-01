<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Monaco,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MonacoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Monaco;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
