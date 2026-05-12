<?php
/**
 * Tests for AiderCode
 */

use PHPUnit\Framework\TestCase;
use Aidercode\Aidercode;

class AidercodeTest extends TestCase {
    private Aidercode $instance;

    protected function setUp(): void {
        $this->instance = new Aidercode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Aidercode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
