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
      <div><?php
      print render($content['field_introduction_events']);
      ?></div>
    </div>
    <?php

      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);

    ?>
    <!-- Begin MailChimp Signup Form -->
    <!--<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">-->
<div class="container">
    <div id="mc_embed_signup">
      <form action="//casinovenezia.us8.list-manage.com/subscribe/post?u=a7de920f9f803ee34071e7a1f&amp;id=14754c0c1b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
          <div class="indicates-required"><span class="asterisk">*</span> campi obbligatori</div>

          <div class="mc-field-group">
            <label for="mce-FNAME">Nome/Nome esercizio  <span class="asterisk">*</span>
            </label>
            <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
          </div>
          <div class="mc-field-group">
            <label for="mce-LNAME">Cognome/Denominazione sociale  <span class="asterisk">*</span>
            </label>
            <input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
          </div>
          <div class="mc-field-group">
            <label for="mce-EMAIL">Indirizzo E-mail  <span class="asterisk">*</span>
            </label>
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
          <div class="spazio"></div>
          <div class="mc-field-group input-group">

            <ul><li><input type="radio" value="Si" name="NEWSLETTER" id="mce-NEWSLETTER-0"><strong> Sì, sono d'accordo di ricevere la Newsletter Casinò di Venezia all'indirizzo sopra indicato  <span class="asterisk">*</span>
                </strong></li>
            </ul>
          </div>
          <div class="mc-field-group input-group">

            <ul><li><input type="radio" value="Si" name="MAGGIORE" id="mce-MAGGIORE-0"><strong>Confermo di essere maggiorenne  <span class="asterisk">*</span>
                </strong></li>
            </ul>
          </div>
          <div class="mc-field-group input-group">

            <ul><li><input type="radio" value="Si" name="CONSENSO" id="mce-CONSENSO-0"><strong>Al fine di consentire il servizio richiesto autorizzo al trattamento dei miei dati ai sensi del D.lgs. 196/2003
                  <span class="asterisk">*</span>
                </strong></li>
            </ul>
          </div>

          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a7de920f9f803ee34071e7a1f_14754c0c1b" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Iscriviti" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        </div>
      </form>
    </div>
</div>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='NEWSLETTER';ftypes[3]='radio';fnames[4]='MAGGIORE';ftypes[4]='radio';fnames[5]='CONSENSO';ftypes[5]='radio'; /*
       * Translated default messages for the $ validation plugin.
       * Locale: IT
       */
        $.extend($.validator.messages, {
          required: "Campo obbligatorio.",
          remote: "Controlla questo campo.",
          email: "Inserisci un indirizzo email valido.",
          url: "Inserisci un indirizzo web valido.",
          date: "Inserisci una data valida.",
          dateISO: "Inserisci una data valida (ISO).",
          number: "Inserisci un numero valido.",
          digits: "Inserisci solo numeri.",
          creditcard: "Inserisci un numero di carta di credito valido.",
          equalTo: "Il valore non corrisponde.",
          accept: "Inserisci un valore con un&apos;estensione valida.",
          maxlength: $.validator.format("Non inserire pi&ugrave; di {0} caratteri."),
          minlength: $.validator.format("Inserisci almeno {0} caratteri."),
          rangelength: $.validator.format("Inserisci un valore compreso tra {0} e {1} caratteri."),
          range: $.validator.format("Inserisci un valore compreso tra {0} e {1}."),
          max: $.validator.format("Inserisci un valore minore o uguale a {0}."),
          min: $.validator.format("Inserisci un valore maggiore o uguale a {0}.")
        });}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    <!--End mc_embed_signup-->
    <div id="block-bean-disclaimer-newsletter-en" class="container block block-bean last even">


      <div class="entity entity-bean bean-box clearfix">

        <div class="content">
          <div class="field field-name-title-field field-type-text field-label-hidden"><div class="field-items"><div class="field-item even"></div></div></div><div class="field field-name-field-box-body field-type-text-long field-label-hidden"><div class="field-items"><div class="field-item even"><div class="disclaimer">
                  <p>Disiscriversi alla newsletter è semplice. Basta cliccare sulla voce “cancellazione dalla newsletter” in fondo alla newsletter che riceverai. In caso di segnalazioni diverse potrai contattarci inviando una nota all’indirizzo <a href="mailto:info@casinovenezia.it">info@casinovenezia.it</a>.</p>
                  <p>Titolare del trattamento dei tuoi dati personali è la società Casinò di Venezia Gioco SPA, con sede legale in Venezia, Cannaregio 2040. Le informazioni sulle modalità di gestione del sito in relazione al trattamento dei dati personali e l’informativa ai sensi dell’articolo 13 del D.lgs. 196/2003 sono contenute nella sezione <a href="http://www.casinovenezia.it/it/privacy-policy.html">privacy policy</a>.</p>
                </div></div></div></div>  </div>
      </div>

    </div>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
