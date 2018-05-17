<div id="popup_homepage" style="display:none; ">
    <div class="container-popup">
        <div>
            <div class="popup_cp_column">
                <h3 class="popup_title"><?php esc_html_e('Please Install the ThemeHunk customizer WordPress Plugin.Plugin will enable below features in the theme. ', 'shopline') ?></h3>
                <h4><?php esc_html_e('Salient Features -', 'shopline'); ?></h4>
                <ul class="popup-features-list">
                    <li><?php esc_html_e('Enable all homepage sections (like: Category slider, Woo-commerce Product Slider, Woo-commerce Featured Products, testimonial, services and many more)', 'shopline'); ?></li>
                    <li><?php esc_html_e('Header Options (like: Front-page Hero & Internal Pages Hero)', 'shopline'); ?></li>
                    <li><?php esc_html_e('ShopPage settings(like: sidebar alignment, product display setting.)', 'shopline'); ?></li>
                    <li><?php esc_html_e('Custom templates  (Page builder template )', 'shopline'); ?></li>
                    <li><?php esc_html_e('Typography', 'shopline'); ?></li>
                    <li><?php esc_html_e('Page Container Setting', 'shopline'); ?></li>
                    <li><?php esc_html_e('Theme Color Options', 'shopline'); ?></li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <label class="disable-popup-cb">
                <input type="checkbox" id="disable-popup-cb"/>
                <?php esc_html_e("Don't show this popup in refresh page", 'shopline'); ?>
            </label>
             <a class="button-link-cb" onclick="tb_remove();"> <?php esc_html_e('Disable PoPuP', 'shopline') ?> </a><a class="activate-now button-primary button-large flactvate"><?php _e('Activating homepage...','shopline'); ?></a><div class='loader'></div><strong class="flactvate-activating"> <?php _e('It may take few seconds...','shopline'); ?></strong>
            <?php 
                $obj = New Shopline_Popup();
            echo $obj->active_plugin(); ?>
        </div>
    </div>
</div>