# TechLaunch.io main site

## How to run this site locally

1. You need to have NodeJS, node-sass Webpack 2, PHP, and Apache installed.
2. Clone the repo `git clone https://github.com/FVITech/Techlaunch.io`
3. open up your terminal
4. CD into the repo
5. Run `npm i` to install the dependencies
6. Run `npm start` to start the webpack dev server
7. Open another terminal tab and run `npm run watch-css` to get SASS running.

## Creating A New Page

1. Create a folder with the new page's name, and then create an index.php file inside of it
2. You must include the following code at the very top of index.php:
    ```html
    <?php $rootPath = '../'; 
    $page = "my-new-page-name"; 
    $meta_title="Title For My New Page";
    $meta_key="";
    $meta_desc="Description for my new page";    
    include($rootPath . 'parts/head.php');
    ?>
    ```
    - The $rootPath variable should be used throughout this file before every local file path, such as in `href` and `src` attributes. This will allow Techlaunch.io to be served from any subfolder, which is useful for testing.
    - The $page variable is used in `parts/head.php` to link the CSS for this page. Each page has its own CSS folder and generated CSS file.
    - The `$meta_title`, `$meta_key`, and `$meta_desc` variables are used in `parts/head.php`.
3. Create a folder in `css/` with the page's name. It should *exactly* match the folder name with index.php in it.
    - Create an index.scss file inside the CSS folder
    - Import the following necessary scss partials into index.scss:
        ```css
        @import "../normalize";
        @import "../helpers";
        @import "../base";
        @import "../footer";
        @import "../navbar/navbar";
        @import "../navbar/menu-overlay";
        @import "../navbar/menu-button";
        @import "../navbar/menu";
        @import "../get-info-form";
        ```
    - Add your own partial scss files in the CSS folder for your page and import them into index.scss. Every partial scss file should begin with an underscore to prevent node-sass from creating a separate css file with its name.
4. Next, add the rest of the base code:
    ```html
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DZRJ7D"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <?php
        include($rootPath . "parts/navbar.php");
        $classes = "";
        include($rootPath . 'parts/get-info-form.php');
        ?>

        <section class="above-the-fold">
            <div class="container">
                <a href="<?php echo $rootPath ?>">
                    <img class="logo" src="<?php echo $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo">
                </a>
                <h1 class="page-title">Page Title</h1>
            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="section-title">Section Title</h2>
                
                <!-- YOUR PAGE CONTENT HERE -->

            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="section-title">Section Title</h2>
                
                <!-- YOUR PAGE CONTENT HERE -->

            </div>
        </section>


        <?php include($rootPath . 'parts/footer.php') ?>
        <?php include($rootPath . 'parts/bottom.php') ?>
    </body>
    ```
    - First, there is a noscript element for Google analytics
    - Next, The navbar and menu are included
    - Next, the hero section ('above-the-fold') is included with the Techlaunch.io logo (a homepage button) and the page title
    - Next, a section with a container div is included, which will limit the width of content within it. Use the 'section-title' h2 to provide a title for this section.
    - Next, provide the content for this section.
    - Continue adding new sections with container divs as you need them.
    - Next, the footer is included.
    - Lastly, bottom/php is included, which contains the various scripts needed for the page to function properly
5. JavaScripts are in the `js` folder. Webpack is used to bundle them into a single JS file, which is included in `parts/bottom.php`
6. PHP modules, like a testimonials section, a quotes section, and a student projects section, are available for use in the `parts/` folder. Just include them into your index.php file. 
    - *Note*: if you include one of the modules from `parts/`, you must also import the associated `.scss` file into your page's index.scss file. For example, `testimonials.php` needs `_testimonials-slider.scss`.
7. Images are in the `images/` folder and videos are in the `videos/` folder. Use them in your index.php file with $rootPath:
    ```html
    <img src="<?php echo $rootPath ?>people/students-coding.jpg">
    ```
