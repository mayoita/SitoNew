<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container-fluid">
    <div class="diciottopiu"><p><span>18+</span>&nbsp;Divieto di gioco ai minori di 18 anni. Il gioco può causare dipendenza patologica.<span class="break"> Gioca responsabilmente. <a target="_blank" style="color:#69635E!important" href="http://www.casinovenezia.it/it/probabilita-di-vincita.html">Vai alle probabilità di vincita</a></span></p>
    </div>
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <div id="top-menu">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php
          //D7
          $blockloc = module_invoke('locale', 'block_view', 'language');
          print render($blockloc['content']);
          $block = module_invoke('custom_search_blocks', 'block_view', '1');
          print render($block['content']);
          ?>
          </div>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
  <script type="text/javascript">
    var _iub = _iub || [];
    _iub.csConfiguration = {
      cookiePolicyId: 633545,
      siteId: 254071,
      lang: "it"
    };
    (function (w, d) {
      var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "//cdn.iubenda.com/cookie_solution/iubenda_cs.js"; tag.parentNode.insertBefore(s, tag); };
      if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; }
    })(window, document);
  </script>
</header>

<div class="main-container container-fluid event">

  <div class="row home">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>

      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>


      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <div class="container-im">
        <div class="outer-im r4x3">
          <div class="inner">
            <a href="http://www.clickandplay.it/portal/portal/index.jsp" target="_blank" id="casinoonline">&nbsp;</a>

          </div>
        </div>
      </div>
      <?php print render($page['content']); ?>

      <div class="container container-front" id="welcome-block">

          <div class="col-lg-4" id="home-left">
            <?php
            $block = block_load('block', '1');
            $blockb = _block_get_renderable_array(_block_render_blocks(array($block)));
            print render($blockb);
            $block2 = block_load('views', 'calendario-block');
            $block2b =_block_get_renderable_array(_block_render_blocks(array($block2)));
            print render($block2b);
            ?>
          </div>
          <div class="col-lg-8" id="home-right">
            <?php
            $block3 = block_load('views', 'lista_giochi-block');
            $block3b = _block_get_renderable_array(_block_render_blocks(array($block3)));
            print render($block3b);
            $block = block_load('block', '2');
            $block4b =_block_get_renderable_array(_block_render_blocks(array($block)));
                print render($block4b);

            ?>

        </div>


      </div>
    </section>

    <div id="social">
      <a href="https://www.facebook.com/casinovenezia" id="social-facebook" class="social-icon" target="_blank">Facebook</a>
      <a href="https://twitter.com/casinovenezia" id="social-twitter" class="social-icon" target="_blank">Twitter</a>
    </div>

  </div>

  <div class="row row-bottom">
    <div id="bottom-top" class="column-wide">
      <div class="region region-bottom-top">
        <div class="col-md-6" id="bottom-left">
          <?php
          $block = block_load('block', '3');
          $blockb =_block_get_renderable_array(_block_render_blocks(array($block)));
          print render($blockb);
          ?>
        </div>
        <div class="col-xs-6" id="bottom-right">
          <?php
          $block = block_load('block', '4');
           $block2b = _block_get_renderable_array(_block_render_blocks(array($block)));
          print render($block2b);
          ?>

        </div>
      </div>
    </div>
</div>
  <div class="row row-bottom menu-bottom">
    <div id="bottom-top" class="column-wide">
      <div class="region region-bottom-top">
        <div class="col-md-6" id="bottom-left-5">
          <?php
          $block = block_load('block', '5');
          print render(_block_get_renderable_array(_block_render_blocks(array($block))));
          ?>
        </div>
        <div class="" id="bottom-right-6">
          <?php
          $block = block_load('block', '6');
          print render(_block_get_renderable_array(_block_render_blocks(array($block))));
          ?>

        </div>
      </div>
    </div>
  </div>
<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
