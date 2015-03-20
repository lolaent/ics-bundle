<?php
namespace Cti\Bundle\IcsBundle\Tests;

use Cti\Ics\Generator;

class GeneratorServiceTest extends \PHPUnit_Framework_TestCase
{
    protected $generator;

    protected function setUp()
    {
        $kernel = new \AppKernel('test', true);
        $kernel->boot();

        $this->generator = $kernel->getContainer()->get('ics_bundle.generator');
    }

    /**
     * @test
     */
    public function serviceIsValid()
    {
        $this->assertInstanceOf('Cti\Ics\Generator', $this->generator);
    }
}
