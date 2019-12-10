<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Belfast,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BelfastTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Belfast;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
