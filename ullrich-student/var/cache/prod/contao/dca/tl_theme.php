<?php

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_DCA']['tl_theme'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ctable'                      => array('tl_module', 'tl_style_sheet', 'tl_layout', 'tl_image_size'),
		'enableVersioning'            => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		),
		'onload_callback' => array
		(
			array('tl_theme', 'checkPermission'),
			array('tl_theme', 'updateStyleSheet')
		),
		'oncopy_callback' => array
		(
			array('tl_theme', 'scheduleUpdate')
		),
		'onsubmit_callback' => array
		(
			array('tl_theme', 'scheduleUpdate')
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 2,
			'fields'                  => array('name'),
			'flag'                    => 1,
			'panelLayout'             => 'sort,search,limit'
		),
		'label' => array
		(
			'fields'                  => array('name'),
			'format'                  => '%s',
			'label_callback'          => array('tl_theme', 'addPreviewImage')
		),
		'global_operations' => array
		(
			'importTheme' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_theme']['importTheme'],
				'href'                => 'key=importTheme',
				'class'               => 'header_theme_import',
				'button_callback'     => array('tl_theme', 'importTheme')
			),
			'store' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_theme']['store'],
				'href'                => 'key=themeStore',
				'class'               => 'header_store',
				'button_callback'     => array('tl_theme', 'themeStore')
			),
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
				'label'               => &$GLOBALS['TL_LANG']['tl_theme']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.svg'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_theme']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.svg',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_theme']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.svg',
				'attributes'          => 'style="margin-right:3px"'
			),
			'css' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_theme']['css'],
				'href'                => 'table=tl_style_sheet',
				'icon'                => 'css.svg',
				'button_callback'     => array('tl_theme', 'editCss')
			),
			'modules' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_theme']['modules'],
				'href'                => 'table=tl_module',
				'icon'                => 'modules.svg',
				'button_callback'     => array('tl_theme', 'editModules')
			),
			'layout' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_theme']['layout'],
				'href'                => 'table=tl_layout',
				'icon'                => 'layout.svg',
				'button_callback'     => array('tl_theme', 'editLayout')
			),
			'imageSizes' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_theme']['imageSizes'],
				'href'                => 'table=tl_image_size',
				'icon'                => 'sizes.svg',
				'button_callback'     => array('tl_theme', 'editImageSizes')
			),
			'exportTheme' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_theme']['exportTheme'],
				'href'                => 'key=exportTheme',
				'icon'                => 'theme_export.svg',
				'button_callback'     => array('tl_theme', 'exportTheme')
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{title_legend},name,author;{config_legend},folders,screenshot,templates;{image_legend:hide},defaultImageDensities;{vars_legend},vars'
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
		'name' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_theme']['name'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'search'                  => true,
			'eval'                    => array('mandatory'=>true, 'unique'=>true, 'decodeEntities'=>true, 'maxlength'=>128, 'tl_class'=>'w50'),
			'sql'                     => "varchar(128) NOT NULL default ''"
		),
		'author' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_theme']['author'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 11,
			'search'                  => true,
			'eval'                    => array('mandatory'=>true, 'maxlength'=>128, 'tl_class'=>'w50'),
			'sql'                     => "varchar(128) NOT NULL default ''"
		),
		'folders' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_theme']['folders'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('multiple'=>true, 'fieldType'=>'checkbox'),
			'sql'                     => "blob NULL"
		),
		'screenshot' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_theme']['screenshot'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'filesOnly'=>true, 'isGallery'=>true, 'extensions'=>Config::get('validImageTypes')),
			'sql'                     => "binary(16) NULL"
		),
		'templates' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_theme']['templates'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_theme', 'getTemplateFolders'),
			'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50 clr'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'vars' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_theme']['vars'],
			'inputType'               => 'keyValueWizard',
			'exclude'                 => true,
			'sql'                     => "text NULL"
		),
		'defaultImageDensities' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_theme']['defaultImageDensities'],
			'inputType'               => 'text',
			'explanation'             => 'imageSizeDensities',
			'exclude'                 => true,
			'eval'                    => array('helpwizard'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		)
	)
);

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_theme extends Backend
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
	 * Check permissions to edit the table
	 *
	 * @throws Contao\CoreBundle\Exception\AccessDeniedException
	 */
	public function checkPermission()
	{
		if ($this->User->isAdmin)
		{
			return;
		}

		// Check the theme import and export permissions (see #5835)
		switch (Input::get('key'))
		{
			case 'importTheme':
				if (!$this->User->hasAccess('theme_import', 'themes'))
				{
					throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to import themes.');
				}
				break;

			case 'exportTheme':
				if (!$this->User->hasAccess('theme_import', 'themes'))
				{
					throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to export themes.');
				}
				break;
		}
	}

	/**
	 * Add an image to each record
	 *
	 * @param array  $row
	 * @param string $label
	 *
	 * @return string
	 */
	public function addPreviewImage($row, $label)
	{
		if ($row['screenshot'] != '')
		{
			$objFile = FilesModel::findByUuid($row['screenshot']);

			if ($objFile !== null && file_exists(TL_ROOT . '/' . $objFile->path))
			{
				$label = Image::getHtml(\System::getContainer()->get('contao.image.image_factory')->create(TL_ROOT . '/' . $objFile->path, array(75, 50, 'center_top'))->getUrl(TL_ROOT), '', 'class="theme_preview"') . ' ' . $label;
			}
		}

		return $label;
	}

	/**
	 * Check for modified style sheets and update them if necessary
	 */
	public function updateStyleSheet()
	{
		/** @var Symfony\Component\HttpFoundation\Session\SessionInterface $objSession */
		$objSession = System::getContainer()->get('session');

		if ($objSession->get('style_sheet_update_all'))
		{
			$this->import('StyleSheets');
			$this->StyleSheets->updateStyleSheets();
		}

		$objSession->set('style_sheet_update_all', null);
	}

	/**
	 * Schedule a style sheet update
	 *
	 * This method is triggered when a single theme or multiple themes are
	 * modified (edit/editAll) or duplicated (copy/copyAll).
	 */
	public function scheduleUpdate()
	{
		/** @var Symfony\Component\HttpFoundation\Session\SessionInterface $objSession */
		$objSession = System::getContainer()->get('session');

		$objSession->set('style_sheet_update_all', true);
	}

	/**
	 * Return all template folders as array
	 *
	 * @return array
	 */
	public function getTemplateFolders()
	{
		return $this->doGetTemplateFolders('templates');
	}

	/**
	 * Return all template folders as array
	 *
	 * @param string  $path
	 * @param integer $level
	 *
	 * @return array
	 */
	protected function doGetTemplateFolders($path, $level=0)
	{
		$return = array();

		foreach (scan(TL_ROOT . '/' . $path) as $file)
		{
			if (is_dir(TL_ROOT . '/' . $path . '/' . $file))
			{
				$return[$path . '/' . $file] = str_repeat(' &nbsp; &nbsp; ', $level) . $file;
				$return = array_merge($return, $this->doGetTemplateFolders($path . '/' . $file, $level+1));
			}
		}

		return $return;
	}

	/**
	 * Return the "import theme" link
	 *
	 * @param string $href
	 * @param string $label
	 * @param string $title
	 * @param string $class
	 * @param string $attributes
	 *
	 * @return string
	 */
	public function importTheme($href, $label, $title, $class, $attributes)
	{
		return $this->User->hasAccess('theme_import', 'themes') ? '<a href="' . $this->addToUrl($href) . '" class="' . $class . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . $label . '</a> ' : '';
	}

	/**
	 * Return the theme store link
	 *
	 * @return string
	 */
	public function themeStore()
	{
		return '<a href="https://themes.contao.org" target="_blank" title="' . StringUtil::specialchars($GLOBALS['TL_LANG']['tl_theme']['store'][1]) . '" class="header_store">' . $GLOBALS['TL_LANG']['tl_theme']['store'][0] . '</a>';
	}

	/**
	 * Return the "edit CSS" button
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
	public function editCss($row, $href, $label, $title, $icon, $attributes)
	{
		return $this->User->hasAccess('css', 'themes') ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}

	/**
	 * Return the "edit modules" button
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
	public function editModules($row, $href, $label, $title, $icon, $attributes)
	{
		return $this->User->hasAccess('modules', 'themes') ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}

	/**
	 * Return the "edit page layouts" button
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
	public function editLayout($row, $href, $label, $title, $icon, $attributes)
	{
		return $this->User->hasAccess('layout', 'themes') ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}

	/**
	 * Return the "edit image sizes" button
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
	public function editImageSizes($row, $href, $label, $title, $icon, $attributes)
	{
		return $this->User->hasAccess('image_sizes', 'themes') ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}

	/**
	 * Return the "export theme" button
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
	public function exportTheme($row, $href, $label, $title, $icon, $attributes)
	{
		return $this->User->hasAccess('theme_export', 'themes') ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}
}
}

namespace  {
/*
 * Replace label function
 */
