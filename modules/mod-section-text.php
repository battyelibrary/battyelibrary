<div class="mod-section-text grid-x">
    <div class="mod-section-text-img img-styling cell small-12">
        <?php echo "<img src='$articleImg' alt='$articleImgAlt'>"; ?>
    </div> <!-- end .mod-section-text-img -->

    <div class="mod-section-text-info cell small-12">
        <h1><?php echo $articleHeading; ?></h1>
        <p class="p-info"><?php echo $articleAuthor . " | " . $articleDate; ?></p>
        <p class="p-desc"><?php echo $articleDesc; ?></p>
    </div> <!-- end .mod-section-text-info -->

    <div class="mod-section-text-content cell small-12">
        <?php echo $articleContent; ?>
    </div> <!-- end .mod-section-text-content -->

    <div class="mod-section-txt-download cell small-12">
        <a href="#" class="readmore">Download PDF <i class="far fa-arrow-alt-circle-down fa-lg"></i></a>
    </div>
</div>