<div class="mod-section-articles-cell cell small-12 medium-6">
    <div class="mod-section-articles-cell-img img-styling">
        <?php echo "<a href='$cellHref'><img src='$cellImg' alt='$cellImgAlt'></a>"; ?>
    </div> <!-- end .mod-articles-cell-img -->
    <div class="mod-section-articles-cell-txt">
        <h2><?php echo "<a href='$cellHref'>" . $cellTitle;?></a></h2>
        <p>
            <?php echo $cellText;?>
            <br><?php echo "<a href='$cellHref' class='readmore'>"; ?>Read more <i class="fas fa-arrow-right fa-sm"></i></a>
        </p>
    </div> <!-- end .mod-section-articles-cell-txt -->
</div> <!-- mod-sectino-articles-cell -->