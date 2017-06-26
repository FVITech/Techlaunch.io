<section class="testimonials <?php echo $classes ?>">
    <div class="carousel">
        <div id="left-btn" class="left-btn">‹</div>
        <div id="right-btn" class="right-btn">›</div>
        <div class="dots"></div>

        <?php
            foreach($testimonials as $testimonial) {
                include("$testimonial.php");
            }
        ?>

    </div>
</section>
