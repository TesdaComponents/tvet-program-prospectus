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

namespace Tesda\Repository\Catalog;

use Tesda\Model\Entity\TrainingProgram;
use Zend\Hydrator\HydrationInterface;
use DomainException;

class TrainingProgramRepository
{
    private $prototype;
    private $hydrator;

    public function __construct(TrainingProgram $prototype, HydrationInterface $hydrator)
    {
        $this->prototype    = $prototype;
        $this->hydrator     = $hydrator;
        $this->data         = require 'data/tesda/programs.php';
    }

    public function getProgram($code)
    {
        if (! isset($this->data[$code])) {
            throw new DomainException(sprintf('Traning Program by code "%s" not found', $code));
        }

        $program = $this->hydrator->hydrate($this->data[$code], $this->prototype);
        return $program;
    }
}
