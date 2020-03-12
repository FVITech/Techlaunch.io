# TechLaunch.io main site

## How to run this site locally

1. You need to have NodeJS, Yarn (faster and more secure than npm), PHP, and Apache installed.
2. Clone the repo `git clone https://github.com/FVITech/Techlaunch.io`
3. Open up your terminal
4. `cd` into the repo
5. Run `yarn` to install the dependencies
6. Run `yarn start` to watch for file changes. The page will automatically update itself when changes are made. CSS changes will not cause a page refresh, but you will see your CSS changes updated on the page.

## Creating A New Page

1. Create a folder with the new page's name, and then create an index.php file inside of it
2. You must include the following code at the very top of index.php:
    ```html
    <?php $rootPath = '../'; 
    $page = "my-new-page-name"; 
    $meta_title="Page Title"; // Techlaunch.io | Page Title
    $meta_key="";
    $meta_desc="Description for my new page";    
    include($rootPath . 'parts/head.php');
    ?>
    ```
    - The $rootPath variable should be used throughout this file before every local file path, such as in `href` and `src` attributes. This will allow Techlaunch.io to be served from any subfolder, which is useful for testing.
    - The $page variable is used in `parts/head.php` to link the CSS for this page. Each page has its own CSS folder and generated CSS file. The generated CSS files end up in `build/css`.
    - The `$meta_title`, `$meta_key`, and `$meta_desc` variables are also used in `parts/head.php`.
3. Create a folder in `css/` with the page's name. It should *exactly* match the folder name with index.php in it.
    - Create an index.scss file inside this new folder
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
    - Add your own partial scss files for your page next to index.scss and import them into index.scss, like the partials above (but without `../`). Every partial scss file should begin with an underscore to prevent node-sass from creating a separate css file with its name.
4. Next, add this boilerplate code to index.php:
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
                    <img class="logo" src="<?php echo $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="FVI School of Technology logo">
                </a>
                <h1 class="page-title">Page Title</h1>
            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="section-title">Section Title</h2>
                
                <!-- YOUR CONTENT HERE -->

            </div>
        </section>

        <section class="bg-gray">
            <div class="container">
                <h2 class="section-title">Section Title</h2>
                
                <!-- YOUR CONTENT HERE -->

            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="section-title">Section Title</h2>
                
                <!-- YOUR CONTENT HERE -->

            </div>
        </section>


        <?php include($rootPath . 'parts/footer.php') ?>
        <?php include($rootPath . 'parts/bottom.php') ?>
    </body>
    ```

5. JavaScripts are in the `js` folder. Webpack is used to bundle them into a single JS file, which is linked with a `<script>` element in `parts/bottom.php`
6. Components, like a testimonials section, a quotes section, and a student projects section, are available for use in the `parts/` folder. Just include them into your index.php file. 
    - *Note*: if you include one of the components from `parts/`, you must also import the associated `.scss` file into your page's index.scss file. For example, you need to `@import "../testimonials-slider"` into index.scss for your page if you have included `testimonials.php` in index.php.
7. Images are in the `images/` folder and videos are in the `videos/` folder. Use them in your index.php file with $rootPath:
    ```html
    <img src="<?php echo $rootPath ?>people/students-coding.jpg">
    ```
8. Update `sitemap.php` and `sitemap.xml` with the new page
