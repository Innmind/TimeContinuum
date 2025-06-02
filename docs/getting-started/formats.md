# Formats

A `Format` is a representation on how to convert a [`PointInTime`](points-in-time.md) to a `string`, or vice versa.

By default this library comes with these formats:

```php
use Innmind\TimeContinuum\Format;

Format::cookie();
Format::iso8601();
Format::rfc1036();
Format::rfc1123();
Format::rfc2822();
Format::rfc822();
Format::rfc850();
Format::rss();
```

Formats are wrapped in an object in order to give them a name. When used in your application you can reference these names instead of duplicating the strings everywhere.

## Convert to a string

```php
use Innmind\TimeContinuum\{
    Clock,
    Format,
};

echo Clock::live()
    ->now()
    ->format(Format::iso8601());
```

This would print something like `#!php '2024-11-24T14:50:00+00:00'`.

## Convert from a string

```php
use Innmind\TimeContinuum\{
    Clock,
    Format,
    PointInTime,
};

$point = Clock::live()
    ->at('some string', Format::iso8601())
    ->match(
        static fn(PointInTime $point) => $point,
        static fn() => null,
    );
```

Here `#!php $point` is `#!php null` because `#!php 'some string'` is not a valid date.

## Define your own format

If you want to use your own format you can do this via `#!php Format::of('date format')`. The `string` can be anything accepted by [`#!php \DateTimeImmutable::format()`](https://www.php.net/manual/en/datetime.format.php).

You're encouraged to statically define these formats somewhere in your program like this:

=== "Static method"
    ```php
    use Innmind\TimeContinuum\Format;

    final class MyFormats
    {
        public static function iso8601WithMicroseconds(): Format
        {
            return Format::of('Y-m-dT:H:i:s.uP');
        }
    }
    ```

=== "Enum"
    ```php
    use Innmind\TimeContinuum\Format;

    enum MyFormats: string implements Format\Custom
    {
        case iso8601WithMicroseconds = 'Y-m-dT:H:i:s.uP';

        public function normalize(): Format
        {
            return Format::of($this->value);
        }
    }
    ```
