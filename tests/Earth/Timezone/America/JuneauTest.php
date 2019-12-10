<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Juneau,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class JuneauTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Juneau;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
