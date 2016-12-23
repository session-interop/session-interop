<?php
/**
 * @license http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
**/

namespace Interop\Session;

interface SessionInterface {
  /**
   * This function return the element associated with $key.
   *
   * This function should return null if the key is not found
   *
   * @param string $key : The key of the element to retrieve
   * @return mixed
  */
   public function get($key);

    /**
     * This function set the element `$data` associated with `$key`.
     *
     * This function should throw an exception if $key is not a string.
     * This function should remove the value if $data = null
     *
     * @param string $key : The key of the element to set
     * @param mixed $data : The data to set
     * @return void
    */
    public function set($key, $data);
}
