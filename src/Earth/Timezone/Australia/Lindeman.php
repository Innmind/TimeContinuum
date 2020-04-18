<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Lindeman extends Timezone
{
    public function __construct()
    {
        parent::__construct('Australia/Lindeman');
    }
}
