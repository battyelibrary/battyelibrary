<?php 
$pageTitle ="Projects";
include 'templates/header.php';?>
<main class="grid-x">
    <!-- East Perth Cemeteries -->
    <section class="mod mod-section-project cell small-12">
        <?php
            $fwTxt ="<h1>East Perth Cemeteries</h1>
            <p>Thanks to a grant from Lotterywest we are finally able to repair the East Perth Cemeteries website that was hacked, making it very hard to use. With these funds we are able to redesign the website and using the latest technology add many new exciting elements.</p>
            <h2>Aim of the Project:</h2>
            <p>To revitalize the appearance and impression of the website. To facilitate this unique understanding of the history of the East Perth Cemeteries and the colonists who are buried there, the new website will include an integrated mapping function using the latest GPS technology.</p>
            <p>This geospatial technology would also benefit family and local historians, enabling them to make the most of opening times of the cemeteries.</p>
            <p>They will have the ability to 'map out' the resting place of their ancestors before they visit the cemeteries. This technology would also benefit the volunteers at the cemeteries, who will be trained on how to show members of the public this mapping function on their 'smart' devices. If a visitor to the cemeteries wishes they will have the ability to follow a path around the cemeteries on their handheld devices, with each tagged headstone containing information from the database in summary format. The website will be designed to have the capability to integrate audio visual material, so the user can listen to oral histories about those buried within the cemeteries.</p>
            <h2>Other features which will be included are:</h2>
            <p><b>Map overlay components</b> enabling visitors to look at the cemeteries overtime through the click of a button.The long-term view of this is to have a touch screen located at St Bartholomew's giving visitors a unique insight into the history and heritage of the East Perth Cemeteries site.</p>
            <p><b>ECommerce</b> - The ability to purchase high resolution images of the headstone together with certificates on the pioneers.</p>
            <p><b>Conservation and restoration guides</b>, as well as the ability to 'adopt a grave', providing funding to the restoration of a specified headstone by members of the community.</p>
            <p><b>Calendar of Events</b>, as well as venue hire information.</p>";
            $fwImgMob = "https://placehold.it/450x250/999?text=Project-IMG";
            $fwImg ="https://placehold.it/300x350/999?text=Project-IMG";
            $fwImgAlt = "Portrait of J. S. Battye";
            include 'modules/mod-section-fw.php';
        ?>
    </section>
    <!-- -->
    <section class="mod mod-section-project cell small-12">
        <?php
            $fwTxt ="<h1>Perth Metro Plan Project - State Records Office of WA</h1>
            <p>The State Records Office has been digitising and geo-referencing Perth's historical Sewerage Plans to provide a fresh perspective on the past hundred years of metropolitan development. Thanks to this new initiative, architects, town planners, home owners and general researchers will be able to approach the information in these plans - which document the growth of the city and often lost parts of Perth - from a completely different angle.</p>
            <p><a href='http://www.sro.wa.gov.au/blogs/perth-metro-plans-project'>Read more about this project on the SRO website.</a></p>";
            $fwImgMob = "https://placehold.it/450x250/999?text=Project-IMG";
            $fwImg ="https://placehold.it/300x350/999?text=Project-IMG";
            $fwImgAlt = "Portrait of J. S. Battye";
            include 'modules/mod-section-fw.php';
        ?>
    </section>
</main>
<?php include 'templates/footer.php';?>