$GLOBALS['TL_DCA']['tl_theme']['list']['label']['label_callback'] = array('tl_theme_extended', 'addPreviewImageAndDesc');

/*
 * add fields to pallet
 */
$GLOBALS['TL_DCA']['tl_theme']['palettes']['default'] = str_replace
(
	',author',
	',author,pdir_th_license_domain,pdir_th_short_code',
	$GLOBALS['TL_DCA']['tl_theme']['palettes']['default']
);

/**
 * Add fields to tl_theme
 */
$GLOBALS['TL_DCA']['tl_theme']['fields']['pdir_th_description'] = array
(
	'label' => &$GLOBALS['TL_LANG']['tl_theme']['pdir_th_description'],
	'exclude' => true,
	'search' => false,
	'sorting' => false,
	'inputType' => 'textarea',
	'eval' => array('tl_class' => 'clr', 'readonly' => true),
	'sql' => "mediumtext NULL"
);

$GLOBALS['TL_DCA']['tl_theme']['fields']['pdir_th_license_domain'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_theme']['pdir_th_license_domain'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('tl_class' => 'w50', 'maxlength'=> 128, 'readonly' => true),
	'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_theme']['fields']['pdir_th_short_code'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_theme']['pdir_th_short_code'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class' => 'w50', 'maxlength'=> 32),
    'sql'                     => "varchar(32) NOT NULL default ''"
);

