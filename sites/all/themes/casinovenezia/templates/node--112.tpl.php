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
      <div class="event_date"<?php print render($content['field_introduction_events'])?>
      <div class="game_download"<?php print render($content['field_download'])?>
    </div>
    <?php

      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);

    print render($content);
    ?>
    <div id="regole">
    <div id="elenco-regole">
      <div class="regola" id="regola-0">Numero Pieno (En Plein)</div>
      <div class="regola" id="regola-1">Cavallo (Cheval)</div>
      <div class="regola" id="regola-2">Terzina o Trasversale Piena (Transversale Pleine)</div>
      <div class="regola" id="regola-3">Trasversale dello Zero (Transversale du Zero)</div>
      <div class="regola" id="regola-4">Carré (Carré)</div>
      <div class="regola" id="regola-5">Quattro Primi (Quatre Premiers)</div>
      <div class="regola" id="regola-6">Sestina (Sixaine - Transversale Simple)</div>
      <div class="regola" id="regola-7">Dozzina (Douzaine)</div>
      <div class="regola" id="regola-8">Colonna (Colonne)</div>
      <div class="regola" id="regola-9">Manque and Passe</div>
      <div class="regola" id="regola-10">Pari e Dispari (Pair et Impair)</div>
      <div class="regola" id="regola-11">Rosso e Nero (Rouge et Noir)</div>
    </div>
      <div id="elenco-descrizioni">
        <div class="descrizione" id="descrizione-0">È formato da un singolo numero (dallo 0 al 36): si punta posizio-nando il gettone sulla casella del numero prescelto.</div>
        <div class="descrizione" id="descrizione-1">È formato da due numeri attigui, lo si individua pronunciando entrambi i numeri (dal minore al maggiore), può essere orizzontale e verticale. La puntata si effettua posizionando il gettone sulla linea che separa i due numeri.</div>
        <div class="descrizione descrizione-active" id="descrizione-2">È formata da tre numeri progressivi situati sulla stessa linea orizzontale.   La terzina è individuata pronunciando il primo e l'ultimo numero (dal minore al maggiore), si gioca posizionando il gettone sulla linea esterna del tracciato. È tradizione chiamare la prima terzina "tre primi" (trois premiers) e l'ultima "tre ultimi" (trois derniers).</div>
        <div class="descrizione" id="descrizione-3">Le terzine, chiamate anche trasversali dello zero (transversales du zero) 0/1/2 e 0/2/3 hanno i numeri sul tracciato posizionati diversamente dalla terzina tradizionale.</div>
        <div class="descrizione" id="descrizione-4">È formato dai quattro numeri, due sopra e due sotto, che compon-gono un quadrato. Si individua pronunciando il primo e l'ultimo numero (dal minore al maggiore), si punta posizionando il gettone al centro tra i quattro numeri.</div>
        <div class="descrizione" id="descrizione-5">La sequenza numerica 0/1/2/3 viene individuata con il nome di "quattro primi" (quatre premiers). Il gettone si posiziona all'incrocio delle linee esterne del tracciato che delimitano lo 0, dall'1 o dal 3.</div>
        <div class="descrizione" id="descrizione-6">È formata da sei numeri progressivi che compongono due terzine consecutive, una sopra e l'altra sotto. Si individua pronunciando il primo e l'ultimo numero (dal minore al maggiore). È tradizione chiamare la prima sestina "sei primi" (six premiers) e l'ultima "sei ultimi" (six derniers). Si punta posizio-nando il gettone sulla linea esterna del tracciato tra le due terzine.</div>
        <div class="descrizione" id="descrizione-7">Sono tre, ognuna delle quali è formata da dodici numeri progressivi. <br>Prima: dall'1 al 12 - douze premiers, seconda: dal 13 al 24 - douze milieu, terza: dal 25 al 36 - douze derniers. <br>La si individua pronunciando "prima dozzina, dozzina di mezzo e ultima dozzina". Si gioca posizionando il gettone sugli appositi spazi situati alla fine del tracciato.</div>
        <div class="descrizione" id="descrizione-8">Sono tre, ognuna delle quali è formata da dodici numeri posizio-nati uno sotto l'altro sul tracciato. La si individua considerando tutti i numeri posti in colonna che partono dal 34, 35 o 36. Si punta collocando il gettone negli appositi spazi situati sotto la colonna dei numeri che la compongono.</div>
        <div class="descrizione" id="descrizione-9">Sono formati ciascuno da diciotto numeri:<br>Manque dall'1 al 18.<br>Passe dal 19 al 36.<br>Si puntano giocando il gettone negli appositi spazi (Manque o Passe) del tracciato.</div>
        <div class="descrizione" id="descrizione-10">Sono formati ciascuno da diciotto numeri:<br>Impair comprende i numeri dispari.<br>Pair comprende i numeri pari.<br>Si puntano giocando il gettone negli appositi spazi (Impair o Pair) del tracciato.</div>
        <div class="descrizione" id="descrizione-11">Sono formati ciascuno da diciotto numeri.<br><br>Rossi<br>1-3-5-7-9-12-14-16-18<br>19-21-23-25-27-30-32-34-36<br><br>Neri<br>2-4-6-8-10-11-13-15-17<br><br>20-22-24-26-28-29-31-33-35<br><br>Si puntano giocando il gettone negli appositi spazi (rosso o nero) del tracciato.</div>
      </div>
    </div>
  </div>


  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
