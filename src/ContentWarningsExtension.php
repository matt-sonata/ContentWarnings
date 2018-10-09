<?php

namespace Bolt\Extension\MatthewBeck75\ContentWarnings;

use Bolt\Extension\SimpleExtension;

/**
 * ExtensionName extension class.
 *
 * @author Your Name <you@example.com>
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
