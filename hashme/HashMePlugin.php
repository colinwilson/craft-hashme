<?php
/**
 * Hash Me plugin for Craft CMS
 *
 * Craft Plugin to generate a hash value of a string
 *
 * @author    Colin Wilson
 * @copyright Copyright (c) 2016 Colin Wilson
 * @link      https://infinitysgame.com
 * @package   HashMe
 * @since     0.1.0
 */

namespace Craft;

class HashMePlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Hash Me');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Generate the hash value of a given string');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/colinwilson/craft-hashme/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/colinwilson/craft-hashme/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '0.1.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '0.1.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Colin Wilson';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://infinitysgame.com';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     * @return mixed
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.hashme.twigextensions.HashMeTwigExtension');

        return new HashMeTwigExtension();
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}
