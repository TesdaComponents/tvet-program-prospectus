<?php

/**
 * The MIT License
 *
 * Copyright (c) 2016, Coding Matters, Inc. (Gab Amba <gamba@gabbydgab.com>)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Tesda\IntegrationTest;

use Zend\ServiceManager\ServiceManager;
use PHPUnit\Framework\TestCase;
use Tesda\ConfigProvider;
use Tesda\Repository\Catalog\TrainingProgramRepository;

final class TrainingProgramTest extends TestCase
{
    private $serviceManager;
    
    public function setUp()
    {
        $config = new ConfigProvider();
        $this->serviceManager = new ServiceManager($config->getDependencyConfig());
    }

    /**
     * @dataProvider tvetPrograms
     * @param string $code
     * @param string $description
     * @param string $slug
     * @param integer $nc_level
     * @param integer $hours
     */
    public function testTrainingRegulationsShouldMatchTesdaStandards($code, $title, $slug, $nc_level, $hours)
    {
        $repository = $this->serviceManager->get(TrainingProgramRepository::class);

        $program = $repository->getProgram($code);        

        $this->assertEquals($code, $program->getCode());
        $this->assertEquals($title, $program->getTitle());
        $this->assertEquals($slug, $program->getSlug());
        $this->assertEquals($nc_level, $program->getLevel());
//        $this->assertEquals($hours, $program->getTotalHours());
    }

    public function tvetPrograms()
    {
        return [
            [
                'code'      => 'ELCEPA213',
                'title'     => 'Electronics Products Assembly and Servicing NC II',
                'slug'      => 'electronics-products-assembly-and-servicing-nc-2',
                'nc_level'  => 2,
                'hours'     => 260
            ],
            [
                'code'      => 'ELCCSS213',
                'title'     => 'Computer Systems Servicing NC II',
                'slug'      => 'computer-systems-servicing-nc-2',
                'nc_level'  => 2,
                'hours'     => 392
            ],
            [
                'code'      => 'SOCBKP308',
                'title'     => 'Bookkeeping NC III',
                'slug'      => 'bookkeeping-nc-3',
                'nc_level'  => 3,
                'hours'     => 292
            ],
            [
                'code'      => 'SOCSES105',
                'title'     => 'Security Services NC I',
                'slug'      => 'security-services-nc-1',
                'nc_level'  => 1,
                'hours'     => 260
            ],
            [
                'code'      => 'SOCSES207',
                'title'     => 'Security Services NC II',
                'slug'      => 'security-services-nc-2',
                'nc_level'  => 2,
                'hours'     => 260
            ],
            [
                'code'      => 'TRSEMS308',
                'title'     => 'Events Management Services NC III',
                'slug'      => 'events-management-services-nc-3',
                'nc_level'  => 3,
                'hours'     => 108
            ],
            [
                'code'      => 'TRSHSK213',
                'title'     => 'Housekeeping NC II',
                'slug'      => 'housekeeping-nc-2',
                'nc_level'  => 2,
                'hours'     => 436
            ],
            [
                'code'      => 'TRSBPP209',
                'title'     => 'Bread and Pastry Production NC II',
                'slug'      => 'bread-and-pastry-production-nc-2',
                'nc_level'  => 2,
                'hours'     => 116
            ],
            [
                'code'      => 'TRSFBS213',
                'title'     => 'Food and Beverage Services NC II',
                'slug'      => 'food-and-beverage-services-nc-2',
                'nc_level'  => 2,
                'hours'     => 366
            ],
        ];
    }
}
