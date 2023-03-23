<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-convert
 */

get_header();
?>

    <header>
        <nav>
            <div class="brand-and-logo">
                <img class="logo" src="<?php echo (get_template_directory_uri().'/assets/images/money.png'); ?>" alt="money">
                <a class="navbar-brand" href="#">CONVERT</a>
            </div>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="navbar">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'nav-link')) ?>
                </ul>
            </div>
        </nav>
		<div class="hero">
            <div class="hero-text">
                <h1 class="headline">Get the right value of your  money</h1>
                <p class="filler">Convert is the ultimate solution for all your currency exchange needs. With our state-of-the-art technology, you can easily compare exchange rates from multiple providers and get the best deal on your currency exchange.</p>
                <a class="convert" href="<?php echo get_site_url(); ?>/convert">Convert</a>
            </div>
            <div class="hero-image">
                <img class="currency" src="<?php echo (get_template_directory_uri().'/assets/images/currency.jpg'); ?>" alt="currency">
            </div>
        </div>
    </header>
	<div id="pricing">
        <div id="flash-card">
            <h2 class="thank-you">Thank You. We appreciate the business!</h2>
            <i class="fa-sharp fa-solid fa-xmark"></i>
        </div>
        <div class="pricing-text">
            <h1>Pricing Plans</h1>
            <p>Choose from our free basic plan or upgrade to our premium plan for advanced features at an affordable rate.</p>
        </div>
        <div class="container">
            <div class="card">
                <h2 class="plan">Free Plan</h2>
                <div class="price">
                    <h1>$0</h1><span>.00</span>
                    <p>Monthly</p>
                </div>
                <button class="subscribe">Subscribe</button>
                <div class="iconic">
                    <i class="fa-solid fa-code"></i>
                    <div class="media-body">100 Requests / Month</div>
                </div>
                <div class="iconic">
                    <i class="fa-solid fa-circle-check"></i>
                    <div class="media-body">Free for Lifetime</div>
                </div>
                <div class="iconic">
                    <i class="fa-solid fa-circle-check"></i>
                    <div class="media-body">No Credit Card Required</div>
                </div>
            </div>
            <div class="starter-card">
                <div class="badge">MOST POPULAR</div>
                <h2 class="plan">Starter Plan</h2>
                <div class="price">
                    <h1>$14</h1><span>.99</span>
                    <p>Monthly</p>
                </div>
                <button class="starter-subscribe">Subscribe</button>
                <div class="starter-iconic">
                    <i class="fa-solid fa-code"></i>
                    <div class="media-body">10,000 Requests / Month</div>
                </div>
                <div class="starter-iconic">
                    <i class="fa-solid fa-circle-check"></i>
                    <div class="media-body">Standard Support</div>
                </div>
            </div>
            <div class="card">
                <h2 class="plan">Pro Plan</h2>
                <div class="price">
                    <h1>$49</h1><span>.99</span>
                    <p>Monthly</p>
                </div>
                <button class="subscribe">Subscribe</button>
                <div class="iconic">
                    <i class="fa-solid fa-code"></i>
                    <div class="media-body">100,000 Requests / Month</div>
                </div>
                <div class="iconic">
                    <i class="fa-solid fa-circle-check"></i>
                    <div class="media-body">Standard Support</div>
                </div>
            </div>
            <div class="card">
                <h2 class="plan">Enterprise Plan</h2>
                <div class="price">
                    <h1>$99</h1><span>.99</span>
                    <p>Monthly</p>
                </div>
                <button class="subscribe">Subscribe</button>
                <div class="iconic">
                    <i class="fa-solid fa-code"></i>
                    <div class="media-body">500,000 Requests / Month</div>
                </div>
                <div class="iconic">
                    <i class="fa-solid fa-circle-check"></i>
                    <div class="media-body">Standard Support</div>
                </div>
            </div>
            <div class="card">
                <h2 class="plan">Custom Plan</h2>
                <div class="price">
                    <h1>Volume</h1>
                    <p>Monthly</p>
                </div>
                <button class="subscribe">Contact Us</button>
                <div class="iconic">
                    <i class="fa-solid fa-circle-check"></i>
                    <div class="media-body">Any requests volume you need</div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
