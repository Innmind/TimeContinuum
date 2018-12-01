<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Danmarkshavn,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DanmarkshavnTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Danmarkshavn;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
