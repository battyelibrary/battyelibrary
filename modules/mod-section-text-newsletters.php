<div class="mod-section-text grid-x">
    <div class="mod-section-text-img img-styling cell small-12">
        <?php echo "<img src='$newsletterImg' alt='$newsletterImgAlt'>"; ?>
    </div> <!-- end .mod-section-text-img -->

    <div class="mod-section-text-info cell small-12">
        <h1><?php echo $newsletterHeading; ?></h1>
        <p class="p-info"><?php echo $newsletterEditor . " | " . $newsletterDate; ?></p>
    </div> <!-- end .mod-section-text-info -->

    <div class="mod-section-text-content cell small-12">
        <?php echo $newsletterContent; ?>
    </div> <!-- end .mod-section-text-content -->

</div> <!-- end .mod-section-text -->