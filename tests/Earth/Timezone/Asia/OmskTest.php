<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Omsk,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class OmskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Omsk;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
