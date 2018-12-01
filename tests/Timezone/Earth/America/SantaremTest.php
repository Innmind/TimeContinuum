<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Santarem,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SantaremTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Santarem;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
