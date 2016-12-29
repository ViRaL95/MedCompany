Synopsis

-Viral Production

-Produced in LAMP (Linux Apache MySQL PHP) Environment

-Bootstrap 

-Javascript

-JQuery

-Javascript Library known as Vex was used for alert messages

-This project contains a user-login form, with one username and password. An error message is given when the user enters the wrong password. 
A table was created for the user login. To avoid redundancy a sign up page was not included

-It includes an about-us page which shows my ability to use Bootstrap at a high level, writing a Carousel Code. 

-It also includes two pages where you can shop for medication or vitamins. Each page includes its own javascript, and respective PHP code. 
The javascript is used to allow users to click the buttons when a valid number is entered into the <input type= number> fields
The PHP code adds the respective product to its respective table. There are two tables for products:medtable and vitaminstable. 

-A checkout page was also included which allows users to see the items that were purchased. This was done by "echoing" all respective HTML content
and accessing data from databuse using POST method. 
All data can be edited and total subtotal was calculated. When the user hits the purchase button, an option to see my Resume is given.
The alert message is given to the user, whether or not they would like to See My Resume, which opens up a PDF of my Resume. 
-Signout page warns user that all data will be deleted if signed out. If interested please see: 
http://github.hubspot.com/vex/docs/welcome/
or 


Code Example:
The following SQL query updates the medtable and sets the amount, subtotal, and quantity to their respective values if there are already purchases made. The quantity, subtotal and product name are retrieved all through POST method form an HTML form. 
UPDATE Operation:
$update1="UPDATE medtable SET Amount= Amount+'$quantity', Subtotal=Subtotal+'$subtotal' WHERE Product='$name' ";

If purchases havent been made (which can be tested if mysqli_num_rows returns 0) then an Insertion Operation was made

INSERTION Operation:
$update1="INSERT INTO medtable (Product, Price, Amount, Subtotal) VALUES ('$name', '$price', '$quantity', $subtotal)";

In order to update the total-price table, I checked whether the user has already purchased something. If he hasnt purchased something an INSERTION operation was made. If he has purchased something then an UPDATE/SET operation was made.

INSERTION Operation(No entries in totalprice):
If there was no entries in the vitamintable or medtable and an insertion operation was performed and a NULL value was entered into the table. In order to account for this the IFNULL operation was used and a 0 was instead entered if either table was empty

$update1="INSERT INTO totalprice (total) VALUES (SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";

UPDATE operation(entry in totalprice):
$update2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";

Motivation:
Showcase my front-end and back-end skills, SQL skills, and Javascript skills. Understand the fundamentals of how a shopping cart works
