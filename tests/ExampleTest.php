<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
//    use WithoutMiddleware;
    public function testBasicExample()
    {
        $this
            ->withSession(['foo' => 'bar'])
            -> visit('/inventory')


           ;
    }
}
