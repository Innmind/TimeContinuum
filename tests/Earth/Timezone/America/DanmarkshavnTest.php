<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Danmarkshavn,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DanmarkshavnTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Danmarkshavn;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
