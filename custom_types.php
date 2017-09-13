<?php

function ath_register_post_type( $post_type, $plural_name, $singular_name, $item_name, $slug, $capability_type, $menu_position, $supports = [], $taxonomies = [], $public = true )
{
    $args = [
        'labels' => [
            'name'               => $singular_name,
            'singular_name'      => $singular_name,
            'add_new'            => $item_name. ' hinzufügen',
            'add_new_item'       => $item_name. ' hinzufügen',
            'edit_item'          => $item_name. ' bearbeiten',
            'new_item'           => 'Neue '.$item_name,
            'all_items'          => 'Alle '.$item_name,
            'view_item'          => 'View '.$item_name,
            'search_items'       => $item_name. ' suchen',
            'not_found'          => 'Keine '.$item_name.' gefunden',
            'not_found_in_trash' => 'Keine '.$item_name.' im Papierkorb gefunden',
            'menu_name'          => $plural_name
        ],
        'label'           => $singular_name,
        'public'          => $public,
        'taxonomies'      => $taxonomies,
        'has_archive'     => true,
        'show_in_rest'    => true,
        'rest_base'       => $slug,
        'rewrite'         => [ 'slug' => $slug ],
        'capability_type' => $capability_type,
        'menu_position'   => $menu_position,
        'menu_icon'       => 'dashicons-arrow-right-alt2',
        'supports'        => $supports
    ];
    register_post_type( $post_type, $args );
}

function register_job_post_type()
{
    ath_register_post_type( 'einleitung', 'Einleitung', 'Einleitung', 'Inhalte', 'einleitung', 'post', 14, ['title', 'editor'] );
    ath_register_post_type( 'governance', 'Governance', 'Governance', 'Forderungen', 'governance', 'post', 15, ['title', 'editor'] );
    ath_register_post_type( 'betrieb', 'Betrieb', 'Betrieb', 'Forderung', 'betrieb', 'post', 16, ['title', 'editor'] );
    ath_register_post_type( 'lehre', 'Lehre', 'Lehre', 'Forderung', 'lehre', 'post', 17, ['title', 'editor'] );
    ath_register_post_type( 'forschung', 'Forschung', 'Forschung', 'Forderung', 'forschung', 'post', 18, ['title', 'editor'] );
}

add_action( 'init', 'register_job_post_type' );

function f_save_data( $post_id, $post, $update )
{
    $meta_keys = [
        'begruendung' => 'html',
        'massnahmen' => 'html',
        'city'         => 'text',
        'country'      => 'text'
    ];

    foreach ($meta_keys as $meta_key => $type) {
        if ( isset( $_POST[ $meta_key ] ) ) {
            if ( $type === 'html' ) {
                $value = wp_kses_post( trim( $_POST[ $meta_key ] ) );
            } else {
                $value = sanitize_text_field( trim( $_POST[ $meta_key ] ) );
            }

            update_post_meta( $post_id, $meta_key, $value );
        }
    }
}
add_action( 'save_post', 'f_save_data', 10, 3 );

function f_add_custom_meta( $editor_id )  
{
    global $post;

    $how_to_apply = get_post_meta( $post->ID, $editor_id, true );

    $setting = [
        'quicktags'     => false,
        'media_buttons' => false,
        'editor_height' => 200,
        'wpautop'       => false
    ];
    wp_editor( $how_to_apply, $editor_id , $setting);
}

function f_add_begruendung_meta() {
    return f_add_custom_meta( "begruendung" ); 
}
function f_add_massnahmen_meta() {
    return f_add_custom_meta( "massnahmen" );
}

/*
function location()
{
    global $post;
    $city    = get_post_meta( $post->ID, 'city', true );
    $country = get_post_meta( $post->ID, 'country', true );
    ?>
    <input type="text" name="city" class="regular-text" placeholder="City" value="<?php echo $city; ?>" /><br>
    <input type="text" name="country" class="regular-text" placeholder="Country" value="<?php echo $country; ?>" />
    <?php
}
*/

function add_metas_to_custom_posts($post_type) {
    add_meta_box( 'add_begruendung_' . $post_type, 'Begründung', 'f_add_begruendung_meta', $post_type, 'normal', 'default' );
    add_meta_box( 'add_massnahmen_' . $post_type, 'Maßnahmen', 'f_add_massnahmen_meta', $post_type, 'normal', 'default' );
}

function adds_all_meta_boxes() 
{
    add_metas_to_custom_posts("governance");
    add_metas_to_custom_posts("betrieb");
    add_metas_to_custom_posts("lehre");
    add_metas_to_custom_posts("forschung");

    // add_meta_box( 'add_location', 'Location', 'location', 'job', 'normal', 'default' );
}

add_action( 'add_meta_boxes', 'adds_all_meta_boxes' );

/*
Register API Endpoint for new fields Begründung und Maßnahmen
*/

function slug_get_post_meta_cb( $object, $field_name, $request ) {
    return get_post_meta( $object['id'], $field_name );
}

function register_custom_meta_fields() {

    $in_post_types = [
        "governance",
        "betrieb",
        "lehre",
        "forschung"
    ];

    foreach ($in_post_types as $post_type) {
        register_rest_field( $post_type, 'begruendung',
            array(
                'get_callback'    => 'slug_get_post_meta_cb',
                'schema'          => null
            )
        );
        register_rest_field( $post_type, 'massnahmen',
            array(
                'get_callback'    => 'slug_get_post_meta_cb',
                'schema'          => null
            )
        );
    }
}

add_action( 'rest_api_init', 'register_custom_meta_fields');
