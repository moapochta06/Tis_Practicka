<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class CollectTest extends TestCase
{
    public function testKeys(): void
    {
        $data = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $keys = $data->keys();
        $this->assertInstanceOf(Collect::class, $keys);
        $this->assertSame(['a', 'b', 'c'], $keys->toArray());
    }
    public function testValues(): void
    {
        $data = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $values = $data->values();
        $this->assertInstanceOf(Collect::class, $values);
        $this->assertSame([1, 2, 3], $values->toArray());
    }
    public function testGet(): void
    {
        $data = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $result = $data->get('a');
        $this->assertSame(1, $result);
    }

    public function testExcept(): void
    {
        $data = new Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $excepted = $data->except('a');
        $this->assertInstanceOf(Collect::class, $excepted);
        $this->assertSame(['b' => 2, 'c' => 3], $excepted->toArray());
    }
}
