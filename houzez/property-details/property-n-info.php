<?php
/**
 * Created by PhpStorm.
 * User: msn
 * Date: 18/11/17
 * Time: 4:24 PM
 * Created and Edited by Msn
 */
global $post, $post_meta_data, $msn_get_info_post;
$documents_download = houzez_option('documents_download');

if (!empty($msn_get_info_post)) {
    ?>
    <div id="description" class="property-description detail-block target-block">
        <div class="detail-title">
            <h2 class="title-left"><?php esc_html_e('اطلاعات محله', 'houzez'); ?></h2>
        </div>

        <div>
            <?php echo do_shortcode($msn_get_info_post->post_content);  ?>
        </div>


    </div>
<?php } ?>