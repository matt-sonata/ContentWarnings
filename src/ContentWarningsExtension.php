<?php

namespace Bolt\Extension\MatthewBeck75\ContentWarnings;

use Bolt\Extension\SimpleExtension;

/**
 * ExtensionName extension class.
 *
 * @author Matthew Beck 
 */
class ContentWarningsExtension extends SimpleExtension
{

 protected function registerTwigPaths()

   {

       return [

           'templates' => ['namespace' => 'bolt'],

       ];

   }

}
