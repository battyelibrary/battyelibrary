<div class="mod-section-event">
    <h2><?php echo $eventName;?></h2>
    <table class="mod-section-event-table">
        <tr>
            <th>Date</th>
            <td><?php echo $eventDate;?></td>
        </tr>
        <tr>
            <th>Time</th>
            <td><?php echo $eventTime;?></td>
        </tr>
        <tr>
            <th>Location</th>
            <td>
            <address>
                <?php echo $eventLoc;?>
            </address>
            </td>
        </tr>
        <tr>
            <th class="mod-section-event-table-info">Info</th>
            <td class="mod-section-event-table-info">
                <b>Topic:</b> <?php echo $eventName;?>
                <br><b>Speaker:</b> <?php echo $eventSpeaker;?>
                <p><?php echo $eventDesc;?></p>
            </td>
        </tr>
    </table> <!-- end .mod-section-event-table -->
</div> <!-- end .mod-section-event -->