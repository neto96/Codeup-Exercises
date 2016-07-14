<?php

function parseContacts($filename)
{
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));   
    fclose($handle);
    $contacts = explode("\n", trim($contents));
    $contactsArray = [];
    foreach ($contacts as $contact) {
    	$excontacts = explode("|", $contact);
    	$number = substr($excontacts[1], 0, 3) . "-" . substr($excontacts[1], 3, 3) . "-" . substr($excontacts[1], 6);
    	$contactsArray[] = [
    	'Name' => $excontacts[0],
    	'Number' => $number,
    	];
    $contacts = $contactsArray;
    }
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
