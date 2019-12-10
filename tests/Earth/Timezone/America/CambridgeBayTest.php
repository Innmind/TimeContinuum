<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\CambridgeBay,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CambridgeBayTest extends TestCase
{
    public function testInterface()
    {
        $zone = new CambridgeBay;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
