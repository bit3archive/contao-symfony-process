<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package SymfonyProcess
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Vendor
	'Symfony\Component\Process\PhpProcess'                       => 'system/modules/SymfonyProcess/vendor/Symfony/Component/Process/PhpProcess.php',
	'Symfony\Component\Process\Exception\ExceptionInterface'     => 'system/modules/SymfonyProcess/vendor/Symfony/Component/Process/Exception/ExceptionInterface.php',
	'Symfony\Component\Process\Exception\ProcessFailedException' => 'system/modules/SymfonyProcess/vendor/Symfony/Component/Process/Exception/ProcessFailedException.php',
	'Symfony\Component\Process\Exception\RuntimeException'       => 'system/modules/SymfonyProcess/vendor/Symfony/Component/Process/Exception/RuntimeException.php',
	'Symfony\Component\Process\ExecutableFinder'                 => 'system/modules/SymfonyProcess/vendor/Symfony/Component/Process/ExecutableFinder.php',
	'Symfony\Component\Process\ProcessBuilder'                   => 'system/modules/SymfonyProcess/vendor/Symfony/Component/Process/ProcessBuilder.php',
	'Symfony\Component\Process\Tests\ProcessFailedExceptionTest' => 'system/modules/SymfonyProcess/vendor/Symfony/Component/Process/Tests/ProcessFailedExceptionTest.php',
	'Symfony\Component\Process\Tests\ProcessBuilderTest'         => 'system/modules/SymfonyProcess/vendor/Symfony/Component/Process/Tests/ProcessBuilderTest.php',
	'Symfony\Component\Process\Tests\ProcessTest'                => 'system/modules/SymfonyProcess/vendor/Symfony/Component/Process/Tests/ProcessTest.php',
	'Symfony\Component\Process\Tests\PhpExecutableFinderTest'    => 'system/modules/SymfonyProcess/vendor/Symfony/Component/Process/Tests/PhpExecutableFinderTest.php',
	'Symfony\Component\Process\Process'                          => 'system/modules/SymfonyProcess/vendor/Symfony/Component/Process/Process.php',
	'Symfony\Component\Process\PhpExecutableFinder'              => 'system/modules/SymfonyProcess/vendor/Symfony/Component/Process/PhpExecutableFinder.php',
));
