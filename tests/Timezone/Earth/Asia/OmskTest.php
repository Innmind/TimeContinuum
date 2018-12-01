<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Omsk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class OmskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Omsk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
