<?php

namespace  {
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2018 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'examia',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Models
	'examia\ExamPerformModel'      => 'system/modules/exams/models/ExamPerformModel.php',
	'examia\ExamModel'             => 'system/modules/exams/models/ExamModel.php',
	'examia\LecturerModel'         => 'system/modules/exams/models/LecturerModel.php',

	// Classes
	'examia\exam_details'          => 'system/modules/exams/classes/exam_details.php',
	'examia\exam_create'           => 'system/modules/exams/classes/exam_create.php',
	'examia\lecturer_create'       => 'system/modules/exams/classes/lecturer_create.php',
	'examia\exam_preparation_list' => 'system/modules/exams/classes/exam_preparation_list.php',
	'examia\next_exams'            => 'system/modules/exams/classes/next_exams.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'exam_create'           => 'system/modules/exams/templates',
	'next_exams'            => 'system/modules/exams/templates',
	'lecturer_create'       => 'system/modules/exams/templates',
	'exam_preparation_list' => 'system/modules/exams/templates',
	'exam_details'          => 'system/modules/exams/templates',
	'exam_list'             => 'system/modules/exams/templates',
));
}

namespace  {
/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'ContaoDD',
));


/**
 * Register the classes
 */

ClassLoader::addClasses(array
(
    // Classes
    'ContaoDD\AdvancedClassesHooks'   => 'vendor/contao-dd/advanced-classes-bundle/src/Resources/contao/classes/AdvancedClassesHooks.php',
));
}

namespace  {
/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package Multicolumnwizard
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Basic classes.
    'MultiColumnWizardHelper'                           => 'system/modules/multicolumnwizard/MultiColumnWizardHelper.php',
    'MultiColumnWizard'                                 => 'system/modules/multicolumnwizard/MultiColumnWizard.php',
    // Src Folder - MAW (Deprecated)
    'MenAtWork\MultiColumnWizard\Event\GetOptionsEvent' => 'system/modules/multicolumnwizard/src/MenAtWork/Event/GetOptionsEvent.php',
    // Src Folder - MCW
    'MultiColumnWizard\Event\GetOptionsEvent'           => 'system/modules/multicolumnwizard/src/MultiColumnWizard/Event/GetOptionsEvent.php',
    'MultiColumnWizard\DcGeneral\UpdateDataDefinition'  => 'system/modules/multicolumnwizard/src/MultiColumnWizard/DcGeneral/UpdateDataDefinition.php',
));
}
