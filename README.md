## DESCRIPTION
- You have been provided with a github repository with some code skeleton
It has the following
- index.php which is the landing page having links to register and sign in
- dashboard.php is the landing page after successful login
- DIR(FOLDER): assets/style.css
    - contains simple page style #<b>DO NOT EDIT</b>
- DIR(FOLDER): html> #<b>DO NOT EDIT</b>
  - Login.html which is the login page whose form actions is php/login.php
  - Register.html which is register page whose form action is php/register.php
  - Resetpassword.html which is the reset password page whose form action is php/reset.php
- DIR(FOLDER): php> #<b>WORK IN THIS FOLDER</b>
  - login.php which is the file meant to handle user login (and create user session)
  - register.php which is meant to handle user registration
  - reset.php which is meant to reset user password
  - logout.php which is meant to handle user logout (destroy user session)
## SETUP
 - fork this repository to you accounts
 - clone the repository to your local pc using `git clone <repository link here>`
 - complete the exercise
 - onces done, stage your changes using `git add <filename>`
  - commit your changes using `git commit -m "commit message"
  - push you change using `git push`

  Once you are done, copy the link and paste as your submission.

## TASK:
- With the provided code skeleton, you task is to complete the following files
    - registeer.php this file is meant to handle user registration. The form register.html takes in the full names, email and password. In your register.php, you have a skeleton of a function, this function should take the full names, email and password and store the data in storage/users.csv file (this file is like your database). If it was successfully stored, the users should receive the message (“User Successfully registered”)
    - login.php. This file is meant to handle user login from the login form, the user inputs email and password from the form, you should check if the email and password provided match that which is in the csv file and if they match, create a session and put the username inside and redirect the user to the dashboard, if it does not match, redirect the user back to the login page
    - reset.php this file is meant to update the user password, the data is received from resetpassword.html, it takes in the email and the new password and searches the file, if there is a match for the email, it should update the password field with the new data from the form, else, it should print out “User does not exist”
    - logout.php this file is meant to destroy the user existing session and redirect to the 
