<?php
 /* ----------------------------------------------------------------------------
 * Application - Single Configuration File
 * ---------------------------------------------------------------------------- */

/**
 * Application Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */

class Config
{
    // ------------------------------------------------------------------------
    // General Settings
    // ------------------------------------------------------------------------
    const BASE_URL        = 'http://localhost/amass/';
    const LANGUAGE        = 'english';
    const DEBUG_MODE      = FALSE;
    const ENABLE_HOOKS    = FALSE;
    const COKKIES_DOMAIN  = 'localhost';
    const COKKIES_PATH    = '/amass/';
    const COKKIES_PREFIX  = 'amass';
    const COKKIES_NAME    = 'amass';


    // ------------------------------------------------------------------------
    // Database Settings
    // ------------------------------------------------------------------------
    const DB_HOST       = 'localhost';
    const DB_NAME       = 'amass';
    const DB_USERNAME   = 'root';
    const DB_PASSWORD   = '';
    const DB_DRIVER     = 'mysqli';
    const DB_PREFIX     = 'wr_';
    const DB_DNS        = ''; // require if DB_DRIVER is pdo like (mysql:host=localhost;dbname=ci_goconsult) otherwise it can be blank.

    // ------------------------------------------------------------------------
    // Google Calendar Sync
    // ------------------------------------------------------------------------
    const GOOGLE_SYNC_FEATURE   = FALSE; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME   = '';
    const GOOGLE_CLIENT_ID      = '';
    const GOOGLE_CLIENT_SECRET  = '';
    const GOOGLE_API_KEY        = '';
}