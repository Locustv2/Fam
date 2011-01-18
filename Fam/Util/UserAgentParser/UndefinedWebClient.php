<?php
/**
 * (c) 2008 Dejan Spasic <sapsic.dejan@yahoo.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    Util
 * @subpackage UserAgentParser
 * @author     Dejan Spasic <spasic.dejan@yahoo.de>
 * @version    GIT: $Id:$
 */

declare(encoding='UTF-8');

namespace Fam\Util\UserAgentParser;

require_once __DIR__ . '/AbstractWebClient.php';

/**
 * Represents an undefined web client
 *
 * @package    Util
 * @subpackage UserAgentParser
 * @author     Dejan Spasic <spasic.dejan@yahoo.de>
 * @version    @@PACKAGE_VERSION@@
 */
class UndefinedWebClient extends AbstractWebClient
{
    /**
     * @return string
     */
    public function getName()
    {
        return null;
    }

    /**
     * @return array
     */
    protected function getPatterns()
    {
        return array();
    }
}
