<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\CambridgeBay,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CambridgeBayTest extends TestCase
{
    public function testInterface()
    {
        $zone = new CambridgeBay;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
