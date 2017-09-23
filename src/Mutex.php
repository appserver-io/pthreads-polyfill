<?php

if (!extension_loaded("pthreads")) {

    /**
     * The static methods contained in the Mutex class provide direct access to Posix Mutex functionality.
     */
    final class Mutex
	{

	    /**
	     * Create a Mutex.
	     *
	     * Create, and optionally lock a new Mutex for the caller.
	     *
	     * @param boolean $lock Setting lock to true will lock the Mutex for the caller before returning the handle
	     *
	     * @return integer A newly created and optionally locked Mutex handle
	     */
	    final public static function create($lock = false)
	    {
	        return rand(1000000, 2000000);
	    }

	    /**
	     * Destroy Mutex.
	     *
	     * Destroying Mutex handles must be carried out explicitly by the programmer when they
	     * are finished with the Mutex handle.
	     *
	     * @param integer $mutex A handle returned by a previous call to Mutex::create(). The handle should not be locked by any Thread when Mutex::destroy() is called.
	     *
	     * @return boolean A boolean indication of success
	     */
	    final public static function destroy($mutex)
	    {
	        return true;
	    }

	    /**
	     * Attempt to Acquire Mutex.
	     *
	     * Attempt to lock the Mutex for the caller without blocking if the Mutex is owned (locked) by another Thread.
	     *
	     * @param integer $mutex A handle returned by a previous call to Mutex::create()
	     *
	     * @return boolean A boolean indication of success
	     */
	    final public static function trylock($mutex)
	    {
	        return true;
	    }

	    /**
	     * Acquire Mutex.
	     *
	     * An attempt to lock a Mutex owned (locked) by another Thread will result in blocking.
	     *
	     * @param integer $mutex A handle returned by a previous call to Mutex::create()
	     *
	     * @return boolean A boolean indication of success
	     */
	    final public static function lock($mutex)
	    {
	        return true;
	    }

	    /**
	     * Release Mutex.
	     *
	     * Attempts to unlock the Mutex for the caller, optionally destroying the Mutex handle. The calling thread should own the Mutex at the time of the call.
	     *
	     * @param integer $mutex   A handle returned by a previous call to Mutex::create()
	     * @param boolean $destroy When true pthreads will destroy the Mutex after a successful unlock
	     *
	     * @return boolean A boolean indication of success
	     */
	    final public static function unlock($mutex, $destroy = true)
	    {
	        return true;
	    }
	}
}
