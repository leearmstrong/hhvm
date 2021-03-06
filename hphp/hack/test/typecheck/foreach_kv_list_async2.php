<?hh // strict
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

function foo(string $x): void {}

async function bar(): AsyncKeyedIterator<int, (int, int)> {
  yield 1 => tuple(1, 1);
}

async function test(): Awaitable<void> {
  foreach (bar() await as $k => list($x, $y)) {
    foo($x);
  }
}
