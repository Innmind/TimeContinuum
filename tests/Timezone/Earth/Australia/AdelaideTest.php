<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Adelaide,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AdelaideTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Adelaide;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
