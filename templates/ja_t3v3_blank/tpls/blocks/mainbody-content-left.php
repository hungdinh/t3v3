<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php

  // Layout configuration
  $layout_config = json_decode ('{
    "two_sidebars_mast": { 
      "default" : [ "span6"         , "span6"             , "span3"             , "span3"           ],
      "wide"    : [],
      "xtablet" : [],
      "tablet"  : [ "span12"        , "span12 spanfirst"  , "span6 spanfirst"   , "span6"             ]
    },  
    "two_sidebars": {
      "default" : [ "span6" , "span3"    , "span3"             ],
      "wide"    : [],
      "xtablet" : [ "span8"         , "span4 pull-right"  , "span4 pull-right"  ],
      "tablet"  : [ "span12"        , "span6 spanfirst"   , "span6"             ]
    },
    "one_sidebar": {
      "default" : [ "span9"         , "span3"             ],
      "wide"    : [],
      "xtablet" : [ "span8"         , "span4"             ],
      "tablet"  : [ "span12"        , "span12 spanfirst"  ]
    },
    "no_sidebar": {
      "default" : [ "span12" ]
    }
  }');

  // positions configuration
  $mastcol  = $this->getPosname("mast-col");
  $sidebar1 = $this->getPosname("sidebar-1");;
  $sidebar2 = $this->getPosname("sidebar-2");;

  // Detect layout
  if ($this->countModules($mastcol)) {
    $layout = "two_sidebars_mast";
  } else {
    if ($this->countModules("$sidebar1 and $sidebar2")) {
      $layout = "two_sidebars";
    } elseif ($this->countModules("$sidebar1 or $sidebar2")) {
      $layout = "one_sidebar";
    } else {
      $layout = "no_sidebar";
    }
  }
  $layout = $layout_config->$layout;

  //
  $col = 0;
?>

<section id="ja-mainbody" class="container ja-mainbody">
  <div class="row">
    
    <!-- MAIN CONTENT -->
    <div id="ja-content" class="ja-content <?php echo $this->getClass($layout, $col) ?>" <?php echo $this->getData ($layout, $col++) ?>>
      <jdoc:include type="message" />
      <jdoc:include type="component" />
    </div>
    <!-- //MAIN CONTENT -->
    
    <?php if ($this->countModules($mastcol)) : ?>
    <!-- MASSCOL 1 -->
    <div class="ja-mastcol ja-mastcol-1 <?php echo $this->getClass($layout, $col) ?>" <?php echo $this->getData ($layout, $col++) ?>>
      <jdoc:include type="modules" name="<?php echo $mastcol ?>" style="JAxhtml" />
    </div>
    <!-- //MASSCOL 1 -->
    <?php endif ?>

    <?php if ($this->countModules("$sidebar1 or $mastcol")) : ?>
    <!-- SIDEBAR 1 -->
    <div class="ja-sidebar ja-sidebar-1 <?php echo $this->getClass($layout, $col) ?>" <?php echo $this->getData ($layout, $col++) ?>>
      <jdoc:include type="modules" name="<?php echo $sidebar1 ?>" style="JAxhtml" />
    </div>
    <!-- //SIDEBAR 1 -->
    <?php endif ?>
    
    <?php if ($this->countModules("$sidebar2 or $mastcol")) : ?>
    <!-- SIDEBAR 2 -->
    <div class="ja-sidebar ja-sidebar-2 <?php echo $this->getClass($layout, $col) ?>" <?php echo $this->getData ($layout, $col++) ?>>
      <jdoc:include type="modules" name="<?php echo $sidebar2 ?>" style="JAxhtml" />
    </div>
    <!-- //SIDEBAR 2 -->
    <?php endif ?>

  </div>
</section> 