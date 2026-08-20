<?php
define('PREVENT_DIRECT_ACCESS', TRUE);

/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
 *---------------------------------------------------------------
 * SYSTEM DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "scheme" directory.
 * Set the path if it is not in the same directory as this file.
 * 
 * NO TRAILING SLASH!
 */
    $system_path            = 'scheme';

/*
 *---------------------------------------------------------------
 * APPLICATION DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "app"
 * directory than the default one you can set its name here.
 *
 * NO TRAILING SLASH!
 */
    $application_folder     = 'app';

/*
 *---------------------------------------------------------------
 * PUBLIC DIRECTORY NAME
 *---------------------------------------------------------------
 * This lets you set up your public folder where css, js, and other public
 * files will be visible to the web server.
 */
    $public_folder          = 'public';

/*
 * ------------------------------------------------------
 * Define Application Constants
 * ------------------------------------------------------
 */

// __DIR__ points to /var/www/html/public (where index.php lives)
// dirname(__DIR__) moves one level up to the root project folder /var/www/html/
define('ROOT_DIR',     dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Absolute path to the system/scheme directory
define('SYSTEM_DIR',   ROOT_DIR . $system_path . DIRECTORY_SEPARATOR);

// Absolute path to the application directory
define('APP_DIR',      ROOT_DIR . $application_folder . DIRECTORY_SEPARATOR);

// Absolute path to the public directory
define('PUBLIC_DIR',   ROOT_DIR . $public_folder . DIRECTORY_SEPARATOR);

/*
 * ------------------------------------------------------
 * Setup done? Then Hurray!
 * ------------------------------------------------------
 */
require_once SYSTEM_DIR . 'kernel/LavaLust.php';
?>