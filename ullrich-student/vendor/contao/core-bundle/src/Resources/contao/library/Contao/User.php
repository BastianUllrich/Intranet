<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy;

/**
 * Authenticates and initializes user objects
 *
 * The class supports user authentication, login and logout, persisting the
 * session data and initializing the user object from a database row. It
 * functions as abstract parent class for the "BackendUser" and "FrontendUser"
 * classes of the core.
 *
 * Usage:
 *
 *     $user = BackendUser::getInstance();
 *
 *     if ($user->findBy('username', 'leo'))
 *     {
 *         echo $user->name;
 *     }
 *
 * @property integer $id
 * @property integer $tstamp
 * @property string  $username
 * @property string  $name
 * @property string  $email
 * @property string  $language
 * @property string  $backendTheme
 * @property boolean $limitWidth
 * @property string  $uploader
 * @property boolean $showHelp
 * @property boolean $thumbnails
 * @property boolean $useRTE
 * @property boolean $useCE
 * @property string  $password
 * @property boolean $pwChange
 * @property boolean $admin
 * @property array   $groups
 * @property string  $inherit
 * @property string  $modules
 * @property string  $themes
 * @property array   $pagemounts
 * @property string  $alpty
 * @property array   $filemounts
 * @property string  $fop
 * @property string  $forms
 * @property string  $formp
 * @property array   $amg
 * @property boolean $disable
 * @property string  $start
 * @property string  $stop
 * @property string  $session
 * @property integer $dateAdded
 * @property integer $lastLogin
 * @property integer $currentLogin
 * @property integer $loginCount
 * @property integer $locked
 * @property string  $firstname
 * @property string  $lastname
 * @property string  $dateOfBirth
 * @property string  $gender
 * @property string  $company
 * @property string  $street
 * @property string  $postal
 * @property string  $city
 * @property string  $state
 * @property string  $country
 * @property string  $phone
 * @property string  $mobile
 * @property string  $fax
 * @property string  $website
 * @property boolean $login
 * @property boolean $assignDir
 * @property string  $homeDir
 * @property string  $autologin
 * @property integer $createdOn
 * @property string  $activation
 * @property string  $loginPage
 * @property object  $objImport
 * @property object  $objAuth
 * @property object  $objLogin
 * @property object  $objLogout
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
abstract class User extends \System
{
	/**
	 * Object instance (Singleton)
	 * @var User
	 */
	protected static $objInstance;

	/**
	 * User ID
	 * @var integer
	 */
	protected $intId;

	/**
	 * IP address
	 * @var string
	 */
	protected $strIp;

	/**
	 * Authentication hash
	 * @var string
	 */
	protected $strHash;

	/**
	 * Table
	 * @var string
	 */
	protected $strTable;

	/**
	 * Cookie name
	 * @var string
	 */
	protected $strCookie;

	/**
	 * Data
	 * @var array
	 */
	protected $arrData = array();

	/**
	 * Import the database object
	 */
	protected function __construct()
	{
		parent::__construct();
		$this->import('Database');
	}

	/**
	 * Prevent cloning of the object (Singleton)
	 */
	final public function __clone()
	{
	}

	/**
	 * Set an object property
	 *
	 * @param string $strKey   The property name
	 * @param mixed  $varValue The property value
	 */
	public function __set($strKey, $varValue)
	{
		$this->arrData[$strKey] = $varValue;
	}

	/**
	 * Return an object property
	 *
	 * @param string $strKey The property name
	 *
	 * @return mixed The property value
	 */
	public function __get($strKey)
	{
		if (isset($this->arrData[$strKey]))
		{
			return $this->arrData[$strKey];
		}

		return parent::__get($strKey);
	}

	/**
	 * Check whether a property is set
	 *
	 * @param string $strKey The property name
	 *
	 * @return boolean True if the property is set
	 */
	public function __isset($strKey)
	{
		return isset($this->arrData[$strKey]);
	}

	/**
	 * Get a string representation of the user
	 *
	 * @return string The string representation
	 */
	public function __toString()
	{
		if (!$this->intId)
		{
			return 'anon.';
		}

		return $this->username ?: ($this->getTable() . '.' . $this->intId);
	}

	/**
	 * Instantiate a new user object (Factory)
	 *
	 * @return static The object instance
	 */
	public static function getInstance()
	{
		if (static::$objInstance === null)
		{
			static::$objInstance = new static();
		}

		return static::$objInstance;
	}

	/**
	 * Return the table name
	 *
	 * @return string
	 */
	public function getTable()
	{
		return $this->strTable;
	}

	/**
	 * Return the current record as associative array
	 *
	 * @return array
	 */
	public function getData()
	{
		return $this->arrData;
	}

	/**
	 * Authenticate a user
	 *
	 * @return boolean True if the user could be authenticated
	 */
	public function authenticate()
	{
		// No cookie
		if ($this->strHash === null)
		{
			return false;
		}

		// Check the cookie hash
		if ($this->strHash != $this->getSessionHash($this->strCookie))
		{
			return false;
		}

		$objSession = $this->Database->prepare("SELECT * FROM tl_session WHERE hash=?")
									 ->execute($this->strHash);

		// Try to find the session in the database
		if ($objSession->numRows < 1)
		{
			return false;
		}

		$time = time();
		$container = \System::getContainer();
		$session = $container->get('session');

		// Validate the session
		if ($objSession->sessionID != $session->getId() || (!$container->getParameter('contao.security.disable_ip_check') && $objSession->ip != $this->strIp) || $objSession->hash != $this->strHash || ($objSession->tstamp + \Config::get('sessionTimeout')) < $time)
		{
			return false;
		}

		$this->intId = $objSession->pid;

		// Load the user object
		if ($this->findBy('id', $this->intId) == false)
		{
			return false;
		}

		$this->setUserFromDb();

		// Update session
		$this->Database->prepare("UPDATE tl_session SET tstamp=$time WHERE hash=?")
					   ->execute($this->strHash);

		$this->setCookie($this->strCookie, $this->strHash, ($time + \Config::get('sessionTimeout')), null, null, \Environment::get('ssl'), true);

		// HOOK: post authenticate callback
		if (isset($GLOBALS['TL_HOOKS']['postAuthenticate']) && \is_array($GLOBALS['TL_HOOKS']['postAuthenticate']))
		{
			foreach ($GLOBALS['TL_HOOKS']['postAuthenticate'] as $callback)
			{
				$this->import($callback[0], 'objAuth', true);
				$this->objAuth->{$callback[1]}($this);
			}
		}

		return true;
	}

	/**
	 * Try to login the current user
	 *
	 * @return boolean True if the user could be logged in
	 */
	public function login()
	{
		/** @var Request $request */
		$request = System::getContainer()->get('request_stack')->getCurrentRequest();

		\System::loadLanguageFile('default');

		// Do not continue if username or password are missing
		if (empty($_POST['username']) || empty($_POST['password']))
		{
			return false;
		}

		// Load the user object
		if ($this->findBy('username', \Input::post('username', true)) == false)
		{
			$blnLoaded = false;

			// HOOK: pass credentials to callback functions
			if (isset($GLOBALS['TL_HOOKS']['importUser']) && \is_array($GLOBALS['TL_HOOKS']['importUser']))
			{
				foreach ($GLOBALS['TL_HOOKS']['importUser'] as $callback)
				{
					$this->import($callback[0], 'objImport', true);
					$blnLoaded = $this->objImport->{$callback[1]}(\Input::post('username', true), $request->request->get('password'), $this->strTable);

					// Load successfull
					if ($blnLoaded === true)
					{
						break;
					}
				}
			}

			// Return if the user still cannot be loaded
			if (!$blnLoaded || $this->findBy('username', \Input::post('username', true)) == false)
			{
				\Message::addError($GLOBALS['TL_LANG']['ERR']['invalidLogin']);
				$this->log('Could not find user "' . \Input::post('username', true) . '"', __METHOD__, TL_ACCESS);

				return false;
			}
		}

		$time = time();

		// Set the user language
		if (\Input::post('language'))
		{
			$this->language = \Input::post('language');
		}

		// Lock the account if there are too many login attempts
		if ($this->loginCount < 1)
		{
			$this->locked = $time;
			$this->loginCount = \Config::get('loginCount');
			$this->save();

			// Add a log entry and the error message, because checkAccountStatus() will not be called (see #4444)
			$this->log('User "' . $this->username . '" has been locked for ' . ceil(\Config::get('lockPeriod') / 60) . ' minutes', __METHOD__, TL_ACCESS);
			\Message::addError(sprintf($GLOBALS['TL_LANG']['ERR']['accountLocked'], ceil((($this->locked + \Config::get('lockPeriod')) - $time) / 60)));

			// Send admin notification
			if (\Config::get('adminEmail') != '')
			{
				$objEmail = new \Email();
				$objEmail->subject = $GLOBALS['TL_LANG']['MSC']['lockedAccount'][0];
				$objEmail->text = sprintf($GLOBALS['TL_LANG']['MSC']['lockedAccount'][1], $this->username, ((TL_MODE == 'FE') ? $this->firstname . " " . $this->lastname : $this->name), \Idna::decode(\Environment::get('base')), ceil(\Config::get('lockPeriod') / 60));
				$objEmail->sendTo(\Config::get('adminEmail'));
			}

			return false;
		}

		// Check the account status
		if ($this->checkAccountStatus() == false)
		{
			return false;
		}

		$blnAuthenticated = password_verify($request->request->get('password'), $this->password);
		$blnNeedsRehash = password_needs_rehash($this->password, PASSWORD_DEFAULT);

		// Re-hash the password if the algorithm has changed
		if ($blnAuthenticated && $blnNeedsRehash)
		{
			$this->password = password_hash($request->request->get('password'), PASSWORD_DEFAULT);
		}

		// HOOK: pass credentials to callback functions
		if (!$blnAuthenticated && isset($GLOBALS['TL_HOOKS']['checkCredentials']) && \is_array($GLOBALS['TL_HOOKS']['checkCredentials']))
		{
			foreach ($GLOBALS['TL_HOOKS']['checkCredentials'] as $callback)
			{
				$this->import($callback[0], 'objAuth', true);
				$blnAuthenticated = $this->objAuth->{$callback[1]}(\Input::post('username', true), $request->request->get('password'), $this);

				// Authentication successfull
				if ($blnAuthenticated === true)
				{
					break;
				}
			}
		}

		// Redirect if the user could not be authenticated
		if (!$blnAuthenticated)
		{
			--$this->loginCount;
			$this->save();

			\Message::addError($GLOBALS['TL_LANG']['ERR']['invalidLogin']);
			$this->log('Invalid password submitted for username "' . $this->username . '"', __METHOD__, TL_ACCESS);

			return false;
		}

		$this->setUserFromDb();

		// Update the record
		$this->lastLogin = $this->currentLogin;
		$this->currentLogin = $time;
		$this->loginCount = \Config::get('loginCount');
		$this->save();

		// Generate the session
		$this->regenerateSessionId();
		$this->generateSession();

		$this->log('User "' . $this->username . '" has logged in', __METHOD__, TL_ACCESS);

		// HOOK: post login callback
		if (isset($GLOBALS['TL_HOOKS']['postLogin']) && \is_array($GLOBALS['TL_HOOKS']['postLogin']))
		{
			foreach ($GLOBALS['TL_HOOKS']['postLogin'] as $callback)
			{
				$this->import($callback[0], 'objLogin', true);
				$this->objLogin->{$callback[1]}($this);
			}
		}

		return true;
	}

	/**
	 * Check the account status and return true if it is active
	 *
	 * @return boolean True if the account is active
	 */
	protected function checkAccountStatus()
	{
		$time = time();

		// Check whether the account is locked
		if (($this->locked + \Config::get('lockPeriod')) > $time)
		{
			\Message::addError(sprintf($GLOBALS['TL_LANG']['ERR']['accountLocked'], ceil((($this->locked + \Config::get('lockPeriod')) - $time) / 60)));

			return false;
		}

		// Check whether the account is disabled
		if ($this->disable)
		{
			\Message::addError($GLOBALS['TL_LANG']['ERR']['invalidLogin']);
			$this->log('The account has been disabled', __METHOD__, TL_ACCESS);

			return false;
		}

		// Check wether login is allowed (front end only)
		if ($this instanceof FrontendUser && !$this->login)
		{
			\Message::addError($GLOBALS['TL_LANG']['ERR']['invalidLogin']);
			$this->log('User "' . $this->username . '" is not allowed to log in', __METHOD__, TL_ACCESS);

			return false;
		}

		// Check whether account is not active yet or anymore
		if ($this->start != '' || $this->stop != '')
		{
			$time = \Date::floorToMinute($time);

			if ($this->start != '' && $this->start > $time)
			{
				\Message::addError($GLOBALS['TL_LANG']['ERR']['invalidLogin']);
				$this->log('The account was not active yet (activation date: ' . \Date::parse(\Config::get('dateFormat'), $this->start) . ')', __METHOD__, TL_ACCESS);

				return false;
			}

			if ($this->stop != '' && $this->stop <= ($time + 60))
			{
				\Message::addError($GLOBALS['TL_LANG']['ERR']['invalidLogin']);
				$this->log('The account was not active anymore (deactivation date: ' . \Date::parse(\Config::get('dateFormat'), $this->stop) . ')', __METHOD__, TL_ACCESS);

				return false;
			}
		}

		return true;
	}

	/**
	 * Find a user in the database
	 *
	 * @param string $strColumn The field name
	 * @param mixed  $varValue  The field value
	 *
	 * @return boolean True if the user was found
	 */
	public function findBy($strColumn, $varValue)
	{
		$objResult = $this->Database->prepare("SELECT * FROM " . $this->strTable . " WHERE " . \Database::quoteIdentifier($strColumn) . "=?")
									->limit(1)
									->execute($varValue);

		if ($objResult->numRows > 0)
		{
			$this->arrData = $objResult->row();

			return true;
		}

		return false;
	}

	/**
	 * Update the current record
	 */
	public function save()
	{
		$arrFields = $this->Database->getFieldNames($this->strTable);
		$arrSet = array_intersect_key($this->arrData, array_flip($arrFields));

		$this->Database->prepare("UPDATE " . $this->strTable . " %s WHERE id=?")
					   ->set($arrSet)
					   ->execute($this->id);
	}

	/**
	 * Regenerate the session ID
	 *
	 * @throws \RuntimeException
	 */
	protected function regenerateSessionId()
	{
		$container = \System::getContainer();
		$strategy = $container->getParameter('security.authentication.session_strategy.strategy');

		// Regenerate the session ID to harden against session fixation attacks
		switch ($strategy)
		{
			case SessionAuthenticationStrategy::NONE:
				break;

			case SessionAuthenticationStrategy::MIGRATE:
				$container->get('session')->migrate(false); // do not destroy the old session
				break;

			case SessionAuthenticationStrategy::INVALIDATE:
				$container->get('session')->invalidate();
				break;

			default:
				throw new \RuntimeException(sprintf('Invalid session authentication strategy "%s"', $strategy));
		}
	}

	/**
	 * Generate a session
	 */
	protected function generateSession()
	{
		$time = time();

		// Generate the cookie hash
		$this->strHash = $this->getSessionHash($this->strCookie);

		// Clean up old sessions
		$this->Database->prepare("DELETE FROM tl_session WHERE tstamp<? OR hash=?")
					   ->execute(($time - \Config::get('sessionTimeout')), $this->strHash);

		// Save the session in the database
		$this->Database->prepare("INSERT INTO tl_session (pid, tstamp, name, sessionID, ip, hash) VALUES (?, ?, ?, ?, ?, ?)")
					   ->execute($this->intId, $time, $this->strCookie, \System::getContainer()->get('session')->getId(), $this->strIp, $this->strHash);

		// Set the authentication cookie
		$this->setCookie($this->strCookie, $this->strHash, ($time + \Config::get('sessionTimeout')), null, null, \Environment::get('ssl'), true);
	}

	/**
	 * Remove the authentication cookie and destroy the current session
	 *
	 * @return boolean True if the user could be logged out
	 */
	public function logout()
	{
		// Return if the user has been logged out already
		if (!\Input::cookie($this->strCookie))
		{
			return false;
		}

		$intUserid = null;

		// Find the session
		$objSession = $this->Database->prepare("SELECT * FROM tl_session WHERE hash=?")
									 ->limit(1)
									 ->execute($this->strHash);

		if ($objSession->numRows)
		{
			$this->strIp = $objSession->ip;
			$this->strHash = $objSession->hash;
			$intUserid = $objSession->pid;
		}

		$time = time();

		// Remove the session from the database
		$this->Database->prepare("DELETE FROM tl_session WHERE hash=?")
					   ->execute($this->strHash);

		// Remove cookie and hash
		$this->setCookie($this->strCookie, $this->strHash, ($time - 86400), null, null, \Environment::get('ssl'), true);
		$this->strHash = '';

		\System::getContainer()->get('session')->invalidate();
		\System::getContainer()->get('security.token_storage')->setToken(null);

		// Add a log entry
		if ($this->findBy('id', $intUserid) != false)
		{
			$GLOBALS['TL_USERNAME'] = $this->username;
			$this->log('User "' . $this->username . '" has logged out', __METHOD__, TL_ACCESS);
		}

		// HOOK: post logout callback
		if (isset($GLOBALS['TL_HOOKS']['postLogout']) && \is_array($GLOBALS['TL_HOOKS']['postLogout']))
		{
			foreach ($GLOBALS['TL_HOOKS']['postLogout'] as $callback)
			{
				$this->import($callback[0], 'objLogout', true);
				$this->objLogout->{$callback[1]}($this);
			}
		}

		return true;
	}

	/**
	 * Return true if the user is member of a particular group
	 *
	 * @param integer $id The group ID
	 *
	 * @return boolean True if the user is a member of the group
	 */
	public function isMemberOf($id)
	{
		// ID not numeric
		if (!is_numeric($id))
		{
			return false;
		}

		$groups = \StringUtil::deserialize($this->arrData['groups']);

		// No groups assigned
		if (empty($groups) || !\is_array($groups))
		{
			return false;
		}

		// Group ID found
		if (\in_array($id, $groups))
		{
			return true;
		}

		return false;
	}

	/**
	 * Set all user properties from a database record
	 */
	abstract protected function setUserFromDb();
}
