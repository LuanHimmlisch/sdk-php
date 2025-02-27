<?php

namespace MercadoPago;

/**
 * EntityTest Class Doc Comment
 *
 * @package MercadoPago
 */
class MercadopagoSdkTest extends \PHPUnit\Framework\TestCase
{
    /**
     *
     */
    protected function setUp(): void
    {
        Entity::unSetManager();
    }

    /**
     *
     */
    protected function tearDown(): void
    {
    }

    /**
     * @expectedException        \Exception
     * @expectedExceptionMessage Please initialize SDK first
     */
    public function testWrongInitialization()
    {
        $entity = new DummyEntity();
    }

    /**
     */
    public function testInitialization()
    {
        SDK::initialize();
        $entity = new DummyEntity();
        $this->assertInstanceOf(DummyEntity::class, $entity);
    }
}
