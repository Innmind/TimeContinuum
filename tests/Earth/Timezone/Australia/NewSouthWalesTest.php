<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\NewSouthWales,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class NewSouthWalesTest extends TestCase
{
    public function testInterface()
    {
        $zone = new NewSouthWales;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
