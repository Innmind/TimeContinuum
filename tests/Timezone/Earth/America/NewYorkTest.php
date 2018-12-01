<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\NewYork,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NewYorkTest extends TestCase
{
    public function testInterface()
    {
        $zone = new NewYork;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
