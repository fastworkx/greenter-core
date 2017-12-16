<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 05/10/2017
 * Time: 08:01
 */

namespace Greenter\Parser;

use Greenter\Model\DocumentInterface;

/**
 * Interface DocumentParserInterface
 * @package Greenter\Parser
 */
interface DocumentParserInterface
{
    /**
     * @param mixed $value
     * @return DocumentInterface
     */
    public function parse($value);
}