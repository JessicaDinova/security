# Testing

As a user I want to be able to delete a subscriber from the table so that my table can stay relevant. <br>
<br>

Happy path:<br>
Given: A user wants to create a subscriber in the table,<br>
When: user fills in every required field,<br>
Then: new row will be created<br><br>

Unhappy path:<br>
Given: A user want to create a subscriber in the table,<br>
When: user doesn't fill in every required field,<br>
Then: an error message will be displayed<br><br>

As a user I want to be able to log in so that I can access routes that are available only for registered users.
<br><br>

Happy path:<br>
Given: A user wants to log in,<br>
When: user enters his credentials and tries to log in,<br>
Then: user will be logged in and redirected to sweet pics<br><br>

Unhappy path:<br>
Given: A user wants to log in,<br>
When: user enters credentials that doesn't match in the database,<br>
Then: user won't be logged in and error message is displayed<br><br>



