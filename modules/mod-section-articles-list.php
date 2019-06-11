<div class="mod-section-articlelist-cell cell small-12">
    <div class="mod-section-articlelist-img img-styling">
        <?php echo "<a href='$cellHref'><img src='$cellImg' alt='$cellImgAlt'></a>"; ?>
    </div> <!-- end .mod-section-articlelist-img -->
    <div class="mod-section-articlelist-cell-txt">
        <h2><?php echo "<a href='$cellHref'>" . $cellTitle;?></a></h2>
        <p><span><?php echo $cellAuthor . " | " . $cellDate;?></span></p>
        <p>
            <?php echo $cellText;?>
            <br>
            <?php echo "<a href='$cellHref' class='readmore'>"; ?>Read more <i class="fas fa-arrow-right fa-sm"></i></a> |
            <?php echo "<a href='$cellDownload' class='readmore'>"; ?>Download PDF <i class="far fa-arrow-alt-circle-down fa-lg"></i></a>
        </p>
    </div> <!-- end .mod-section-articlelist-cell-txt -->
</div> <!-- end .mod-section-articlelist-cell -->