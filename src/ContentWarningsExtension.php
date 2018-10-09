<?php

namespace Bolt\Extension\MatthewBeck\ContentWarnings;

use Bolt\Extension\SimpleExtension;

/**
 * ExtensionName extension class.
 *
 * @author Your Name <you@example.com>
 */
class ExtensionNameExtension extends SimpleExtension
{

 protected function registerTwigPaths()

   {

       return [

           'templates' => ['namespace' => 'bolt'],

       ];

   }

}
