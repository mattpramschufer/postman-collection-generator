<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PostmanGeneratorBundle\RequestParser;

use PostmanGeneratorBundle\Model\Request;

interface RequestParserInterface
{
    /**
     * @param Request $request
     */
    public function parse(Request $request);

    /**
     * @param Request $request
     *
     * @return bool
     */
    public function supports(Request $request);
}
