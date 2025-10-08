<?php /*
<div class="multi-level-menu-wrapper">
    <div class="mainMenu">
        <ul>
            <li class="hasSubMenu">
                <div class="trigger">
                    <a href="#">Home</a>
                </div>
            </li>
            <li class="hasSubMenu" data-target="#abouttab">
                <div class="trigger">
                    <a href="#">About <i class="fas fa-arrow-right"></i></a>
                </div>
            </li>
            <li class="hasSubMenu" data-target="#certificationstab">
                <div class="trigger">
                    <a href="#">Certifications <i class="fas fa-arrow-right"></i></a>
                </div>
            </li>
            <li>
                <a href="#">Authorized Partners</a>
            </li>
            <li>
                <a href="#">Authorized Training</a>
            </li>
            <li>
                <a href="#">Resources</a>
            </li>
            <li>
                <a href="#">AI CERTs Lab</a>
            </li>
            <li>
                <a href="#">Store</a>
            </li>
            <li>
                <a href="#">Events</a>
            </li>
        </ul>
    </div>
    <!--    Level 1    -->

    <div class="subMenu" id="abouttab">
        <div class="backTrigger">
            <i class="fas fa-arrow-left icon"></i> Back
        </div>
        <ul>
            <li><a href="#">Why AI CERTs™</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">Accreditation</a></li>
            <li><a href="#">Trademarks</a></li>
            <li><a href="#">Careers</a></li>
        </ul>
    </div>

    <div class="subMenu" id="certificationstab">
        <div class="backTrigger"><i class="fas fa-arrow-left icon"></i> Back To Certifications</div>
        <ul>
            <li><a href="#">Role Based Solution</a></li>
            <li class="hasSubMenu" data-target="#certificates-technology">
                <div class="trigger">
                    <a href="#">Technology <i class="fas fa-arrow-right"></i></a>

                </div>
            </li>

            <li><a href="#">Home-1</a></li>
            <li><a href="#">Home-1</a></li>
            <li><a href="#">Home-1</a></li>
        </ul>
    </div>

    <!-- level 2 -->
    <div class="subMenu" id="certificates-technology">
        <div class="backTrigger"><i class="fas fa-arrow-left icon"></i> Back</div>
        <ul>
            <li class="hasSubMenu" data-target="#ApplicationDevelopment">
                <div class="trigger">
                    <a href="#">Application Development and Programming <i class="fas fa-arrow-right"></i></a>
                </div>
            </li>
            <li class="hasSubMenu" data-target="#home3">
                <div class="trigger">
                    <a href="#">Infrastructure and Cloud <i class="fas fa-arrow-right"></i></a>
                </div>
            </li>
            <li class="hasSubMenu" data-target="#home3">
                <div class="trigger">
                    <a href="#">Security <i class="fas fa-arrow-right"></i></a>
                </div>
            </li>
        </ul>
    </div>

    <!-- level 3 -->
    <div class="subMenu" id="ApplicationDevelopment">
        <div class="backTrigger"><i class="fas fa-arrow-left icon"></i> Back</div>
        <ul>
            <li><a href="#">AI+ Developer™</a></li>
            <li><a href="#">Blockchain+ Developer™</a></li>
            <li><a href="#">Bitcoin+ Developer™</a></li>
        </ul>
    </div>

    <!-- level 3 -->
    <div class="subMenu" id="home4">
        <div class="backTrigger">
            <i class="fas fa-arrow-left icon"></i> Back
        </div>
        <ul>
            <li data-target="#home4">
                <a href="#">Home-4</a>
            </li>
            <li><a href="#">Home-4</a></li>
            <li><a href="#">Home-4</a></li>
            <li><a href="#">Home-4</a></li>
            <li><a href="#">Home-4</a></li>
        </ul>
    </div>
</div>
*/ ?>

<div class="multi-level-menu-wrapper">
<?php 
wp_nav_menu(array(
    'theme_location' => 'menu-header',
    'walker'         => new Multi_Level_Menu_Walker(),
    'menu_class'     => 'mainMenu',
    'container'      => false,
    //'container'      => 'div',
    //'container_class' => 'multi-level-menu-wrapper',
));
?>

<?php include get_template_directory() . "/inc/menu_cta.php"; ?>

</div>
<script>
// jQuery(document).ready(function($) {
//     $('.multi-level-menu-wrapper > .menu-item-has-children > .hasSubMenu > a').attr('href', '#');
// });

// jQuery(document).ready(function($) {
//     setTimeout(function() {
//         $('.multi-level-menu-wrapper #menu-item-4102 a').attr('href', '#');
//     }, 2000);
// });


jQuery(document).ready(function($) {
    // Apply a delay to ensure the DOM is fully loaded
    setTimeout(function() {
        // Target only second-level menu items, excluding "View All" and other inner menu items
        $('.multi-level-menu-wrapper .hasSubMenu > .subMenu > ul > li.menu-item-has-children > .trigger > a').each(function() {
            // Replace the href attribute with '#'
            $(this).attr('href', '#');

            // Optionally, update the text to reflect the change
            // var updatedText = $(this).text() + ' (Updated)';
            // $(this).text(updatedText);
        });
    }, 1000); // 1-second delay to ensure DOM is ready
});

</script>
