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
    <section class="mod cell small-12">
        <h1>Upcoming Meetings & Events</h1>
        <?php include 'modules/mod-section-events.php';?>
    </section>

    <!-- Membership Section (Mobile Only) -->
    <section class="mod cell small-12 hide-for-medium">
        <h1>Membership</h1>
        <?php

        include 'modules/mod-section-membership.php';
        ?>
    </section>

    <!-- Articles Section -->
    <section class="mod cell small-12">
        <h1>Latest Articles</h1>
        <?php include 'modules/mod-section-articles.php';?>
    </section>

    <!-- Publications Section (Mobile Only) -->
    <section class="mod cell small-12 hide-for-medium">
        <h1>Publications</h1>
        <?php include 'modules/mod-section-publications.php';?>
    </section>

    <!-- Further Reading Section -->
    <section class="mod cell small-12">
        <h1>Further Reading</h1>
        <?php include 'modules/mod-section-reading.php'; ?>
    </section>

    <!-- Current Projects Section (Mobile Only) -->
    <section class="mod cell small-12 hide-for-medium">
        <h1>Current Projects</h1>
        <div class="mod-section-textcell">
            <!-- East Perth Cemeteries -->
            <?php
            $cellTitle="East Perth Cemeteries";
            $cellText="The graves of East Perth Cemeteries are a record of the first 70 years of European migration to what is now Perth, Western Australia.";
            include 'modules/mod-section-textcell.php';
            ?>
            <!-- Perth Metro Plans Project -->
            <?php
            $cellTitle="Perth Metro Plans Project";
            $cellText="Digitising and geo-referencing Perth's historical Sewerage Plans to provide a fresh perspective on the past hundred years of metropolitan development.";
            include 'modules/mod-section-textcell.php';
            ?>
            <a href="#" class="button">View Projects</a>
        </div> <!-- end .mod-section-textcell -->
    </section>

</div> <!-- end .column-left -->


<!-- RIGHT COLUMN -->
<div class="column column-right cell show-for-medium medium-4">
    <!-- Membership Section -->
    <section class="mod cell medium-12 show-for-medium">
        <h1>Membership</h1>
        <?php include 'modules/mod-section-membership.php';?>
    </section>

    <!-- Publications Section -->
    <section class="mod cell medium-12 show-for-medium">
        <h1>Publications</h1>
        <div class="mod-section-publications">
            <!-- Australia's Last Convicts -->
            <?php
            $cellImg="https://placehold.it/300x400/999?text=Publication-IMG";
            $cellImgAlt="Australia's Last Convicts";
            $cellTitle="Australia's Last Convicts";
            $cellText="This publication contains 74 photographs of West Australian Convicts.";
            include 'modules/mod-section-img-textcell.php';
            ?>
            <!-- Convict Records of Western Australia -->
            <?php
            $cellImg="https://placehold.it/300x400/999?text=Publication-IMG";
            $cellImgAlt="Convict Records of Western Australia";
            $cellTitle="Convict Records of Western Australia";
            $cellText="Suggested steps for tracing convict records in Western Australia.";
            include 'modules/mod-section-img-textcell.php';
            ?>
        <a href="#" class="button">View Publications</a>
        </div> <!-- end .mod-section-publications -->
    </section>

    <!-- Current Projects Section -->
    <section class="mod cell medium-12 show-for-medium">
        <h1>Current Projects</h1>
        <div class="mod-section-textcell">
            <!-- East Perth Cemeteries -->
            <?php
            $cellTitle="East Perth Cemeteries";
            $cellText="The graves of East Perth Cemeteries are a record of the first 70 years of European migration to what is now Perth, Western Australia.";
            include 'modules/mod-section-textcell.php';
            ?>
        </div>
        <div class="mod-section-textcell">
            <!-- Perth Metro Plans Project -->
            <?php
            $cellTitle="Perth Metro Plans Project";
            $cellText="Digitising and geo-referencing Perth's historical Sewerage Plans to provide a fresh perspective on the past hundred years of metropolitan development.";
            include 'modules/mod-section-textcell.php';
            ?>
            <a href="#" class="button">View Projects</a>
        </div> <!-- end .mod-section-textcell -->
    </section>

</div> <!-- end .column-right -->
</main>

<!-- FOOTER -->
<?php include 'templates/footer.php';?>