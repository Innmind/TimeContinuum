<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Noronha,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NoronhaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Noronha;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
