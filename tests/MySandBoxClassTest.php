<?php
namespace Tests\App;

use App\MySandBoxClass;
use PHPUnit\Framework\TestCase;

/**
 * Class MySandBoxClassTest
 * @package Tests\App
 */
class MySandBoxClassTest extends TestCase
{
    /**
     * @return void
     */
    public function testOnePlusOne(): void
    {
        $class = new MySandBoxClass();
        $this->assertEquals(2, $class->add(1, 1));
    }
}