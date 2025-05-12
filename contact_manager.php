<?php
$name_01 = "";
$phonenumber_01 = "";

$name_02 = "";
$phonenumber_02 = "";

while (true) {
    echo "\n------Basic Contact Management App------\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Please select an option: ";
    $option = trim(fgets(STDIN));
    switch ($option) {
        case 1:
            if ($name_01 != "" && $name_02 != "") {
                echo "Contact list is full.\n";
                break;
            };
            if ($name_01 == "") {
                echo "Adding first contact.\n";
            } elseif ($name_02 == "") {
                echo "Adding second contact.\n";
            }
            echo "Enter name: ";
            $name = trim(fgets(STDIN));
            echo "Enter phone number: ";
            $phonenumber = trim(fgets(STDIN));
            if ($name_01 == "") {
                echo "Contact 1 added.\n";
                $name_01 = $name;
                $phonenumber_01 = $phonenumber;
            } else {
                echo "Contact 2 added.\n";
                $name_02 = $name;
                $phonenumber_02 = $phonenumber;
            }
            break;
        case 2:
            echo "\nContacts:\n";
            if ($name_01 != "") {
                echo "1. Name: $name_01, Phone Number: $phonenumber_01\n";
            }
            if ($name_02 != "") {
                echo "2. Name: $name_02, Phone Number: $phonenumber_02\n";
            }
            if ($name_01 == "" && $name_02 == "") {
                echo "No contacts available.\n";
            }
            break;
        case 3:
            exit("Exiting the app.\n");
        default:
            echo "Invalid option. Please try again.\n";
    }
}
