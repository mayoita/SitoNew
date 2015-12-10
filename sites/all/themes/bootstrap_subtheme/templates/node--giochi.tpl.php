<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>
  <?php
  print render($content['field_cover_image']);
  ?>
  <div class="content"<?php print $content_attributes; ?>>
    <div class="event_banner">
      <div class="event_title"><?php print $title; ?>
      </div>
      <div class="event_date"<?php print render($content['field_from'])?>
    </div>
    <?php

      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  </div>
  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
  <div class="view-id-game_types">
    <div class="views-row views-row-1 views-row-odd views-row-first">

      <div class="views-field views-field-nothing">        <div class="game-type-content">
          <h2 class="title"><a href="/it/giochi-ai-tavoli.html" target="_blank" title="Giochi ai tavoli">Giochi ai tavoli</a></h2>
          <div class="text lightbg">
            <p>Al <strong>Casinò di Venezia</strong> si trovano i migliori <strong>giochi ai tavoli</strong>. Sia di tradizione francese, come la&nbsp;<strong>Roulette</strong>, lo&nbsp;<strong>Chemin de fer</strong>, il <strong>Trente et Quarante</strong> e&nbsp;il&nbsp;<strong>Punto Banco</strong>, sia di ispirazione americana, con sale per il<strong>Texas Hold'em Poker</strong>, il&nbsp;<strong>Black Jack</strong>, <strong>la Fair Roulette</strong> e il <strong>Caribbean Stud Poker</strong>.</p>
          </div>
        </div>  </div>
      <div class="views-field views-field-field-preview-slideshow">        <div class="field-content">
          <div class="flex-container">
            <div class="flexslider">
              <ul class="slides">
                <li style="display: list-item;"><img src="http://www.casinovenezia.it/sites/default/files/styles/preview_slide/public/images/previews/game_type/1/giochi-tavoli-640x300.jpg?itok=3Qg2Ug5L"></li>    </ul>
            </div>
          </div>

        </div>  </div>  </div>
    <div class="views-row views-row-2 views-row-even">

      <div class="views-field views-field-nothing">        <div class="game-type-content">
          <h2 class="title"><a href="/it/giochi-elettronici.html" target="_blank" title="Giochi Elettronici">Giochi Elettronici</a></h2>
          <div class="text lightbg">
            <p>Oltre <strong>600</strong>&nbsp;<strong>slot machines</strong>&nbsp;per più di <strong>700 postazioni di gioco</strong>: un’offerta in costante evoluzione, per garantire nelle due sedi del <strong>Casinò di Venezia</strong> sempre il meglio della moderna tecnologia, alla ricerca continua di una maggiore soddisfazione del cliente.</p>
          </div>
        </div>  </div>
      <div class="views-field views-field-field-preview-slideshow">        <div class="field-content">
          <div class="flex-container">
            <div class="flexslider">
              <ul class="slides">
                <li style="display: list-item;"><img src="http://www.casinovenezia.it/sites/default/files/styles/preview_slide/public/images/previews/game_type/2/giochi-elettronici-640x300.jpg?itok=jwCEfuT5"></li>    </ul>
            </div>
          </div>

        </div>  </div>  </div>
    <div class="views-row views-row-3 views-row-odd views-row-last">

      <div class="views-field views-field-nothing">        <div class="game-type-content">
          <h2 class="title"><a href="http://www.clickandplay.it" target="_blank" title="Giochi online">Giochi online</a></h2>
          <div class="text lightbg">
            <p>Il&nbsp;<strong>Casinò di Venezia</strong>&nbsp;è anche <strong>concessionario di gioco online </strong>riconosciuto dallo Stato Italiano: le occasioni di divertimento sono sempre garantite dalla massima professionalità, sicurezza e riservatezza che contraddistingue l’intero staff.</p>
          </div>
        </div>  </div>
      <div class="views-field views-field-field-preview-slideshow">        <div class="field-content">
          <div class="flex-container">
            <div class="flexslider">
              <ul class="slides">
                <li style="display: list-item;"><img src="http://www.casinovenezia.it/sites/default/files/styles/preview_slide/public/images/previews/game_type/48/640x300clickandplayalert.jpg?itok=-lFeXpN0"></li>    </ul>
            </div>
          </div>

        </div>  </div>  </div></div>


