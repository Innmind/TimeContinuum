<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Clock;

use Innmind\TimeContinuum\{
    PointInTime,
    Format,
    Offset,
    Timezone,
    Timezones,
};
use Innmind\Immutable\Attempt;

/**
 * @internal
 */
final class Via implements Implementation
{
    /**
     * @param \Closure(): PointInTime $now
     */
    public function __construct(
        private \Closure $now,
        private Offset $offset,
    ) {
    }

    #[\Override]
    public function switch(callable $changeTimezone): self
    {
        $now = $this->now();
        /** @var callable(non-empty-string): Timezone */
        $of = static function(string $zone) use ($now): Timezone {
            /** @var non-empty-string $zone */
            $now = (new \DateTimeImmutable($now->format(Format::iso8601())))->setTimezone(new \DateTimeZone($zone));

            return Timezone::of(
                Offset::from($now->format('P')),
                (bool) (int) $now->format('I'),
            );
        };

        $offset = $changeTimezone(Timezones::new($of))->offset();

        return new self(
            $this->now,
            $offset,
        );
    }

    #[\Override]
    public function now(): PointInTime
    {
        return ($this->now)()->changeOffset($this->offset);
    }

    /**
     * @psalm-mutation-free
     *
     * @param non-empty-string $date
     *
     * @return Attempt<PointInTime>
     */
    #[\Override]
    public function at(string $date, Format $format): Attempt
    {
        try {
            $datetime = \DateTimeImmutable::createFromFormat($format->toString(), $date);
        } catch (\Throwable $e) {
            /** @var Attempt<PointInTime> */
            return Attempt::error($e);
        }

        if ($datetime === false) {
            $lastErrors = \DateTimeImmutable::getLastErrors();
            $warnings = \implode(', ', \array_values($lastErrors['warnings'] ?? []));
            $errors = \implode(', ', \array_values($lastErrors['errors'] ?? []));
            $message = <<<MESSAGE
            Warnings: $warnings
            Errors: $errors
            MESSAGE;

            /** @var Attempt<PointInTime> */
            return Attempt::error(new \RuntimeException($message));
        }

        if ($datetime->format($format->toString()) !== $date) {
            /** @var Attempt<PointInTime> */
            return Attempt::error(new \RuntimeException(\sprintf(
                'Date "%s" is not exactly of the expected format "%s"',
                $date,
                $format->toString(),
            )));
        }

        return Attempt::result(PointInTime::at($datetime)->changeOffset($this->offset));
    }
}
