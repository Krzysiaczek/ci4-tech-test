<?php

namespace Config;

/***
 *
 * This file contains example values to override or augment default library behavior.
 * Recommended usage:
 *	1. Copy the file to app/Config/Assets.php
 *	2. Set any override variables
 *	3. Add additional route-specific assets to $routes
 *	4. Remove any lines to fallback to defaults
 *
 ***/

class Assets extends \Tatter\Assets\Config\Assets
{
    // Whether to continue instead of throwing exceptions
    public $silent = true;

    // Extensions to use when auto-detecting assets
    public $extensions = ['css', 'js'];

    // Location of asset files in the filesystem
    public $fileBase = FCPATH . 'assets/';

    // Location of asset URLs
    public $webBase = '/assets/';

    // Starting directory for manifest publication
    public $publishBase = ROOTPATH . 'vendor/';

    // Whether to append file modification timestamps on asset tags
    public $useTimestamps = true;

    // Additional paths to load per route
    // Relative to fileBase, no leading/trailing slashes
    public $routes = [
        '' => [
            'libraries/bootstrap/css/bootstrap.min.css',
            'libraries/datatables/css/datatables.min.css',
            'libraries/jquery.slim.min.js',
            'libraries/datatables/js/datatables.min.js',
            'libraries/bootstrap/js/bootstrap.bundle.min.js',
            'custom/js/kick.js',
        ],
        // TODO Need to upgrade Tatter/Assets to ver 3 - still not released and buggy
        // 'admin*' => [
        //     'libraries/smartadmin/css/vendors.bundle.css',
        //     'libraries/smartadmin/css/app.bundle.cs',
        //     'libraries/smartadmin/css/skins/skin-master.css',
        //     'libraries/smartadmin/js/vendors.bundle.js',
        //     'libraries/smartadmin/js/app.bundle.js',
        // ],
        // 'admin/users' => [
        //     'custom/js/kick.js',
        // ],
    ];
}
