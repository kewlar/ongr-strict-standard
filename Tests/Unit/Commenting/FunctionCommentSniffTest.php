<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ongr\Tests\Unit\Commenting;

use Ongr\Tests\AbstractSniffUnitTest;

/**
 * FunctionCommentSniff class.
 */
class FunctionCommentSniffTest extends AbstractSniffUnitTest
{
    /**
     * {@inheritdoc}
     */
    protected function getErrorList()
    {
        #TODO Should be fixed to disallow white spacing
        return [
//            20 => 1,
//            34 => 1,
//            36 => 1,
//            68 => 1,
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function getWarningList()
    {
        return [];
    }
}
