# Guvi_Round2

Frontend:
The frontend of my login,register website is built using HTML5, CSS, JavaScript, and Bootstrap.
Utilizing Bootstrap framework, my website is responsive and works seamlessly across various devices and screen sizes.
JavaScript is used to enhance user interaction by providing dynamic content and features.

Backend:
The backend functionalities are powered by AJAX, jQuery, and PHP.
AJAX is used to facilitate asynchronous communication between the client and server, enabling dynamic content loading without page refresh,
and also performs user Authentication.
jQuery simplifies DOM manipulation and event handling, enhancing the user experience.
PHP is employed for server-side scripting, processing data,and interacting with the database.

Database:
My website utilizes multiple databases to store and manage data effectively:
MySQL: MySQL is used for storing the login details "email" and "password".
MongoDB: MongoDB serves as a NoSQL database,which used to store the profile details for the user who is registered
Redis: Redis used to store the data when the user logs in for the first time and after the user logout and login again it fetch from the Redis cache memory
LocalStorage: LocalStorage is employed for client-side data storage, which stores the data on local until the user login session ends

XAMPP Server:
We rely on XAMPP server to host our website locally during development and testing,
which includes MySQL server, enabling seamless integration with our PHP backend for database operations,
which includes Apache server with PHP support, allowing us to host and serve PHP-based web applications
