#######################################
Admin Dashboard To View and Fetch Files
#######################################


The system allows two entities namely, Super Admin and Associate to upload and view files uploaded into a database through the dashboard.
In building the system i employed the use of an MVC architecture, by using codeigniter frame work. 
- The system allows 'PDF' file upload.
- An authorized user of the system logs into the syetem.
- To upload a file the user enters the file title and selects the file to upload 'PDF'.
- The file is then ENCRYPTED and saved into the database.
- Also the user who uploaded the file is tired to that operation.
- Users can reset passwords.
- Super admins can create more user(Associates), activate or deactivate their accounts.

************
Installation
************
To use this web application, follow these steps:
- Clone this repository to your local machine or server.
- Import testassessment (1).sql to the server.
- Edit the Application>config>database.php:
    'username' => 'Your username',
    'password' => 'Your password',
    'database' => 'testassessment',
- Use the url to the root directory to start the application.

*****
Usage
*****

Once you have the web application running, enter your email and password.
- email: admin@admin.com
- password: 1234


*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.