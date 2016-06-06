<?php
/**
 * @license http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
**/

namespace Interop\Session;

interface SessionInterface {

    public function get($key);

    public function set($key, $data);

    public function has($key);

    public function remove($key);
}
