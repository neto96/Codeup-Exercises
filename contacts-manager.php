<?php

function showMenu ($message, $default = true) {
	if ($default) {
		return "1.View contacts\n2.Add a new contact\n3.Search a contact by name\n4.Delete an existing contact\n5.Exit\n$message ";
	} else {
		return $message;
	}
}
function contactsFile ($action) {
	$filename = 'contacts.txt';
	$handle = fopen($filename, $action);
	$showContacts = fread($handle, filesize($filename));
	if ($action == "r") {
			return $showContacts . PHP_EOL;
		} elseif ($action == "a") {
			echo "Please enter name of new contact: ";
			$newName = trim(fgets(STDIN));
			echo "Please enter phone number for $newName: ";
			$newNumber = trim(fgets(STDIN));
			fwrite($handle, "$newName|$newNumber");
		} elseif ($action == "w") {
			echo "Name of person you want do delete: ";
			$deleteName = trim(fgets(STDIN));
		}
	fclose($handle);
}

function parseContacts($filename)
{
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	fclose($handle);
	$contacts = explode("\n", trim($contents));
	$contactsArray = [];
	foreach ($contacts as $contact) {
		$exContacts = explode("|", $contact);
		if (strlen($exContacts[1]) == 10) {
			$number = substr($exContacts[1], 0, 3) . "-" . substr($exContacts[1], 3, 3) . "-" . substr($exContacts[1], 6);
		} else {
			$number = substr($exContacts[1], 0, 3) . "-" . substr($exContacts[1], 3);
		}
		$contactsArray[] = [
			'name' => $exContacts[0],
			'number' => $number,
		];
		$contacts = $contactsArray;
	}
	return $contacts;
}
//$allContacts = parseContacts('contacts.txt');

function searchContact($name) {
	$contacts = parseContacts('contacts.txt');
	$filtered = [];
	foreach ($contacts as $contact) {
		if (strpos($contact['name'], $name) !== false) {
			$filtered[] = implode(" | ", $contact);
		} else {
			return "That contact does not exist";
		}
	}
	return $filtered[0];
}
function deleteContact($sacrifice) {

}

do {
	echo showMenu("Enter an option (1, 2, 3, 4 or 5): ");
	$option = trim(fgets(STDIN));
	switch ($option) {
		case 1:
			echo "Name | Phone number\n---------------\n";
			echo contactsFile('r');
			break;
		case 2:
			echo contactsFile('a');
			break;
		case 3:
			echo "Enter full name of contact: ";
			$searchQuery = trim(fgets(STDOUT));
			echo searchContact($searchQuery) . PHP_EOL;
			break;
		case 4:
//			contactsFile('w');
			break;
		case 5:
			echo "Goodbye!\n";
			break;
		default:
			echo "----------------WARNING--------------\n";
			echo showMenu("PLEASE CHOOSE ONLY 1, 2, 3, 4 or 5!\n", false);
			break;
	}
} while ($option != 5);