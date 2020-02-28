<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Reflection;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Reflection\SyntaxErrorException;

/**
 * Syntax error exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Reflection
 * @final
 */
final class SyntaxErrorExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new SyntaxErrorException("exception");

        $res = "The file \"exception\" contains syntax errors";
        $this->assertEquals($res, $ex->getMessage());
    }

}
