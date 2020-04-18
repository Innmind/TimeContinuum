<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Kinshasa extends Timezone
{
    public function __construct()
    {
        parent::__construct('Africa/Kinshasa');
    }
}
