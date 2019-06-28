<!-- HEAD & HEADER -->
<?php 
$pageTitle ="About";
include 'templates/header.php';?>

<main class="grid-x">
<!-- ABOUT -->
    <!-- LEFT COLUMN -->
    <div class="column column-left cell small-12 medium-8">
        <!-- History -->
        <section class="mod cell small-12" id="history">
            <h1>History</h1>
            <p>Collecting of Western Australian historical archival records started in 1894. In 1956, the Battye Library became a separate entity and was named after the first librarian, James Sykes Battye. Both government and private material was collected dating from 17th century journey of exploration.</p>
            <p>In 1988, the records of government were transferred to the State Archives, renamed the Public Records Office in 1995. It was separated from the State Library in 1999 and became the State Records Office (SRO). Under the State Records Act, SRO is responsible for Managing, preserving and providing access to the archives of state and local governments.</p>
        </section>

        <!-- Aims & Goals -->
        <section class="mod cell small-12" id="aims-goals">
            <h1>Aims & Goals</h1>
            <p>The Friends of Battye Library aims are to assist with the acquisition, preservation and use of archival and documentary material by:</p>
                <ul>
                    <li>Promoting the Battye Library and the State Records office in the wider community.</li>
                    <li>Sharing research based on the collections through lectures and talks.</li>
                    <li>Helping with identifying, acquiring and preserving historical records.</li>
                    <li>Sponsoring voluntary assistance with indexing of materials in the collections.</li>
                    <li>Raising funds for selected projects.</li>
                    <li>Supporting the publication of guides to make collections more accessible.</li>
                </ul>

            <p>The Battye Library collects and makes available all forms of original documents and publications. Included are:</p>
                <ul>
                    <li>Private archives (family and business)</li>
                    <li>Letters and diaries</li>
                    <li>Books</li>
                    <li>Newspapers and periodicals</li>
                    <li>Maps</li>
                    <li>Photographs</li>
                    <li>Ephemera</li>
                    <li>Oral histories</li>
                    <li>Electronic publications</li>
                    <li>Films, videotapes, and DVDs</li>
                </ul>
        </section> <!-- end -->
    </div> <!-- end .column-left -->
    
    <!-- RIGHT COLUMN -->
    <div class="column column-right cell show-for-medium medium-4">
        <!-- Membership -->
        <section class="mod cell medium-12 show-for-medium">
            <h1>Membership</h1>
            <?php include 'modules/mod-section-membership.php';?>
        </section>
    </div> <!-- end .column-right -->

    <!-- Committee -->
    <section class="mod mod-section-committee-about cell small-12" id="committee">
        <?php
        $fwTxt ="
            <div class='grid-x'>
                <div class='cell small-12'>
                    <h1>Committee</h1>
                </div>
                <div class='cell small-6'>
                    <h2>Patron</h2>
                    <p>Mrs Ruth Reid AM</p>
                    <h2>Committee</h2>
                        <h3>President</h3>
                        <p>Dr Pamela Statham Drew</p>

                        <h3>Vice President</h3>
                        <p>Gilliam O'Mara</p>

                        <h3>Secretary</h3>
                        <p>Heather Campbell</p>

                        <h3>Treasurer</h3>
                        <p>Nick Drew</p>

                        <h3>Membership</h3>
                        <p>Cherie Strickland</p>
                </div>

                <div class='cell small-6'>
                    <h2>Committee Members</h2>
                    <p>Kris Bizacca; Jennie Carter;
                    <br>Lorraine Clarke; Neil Foley;
                    <br>Robert O'Connor QC;
                    <br>Cherie Strickland</p>

                    <h2>Ex-Officio</h2>
                        <h3>CEO and State Librarian</h3>
                        <p>Margaret Allen</p>

                        <h3>State Archivist, State Records Office</h3>
                        <p>Cathrin Cassarchis</p>

                        <h3>Battye Historian</h3>
                        <p>Dr Susanna Luliano</p>

                </div>
            </div>
            ";
        $fwImgMob = "https://placehold.it/450x250/999?text=Committee-IMG";
        $fwImg ="https://placehold.it/300x350/999?text=Committee-IMG";
        $fwImgAlt = "Friends of Battye Library committee members";
        include 'modules/mod-section-fw.php';
        ?>
    </section> <!-- end .mod-section-committee-about -->

    <!-- Contact -->
    <section class="mod cell small-12" id="contact">
        <h1>Contact Us</h1>
        <div class="mod-section-contact grid-x">
                <!-- FORM LEFT COLUMN -->
                <div class="column column-left cell small-12 large-6">
                    <form action="" class="contactform mod-section-contact-form">
                        <label for="contact-name">
                            <input type="text" name="name" id="contact-name" placeholder="Full name" required aria-required=”true”>
                        </label>
                        <label for="contact-email">
                            <input type="email" name="email" id="contact-email" placeholder="Email address" required aria-required=”true”>
                        </label>
                        <label for="contact-subject">
                            <input type="text" name="subject" id="contact-subject" placeholder="Subject" required aria-required=”true”>
                        </label>
                        <label for="contact-message">
                            <textarea name="message" id="contact-message" rows="7" placeholder="Your query"></textarea>
                        </label>
                        <input type="button" class="button" value="submit">
                    </form>
                </div> <!-- end .column-left -->

            <!-- FORM RIGHT COLUMN -->
            <div class="column column-right cell small-12 large-6">
                <div class="mod-section-contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.445177295215!2d115.85837631457962!3d-31.94881742940198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32bad1237130a5%3A0x28ca68bd4039725f!2sAlexander+Library+Building%2C+Perth+WA+6000!5e0!3m2!1sen!2sau!4v1560129414163!5m2!1sen!2sau" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div> <!-- end .grid-x -->
    </section>
</main>
<?php include 'templates/footer.php'?>