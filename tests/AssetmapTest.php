<?php
/**
 * Tests for AssetMap
 */

use PHPUnit\Framework\TestCase;
use Assetmap\Assetmap;

class AssetmapTest extends TestCase {
    private Assetmap $instance;

    protected function setUp(): void {
        $this->instance = new Assetmap(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Assetmap::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
