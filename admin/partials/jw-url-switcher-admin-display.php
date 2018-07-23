<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://live.nyword.church
 * @since      0.1.0
 *
 * @package    JW_URL_Switcher
 * @subpackage JW_URL_Switcher/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
    <form method="post" action="options.php">
        <?php settings_fields( 'jw-url-switcher-settings-group' ); ?>
        <?php do_settings_sections( 'jw-url-switcher-settings-group' ); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Media ID</th>
                <td>
                    <input type="text" name="jw_url_switcher_media_id" value="<?php echo esc_attr( get_option('jw_url_switcher_media_id') ); ?>" />
                </td>
            </tr>
            
            <tr valign="top">
                <th scope="row">YouTube URL</th>
                <td>
                    <input type="text" name="jw_url_switcher_youtube_url" value="<?php echo esc_attr( get_option('jw_url_switcher_youtube_url') ); ?>"/>
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>

    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
        <input type="hidden" name='action' value='jw_url_switcher_switch_url'>
        <input type="submit" value="Switch URL">
    </form>
</div>