<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\GooseBay,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class GooseBayTest extends TestCase
{
    public function testInterface()
    {
        $zone = new GooseBay;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
