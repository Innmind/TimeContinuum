<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\BlancSablon,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BlancSablonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new BlancSablon;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
