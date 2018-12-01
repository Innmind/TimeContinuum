<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Yekaterinburg,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class YekaterinburgTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Yekaterinburg;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
