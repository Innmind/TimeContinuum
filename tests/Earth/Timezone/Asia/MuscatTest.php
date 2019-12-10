<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Muscat,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MuscatTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Muscat;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
