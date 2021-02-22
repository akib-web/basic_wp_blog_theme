<a class="header__toggle-menu" href="#0" title="Menu"><span><?php _e("Menu","arblog"); ?></span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6"><?php _e("Site navigation","arblog"); ?></h2>
                        <?php wp_nav_menu(array(
                            "theme_location" => "top-menu",
                            "menu_id"        => "top-menu",
                            "menu_class"     => "header__nav"
                        )); ?>
                    <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu"><?php _e("Close","arblog"); ?></a>

                </nav> <!-- end header__nav-wrap -->