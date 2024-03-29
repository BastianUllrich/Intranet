<?php

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_DCA']['tl_member'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'onsubmit_callback' => array
		(
			array('tl_member', 'storeDateAdded'),
			array('tl_member', 'checkRemoveSession')
		),
		'ondelete_callback' => array
		(
			array('tl_member', 'removeSession')
		),
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary',
				'username' => 'unique',
				'email' => 'index',
				'autologin' => 'unique',
				'activation' => 'index'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 2,
			'fields'                  => array('dateAdded'),
			'panelLayout'             => 'filter;sort,search,limit'
		),
		'label' => array
		(
			'fields'                  => array('icon', 'firstname', 'lastname', 'username', 'dateAdded'),
			'showColumns'             => true,
			'label_callback'          => array('tl_member', 'addIcon')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_member']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.svg'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_member']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.svg'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_member']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.svg',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_member']['toggle'],
				'icon'                => 'visible.svg',
				'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
				'button_callback'     => array('tl_member', 'toggleIcon')
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_member']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.svg'
			),
			'su' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_member']['su'],
				'href'                => 'key=su',
				'icon'                => 'su.svg',
				'button_callback'     => array('tl_member', 'switchUser')
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('login', 'assignDir'),
		'default'                     => '{personal_legend},firstname,lastname,dateOfBirth,gender;{address_legend:hide},company,street,postal,city,state,country;{contact_legend},phone,mobile,fax,email,website,language;{groups_legend},groups;{login_legend},login;{homedir_legend:hide},assignDir;{account_legend},disable,start,stop',
	),

	// Subpalettes
	'subpalettes' => array
	(
		'login'                       => 'username,password',
		'assignDir'                   => 'homeDir'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'firstname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['firstname'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'lastname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['lastname'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'dateOfBirth' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['dateOfBirth'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'date', 'datepicker'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(11) NOT NULL default ''"
		),
		'gender' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['gender'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('male', 'female'),
			'reference'               => &$GLOBALS['TL_LANG']['MSC'],
			'eval'                    => array('includeBlankOption'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'company' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['company'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'street' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['street'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'postal' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['postal'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>32, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'city' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['city'],
			'exclude'                 => true,
			'filter'                  => true,
			'search'                  => true,
			'sorting'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'state' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['state'],
			'exclude'                 => true,
			'sorting'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'country' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['country'],
			'exclude'                 => true,
			'filter'                  => true,
			'sorting'                 => true,
			'inputType'               => 'select',
			'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50'),
			'options_callback' => function ()
			{
				return System::getCountries();
			},
			'sql'                     => "varchar(2) NOT NULL default ''"
		),
		'phone' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['phone'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'rgxp'=>'phone', 'decodeEntities'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'mobile' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['mobile'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'rgxp'=>'phone', 'decodeEntities'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'fax' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['fax'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'rgxp'=>'phone', 'decodeEntities'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'email' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['email'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'rgxp'=>'email', 'unique'=>true, 'decodeEntities'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'website' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['website'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'url', 'maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'language' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['language'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'rgxp'=>'locale', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
			'options_callback' => function ()
			{
				return System::getLanguages();
			},
			'sql'                     => "varchar(5) NOT NULL default ''"
		),
		'groups' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['groups'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkboxWizard',
			'foreignKey'              => 'tl_member_group.name',
			'eval'                    => array('multiple'=>true, 'feEditable'=>true, 'feGroup'=>'login'),
			'sql'                     => "blob NULL",
			'relation'                => array('type'=>'belongsToMany', 'load'=>'lazy')
		),
		'login' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['login'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'username' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['username'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'unique'=>true, 'rgxp'=>'extnd', 'nospace'=>true, 'maxlength'=>64, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'login', 'tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_member', 'resetAutologin')
			),
			'sql'                     => "varchar(64) COLLATE utf8_bin NULL"
		),
		'password' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['password'],
			'exclude'                 => true,
			'inputType'               => 'password',
			'eval'                    => array('mandatory'=>true, 'preserveTags'=>true, 'minlength'=>Config::get('minPasswordLength'), 'feEditable'=>true, 'feGroup'=>'login', 'tl_class'=>'clr'),
			'save_callback' => array
			(
				array('tl_member', 'resetAutologin'),
				array('tl_member', 'setNewPassword')
			),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'assignDir' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['assignDir'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'homeDir' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['homeDir'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'tl_class'=>'clr'),
			'sql'                     => "binary(16) NULL"
		),
		'disable' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['disable'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'start' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['start'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(10) NOT NULL default ''"
		),
		'stop' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['stop'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(10) NOT NULL default ''"
		),
		'dateAdded' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['dateAdded'],
			'default'                 => time(),
			'sorting'                 => true,
			'flag'                    => 6,
			'eval'                    => array('rgxp'=>'datim', 'doNotCopy'=>true),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'lastLogin' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['lastLogin'],
			'eval'                    => array('rgxp'=>'datim', 'doNotCopy'=>true),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'currentLogin' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['currentLogin'],
			'sorting'                 => true,
			'flag'                    => 6,
			'eval'                    => array('rgxp'=>'datim', 'doNotCopy'=>true),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'loginCount' => array
		(
			'default'                 => 3,
			'eval'                    => array('doNotCopy'=>true),
			'sql'                     => "smallint(5) unsigned NOT NULL default '3'"
		),
		'locked' => array
		(
			'eval'                    => array('rgxp'=>'datim', 'doNotCopy'=>true),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'session' => array
		(
			'eval'                    => array('doNotShow'=>true, 'doNotCopy'=>true),
			'sql'                     => "blob NULL"
		),
		'autologin' => array
		(
			'default'                 => null,
			'eval'                    => array('doNotCopy'=>true),
			'sql'                     => "varchar(64) NULL"
		),
		'createdOn' => array
		(
			'eval'                    => array('rgxp'=>'datim', 'doNotCopy'=>true),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'activation' => array
		(
			'eval'                    => array('doNotCopy'=>true),
			'sql'                     => "varchar(32) NOT NULL default ''"
		)
	)
);

// Filter disabled groups in the front end (see #6757)
if (TL_MODE == 'FE')
{
	$GLOBALS['TL_DCA']['tl_member']['fields']['groups']['options_callback'] = array('tl_member', 'getActiveGroups');
}

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_member extends Backend
{
	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}

	/**
	 * Filter disabled groups
	 *
	 * @return array
	 */
	public function getActiveGroups()
	{
		$arrGroups = array();
		$objGroup = MemberGroupModel::findAllActive();

		if ($objGroup !== null)
		{
			while ($objGroup->next())
			{
				$arrGroups[$objGroup->id] = $objGroup->name;
			}
		}

		return $arrGroups;
	}

	/**
	 * Add an image to each record
	 * @param array         $row
	 * @param string        $label
	 * @param DataContainer $dc
	 * @param array         $args
	 *
	 * @return array
	 */
	public function addIcon($row, $label, DataContainer $dc, $args)
	{
		$image = 'member';
		$time = \Date::floorToMinute();

		$disabled = ($row['start'] !== '' && $row['start'] > $time) || ($row['stop'] !== '' && $row['stop'] < $time);

		if ($row['disable'] || $disabled)
		{
			$image .= '_';
		}

		$args[0] = sprintf('<div class="list_icon_new" style="background-image:url(\'%ssystem/themes/%s/icons/%s.svg\')" data-icon="%s.svg" data-icon-disabled="%s.svg">&nbsp;</div>', TL_ASSETS_URL, Backend::getTheme(), $image, $disabled ? $image : rtrim($image, '_'), rtrim($image, '_') . '_');

		return $args;
	}

	/**
	 * Generate a "switch account" button and return it as string
	 *
	 * @param array  $row
	 * @param string $href
	 * @param string $label
	 * @param string $title
	 * @param string $icon
	 *
	 * @return string
	 */
	public function switchUser($row, $href, $label, $title, $icon)
	{
		$blnCanSwitchUser = ($this->User->isAdmin || (!empty($this->User->amg) && is_array($this->User->amg)));

		if (!$blnCanSwitchUser)
		{
			return '';
		}

		if (!$row['login'] || $row['username'] == '' || (!$this->User->isAdmin && count(array_intersect(\StringUtil::deserialize($row['groups'], true), $this->User->amg)) < 1))
		{
			return Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon));
		}

		return '<a href="contao/preview.php?user=' . rawurlencode($row['username']) . '" target="_blank" title="' . StringUtil::specialchars($title) . '">' . Image::getHtml($icon, $label) . '</a> ';
	}

	/**
	 * Reset the autologin hash
	 *
	 * @param string        $varValue
	 * @param DataContainer $dc
	 *
	 * @return string
	 */
	public function resetAutologin($varValue, $dc)
	{
		// Return if a user edits their own account in the front end
		if (TL_MODE == 'FE')
		{
			return $varValue;
		}

		// Return if there is no user (e.g. upon registration)
		if (!$dc)
		{
			return $varValue;
		}

		$objUser = $this->Database->prepare("SELECT * FROM tl_member WHERE id=?")
								  ->limit(1)
								  ->execute($dc->id);

		// Reset the autologin hash
		if ($varValue != $objUser->{$dc->field})
		{
			$this->Database->prepare("UPDATE tl_member SET autologin=NULL WHERE id=?")
						   ->execute($dc->id);
		}

		return $varValue;
	}

	/**
	 * Call the "setNewPassword" callback
	 *
	 * @param string                    $strPassword
	 * @param DataContainer|MemberModel $user
	 *
	 * @return string
	 */
	public function setNewPassword($strPassword, $user)
	{
		// Return if there is no user (e.g. upon registration)
		if (!$user)
		{
			return $strPassword;
		}

		$objUser = $this->Database->prepare("SELECT * FROM tl_member WHERE id=?")
								  ->limit(1)
								  ->execute($user->id);

		// HOOK: set new password callback
		if ($objUser->numRows)
		{
			if (isset($GLOBALS['TL_HOOKS']['setNewPassword']) && is_array($GLOBALS['TL_HOOKS']['setNewPassword']))
			{
				foreach ($GLOBALS['TL_HOOKS']['setNewPassword'] as $callback)
				{
					$this->import($callback[0]);
					$this->{$callback[0]}->{$callback[1]}($objUser, $strPassword);
				}
			}
		}

		// Invalidate the user sessions if the password changes
		$this->Database->prepare("DELETE FROM tl_session WHERE name='FE_USER_AUTH' AND pid=? AND sessionID!=?")
					   ->execute($user->id, session_id());

		return $strPassword;
	}

	/**
	 * Store the date when the account has been added
	 *
	 * @param DataContainer $dc
	 */
	public function storeDateAdded($dc)
	{
		// Front end call
		if (!$dc instanceof DataContainer)
		{
			return;
		}

		// Return if there is no active record (override all)
		if (!$dc->activeRecord || $dc->activeRecord->dateAdded > 0)
		{
			return;
		}

		// Fallback solution for existing accounts
		if ($dc->activeRecord->lastLogin > 0)
		{
			$time = $dc->activeRecord->lastLogin;
		}
		else
		{
			$time = time();
		}

		$this->Database->prepare("UPDATE tl_member SET dateAdded=? WHERE id=?")
					   ->execute($time, $dc->id);
	}

	/**
	 * Check whether the user session should be removed
	 *
	 * @param DataContainer $dc
	 */
	public function checkRemoveSession($dc)
	{
		if (!$dc instanceof DataContainer || !$dc->activeRecord)
		{
			return;
		}

		if ($dc->activeRecord->disable || ($dc->activeRecord->start != '' && $dc->activeRecord->start > time()) || ($dc->activeRecord->stop != '' && $dc->activeRecord->stop < time()))
		{
			$this->removeSession($dc);
		}
	}

	/**
	 * Remove the session if a user is deleted (see #5353)
	 *
	 * @param DataContainer $dc
	 */
	public function removeSession($dc)
	{
		if (!$dc instanceof DataContainer || !$dc->activeRecord)
		{
			return;
		}

		$this->Database->prepare("DELETE FROM tl_session WHERE name='FE_USER_AUTH' AND pid=?")
					   ->execute($dc->activeRecord->id);
	}

	/**
	 * Return the "toggle visibility" button
	 *
	 * @param array  $row
	 * @param string $href
	 * @param string $label
	 * @param string $title
	 * @param string $icon
	 * @param string $attributes
	 *
	 * @return string
	 */
	public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
	{
		if (strlen(Input::get('tid')))
		{
			$this->toggleVisibility(Input::get('tid'), (Input::get('state') == 1), (@func_get_arg(12) ?: null));
			$this->redirect($this->getReferer());
		}

		// Check permissions AFTER checking the tid, so hacking attempts are logged
		if (!$this->User->hasAccess('tl_member::disable', 'alexf'))
		{
			return '';
		}

		$href .= '&amp;tid=' . $row['id'] . '&amp;state=' . $row['disable'];

		if ($row['disable'])
		{
			$icon = 'invisible.svg';
		}

		return '<a href="' . $this->addToUrl($href) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label, 'data-state="' . ($row['disable'] ? 0 : 1) . '"') . '</a> ';
	}

	/**
	 * Disable/enable a user group
	 *
	 * @param integer       $intId
	 * @param boolean       $blnVisible
	 * @param DataContainer $dc
	 *
	 * @throws Contao\CoreBundle\Exception\AccessDeniedException
	 */
	public function toggleVisibility($intId, $blnVisible, DataContainer $dc=null)
	{
		// Set the ID and action
		Input::setGet('id', $intId);
		Input::setGet('act', 'toggle');

		if ($dc)
		{
			$dc->id = $intId; // see #8043
		}

		// Trigger the onload_callback
		if (is_array($GLOBALS['TL_DCA']['tl_member']['config']['onload_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_member']['config']['onload_callback'] as $callback)
			{
				if (is_array($callback))
				{
					$this->import($callback[0]);
					$this->{$callback[0]}->{$callback[1]}($dc);
				}
				elseif (is_callable($callback))
				{
					$callback($dc);
				}
			}
		}

		// Check the field access
		if (!$this->User->hasAccess('tl_member::disable', 'alexf'))
		{
			throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to activate/deactivate member ID ' . $intId . '.');
		}

		// Set the current record
		if ($dc)
		{
			$objRow = $this->Database->prepare("SELECT * FROM tl_member WHERE id=?")
									 ->limit(1)
									 ->execute($intId);

			if ($objRow->numRows)
			{
				$dc->activeRecord = $objRow;
			}
		}

		$objVersions = new Versions('tl_member', $intId);
		$objVersions->initialize();

		// Reverse the logic (members have disabled=1)
		$blnVisible = !$blnVisible;

		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_member']['fields']['disable']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_member']['fields']['disable']['save_callback'] as $callback)
			{
				if (is_array($callback))
				{
					$this->import($callback[0]);
					$blnVisible = $this->{$callback[0]}->{$callback[1]}($blnVisible, $dc);
				}
				elseif (is_callable($callback))
				{
					$blnVisible = $callback($blnVisible, $dc);
				}
			}
		}

		$time = time();

		// Update the database
		$this->Database->prepare("UPDATE tl_member SET tstamp=$time, disable='" . ($blnVisible ? '1' : '') . "' WHERE id=?")
					   ->execute($intId);

		if ($dc)
		{
			$dc->activeRecord->tstamp = $time;
			$dc->activeRecord->disable = ($blnVisible ? '1' : '');
		}

		// Trigger the onsubmit_callback
		if (is_array($GLOBALS['TL_DCA']['tl_member']['config']['onsubmit_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_member']['config']['onsubmit_callback'] as $callback)
			{
				if (is_array($callback))
				{
					$this->import($callback[0]);
					$this->{$callback[0]}->{$callback[1]}($dc);
				}
				elseif (is_callable($callback))
				{
					$callback($dc);
				}
			}
		}

		$objVersions->create();
	}
}
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Add palette
$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = str_replace('assignDir;', 'assignDir;{newsletter_legend:hide},newsletter;', $GLOBALS['TL_DCA']['tl_member']['palettes']['default']);

// Add load callback
$GLOBALS['TL_DCA']['tl_member']['config']['onload_callback'][] = array('Newsletter', 'updateAccount');

// Add save callback
$GLOBALS['TL_DCA']['tl_member']['fields']['disable']['save_callback'][] = array('Newsletter', 'onToggleVisibility');

// Add field
$GLOBALS['TL_DCA']['tl_member']['fields']['newsletter'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['newsletter'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options_callback'        => array('Newsletter', 'getNewsletters'),
	'eval'                    => array('multiple'=>true, 'feEditable'=>true, 'feGroup'=>'newsletter'),
	'save_callback' => array
	(
		array('Newsletter', 'synchronize')
	),
	'sql'                     => "blob NULL"
);
}

namespace  {
//Palettes

$GLOBALS['TL_DCA']['tl_member']['palettes']['__selector__'][] = 'usertype';

$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] =
   '{groups_legend},groups;{login_legend},username,password;usertype';

$GLOBALS['TL_DCA']['tl_member']['subpalettes']['usertype_Student'] =
  '{personal_legend},firstname,lastname,handicaps,handicaps_others;{contact_legend},email,phone,mobile;{study_legend},department,study_course,chipcard_nr,contact_person;{exam_legend},extra_time,extra_time_minutes_percent,rehab_devices,rehab_devices_others,comments;';

$GLOBALS['TL_DCA']['tl_member']['subpalettes']['usertype_Aufsicht'] =
  '{personal_legend},firstname,lastname;{contact_legend},email,phone,mobile;';

$GLOBALS['TL_DCA']['tl_member']['subpalettes']['usertype_Administrator'] =
  '{personal_legend},firstname,lastname;{contact_legend},email;';



//Fields

$GLOBALS['TL_DCA']['tl_member']['fields']['usertype'] = array
		(
			'label'		=> $GLOBALS['TL_LANG']['tl_member']['type'],
			'inputType'	=> 'select',
			'exclude'	=> true,
			'sorting'	=> true,
			'flag'		=> 1,
			'options'	=> array('Student', 'Aufsicht', 'Administrator'),
			'eval'		=> array(
						'includeBlankOption'	=> true,
						'mandatory'		=> true,
						'tl_class'		=> 'w50'
			),
			'sql'		=> "varchar(20) NOT NULL default ''"
		);


$GLOBALS['TL_DCA']['tl_member']['fields']['department'] = array
                (
                        'label'         => $GLOBALS['TL_LANG']['tl_member']['department'],
                        'inputType'     => 'select',
                        'exclude'       => true,
                        'search'	=> true,
                        'options'       => array('department1', 'department2', 'department3', 'department4', 'department5', 'department6', 'department7', 'department8', 'department9', 'department10', 'department11', 'department12', 'department13', 'department14'),
                        'reference'	=> &$GLOBALS['TL_LANG']['tl_member'],
			'eval'          => array(
                                                'includeBlankOption'    => true,
						'feGroup'		=> 'study',
						'feEditable'		=> true,
						'feViewable'		=> true,
                                                'mandatory'             => true
                        ),
                        'sql'           => "varchar(80) NOT NULL default ''"
                );

$GLOBALS['TL_DCA']['tl_member']['fields']['study_course'] = array
                (
                        'label'         => $GLOBALS['TL_LANG']['tl_member']['study_course'],
             		'inputType'	=> 'text',
                        'exclude'       => true,
                        'eval'          => array(
                                                'feGroup'               => 'study',
                                                'feEditable'            => true,
                                                'feViewable'            => true,
                                                'mandatory'             => true,
                		       		'maxlength'		=> '30'
			),
                        'sql'           => "varchar(30) NOT NULL default ''"
                );


$GLOBALS['TL_DCA']['tl_member']['fields']['chipcard_nr'] = array
                (
                        'label'         => $GLOBALS['TL_LANG']['tl_member']['chipcard_nr'],
                        'inputType'     => 'text',
                        'exclude'       => true,
                        'eval'          => array(
                                                'feGroup'               => 'study',
                                                'feEditable'            => true,
                                                'feViewable'            => true,
                                                'mandatory'             => false,
                                                'maxlength'             => '20'
                        ),
                        'sql'           => "varchar(20) NOT NULL default ''"
                );



$GLOBALS['TL_DCA']['tl_member']['fields']['handicaps'] = array
                (
                        'label'         => $GLOBALS['TL_LANG']['tl_member']['handicaps'],
                        'inputType'     => 'checkbox',
                        'exclude'       => true,
			'options'	=> array(
						'blind',
						'visually impaired',
						'deaf',
						'motorically restricted',
						'autism',
						'mental disorder',
						'chronic disorder',
						'acute illness',
						'different'
					),
			'reference'	=> &$GLOBALS['TL_LANG']['tl_member'],
                        'eval'          => array(
                                                'feGroup'               => 'personal',
                                                'feEditable'            => true,
                                                'feViewable'            => true,
                                                'mandatory'             => false,
						'multiple'		=> true
                        ),
                        'sql'           => "blob NULL"
                );

$GLOBALS['TL_DCA']['tl_member']['fields']['handicaps_others'] = array
                (
                        'label'         => $GLOBALS['TL_LANG']['tl_member']['handicaps_others'],
                        'inputType'     => 'text',
                        'exclude'       => true,
                        'eval'          => array(
                                                'feGroup'               => 'personal',
                                                'feEditable'            => true,
                                                'feViewable'            => true,
                                                'mandatory'             => false,
                                                'maxlength'             => '64'
                        ),
                        'sql'           => "varchar(64) NOT NULL default ''"
                );

$GLOBALS['TL_DCA']['tl_member']['fields']['rehab_devices'] = array
                (
                        'label'         => $GLOBALS['TL_LANG']['tl_member']['rehab_devices'],
                        'inputType'     => 'checkbox',
                        'exclude'       => true,
                        'options'       => array(
                                                'pc',
                                                'blind workspace',
                                                'Zoomtext',
                                                'screen magnifier',
                                                'screen reader',
                                                'a3 print',
                                                'obscuration',
                                                'writing assistance',
                                                'high table',
						'near door',
						'different'
                                        ),
                        'reference'     => &$GLOBALS['TL_LANG']['tl_member'],
                        'eval'          => array(
                                                'feGroup'               => 'exam',
                                                'feEditable'            => true,
                                                'feViewable'            => true,
                                                'mandatory'             => false,
                                                'multiple'              => true
                        ),
                        'sql'           => "blob NULL"
                );

$GLOBALS['TL_DCA']['tl_member']['fields']['rehab_devices_others'] = array
                (
                        'label'         => $GLOBALS['TL_LANG']['tl_member']['rehab_devices_others'],
                        'inputType'     => 'text',
                        'exclude'       => true,
			'eval'		=> array(
						'feGroup'	=> 'exam',
						'feEditable'	=> true,
						'feViewable'	=> true,
						'mandatory'	=> false,
						'maxlength'	=> 30
			),
			'sql'		=> "varchar(30) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_member']['fields']['extra_time'] = array
                (
                        'label'         => $GLOBALS['TL_LANG']['tl_member']['extra_time'],
                        'inputType'     => 'text',
                        'exclude'       => true,
                        'eval'          => array(
                                                'feGroup'       => 'exam',
                                                'feEditable'    => true,
                                                'feViewable'    => true,
                                                'mandatory'     => false,
                                                'maxlength'     => 8
                        ),
                        'sql'           => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_member']['fields']['extra_time_minutes_percent'] = array
                (
                        'label'         => $GLOBALS['TL_LANG']['tl_member']['extra_time_minutes_percent'],
                        'inputType'     => 'select',
                        'exclude'       => true,
			'sorting'	=> true,
			'flag'		=> 1,
			'options'	=> array(
						'minutes',
						'percent'
					),
			'reference'	=> &$GLOBALS['TL_LANG']['tl_member'],
                        'eval'          => array(
						'includeBlankOption'	=> true,
                                                'feGroup'       	=> 'exam',
                                                'feEditable'    	=> true,
                                                'feViewable'    	=> true,
                                                'mandatory'    		=> false
                        ),
                        'sql'           => "varchar(10) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_member']['fields']['contact_person'] = array
                (
                        'label'         => $GLOBALS['TL_LANG']['tl_member']['contact_person'],
                        'inputType'     => 'select',
                        'exclude'       => true,
                        'sorting'       => true,
                        'flag'          => 1,
                        'options'       => array(
                                                'contact1',
                                                'contact2'
                                        ),
                        'reference'     => &$GLOBALS['TL_LANG']['tl_member'],
                        'eval'          => array(
                                                'includeBlankOption'    => true,
                                                'feGroup'               => 'study',
                                                'feEditable'            => true,
                                                'feViewable'            => true,
                                                'mandatory'             => true
                        ),
                        'sql'           => "varchar(10) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_member']['fields']['comments'] = array
                (
                        'label'         => $GLOBALS['TL_LANG']['tl_member']['comments'],
                        'inputType'     => 'textarea',
                        'exclude'       => true,
                        'eval'          => array(
                                                'includeBlankOption'    => true,
                                                'feGroup'               => 'exam',
                                                'feEditable'            => true,
                                                'feViewable'            => true,
                                                'mandatory'             => false,
						'maxlength'		=> 80
                        ),
                        'sql'           => "varchar(80) NOT NULL default ''"
);
}
