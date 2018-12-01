<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Guyana,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GuyanaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Guyana;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
