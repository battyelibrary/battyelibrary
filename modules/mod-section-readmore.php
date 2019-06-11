    <div class="mod-section-readmore-cell grid-x">
        <div class="mod-section-readmore-cell-img img-styling cell small-3">
            <?php echo "<a href='$readMoreHref'><img src='$readMoreImg' alt='$readMoreImgAlt'></a>"; ?>
        </div> <!-- end .mod-section-readmore-cell-img -->
        <div class="mod-section-readmore-cell-txt cell small-9">
            <h2><?php echo "<a href='$readMoreHref'>" . $readMoreHeader;?></a></h2>
            <p><?php echo $readMoreAuthor . " | " . $readMoreDate; ?></p>
        </div>
    </div> <!-- end .mod-section-readmore-cell -->