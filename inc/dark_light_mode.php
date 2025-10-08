<?php
function themeswitch_shortcode()
{
    ob_start();
    ?>
    <div class="themeswitch">
        <input type="checkbox" class="checkbox bandw_switch" id="themeswitcher">
        <label for="themeswitcher" class="checkbox-label">
            <i class="fa fa-sun"></i>
            <i class="fa fa-moon"></i>
            <span class="ball"></span>
        </label>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('themeswitch', 'themeswitch_shortcode');

// Hook the function to the wp_footer action
add_action('wp_footer', 'render_themeswitch_in_footer', 20);
function render_themeswitch_in_footer()
{
    $headerlogo = get_field('header_logo', 'option');
    $headerlogo_black = get_field('header_logo_black', 'option');
    if (!isset($_COOKIE['theme']) || $_COOKIE['theme'] == '0') {
        ?>
        <link href="<?php echo esc_url(get_template_directory_uri() . "/css/white.css"); ?>" rel="stylesheet" type="text/css">
        <script>
            // jQuery('document').ready(function () {
            //     jQuery('.navbar-brand img').attr('src', '<?php echo $headerlogo_black; ?>');
            //     jQuery('.footer-section img.navbar-logo').attr('src', '<?php echo $headerlogo_black; ?>');
            // });
        </script>
        <?php if (is_home() || is_front_page()) { ?>
            <script>
                // jQuery(document).ready(function () {
                //     <?php /* //jQuery('.navbar-brand img').attr('src', '<?php echo esc_url(get_template_directory_uri() . "/images/logo-white.svg"); ?>'); */ ?>
                //     jQuery('.navbar-brand img').attr('src', '<?php echo $headerlogo_black; ?>');
                //     jQuery(window).scroll(function () {
                //         var scrollTop = jQuery(window).scrollTop();
                //         console.log(scrollTop);
                //         var logo = jQuery('.navbar-brand img');
                //         <?php /* // Check if the scroll position is at the top */ ?>
                //         if (scrollTop < 100) {
                //             <?php /* 
                //             // Change logo image source when scrolled to the top
                //             //logo.attr('src', '<?php echo esc_url(get_template_directory_uri() . "/images/logo-white.svg"); ?>'); // Replace 'logo2.png' with the path to your second logo image 
                //             */ ?>
                //             logo.attr('src', '<?php echo $headerlogo_black; ?>'); // Replace 'logo2.png' with the path to your second logo image
                 
                //         } else {
                //             <?php /*  // Revert logo image source when not scrolled to the top */ ?>
                //             logo.attr('src', '<?php echo $headerlogo_black; ?>'); // Replace 'logo1.png' with the path to your first logo image
                            
                //         }
                //     });
                // });
            </script>
            <?php
        }
    }
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var themeSwitchers = document.querySelectorAll('.bandw_switch');

            // Function to set a cookie
            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }

            // Function to get a cookie
            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }

            // Check if the cookie is already set and update the checkbox accordingly
            var theme = getCookie('theme');
            themeSwitchers.forEach(function(switcher) {
                if (theme === '1') {
                    switcher.checked = true;
                } else {
                    switcher.checked = false;
                }

                // Toggle the cookie value when the checkbox is clicked
                switcher.addEventListener('change', function () {
                    if (this.checked) {
                        // Checkbox is checked, set the cookie to 1
                        setCookie('theme', '1', 7); // Expires in 7 days
                    } else {
                        // Checkbox is unchecked, set the cookie to 0
                        setCookie('theme', '0', 7); // Expires in 7 days
                    }
                    location.reload();
                });
            });
        });
    </script>
    <?php /*
    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            var themeswitcher = document.getElementById('themeswitcher');

            // Check if the cookie is already set and update the checkbox accordingly
            if (getCookie('theme') === '1') {
                themeswitcher.checked = true;
            } else {
                themeswitcher.checked = false;
            }

            // Toggle the cookie value when the checkbox is clicked
            themeswitcher.addEventListener('change', function () {
                if (this.checked) {
                    // Checkbox is checked, set the cookie to 1
                    setCookie('theme', '1', 7); // Expires in 7 days
                } else {
                    // Checkbox is unchecked, set the cookie to 0
                    setCookie('theme', '0', 7); // Expires in 7 days
                }
                location.reload();
            });
        });

        // Function to set a cookie
        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        // Function to get a cookie
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        } 
    </script> -->
    */ ?>
    <?php /*
    <script>
        function connecting_dots_animation() {
            var isDarkMode = getCookie('theme') === '1';
            var canvas = document.getElementById("canvas"),
            ctx = canvas.getContext('2d');

            isDarkMode ? canvas.style.backgroundColor = '#000' : canvas.style.backgroundColor = '#fff';

            canvas.width = window.innerWidth;
            canvas.height = canvas.width < 769 ? window.innerWidth*2/5 : window.innerHeight;

            var stars = [], // Array that contains the stars
                FPS = 60, // Frames per second
                x = canvas.width < 769 ? 8 : 100, // Number of stars
                mouse = {
                    x: 0,
                    y: 0
                }; // mouse location

            // Push stars to array

            for (var i = 0; i < x; i++) {
                stars.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    radius: Math.random() * 1 + 1,
                    vx: Math.floor(Math.random() * 50) - 25,
                    vy: Math.floor(Math.random() * 50) - 25
                });
            }

            // Draw the scene

            function draw() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                ctx.globalCompositeOperation = "lighter";

                for (var i = 0, x = stars.length; i < x; i++) {
                    var s = stars[i];

                    ctx.fillStyle = isDarkMode ? "#fff" : "#000";
                    ctx.beginPath();
                    ctx.arc(s.x, s.y, s.radius, 0, 2 * Math.PI);
                    ctx.fill();
                    ctx.fillStyle = isDarkMode ? 'black' : 'white';
                    ctx.stroke();
                }

                ctx.beginPath();
                for (var i = 0, x = stars.length; i < x; i++) {
                    var starI = stars[i];
                    ctx.moveTo(starI.x, starI.y);
                    if (distance(mouse, starI) < 150) ctx.lineTo(mouse.x, mouse.y);
                    for (var j = 0, x = stars.length; j < x; j++) {
                        var starII = stars[j];
                        if (distance(starI, starII) < 150) {
                            //ctx.globalAlpha = (1 / 150 * distance(starI, starII).toFixed(1));
                            ctx.lineTo(starII.x, starII.y);
                        }
                    }
                }
                ctx.lineWidth = 0.05;
                ctx.strokeStyle = isDarkMode ? 'white' : 'black';
                ctx.stroke();
            }

            function distance(point1, point2) {
                var xs = 0;
                var ys = 0;

                xs = point2.x - point1.x;
                xs = xs * xs;

                ys = point2.y - point1.y;
                ys = ys * ys;

                return Math.sqrt(xs + ys);
            }

            // Update star locations

            function update() {
                for (var i = 0, x = stars.length; i < x; i++) {
                    var s = stars[i];

                    s.x += s.vx / FPS;
                    s.y += s.vy / FPS;

                    if (s.x < 0 || s.x > canvas.width) s.vx = -s.vx;
                    if (s.y < 0 || s.y > canvas.height) s.vy = -s.vy;
                }
            }

            canvas.addEventListener('mousemove', function(e) {
                mouse.x = e.clientX;
                mouse.y = e.clientY;
            });

            // Update and draw

            function tick() {
                draw();
                update();
                requestAnimationFrame(tick);
            }

            tick();
        }
    </script> 
    */ ?>
<?php
} ?>