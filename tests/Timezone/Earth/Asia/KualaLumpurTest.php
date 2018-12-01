<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\KualaLumpur,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KualaLumpurTest extends TestCase
{
    public function testInterface()
    {
        $zone = new KualaLumpur;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
