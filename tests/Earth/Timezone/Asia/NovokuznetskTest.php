<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Novokuznetsk,
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
