<?php
/**
 * PHPMailer SPL autoloader.
 * PHP Version 5.4+
 * @package PHPMailer
 * @link https://github.com/PHPMailer/PHPMailer/ The PHPMailer GitHub project
 * @author Marcus Bointon (Synchro/coolbru) <phpmailer@synchromedia.co.uk>
 * @author Jim Jagielski (jimjag) <jimjag@gmail.com>
 * @author Andy Prevost (codeworxtech) <codeworxtech@users.sourceforge.net>
 * @author Brent R. Matzelle (original founder)
 * @copyright 2012 - 2014 Marcus Bointon
 * @copyright 2010 - 2012 Jim Jagielski
 * @copyright 2004 - 2009 Andy Prevost
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 * @note This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * PHPMailer SPL autoloader.
 * @param string $classname The name of the class to load
 * but new : namespace PHPMailer\PHPMailer; 
 */
function PHPMailerAutoload($classname){
    $filename = __DIR__ . DIRECTORY_SEPARATOR . $classname . '.php';
		/* was : $filename = __DIR__ . DIRECTORY_SEPARATOR . 'class.' . strtolower($classname) . '.php'; */
		/* __DIR__ . DIRECTORY_SEPARATOR) -> include/thirdparty/PHPMailer/ */		
	if (is_readable($filename)) { require $filename; } 
	  /* -> :  /var/..../include/thirdparty/PHPMailer/PHPMailer.php */
}

spl_autoload_register('PHPMailerAutoload', true, true);
