<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<div class="home">

  <?php if ($this->countModules("home-1")) : ?>
  <!-- HOME SL 1 -->
  <section class="wrap ja-sl ja-sl-1">
    <jdoc:include type="modules" name="home-1" style="raw" />
  </section>
  <!-- //HOME SL 1 -->
  <?php endif ?>

  <?php if ($this->countModules("home-2")) : ?>
  <!-- HOME SL 2 -->
  <section class="container ja-sl ja-sl-2">
    <jdoc:include type="modules" name="home-2" style="raw" />
  </section>
  <!-- //HOME SL 2 -->
  <?php endif ?>

  <?php if ($this->countModules("home-3")) : ?>
  <!-- HOME SL 3 -->
  <section class="container ja-sl ja-sl-3">
    <jdoc:include type="modules" name="home-3" style="raw" />
  </section>
  <!-- //HOME SL 3 -->
  <?php endif ?>

  <?php if ($this->countModules("home-4")) : ?>
  <!-- HOME SL 4 -->
  <section class="container ja-sl ja-sl-4">
    <jdoc:include type="modules" name="home-4" style="raw" />
  </section>
  <!-- //HOME SL 4 -->
  <?php endif ?>

  <?php if ($this->countModules("home-5")) : ?>
  <!-- HOME SL 5 -->
  <section class="wrap ja-sl ja-sl-5">
    <jdoc:include type="modules" name="home-5" style="raw" />
  </section>
  <!-- //HOME SL 5 -->
  <?php endif ?>

</div>