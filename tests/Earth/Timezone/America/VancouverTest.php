<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Vancouver,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class VancouverTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vancouver;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
