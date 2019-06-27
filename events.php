<?php 
$pageTitle ="Events";
include 'templates/header.php';?>
<main class="grid-x">
    <!-- LEFT COLUMN -->
    <div class="column column-left cell small-12 medium-8">
        <h1>Upcoming Meetings & Events</h1>
        <section class="mod cell small-12">
            <?php
                $eventName="Effects of 1914 - 1918 War";
                $eventDate="13 March 2019";
                $eventTime="5:00pm";
                $eventLoc="Great Southern Room,
                <br>4th Floor - State Library of Western Australia";
                $eventSpeaker="Andrew Greene";
                $eventDesc="After the meeting, members and guests are invited to join us for dinner at a local restaurant.";
                include 'modules/mod-section-events.php';
            ?>
            <div class="mod-section-event-container">
                <ul class="accordion mod-section-event-accordion" data-accordion data-allow-all-closed="true">
                <!-- David Whiteford -->
                <li class="accordion-item mod-section-event-accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title mod-section-event-accordion-title">Event Information</a>
                    <div class="accordion-content mod-section-event-accordion-content" data-tab-content>
                        <p>The year 1882 was when police were introduced into the Kimberley and 1905 was the year Dr Walter Roth submitted the ‘Royal Commission on the Condition of the Natives’ – the first public enquiry into the workings of the WA police system since the establishment of the Swan River colony in 1829. This report generated national and international headlines with Roth infamously calling the police and criminal justice system in the Kimberley ‘a brutal and outrageous condition of Affairs.’ Dr Owen will detail the value of the Battye Library and the SROWA collection in the research for this book.</p>
                        <h3>About the Speaker</h3>
                        <p>Dr. Chris Owen is currently the Battye Historian at the State Library of Western Australia and an Honorary Research Fellow in the School of History at the University of Western Australia. He has been researching Aboriginal history for over twenty years, and his published articles have earned him research and archive awards. His research interests, utilising primarily archival state records, include colonial policing (specifically the Kimberley), Aboriginal policy and governmental administration and the social conditions at the frontiers of colonisation in Western Australia. He lives in Perth, Western Australia with his wife and twin daughters.</p>
                        <p>After the meeting, members are welcome to join us for a meal at a nearby Perth restaurant. Bookings will be taken on the night.</p>
                    </div>
                </li>
            </ul> <!-- end .mod-section-event-accordion -->
            </div>
            <a href="#" class="button">Register for this Event</a>
        </section>

        <section class="mod cell small-12">
            <?php
                $eventName="History of Kimberley Policing";
                $eventDate="09 July 2019";
                $eventTime="5:00pm";
                $eventLoc="Great Southern Room,
                <br>4th Floor - State Library of Western Australia";
                $eventSpeaker="Dr Chris Owen";
                $eventDesc="<p>Acting Battye Historian Dr Chris Owen will talk about his history of Kimberley Policing as detailed in 'Every Mother's Son is Guilty: Policing the Kimberley Frontier of Western Australia 1882-1905.' UWAP, 2016.</p>";
                include 'modules/mod-section-events.php';
            ?>
            <div class="mod-section-event-container">
                <ul class="accordion mod-section-event-accordion" data-accordion data-allow-all-closed="true">
                <!-- David Whiteford -->
                <li class="accordion-item mod-section-event-accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title mod-section-event-accordion-title">Event Information</a>
                    <div class="accordion-content mod-section-event-accordion-content" data-tab-content>
                        <p>The year 1882 was when police were introduced into the Kimberley and 1905 was the year Dr Walter Roth submitted the ‘Royal Commission on the Condition of the Natives’ – the first public enquiry into the workings of the WA police system since the establishment of the Swan River colony in 1829. This report generated national and international headlines with Roth infamously calling the police and criminal justice system in the Kimberley ‘a brutal and outrageous condition of Affairs.’ Dr Owen will detail the value of the Battye Library and the SROWA collection in the research for this book.</p>
                        <h3>About the Speaker</h3>
                        <p>Dr. Chris Owen is currently the Battye Historian at the State Library of Western Australia and an Honorary Research Fellow in the School of History at the University of Western Australia. He has been researching Aboriginal history for over twenty years, and his published articles have earned him research and archive awards. His research interests, utilising primarily archival state records, include colonial policing (specifically the Kimberley), Aboriginal policy and governmental administration and the social conditions at the frontiers of colonisation in Western Australia. He lives in Perth, Western Australia with his wife and twin daughters.</p>
                        <p>After the meeting, members are welcome to join us for a meal at a nearby Perth restaurant. Bookings will be taken on the night.</p>
                    </div>
                </li>
            </ul> <!-- end .mod-section-event-accordion -->
            </div>
            <a href="#" class="button">Register for this Event</a>
        </section>

    </div> <!-- end .column-left -->


    <!-- RIGHT COLUMN -->
    <div class="column column-right cell show-for-medium medium-4">
        <section>
            <h1>Heading</h1>
            <p>Lorem Ipsum</p>
        </section>
    </div> <!-- end .column-right -->
</main>
<?php include 'templates/footer.php';?>