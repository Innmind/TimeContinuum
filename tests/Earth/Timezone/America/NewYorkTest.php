<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\NewYork,
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
