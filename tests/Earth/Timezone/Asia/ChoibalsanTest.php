<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Choibalsan,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChoibalsanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Choibalsan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
