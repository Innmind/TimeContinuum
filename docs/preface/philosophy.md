# Philosophy

TimeContinuum is designed around these objectives:

- an expressive API through a clear naming
- to handle time with precision
- simplify common use cases

Time is a tricky business full of gotchas. It's easy to make mistake that go undetected for a while.

The first step to avoid mistakes is to provide a good naming. Here, each component of time is accessible via expressive methods to give the least possible room to error.

One of the hardest aspect of time is to distinguish what can change from what can't. Once again naming helps but it's not enough. This package creates a _frontier_ between these two worlds. This is expressed via an `immutable` annotation (understood by [Psalm](https://psalm.dev)) on what cannot change, and the rest may change.
