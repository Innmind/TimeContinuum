<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America\Indiana;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Vincennes extends Timezone
{
    public function __construct()
    {
        parent::__construct('America/Indiana/Vincennes');
    }
}
