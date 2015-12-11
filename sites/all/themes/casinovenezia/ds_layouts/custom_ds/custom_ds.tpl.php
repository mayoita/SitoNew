<?php

/**
 * @file
 * Display Suite 2 column stacked template.
 */
?>
<<?php print $cover_wrapper ?> class="group-cover<?php print $cover_classes; ?>">
    <?php print $cover; ?>

<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-2col-stacked <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>


  <<?php print $header_wrapper ?> class="group-header<?php print $header_classes; ?>">
    <?php print $header; ?>
    <div class="event_date"><?php

        $date_init = strtotime($node->field_from['und']['0']['value']);
        $date_finish = strtotime($node->field_from['und']['0']['value2']);
        $day_init=date('d',$date_init);
        $month_init=date('m',$date_init);
        $day_finish=date('d',$date_finish);
        $month_finish=date('m',$date_finish);
        if (($day_init == $day_finish) && ($month_init == $month_finish)) {
        print date("d F Y", $date_init);
        } else {
        print date("d", $date_init) . '-' . date("d F Y", $date_finish);

        }

        ?></div>

  </<?php print $header_wrapper ?>>

  <<?php print $left_wrapper ?> class="group-left<?php print $left_classes; ?>">
    <?php print $left; ?>
  </<?php print $left_wrapper ?>>

  <<?php print $right_wrapper ?> class="group-right<?php print $right_classes; ?>">
    <?php print $right; ?>
  </<?php print $right_wrapper ?>>

</<?php print $layout_wrapper ?>>
</<?php print $cover_wrapper ?>>
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>