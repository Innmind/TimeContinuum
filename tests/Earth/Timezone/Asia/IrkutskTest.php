<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Irkutsk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class IrkutskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Irkutsk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
