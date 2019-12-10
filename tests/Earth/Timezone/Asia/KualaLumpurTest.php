<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\KualaLumpur,
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
