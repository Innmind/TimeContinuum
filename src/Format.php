<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

/**
 * @psalm-immutable
 */
final class Format
{
    /**
     * @param non-empty-string $value
     */
    private function __construct(
        private string $value,
    ) {
    }

    /**
     * @psalm-pure
     *
     * @param non-empty-string $value
     */
    public static function of(string $value): self
    {
        return new self($value);
    }

    /**
     * @psalm-pure
     */
    public static function cookie(): self
    {
        return new self(\DateTime::COOKIE);
    }

    /**
     * @psalm-pure
     */
    public static function iso8601(): self
    {
        return new self(\DateTime::ATOM);
    }

    /**
     * @psalm-pure
     */
    public static function rfc1036(): self
    {
        return new self(\DateTime::RFC1036);
    }

    /**
     * @psalm-pure
     */
    public static function rfc1123(): self
    {
        return new self(\DateTime::RFC1123);
    }

    /**
     * @psalm-pure
     */
    public static function rfc2822(): self
    {
        return new self(\DateTime::RFC2822);
    }

    /**
     * @psalm-pure
     */
    public static function rfc822(): self
    {
        return new self(\DateTime::RFC822);
    }

    /**
     * @psalm-pure
     */
    public static function rfc850(): self
    {
        return new self(\DateTime::RFC850);
    }

    /**
     * @psalm-pure
     */
    public static function rss(): self
    {
        return new self(\DateTime::RSS);
    }

    /**
     * @psalm-pure
     */
    public static function w3c(): self
    {
        return new self(\DateTime::W3C);
    }

    /**
     * @return non-empty-string
     */
    public function toString(): string
    {
        return $this->value;
    }
}
