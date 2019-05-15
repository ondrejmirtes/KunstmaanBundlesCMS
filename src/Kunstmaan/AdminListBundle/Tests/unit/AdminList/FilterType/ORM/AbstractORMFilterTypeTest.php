<?php

namespace Kunstmaan\AdminListBundle\Tests\AdminList\FilterType\ORM;

use Doctrine\ORM\QueryBuilder;
use Kunstmaan\AdminListBundle\AdminList\FilterType\ORM\AbstractORMFilterType;
use PHPUnit\Framework\TestCase;

class AbstractORMFilterTypeTest extends TestCase
{
    public function testSetQueryBuilder()
    {
        /* @var AbstractORMFilterType $object */
        $object = $this->getMockForAbstractClass('Kunstmaan\AdminListBundle\AdminList\FilterType\ORM\AbstractORMFilterType', array('column', 'alias'));

        /* @var QueryBuilder $queryBuilder */
        $queryBuilder = $this->getMockBuilder('Doctrine\ORM\QueryBuilder')
            ->disableOriginalConstructor()
            ->getMock();

        $object->setQueryBuilder($queryBuilder);
    }
}