<!-- HEAD & HEADER -->
<?php 
$pageTitle ="Home";
include 'templates/header.php';?>

<main class="grid-x">
<!-- ABOUT -->
    <!-- About Section -->
    <section class="mod mod-section-about cell small-12">
        <?php
        $fwTxt ="<p><b>The Friends of Battye Library (Inc.)</b> was inaugurated on the 6th of July 1981 to support the J. S. Battye Library of West Australian History and the State Archives (now known as the State Records Office of Western Australia).</p>
        <p>Sir Paul Hasluck was the Friends of Battye Library's first President and since then many distinguished historians, researchers and philanthropists have accepted the role of President and Patron of the organisation.</p>
        <p>Our aims are to assist with the acquisition, preservation and use of archival and documentary materials.</p>";
        $fwImgMob = "https://placehold.it/450x250/999?text=About-IMG";
        $fwImg ="https://placehold.it/300x350/999?text=About-IMG";
        $fwImgAlt = "Portrait of J. S. Battye";
        include 'modules/mod-section-fw.php';
        ?>
    </section>


<!-- LEFT COLUMN -->
<div class="column column-left cell small-12 medium-8">
    <!-- Meetings Section -->
    <section class="mod mod-section-event-index cell small-12">
        <?php include 'modules/mod-section-events.php';?>
    </section> <!-- end .mod-section-event-index -->

    <!-- Membership Section (Mobile Only) -->
    <section class="mod mod-section-member-index cell small-12 hide-for-medium">
        <?php

        include 'modules/mod-section-membership.php';
        ?>
    </section> <!-- end .mod-section-member-index -->

    <!-- Articles Section -->
    <section class="mod mod-section-articles-index cell small-12">
        <?php
        
        include 'modules/mod-section-articles.php';
        ?>
    </section> <!-- end .mod-section-articles-index -->

    <!-- Publications Section (Mobile Only) -->
    <section class="mod mod-section-publication-index cell small-12 hide-for-medium">
        <?php
        
        include 'modules/mod-section-publications.php';
        ?>
    </section> <!-- end .mod-section-publication-index -->

    <!-- Further Reading Section -->
    <section class="mod mod-section-reading-index cell small-12">
        <?php

        include 'modules/mod-section-reading.php';
        ?>
    </section> <!-- end .mod-section-reading-index -->

    <!-- Current Projects Section (Mobile Only) -->
    <section class="mod mod-section-projects-index cell small-12 hide-for-medium">
        <?php
        
        include 'modules/mod-section-projects.php';
        ?>
    </section> <!-- end .mod-section-projects-index -->

</div> <!-- end .column-left -->


<!-- RIGHT COLUMN -->
<div class="column column-right cell show-for-medium medium-4">
    <!-- Membership Section -->
    <section class="mod mod-section-member-index cell medium-12 show-for-medium">
        <?php
        
        include 'modules/mod-section-membership.php';
        ?>
    </section> <!-- end .mod-section-member-index -->

    <!-- Publications Section -->
    <section class="mod mod-section-publication-index cell medium-12 show-for-medium">
        <?php
        
        include 'modules/mod-section-publications.php';
        ?>
    </section> <!-- end .mod-section-publication-index -->

    <!-- Current Projects Section -->
    <section class="mod mod-section-projects-index cell medium-12 show-for-medium">
        <?php
        
        include 'modules/mod-section-projects.php';
        ?>
    </section> <!-- end .mod-section-projects-index -->

</div> <!-- end .column-right -->
</main>

<!-- FOOTER -->
<?php include 'templates/footer.php';?>