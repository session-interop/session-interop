<?php
/**
 * @license http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
**/

namespace Interop\Session;

interface SessionInterface {
  /**
   * This function return the element associated with $key.
   *
   * The function should throw an exception if $key does not exists in the session or if $key is not a string.
   *
   * @param string $key : The key of the element to retrieve
   * @return mixed
  */
   public function get($key);

    /**
     * This function set the element `$data` associated with `$key`.
     *
     * The function should throw an exception if $key is not a string.
     *
     * @param string $key : The key of the element to set
     * @param mixed $data : The data to set
     * @return void
    */
    public function set($key, $data);

    /**
     * This function check if $key has an element in the session. If the element at $key is null, it should return `true`.
     *
     * The function should throw an exception if $key is not a string.
     *
     * @param string $key : The key to check
     * @return bool
    */
    public function has($key);

    /**
     * This function remove the $key in the session. It should REMOVE the value, and not setting it as null.
     *
     * The function should throw an exception if $key is not a string.
     * If there is no element at `$key`, this function does not throw an exception
     *
     * @param string $key : The key of the element to remove
     * @return void
    */
    public function remove($key);
}
