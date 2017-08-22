<div class="event">
    <a class="event-image" title="<?php echo $title ?>" href="<?php echo $url ?>">
        <img src="<?php echo $rootPath . $imageUrl ?>" alt="<?php echo $title ?>">
    </a>
    <div class="event-text">
        <a class="event-title" href="<?php echo $url ?>"><?php echo $title ?></a>
        <div class="event-description">
            <?php echo $description ?>
        </div>
    </div>
    <div class="event-info">
        <p class="date">
            <?php echo $eventDate ?>
        </p>
        <time class="start-time" datetime=""><?php echo $startTime ?></time> - <time class="end-time" datetime=""><?php echo $endTime ?></time>
        <address class="location">
            <?php echo $location ?>
        </address>
        <div class="links"></div>
    </div>
</div>