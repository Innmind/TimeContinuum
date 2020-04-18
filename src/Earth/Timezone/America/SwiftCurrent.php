<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class SwiftCurrent extends Timezone
{
    public function __construct()
    {
        parent::__construct('America/Swift_Current');
    }
}
