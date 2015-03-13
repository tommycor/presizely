<?php

namespace FOS\ElasticaBundle\Tests;

use FOS\ElasticaBundle\Repository;

/**
 * @author Richard Miller <info@limethinking.co.uk>
 */
class RepositoryTest extends \PHPUnit_Framework_TestCase
{
    public function testThatFindCallsFindOnFinder()
    {
        $testQuery = 'Test Query';

        /** @var $typeMock \PHPUnit_Framework_MockObject_MockObject|\FOS\ElasticaBundle\Finder\TransformedFinder */
        $finderMock = $this->getMockBuilder('FOS\ElasticaBundle\Finder\TransformedFinder')
            ->disableOriginalConstructor()
            ->getMock();
        $finderMock->expects($this->once())
            ->method('find')
            ->with($this->equalTo($testQuery));

        $repository = new Repository($finderMock);
        $repository->find($testQuery);
    }

    public function testThatFindCallsFindOnFinderWithLimit()
    {
        $testQuery = 'Test Query';
        $testLimit = 20;

        /** @var $typeMock \PHPUnit_Framework_MockObject_MockObject|\FOS\ElasticaBundle\Finder\TransformedFinder */
        $finderMock = $this->getMockBuilder('FOS\ElasticaBundle\Finder\TransformedFinder')
            ->disableOriginalConstructor()
            ->getMock();
        $finderMock->expects($this->once())
            ->method('find')
            ->with($this->equalTo($testQuery), $this->equalTo($testLimit));

        $repository = new Repository($finderMock);
        $repository->find($testQuery, $testLimit);
    }

    public function testThatFindPaginatedCallsFindPaginatedOnFinder()
    {
        $testQuery = 'Test Query';

        /** @var $typeMock \PHPUnit_Framework_MockObject_MockObject|\FOS\ElasticaBundle\Finder\TransformedFinder */
        $finderMock = $this->getMockBuilder('FOS\ElasticaBundle\Finder\TransformedFinder')
            ->disableOriginalConstructor()
            ->getMock();
        $finderMock->expects($this->once())
            ->method('findPaginated')
            ->with($this->equalTo($testQuery));

        $repository = new Repository($finderMock);
        $repository->findPaginated($testQuery);
    }

    public function testThatCreatePaginatorCreatesAPaginatorViaFinder()
    {
        $testQuery = 'Test Query';

        /** @var $typeMock \PHPUnit_Framework_MockObject_MockObject|\FOS\ElasticaBundle\Finder\TransformedFinder */
        $finderMock = $this->getMockBuilder('FOS\ElasticaBundle\Finder\TransformedFinder')
            ->disableOriginalConstructor()
            ->getMock();
        $finderMock->expects($this->once())
            ->method('createPaginatorAdapter')
            ->with($this->equalTo($testQuery));

        $repository = new Repository($finderMock);
        $repository->createPaginatorAdapter($testQuery);
    }

    public function testThatFindHybridCallsFindHybridOnFinder()
    {
        $testQuery = 'Test Query';
        $testLimit = 20;

        /** @var $typeMock \PHPUnit_Framework_MockObject_MockObject|\FOS\ElasticaBundle\Finder\TransformedFinder */
        $finderMock = $this->getMockBuilder('FOS\ElasticaBundle\Finder\TransformedFinder')
            ->disableOriginalConstructor()
            ->getMock();
        $finderMock->expects($this->once())
            ->method('findHybrid')
            ->with($this->equalTo($testQuery), $this->equalTo($testLimit));

        $repository = new Repository($finderMock);
        $repository->findHybrid($testQuery, $testLimit);
    }
}
