<?php

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_DCA']['tl_faq_category'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ctable'                      => array('tl_faq'),
		'switchToEdit'                => true,
		'enableVersioning'            => true,
		'onload_callback' => array
		(
			array('tl_faq_category', 'checkPermission')
		),
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('title'),
			'flag'                    => 1,
			'panelLayout'             => 'search,limit'
		),
		'label' => array
		(
			'fields'                  => array('title'),
			'format'                  => '%s'
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
				'label'               => &$GLOBALS['TL_LANG']['tl_faq_category']['edit'],
				'href'                => 'table=tl_faq',
				'icon'                => 'edit.svg'
			),
			'editheader' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_faq_category']['editheader'],
				'href'                => 'act=edit',
				'icon'                => 'header.svg',
				'button_callback'     => array('tl_faq_category', 'editHeader')
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_faq_category']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.svg',
				'button_callback'     => array('tl_faq_category', 'copyCategory')
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_faq_category']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.svg',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['tl_faq_category']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"',
				'button_callback'     => array('tl_faq_category', 'deleteCategory')
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_faq_category']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.svg'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('allowComments'),
		'default'                     => '{title_legend},title,headline,jumpTo;{comments_legend:hide},allowComments'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'allowComments'               => 'notify,sortOrder,perPage,moderate,bbcode,requireLogin,disableCaptcha'
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
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_faq_category']['title'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'headline' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_faq_category']['headline'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'jumpTo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_faq_category']['jumpTo'],
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'foreignKey'              => 'tl_page.title',
			'eval'                    => array('fieldType'=>'radio', 'tl_class'=>'clr'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
		),
		'allowComments' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_faq_category']['allowComments'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'notify' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_faq_category']['notify'],
			'default'                 => 'notify_admin',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('notify_admin', 'notify_author', 'notify_both'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_faq_category'],
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(16) NOT NULL default ''"
		),
		'sortOrder' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_faq_category']['sortOrder'],
			'default'                 => 'ascending',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('ascending', 'descending'),
			'reference'               => &$GLOBALS['TL_LANG']['MSC'],
			'eval'                    => array('tl_class'=>'w50 clr'),
			'sql'                     => "varchar(12) NOT NULL default ''"
		),
		'perPage' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_faq_category']['perPage'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'moderate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_faq_category']['moderate'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'bbcode' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_faq_category']['bbcode'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'requireLogin' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_faq_category']['requireLogin'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'disableCaptcha' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_faq_category']['disableCaptcha'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		)
	)
);

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_faq_category extends Backend
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
	 * Check permissions to edit table tl_news_archive
	 *
	 * @throws Contao\CoreBundle\Exception\AccessDeniedException
	 */
	public function checkPermission()
	{
		$bundles = System::getContainer()->getParameter('kernel.bundles');

		// HOOK: comments extension required
		if (!isset($bundles['ContaoCommentsBundle']))
		{
			unset($GLOBALS['TL_DCA']['tl_faq_category']['fields']['allowComments']);
		}

		if ($this->User->isAdmin)
		{
			return;
		}

		// Set root IDs
		if (empty($this->User->faqs) || !is_array($this->User->faqs))
		{
			$root = array(0);
		}
		else
		{
			$root = $this->User->faqs;
		}

		$GLOBALS['TL_DCA']['tl_faq_category']['list']['sorting']['root'] = $root;

		// Check permissions to add FAQ categories
		if (!$this->User->hasAccess('create', 'faqp'))
		{
			$GLOBALS['TL_DCA']['tl_faq_category']['config']['closed'] = true;
		}

		/** @var Symfony\Component\HttpFoundation\Session\SessionInterface $objSession */
		$objSession = System::getContainer()->get('session');

		// Check current action
		switch (Input::get('act'))
		{
			case 'create':
			case 'select':
				// Allow
				break;

			case 'edit':
				// Dynamically add the record to the user profile
				if (!in_array(Input::get('id'), $root))
				{
					/** @var Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface $objSessionBag */
					$objSessionBag = $objSession->getBag('contao_backend');

					$arrNew = $objSessionBag->get('new_records');

					if (is_array($arrNew['tl_faq_category']) && in_array(Input::get('id'), $arrNew['tl_faq_category']))
					{
						// Add the permissions on group level
						if ($this->User->inherit != 'custom')
						{
							$objGroup = $this->Database->execute("SELECT id, faqs, faqp FROM tl_user_group WHERE id IN(" . implode(',', array_map('\intval', $this->User->groups)) . ")");

							while ($objGroup->next())
							{
								$arrFaqp = StringUtil::deserialize($objGroup->faqp);

								if (is_array($arrFaqp) && in_array('create', $arrFaqp))
								{
									$arrFaqs = StringUtil::deserialize($objGroup->faqs, true);
									$arrFaqs[] = Input::get('id');

									$this->Database->prepare("UPDATE tl_user_group SET faqs=? WHERE id=?")
												   ->execute(serialize($arrFaqs), $objGroup->id);
								}
							}
						}

						// Add the permissions on user level
						if ($this->User->inherit != 'group')
						{
							$objUser = $this->Database->prepare("SELECT faqs, faqp FROM tl_user WHERE id=?")
													   ->limit(1)
													   ->execute($this->User->id);

							$arrFaqp = StringUtil::deserialize($objUser->faqp);

							if (is_array($arrFaqp) && in_array('create', $arrFaqp))
							{
								$arrFaqs = StringUtil::deserialize($objUser->faqs, true);
								$arrFaqs[] = Input::get('id');

								$this->Database->prepare("UPDATE tl_user SET faqs=? WHERE id=?")
											   ->execute(serialize($arrFaqs), $this->User->id);
							}
						}

						// Add the new element to the user object
						$root[] = Input::get('id');
						$this->User->faqs = $root;
					}
				}
				// no break

			case 'copy':
			case 'delete':
			case 'show':
				if (!in_array(Input::get('id'), $root) || (Input::get('act') == 'delete' && !$this->User->hasAccess('delete', 'faqp')))
				{
					throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to ' . Input::get('act') . ' FAQ category ID ' . Input::get('id') . '.');
				}
				break;

			case 'editAll':
			case 'deleteAll':
			case 'overrideAll':
				$session = $objSession->all();

				if (Input::get('act') == 'deleteAll' && !$this->User->hasAccess('delete', 'faqp'))
				{
					$session['CURRENT']['IDS'] = array();
				}
				else
				{
					$session['CURRENT']['IDS'] = array_intersect((array) $session['CURRENT']['IDS'], $root);
				}
				$objSession->replace($session);
				break;

			default:
				if (strlen(Input::get('act')))
				{
					throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to ' . Input::get('act') . ' FAQ categories.');
				}
				break;
		}
	}

	/**
	 * Return the edit header button
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
	public function editHeader($row, $href, $label, $title, $icon, $attributes)
	{
		return $this->User->canEditFieldsOf('tl_faq_category') ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}

	/**
	 * Return the copy category button
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
	public function copyCategory($row, $href, $label, $title, $icon, $attributes)
	{
		return $this->User->hasAccess('create', 'faqp') ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}

	/**
	 * Return the delete category button
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
	public function deleteCategory($row, $href, $label, $title, $icon, $attributes)
	{
		return $this->User->hasAccess('delete', 'faqp') ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}
}
}
