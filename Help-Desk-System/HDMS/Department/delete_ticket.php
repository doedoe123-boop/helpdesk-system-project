<?php


if ($_POST['key'] == 'deleteRow') {
    $conn->query("DELETE FROM hdms_tickets WHERE id='$ticket_id'");
    exit('faqs Has Been Deleted!');
}