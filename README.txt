# For Instructions 
Please refer to  Project02_php_FA2023.pdf

Summary: Jeopardy Game Implementation
This project involves the development of a Jeopardy game in PHP with associated HTML and CSS files. The key features and functionalities are outlined below:
1.	User Registration and Login:
•	The code includes functionality for user registration and login, ensuring that only registered users can access the game features.
•	User data, including usernames and passwords, is stored in a file named registerinfo.txt.
2.	Jeopardy Game Board:
•	The main game board is created using HTML and CSS, displaying categories and point values for questions.
•	Categories include Science, History, Literature, Geography, and Movies.
•	Each category has questions with point values ranging from $400 to $2000.
3.	Question Display:
•	Questions are loaded dynamically based on user selections from the game board.
•	Questions and answers are stored in separate CSV files (questions.txt and answers.txt), and the game retrieves them accordingly.
4.	Scoring System:
•	Teams (Team One and Team Two) accumulate scores based on correct answers, with different point values assigned to each question.
•	Teams can also lose points for incorrect answers.
5.	Leaderboard:
•	A temporary leaderboard is displayed using sessions to track and show the scores of Team One and Team Two during the game.
•	The final scores are recorded in a file named leaderboard.txt upon the completion of the game.
6.	Styling:
•	CSS is used for styling, creating an attractive and user-friendly interface for the game.
•	Different CSS files (style.css, style2.css, style3.css, questionCSS.css) are included for various components.
7.	Session Management:
•	PHP sessions are utilized for maintaining user data and game scores throughout the gaming session.
•	Sessions are also used to control user access, ensuring login before playing the game.
8.	User Interaction:
•	Users can click on the game board to select questions, and the associated PHP scripts handle the processing of answers and score updates.
9.	Logout Functionality:
•	Users can log out from the game, and session data is appropriately destroyed.
10.	Registration Confirmation:
•	Upon successful registration, users receive a confirmation message, thanking them for registration.
11.	Main Menu:
•	A main menu provides options for starting a new game and viewing leaderboards.
12.	Responsive Design:
•	The design incorporates responsive elements to ensure a seamless experience on various devices.
This Jeopardy game project successfully combines PHP scripting, HTML structure, and CSS styling to create an engaging and interactive gaming experience. The code is well-organized and follows best practices for web development.
Obstacles
●	Incrementing or decrementing the score counter for two teams. 
●	Registering new users; storing username and password onto a .txt file. 
●	Generating Jeopardy board questions by employing PHP functions as the basis for inquiries.
●	Storing Jeopardy board answers from a .txt file into a multidimensional array.
●	Verifying login credentials, specifically the username and password, by referencing content from a .txt file. If no match found, redirect user to homepage. 
●	Employing image alignment buttons with float properties in CSS (float: none|left|right|initial|inherit;).
●	Leaderboards logout records the highest score. 
