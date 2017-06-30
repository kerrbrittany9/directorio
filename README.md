# _Address Book_

#### _Use twig and silex to create an address book, June 30, 2017_

#### By _**Brittany Kerr**_

## Description

_The web app is a practice in using Twig and Silex for object-oriented PHP. The user can enter a contact; store, retrieve and delete it._

## Setup/Installation Requirements

* _Sign into github and copy URL_
* _Enter your local console and type command "git clone [add URL]"_
* _Enter the folder from your Desktop by typing "cd /Desktop/address-PHP" into console_
* _Type "atom . " to open and view code from local terminal_
* _To connect with browser enter web folder by typing "cd web" in console. Type "php -S localhost:8000"_
* _In browser, type "localhost:8000" to view home page._

## Specs

* User inputs contact information and is sent to a 'Contact' page with information listed as an individual contact:
    * Input: Name: John Doe, Phone: 367-5309, Address: 123 Ave_ on form
    * Output: Contact: John Doe 367-530 123 Ave
* User can click on 'home' button from create_contact page to view all contacts.
    * Input: click 'home'
    * Output:   address book:   
            * John Doe   
            367-5309  
            123 Ave
            * Mary Contrary
            122-1233
            234 Blvd
* User can click 'clear contacts' on home page to clear all contacts and bring them to a verification page.
    * Input: click 'clear contacts'
    * Output: /delete_contacts page states 'address book cleared'

## Known Bugs

_Web app cannot identify an empty contact, therefore the empty contact warning is not given._

## Technologies Used

_PHP, Silex, Twig_

### License


Copyright (c) 2017 **_Brittany Kerr_**
