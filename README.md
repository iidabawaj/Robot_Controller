# Robot_Controller
Task 1 of the Web and NLP path

To control the movements of the robot, I have created a code that combines an HTML form with PHP code to enable the user to control a robot's movements through a web interface. When a button is clicked, the value of the button is sent to the server via the POST method, and the PHP code inserts a new record into the movements table in the MySQL database.

![Buttons](https://github.com/iidabawaj/Robot_Controller/assets/139181626/6e93abb4-a837-498e-9aea-61ac059f03a7)

***
## index.html Code Explanation 
* The code starts by declaring an HTML document with the <!DOCTYPE html> declaration, and defining the <html> element as well as including its lang attribute.

* Within the <head> element, the code declares the character set and sets the compatibility mode for Internet Explorer. It also sets the viewport for the document and gives it a title. The link tag is used to import an external CSS file (style.css).

* The code then includes a JavaScript file (reload.js) using the <script> tag with the defer attribute. This attribute ensures that the script is executed after the page has finished parsing.

* Within the <body> element, an HTML form is defined using the <form> element. The action attribute is set to "connect.php", which means that when one of the buttons is clicked, the form data will be submitted to the connect.php file using the HTTP POST method.

* The form contains a container (<div class="container">) with five buttons. Each button has a type attribute of submit, which means that when the button is clicked, the form will be submitted. The name attribute is set to D, which is used to identify which button was pressed. The value attribute specifies the direction that the robot should move.

* The buttons are styled using CSS classes (btnLeft, btnRight, etc.) and contain icons from the Ionicons library, which are imported using two <script> tags at the end of the document. The ion-icon element is used to display the icons within the buttons.

* The script tags at the end of the document import the Ionicons library, which is used to display the icons in the buttons. The first script tag is used to load the ECMAScript module version of the library, while the second script tag is used to load the fallback version for browsers that don't support modules.


## connect.php Code Explanation 
* The code starts by defining variables for the credentials needed to connect to a MySQL database: $servername, $username, $password, and $dbname.

* The mysqli_connect() function is called to establish a connection to the database. If the connection fails, the code calls die() function to terminate the script and display the error message.

* The if statement checks if the $_POST array contains a key called D. If it does, the value of that key is assigned to $De variable.

* The $sql variable stores an SQL query that inserts a new record into the movements table with the value of $De variable in the directions column.
  
![Database](https://github.com/iidabawaj/Robot_Controller/assets/139181626/468f65ac-7dbe-4552-93ef-e09f330b36b1)

* The mysqli_query() function executes the SQL query on the database. If it is successful, the value of $De is printed. Otherwise, an error message is displayed.

* Finally, the connection to the database is closed using the mysqli_close() function.

## lastMove.php Code Explanation
This PHP code connects to a MySQL database, runs a SELECT query to retrieve the most recent movement direction from the movements table, and displays it on the web page. 

* The code first establishes a connection to the database and checks for errors.

* Then, it executes a SELECT query to retrieve data from the movements table and checks the result for errors. If the query is successful and data is returned, the code retrieves the most recent movement direction and displays it on the web page.

![LastMove](https://github.com/iidabawaj/Robot_Controller/assets/139181626/1a050eb7-b683-4f07-95c3-b015c09b2078)

* If no data is returned, the code displays a message indicating that there are no movements.

* Finally, the code closes the database connection.


## style.css Code Explanation 
This is a CSS stylesheet that defines the styles for the buttons in the HTML form. A summary of the styles applied:

* The <body> element sets margin, padding, and flex properties to center the form vertically and horizontally.
  
* The container sets the margin and text-align properties for the container div that holds the buttons.
  
* The button sets the background color, padding, font size, font family, cursor, margin, transition, position, and overflow properties for all buttons.
  
* btnStop, .btnLeft, .btnRight, .btnUp, and .btnDown sets the position and border-radius properties for each button.
  
* btnLeft and .btnRight sets the text color and text alignment for the left and right buttons.
  
* btnUp and .btnDown sets the text color for the up and down buttons, and define a hover effect for those buttons using the::before pseudo-element.
  
* buttonI sets the font size and text alignment for the button icons.
  
* button: active sets the background color for a button when it is clicked.
