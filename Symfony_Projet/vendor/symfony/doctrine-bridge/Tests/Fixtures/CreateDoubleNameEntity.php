<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Tests\Fixtures;

class CreateDoubleNameEntity
{
    public $primaryName;
    public $secondaryName;

    public function __construct($primaryName, $secondaryName)
    {
        $this->primaryName = $primaryName;
        $this->secondaryName = $secondaryName;
    }
}
