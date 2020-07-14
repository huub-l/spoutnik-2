<?php

$collaboration = array('collaboration');

$args = array(
    'orderby'           => 'name',
    'order'             => 'ASC',
    'hide_empty'        => true,
);

$cats = get_terms($collaboration, $args);

//piklist::pre($cats);
//foreach( $cats as $cat ) {
    //echo $cat->name .' '. $cat->term_id . ' '. $cat->slug .'<br>';

    // if ($cat->slug === 'lieux-culturels') {
    //     $term_id = $cat->term_id;
    //     $taxonomy_name = 'collaboration';
    //     $termchildren = get_term_children( $term_id, $taxonomy_name );
    //     echo '<h3>Lieux culturels</h3>';
    //     display_order_alphabeticaly($termchildren, 'cycle');
    // }

    // if ($cat->slug === 'festivals-evenements') {
    //     $term_id = $cat->term_id;
    //     $taxonomy_name = 'collaboration';
    //     $termchildren = get_term_children( $term_id, $taxonomy_name );
    //     echo '<h3>Festivals / Événements</h3>';
    //     display_order_alphabeticaly($termchildren, 'cycle');
    // }

    // if ($cat->slug === 'institutions') {
    //     $term_id = $cat->term_id;
    //     $taxonomy_name = 'collaboration';
    //     $termchildren = get_term_children( $term_id, $taxonomy_name );
    //     echo '<h3>Institutions</h3>';
    //     display_order_alphabeticaly($termchildren, 'cycle');
    // }

    // if ($cat->slug === 'associations-collectifs') {
    //     $term_id = $cat->term_id;
    //     $taxonomy_name = 'collaboration';
    //     $termchildren = get_term_children( $term_id, $taxonomy_name );
    //     echo '<h3>Associations / Collectifs</h3>';
    //     display_order_alphabeticaly($termchildren, 'cycle');
    // }
//}
//$category = get_term_by('id', 'collaborations','cycle');
?>
<div class="ui four column grid">
    <?php  foreach ($cats as $cat) : ?>
        <div class="column">
            <a href="<?= get_term_link($cat->term_id); ?>" style="margin-top:10px;font-family:'Suisse Intl','sans-serif'; color:black;" class="country" target="_blank"><?= $cat->name; ?> (<?= $cat->count; ?>)</a>
        </div>
    <?php endforeach; ?>
</div>


