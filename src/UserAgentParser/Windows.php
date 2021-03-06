<?php
/**
 * (c) 2008 Dejan Spasic <spasic.dejan@yahoo.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    Util
 * @subpackage UserAgentParser
 * @author     Dejan Spasic <spasic.dejan@yahoo.de>
 * @version    GIT: $Id:$
 */

namespace Fam\Util\UserAgentParser;

/**
 * Reproduce a windows
 *
 * @package    Util
 * @subpackage UserAgentParser
 * @author     Dejan Spasic <spasic.dejan@yahoo.de>
 * @version    @@PACKAGE_VERSION@@
 */
class Windows extends AbstractOperatingSystem
{
    protected function getPatterns(): array
    {
        return [
            '/windows/i',
            '/win98/i',
            '/win95/i',
            '/win 9x/i',
        ];
    }

    public function getName(): string
    {
        return 'windows';
    }
}
