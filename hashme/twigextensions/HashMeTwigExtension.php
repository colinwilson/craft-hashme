<?php
/**
 * Hash Me plugin for Craft CMS
 *
 * Hash Me Twig Extension
 *
 * @author    Colin Wilson
 * @copyright Copyright (c) 2016 Colin Wilson
 * @link      https://infinitysgame.com
 * @package   HashMe
 * @since     0.1.0
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class HashMeTwigExtension extends \Twig_Extension
{

    /**
     * @return string The extension name
     */
    public function getName()
    {
        return 'HashMe';
    }

    public $filters;

    /**
     * @return array
     */
    public function getFilters()
    {
        $filters = array();
        $methods = array(
            'md5',
            'sha1',
            'sha256',
            'sha384',
            'sha512',
        );
        foreach ($methods as $method) {
            $filters[$method] = new \Twig_Filter_Method($this, $method);
        }
        return $filters;
    }

    /**
     * @return string
     */
    public function md5($string, $returnAsArray = false)
    {
        $result = hash('md5', $string);

        return $result;
    }

    public function sha1($string, $returnAsArray = false)
    {
        $result = hash('sha1', $string);

        return $result;
    }

    public function sha256($string, $returnAsArray = false)
    {
        $result = hash('sha256', $string);

        return $result;
    }

    public function sha384($string, $returnAsArray = false)
    {
        $result = hash('sha384', $string);

        return $result;
    }

    public function sha512($string, $returnAsArray = false)
    {
        $result = hash('sha512', $string);

        return $result;
    }

}
