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
<div class="view-content">
    <div class="views-row views-row-1 views-row-odd views-row-first">

        <div class="views-field views-field-field-preview-image">        <a href="/it/roulette-francese.html"><img src="http://www.casinovenezia.it/sites/default/files/styles/preview_game/public/images/previews/game/21/484x201introroulettefrancese.jpg?itok=ldn50vVL" width="468" height="200" alt=""></a>  </div>
        <div class="views-field views-field-title">        <h2 class="field-content"><a href="/it/roulette-francese.html">Roulette Francese</a></h2>  </div>
        <div class="text-preview-wrapper" style="height: 200px; display: none;">        <div class="text-preview">A Ca’ Vendramin Calergi e a Ca’ Noghera la regina dei giochi dei più importanti casinò d’Europa e del mondo. Lasciatevi sedurre dal rumore della boule nel cilindro e...  les jeux sont faits!</div>  </div>  </div>
    <div class="views-row views-row-2 views-row-even">

        <div class="views-field views-field-field-preview-image">        <a href="/it/chemin-de-fer.html"><img src="http://www.casinovenezia.it/sites/default/files/styles/preview_game/public/images/previews/game/27/casino53.jpg?itok=6g2LM7QL" width="468" height="200" alt=""></a>  </div>
        <div class="views-field views-field-title">        <h2 class="field-content"><a href="/it/chemin-de-fer.html">Chemin de Fer</a></h2>  </div>
        <div class="text-preview-wrapper" style="height: 200px; display: none;">        <div class="text-preview">A Ca' Vendramin Calergi e a Ca' Noghera il più classico e affascinante gioco di carte. Il nome deriva dal particolare disegno sul “panno verde” che ricorda le rotaie dei treni e dalla forma del sabot simile a una locomotiva che si muove da un giocatore all’altro.</div>  </div>  </div>
    <div class="views-row views-row-3 views-row-odd">

        <div class="views-field views-field-field-preview-image">        <a href="/it/black-jack.html"><img src="http://www.casinovenezia.it/sites/default/files/styles/preview_game/public/images/previews/game/28/black-jack-468x200.jpg?itok=RxgjExIM" width="468" height="200" alt="Black Jack" title="Black Jack"></a>  </div>
        <div class="views-field views-field-title">        <h2 class="field-content"><a href="/it/black-jack.html">Black Jack</a></h2>  </div>
        <div class="text-preview-wrapper">        <div class="text-preview">A Ca’ Vendramin Calergi e a Ca' Noghera, un gioco di carte dove vinci contro il dealer se ti avvicini di più al 21. Somma il valore delle carte e decidi se fermarti o di richiederne di aggiuntive.</div>  </div>  </div>
    <div class="views-row views-row-4 views-row-even">

        <div class="views-field views-field-field-preview-image">        <a href="/it/poker-texas-hold-em.html"><img src="http://www.casinovenezia.it/sites/default/files/styles/preview_game/public/images/previews/game/23/texas-468x200.jpg?itok=TwMGL7cC" width="468" height="200" alt="Texas hold 'em poker" title="Texas hold 'em poker"></a>  </div>
        <div class="views-field views-field-title">        <h2 class="field-content"><a href="/it/poker-texas-hold-em.html">Poker Texas hold 'em </a></h2>  </div>
        <div class="text-preview-wrapper">        <div class="text-preview">A Ca’ Vendramin Calergi e a Ca' Noghera la variante più famosa del gioco del poker: il Texas Hold ’em Poker. Sfida gli avversari usando le tue due carte coperte combinandole con le cinque carte scoperte stese sul tavolo e... fai anche tu All In!</div>  </div>  </div>
    <div class="views-row views-row-5 views-row-odd">

        <div class="views-field views-field-field-preview-image">        <a href="/it/fair-roulette.html"><img src="http://www.casinovenezia.it/sites/default/files/styles/preview_game/public/images/previews/game/22/fair-roulette-468x200.jpg?itok=FQxV_IQq" width="468" height="200" alt="Fair Roulette" title="Fair Roulette"></a>  </div>
        <div class="views-field views-field-title">        <h2 class="field-content"><a href="/it/fair-roulette.html">Fair Roulette</a></h2>  </div>
        <div class="text-preview-wrapper">        <div class="text-preview">A Ca' Vendramin Calergi e a Ca' Noghera una variante dinamica e avvincente della Roulette Francese.</div>  </div>  </div>
    <div class="views-row views-row-6 views-row-even">

        <div class="views-field views-field-field-preview-image">        <a href="/it/caribbean-stud-poker.html"><img src="http://www.casinovenezia.it/sites/default/files/styles/preview_game/public/images/previews/game/29/caribbean-poker-468x200.jpg?itok=6y3wq2Ot" width="468" height="200" alt="Caribbean Stud Poker" title="Caribbean Stud Poker"></a>  </div>
        <div class="views-field views-field-title">        <h2 class="field-content"><a href="/it/caribbean-stud-poker.html">Caribbean Stud Poker</a></h2>  </div>
        <div class="text-preview-wrapper">        <div class="text-preview">A Ca' Vendramin Calergi e a Ca' Noghera una variante del gioco del Poker a cinque carte dove il tuo avversario è il dealer... e lui non bluffa mai!</div>  </div>  </div>
    <div class="views-row views-row-7 views-row-odd">

        <div class="views-field views-field-field-preview-image">        <a href="/it/punto-banco.html"><img src="http://www.casinovenezia.it/sites/default/files/styles/preview_game/public/images/previews/game/25/punto-banco-468x200.jpg?itok=cRV2ttKf" width="468" height="200" alt="Punto Banco" title="Punto Banco"></a>  </div>
        <div class="views-field views-field-title">        <h2 class="field-content"><a href="/it/punto-banco.html">Punto Banco</a></h2>  </div>
        <div class="text-preview-wrapper">        <div class="text-preview">A Ca’ Vendramin Calergi e a Ca' Noghera la variante più famosa dello Chemin de fer. Indifferentemente puoi puntare sul banco o sulla punta, e al resto pensa il croupier!</div>  </div>  </div>
    <div class="views-row views-row-8 views-row-even views-row-last">

        <div class="views-field views-field-field-preview-image">        <a href="/it/midi-trenta-quaranta.html"><img src="http://www.casinovenezia.it/sites/default/files/styles/preview_game/public/images/previews/game/24/trente-quarante-468x200.jpg?itok=KRZZlaD7" width="468" height="200" alt="Trenta quaranta" title="Trenta quaranta"></a>  </div>
        <div class="views-field views-field-title">        <h2 class="field-content"><a href="/it/midi-trenta-quaranta.html">Midi Trenta Quaranta</a></h2>  </div>
        <div class="text-preview-wrapper">        <div class="text-preview">A Ca' Vendramin Calergi uno fra i giochi di carte più antichi e originali. Per consuetudine e per le particolari caratteristiche trova la sua naturale collocazione solo nei Casinò tradizionali più esclusivi.</div>  </div>  </div>
</div>