class tl_theme_extended extends tl_theme
{
	/**
	 * Add an image and a description to each record
	 *
	 * @param array $row
	 * @param string $label
	 *
	 * @return string
	 */
	public function addPreviewImageAndDesc($row, $label)
	{
        $themeUrl = 'https://contao-themes.net/';
        $themeShortCode = $row['pdir_th_short_code'];

		// add buy action if needed
		if ($row['pdir_th_description'] != '') {
		    if($themeShortCode != '')
		    {
		        $themeUrl .= 'buy-' . $row['pdir_th_short_code'] . '.html';
            }
			$label = '<span class="contaoThemesNet"><a href="' . $themeUrl . '" target="_blank" rel="noopener"><img src="bundles/themehelper/img/buy_theme.png" ' .
                ' title="' . $GLOBALS['TL_LANG']['tl_theme']['buyTheme'] . '"' .
				' style="width:25px;margin: 10px 10px 10px 0;"></a></span>' . $label;
		}

		// add image
		$label = $this->addPreviewImage($row, $label);

		// add theme and license description
		if ($row['pdir_th_description'] != '')
		{
			// add info icon
			$html = '<i class="icon contaoThemesNet" onmouseover="document.getElementById(\'themeDesc\').style.display = \'block\'"'.
				' onmouseout="document.getElementById(\'themeDesc\').style.display = \'none\'"'.
				' style="color:#fff;border-radius:50%;font-weight:bold;padding:3px;border:1px solid #649d9a;background:#649d9a;margin-left:10px;font-style: inherit;">i</i>';

			// license status
            $html .= '<span class="contaoThemesNet">';
			if($row['pdir_th_license_domain'] != '')
				$html .= $GLOBALS['TL_LANG']['tl_theme']['pdir_th_payed_license_text'] . $row['pdir_th_license_domain'] .'<br>';
			else
				$html .= $GLOBALS['TL_LANG']['tl_theme']['pdir_th_license_text'] . '<br>';
            $html .= '</span>';

            $html .= '<i class="icon contaoThemesNet"'.
                ' title="'.$GLOBALS['TL_LANG']['MSC']['checkDomainButtonTitle'].'"'.
                ' style="font-style:normal;color:#fff;font-weight:bold;padding:5px;border:1px solid #649d9a;background:#649d9a;display: inline-block;"'.
                ' onclick="Backend.getScrollOffset();Backend.openModalSelector({\'width\':768,\'title\':\'' . $GLOBALS['TL_LANG']['MSC']['checkDomainButtonText'] . '\',\'url\':\'contao?do=thLicence&shortCode='.$themeShortCode.'&popup=1&theme='.$row['id'].'\',\'id\':\'checkDomain\'});return false"'.
                '">'.$GLOBALS['TL_LANG']['MSC']['checkDomainButtonText'].'</i>';

			// desc
			$html .= '<div id="themeDesc" class="contaoThemesNet" style="display:none;line-height:1.2em;margin-top:5px;">';
			$html .= \StringUtil::decodeEntities($row['pdir_th_description']);
			$html .= '</div>';
			$label = $label . $html;
		}

		return $label;
	}
}
}

namespace  {
/**
 * Contao Bootstrap grid.
 *
 * @package    contao-bootstrap
 * @subpackage Grid
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2017-2020 netzmacht David Molineus. All rights reserved.
 * @license    https://github.com/contao-bootstrap/grid/blob/master/LICENSE LGPL 3.0-or-later
 * @filesource
 */

// Palette
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()
    ->addLegend('bootstrap_legend', '')
    ->addField('bs_grid_columns', 'bootstrap')
    ->applyToPalette('default', 'tl_theme');

// Operations
array_insert(
    $GLOBALS['TL_DCA']['tl_theme']['list']['operations'],
    -1,
    [
        'bs_grid' => [
            'href'  => 'table=tl_bs_grid',
            'label' => &$GLOBALS['TL_LANG']['tl_theme']['bs_grid'],
            'icon'  => 'bundles/contaobootstrapgrid/img/icon.png',
        ],
    ]
);

// Fields
$GLOBALS['TL_DCA']['tl_theme']['fields']['bs_grid_columns'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_theme']['bs_grid_columns'],
    'inputType' => 'text',
    'eval'      => [
        'tl_class' => 'w50',
    ],
    'sql'       => 'int(10) NULL default NULL'
];
}
