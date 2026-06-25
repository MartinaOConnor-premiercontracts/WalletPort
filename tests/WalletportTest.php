<?php
/**
 * Tests for WalletPort
 */

use PHPUnit\Framework\TestCase;
use Walletport\Walletport;

class WalletportTest extends TestCase {
    private Walletport $instance;

    protected function setUp(): void {
        $this->instance = new Walletport(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Walletport::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
