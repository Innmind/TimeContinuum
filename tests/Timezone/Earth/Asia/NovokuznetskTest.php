<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Novokuznetsk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NovokuznetskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Novokuznetsk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
