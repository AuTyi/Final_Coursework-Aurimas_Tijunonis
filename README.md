Pizza restaurant.

1.	Idea and purpose of the website. 
2.	Applied technology review- frontend and backend.
3.	Further updates. 

Idea of website. 
The page is for a pizza restaurant. First of all, show menu - meal dishes in a restaurant made and served. The restaurant itself is also briefly described. And there is a feedback form and a table reservation form. There is also an administrator page that is accessible only to authenticated users. In an administrator page logged user can see table reservation and user feedback information from contact section of the front page.

Technology used.
The page is written in html, the design is described in a separate css file.
The feedback form in contact section used PHP language for the transfer and recording of data to the MySql database. The PHP language is also used to capture and transfer information from DB to an administrative page. For login, the user registration of the administrator’s page is realized in the forms in which the information is transmitted to the database using the PHP script. When logging in, the user can specify "remember me" who writes into the database a token valid for 2 weeks, which is used to identify the user.  When the user logged on to the administrator page, displays information with user’s name, and welcome message.
The menu consists of three sections, which are depicted as tabs, using JavaScrypt.
Html and PHP separated as much as possible by distributing them to individual files.

Further updates. 
It is planned to realize online orders by adapting the Simple cart shopping cart. Also, orders are saved in the database and then displayed on the admin page.
Realize the ability for the administrator to change the rendering of menus. To do this, use PHP, save information through a filled form to the database, and then display it in the main page of the menu section.
