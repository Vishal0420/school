<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php
        $itemCount = 0; // Track the item count for active class
       
       foreach($banners as $banner) 
       #print_R($banner);die;
            // Check if the image path is valid and not numeric
            if (!empty($banner->banner) && !is_numeric($banner->banner)) {
                $itemCount++; // Increment item count for active class

                // Determine the active class for the first item
                $activeClass = ($itemCount == 1) ? 'active' : '';
        ?>
                <div class="item <?= $activeClass ?>">
                    <img src="<?= $banner->banner; ?>" alt="Slide <?= $itemCount ?>">
                </div>
        <?php
            }
        
        ?>
    </div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for ($i = 0; $i < $itemCount; $i++) : ?>
            <li data-target="#myCarousel" data-slide-to="<?= $i ?>" <?= ($i == 0) ? 'class="active"' : '' ?>></li>
        <?php endfor; ?>
    </ol>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <i class="las la-angle-left"></i>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <i class="las la-angle-right"></i>
    </a>
</div>

<script>
    // Handle carousel indicator clicks
    $('#myCarousel ol.carousel-indicators li').on('click', function () {
        var slideTo = $(this).data('slide-to');
        $('#myCarousel').carousel(slideTo);
    });
</script>
