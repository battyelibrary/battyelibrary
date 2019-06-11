<div class="mod-section-articlelist-cell cell small-12">
    <div class="mod-section-articlelist-img img-styling">
        <?php echo "<a href='$cellHref'><img src='$cellImg' alt='$cellImgAlt'></a>"; ?>
    </div> <!-- end .mod-section-articlelist-img -->
    <div class="mod-section-articlelist-cell-txt">
        <h2><?php echo "<a href='$cellHref'>" . $cellTitle;?></a></h2>
        <p>
            <?php echo $cellText;?>
            <br>
            <?php echo "<a href='$cellHref' class='readmore'>"; ?>Read more <i class="fas fa-arrow-right fa-sm"></i></a>
        </p>
    </div> <!-- end .mod-section-articlelist-cell-txt -->
</div> <!-- end .mod-section-articlelist-cell -->