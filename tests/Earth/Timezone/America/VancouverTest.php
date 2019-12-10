<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Vancouver,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class VancouverTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vancouver;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
