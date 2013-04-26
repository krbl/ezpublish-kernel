<?php
/**
 * File containing the RepositoryTest class.
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\Repository\Tests\Service\Integration;

use eZ\Publish\Core\Repository\Tests\Service\Integration\Base as BaseServiceTest;

/**
 * @group repository
 */
abstract class RepositoryTest extends BaseServiceTest
{
    /**
     * Test repository instance
     * @covers \eZ\Publish\API\Repository\Repository
     */
    public function testRepositoryInstance()
    {
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\Repository', self::$repository );
    }

    /**
     * Test repository method
     * @covers \eZ\Publish\API\Repository\Repository::canUser
     */
    public function testCanUser()
    {
        self::markTestIncomplete( "Not implemented: " . __METHOD__ );
    }

    /**
     * Test repository method
     * @covers \eZ\Publish\API\Repository\Repository::hasAccess
     */
    public function testHasAccess()
    {
        self::markTestIncomplete( "Not implemented: " . __METHOD__ );
    }

    /**
     * Test repository method
     * @covers \eZ\Publish\API\Repository\Repository::setCurrentUser
     */
    public function testSetCurrentUser()
    {
        self::markTestIncomplete( "Not implemented: " . __METHOD__ );
    }

    /**
     * Test repository method
     * @covers \eZ\Publish\API\Repository\Repository::getCurrentUser
     */
    public function testGetCurrentUser()
    {
        self::markTestIncomplete( "Not implemented: " . __METHOD__ );
    }

    /**
     * Test service method
     * @covers \eZ\Publish\API\Repository\Repository::getContentService
     */
    public function testGetContentService()
    {
        $service = self::$repository->getContentService();
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\ContentService', $service );
    }

    /**
     * Test service method
     * @covers \eZ\Publish\API\Repository\Repository::getContentTypeService
     */
    public function testGetContentTypeService()
    {
        $service = self::$repository->getContentTypeService();
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\ContentTypeService', $service );
    }

    /**
     * Test service method
     * @covers \eZ\Publish\API\Repository\Repository::getFieldTypeService
     */
    public function testGetFieldTypeService()
    {
        $service = self::$repository->getFieldTypeService();
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\FieldTypeService', $service );
    }

    /**
     * Test service method
     * @covers \eZ\Publish\API\Repository\Repository::getContentLanguageService
     */
    public function testGetContentLanguageService()
    {
        $service = self::$repository->getContentLanguageService();
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\LanguageService', $service );
    }

    /**
     * Test service method
     * @covers \eZ\Publish\API\Repository\Repository::getLocationService
     */
    public function testGetLocationService()
    {
        $service = self::$repository->getLocationService();
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\LocationService', $service );
    }

    /**
     * Test service method
     * @covers \eZ\Publish\API\Repository\Repository::getObjectStateService
     */
    public function testGetObjectStateService()
    {
        $service = self::$repository->getObjectStateService();
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\ObjectStateService', $service );
    }

    /**
     * Test service method
     * @covers \eZ\Publish\API\Repository\Repository::getRoleService
     */
    public function testGetRoleService()
    {
        $service = self::$repository->getRoleService();
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\RoleService', $service );
    }

    /**
     * Test service method
     * @covers \eZ\Publish\API\Repository\Repository::getSearchService
     */
    public function testGetSearchService()
    {
        $service = self::$repository->getSearchService();
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\SearchService', $service );
    }

    /**
     * Test service method
     * @covers \eZ\Publish\API\Repository\Repository::getSectionService
     */
    public function testGetSectionService()
    {
        $service = self::$repository->getSectionService();
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\SectionService', $service );
    }

    /**
     * Test service method
     * @covers \eZ\Publish\API\Repository\Repository::getTrashService
     */
    public function testGetTrashService()
    {
        $service = self::$repository->getTrashService();
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\TrashService', $service );
    }

    /**
     * Test service method
     * @covers \eZ\Publish\API\Repository\Repository::getURLAliasService
     */
    public function testGetURLAliasService()
    {
        $service = self::$repository->getURLAliasService();
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\URLAliasService', $service );
    }

    /**
     * Test service method
     * @covers \eZ\Publish\API\Repository\Repository::getURLWildcardService
     */
    public function testGetURLWildcardService()
    {
        $service = self::$repository->getURLWildcardService();
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\URLWildcardService', $service );
    }

    /**
     * Test service method
     * @covers \eZ\Publish\API\Repository\Repository::getUserService
     */
    public function testGetUserService()
    {
        $service = self::$repository->getUserService();
        self::assertInstanceOf( 'eZ\\Publish\\API\\Repository\\UserService', $service );
    }
}
