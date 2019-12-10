<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Yekaterinburg,
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
