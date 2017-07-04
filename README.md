# _Address Book_

#### _Use twig and silex to create an address book, June 30, 2017_

#### By _**Brittany Kerr**_

## Description

_The web app is a practice in using Twig and Silex for object-oriented PHP. The user can enter a contact; store, retrieve and delete it._

## Setup/Installation Requirements

* Ensure that the following programs are downloaded to your computer:
  * [MAMP](https://www.mamp.info/en/) for Windows or MacOS
  * [PHP](https://secure.php.net/)
  * [Composer](https://getcomposer.org/)
* Sign into github and copy repository: https://github.com/kerrbrittany9/directorio.git
* From your local console:
  * Enter Desktop by typing "cd Desktop"
  * Type "git clone [add above URL]".
  * Type "cd directorio" to enter directory.
  * Download dependencies by typing "composer install"
  * To view webpage from browser type "cd web" and then "php -S localhost:8000" to start server.
  * In browser, type "localhost:8000" to view home page.

## Specifications

```
Behavior: User visits homepage
  * Input: User fills out contact information form and clicks 'add contact' button.
  * Output: User is brought to 'contact' page with their info on display
    ```
    Contact: John Doe  367-5309 123 Ave
```
Behavior: User makes contact.
  * Input: User clicks 'home' button on 'contact' page.
  * Output: User is brought back to homepage where their info is stored with others in the address book.
```
    Address Book: * John Doe, 367-5309, 123 Ave
                  * Mary Contrary 122-1233 234 Blvd
```
Behavior: User deletes contacts.
  * Input: User clicks 'clear contacts' button on homepage.
  * Output: User is brought to verification page.
  ```
      'address book cleared' appears on page
```
Behavior: User returns to homepage.
  * Input: User clicks on 'home' button at the bottom of delete verification page.
  * Output: User is brought back to homepage with blank form and and no contacts in address book.
  ```

## Technologies Used

_PHP, Silex, Twig_

### License


Copyright (c) 2017 **_Brittany Kerr_**
