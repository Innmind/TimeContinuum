<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\Casey,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CaseyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Casey;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
