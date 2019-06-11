<div class="mod-section-sb-imgtxt-cell">
    <div class="mod-section-sb-imgtxt-cell-img img-styling">
        <?php echo "<img src='$cellImg' alt='$cellImgAlt'>"; ?>
    </div> <!-- end .mod-sb-imgtxt-cell-img -->
    <div class="mod-section-sb-imgtxt-txt">
        <h2><?php echo "<a href='$cellHref'>" . $cellTitle;?></a></h2>
        <p>
            <?php echo $cellText;?>
            <?php echo "<br><a href='$cellHref' class='readmore'>"; ?>Read more <i class="fas fa-arrow-right fa-sm"></i></a>
        </p>
    </div> <!-- mod-sb-imgtxt-txt -->
</div> <!-- end mod-sb-imgtxt-cell -->
