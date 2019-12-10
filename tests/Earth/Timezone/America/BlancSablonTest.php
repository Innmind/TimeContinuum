<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\BlancSablon,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BlancSablonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new BlancSablon;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
