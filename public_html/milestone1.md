<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Munavvarhusain Bunglawala (mab265)</td></tr>
<tr><td> <em>Generated: </em> 4/10/2023 7:03:58 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/mab265" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230749235-4449647a-29c9-4792-b4ea-03b61a3ed4c8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing invalid email <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230753732-6544a3a2-0427-44ce-9861-cbb5e79a9dcd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing invalid password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230749415-7b1e2b57-4035-479a-8d5a-22222362e89e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing password and confirm password not matching <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230749455-6a781b39-1fdc-4183-8352-f1de6f07b062.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing email not available validation meaning it&#39;s already registerd<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230749538-c991148a-f69f-4040-95f0-ab55be7a7233.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username not available validation meaning it&#39;s already taken<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230749587-5bc85bb3-73bd-45bc-82e4-4f728bcd6687.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the form with valid data filled in before the form is submitted<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230749659-c4bf17db-512d-4d95-959c-f4950a2191b3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing that from Task 1 valid registered email in my database user table<br>that it got created and it exits. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/14">https://github.com/Munavvarh/IT202-008/pull/14</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <div><b>Note : I did do the JS validation but I just did it<br>in the end so all the pull requests might note have the JS<br>code but overall the Milestone 1 branch should have it.&nbsp;</b></div><div><br></div>1)The form is a<br>registration form that requires the user to input their email, password, and confirm<br>password. It uses JavaScript and PHP validation to ensure that the input data<br>is valid and secure. The form uses the HTTP POST method to submit<br>the data to the server.<div>2)The validation logic is implemented both in the front-end<br>using JavaScript and the back-end using PHP. The front-end validation is implemented in<br>the "validate" JavaScript function.&nbsp;The back-end validation is implemented using PHP.&nbsp; Logic is pretty<br>much same for both of them&nbsp;checks if required fields are set, validates email/username,<br>checks password length and match. Error messages are displayed if checks fail.&nbsp;</div><div>3)&nbsp;The password<br>is handled using the PHP password_hash() function, which generates a secure password hash<br>using the bcrypt algorithm.</div><div>4)&nbsp;The code uses PDO to connect to the database and<br>execute a prepared statement that inserts the email and password hash into the<br>"Users" table. If execute() method succeeds, a success message is displayed. Otherwise, an<br>error message is displayed with the exception message.</div><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230749811-b1f07379-3b98-432f-b8c8-f1976990f304.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Trying to login in with incorrect password which the DB denies because it<br>doesn&#39;t exist in there. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230749839-5044c578-283d-4026-ab7d-ef24c42f8da3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Trying to login in with incorrect email address meaning it is not registered<br>so it will show error for non existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230749893-a759823e-4c5a-49cb-9c36-269f920b16a2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing successful login with valid registered email/username and password <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/15">https://github.com/Munavvarh/IT202-008/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>1)The form is a Login form that requires the user to input their<br>email/username, and password. It uses JavaScript and PHP validation to ensure that the<br>input data is valid and secure. The form uses the HTTP POST method<br>to submit the data to the server.<div>2)The validation logic checks that the email<br>or username and password meet certain criteria, both on the client-side using JavaScript<br>and server-side using PHP.The validation logic checks that the email or username and<br>password meet certain criteria, both on the client-side using JavaScript and server-side using<br>PHP. If they don&#39;t return false and give the error message otherwise it<br>is successful.&nbsp;</div><div>3)The password is handled using the password_verify() function, which compares the plaintext<br>password entered by the user with the hashed password retrieved from the database.<br>The hashed password is stored securely in the database using the password_hash() function.&nbsp;</div><div>4)&nbsp;The<br>DB is utilized to check if the user&#39;s input matches the email and<br>password hash stored in the &quot;Users&quot; table using PDO (PHP Data Objects), and<br>if there is a match, the user is redirected to the home page.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230749971-05f99756-e922-45a6-ae2f-c9fdb755fe50.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing successful logout <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230751138-78b48d44-4555-4c41-a7d2-9c70be2af437.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Trying to acess home.php without being logged in show it will show the<br>&quot;not being logged in&quot; message.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/19">https://github.com/Munavvarh/IT202-008/pull/19</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Session logic is used to maintain user login information across multiple pages of<br>a web application. If a user is logged in, their information is stored<br>in the $_SESSION superglobal variable using the $_SESSION[&quot;user&quot;] key. The flash() function is<br>used to display messages to the user, and the getMessages() function retrieves and<br>clears these messages from the $_SESSION variable. Then, in the home.php file, the<br>is_logged_in() function checks if the $_SESSION[&quot;user&quot;] key exists and returns true if it<br>does, indicating that the user is logged in. If the user is not<br>logged in, a message is displayed using the flash() function.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230751138-78b48d44-4555-4c41-a7d2-9c70be2af437.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Trying to acess profile.php without being logged in show it will show the<br>&quot;not being logged in&quot; message.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230751253-d5abe5d7-2f44-43ff-83dd-8ad0df819ac0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>trying to access the admin page of creating roles without the authorized credentials<br>and it will show the error of not having permission to do so<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230751304-63f54773-b3cf-4351-961a-98b4c5e56eca.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing roles table from the DB <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230751396-1f7a851b-ff12-4205-95d2-0bbf510c0cc3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The first row is my admin user and the username for that is<br>jio123<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230751476-122c2bbc-2241-4172-a6b5-3aa2c818eb9e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Attaching one more screenshot proof for above question with verifying the admin user<br>in my user table <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/22">https://github.com/Munavvarh/IT202-008/pull/22</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/23">https://github.com/Munavvarh/IT202-008/pull/23</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For login-protected pages, the process starts with the user logging in using their<br>email and password. The login.php file then validates the input and checks if<br>the user exists in the database. If the user exists, their information is<br>stored in the $_SESSION superglobal variable using the $_SESSION[&quot;user&quot;] key. When the user<br>tries to access a login-protected page, the is_logged_in() function is called to check<br>if the user is logged in. If they are, they are allowed to<br>access the page. Otherwise, they are redirected to the login page. To achieve<br>this, the code checks if the $_SESSION[&quot;user&quot;] key exists and returns true if<br>it does.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For admin-protected pages, the process is similar. However, in addition to being logged<br>in, the user must also have an &quot;admin&quot; role. This is checked by<br>calling the&nbsp; has_role() function checks if the user has a certain role by<br>searching through the roles stored in the $_SESSION[&quot;user&quot;][&quot;roles&quot;] array. If the user has<br>the specified role, the function returns true; otherwise, it returns false.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/231008791-90b2950b-02d5-4ec4-929a-b3d3ed92a890.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing Navigation styled<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/231009174-b42e32e4-aaf0-4389-9045-4c48db5cca5b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing forms and navbar is styled <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/231014449-3aae84fb-99ee-4a14-9039-d4135ff4d8a2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing Data output in a clean manner<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/231014589-7ad6c016-2b5c-4b3e-b927-09d6fa12fe2f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing Data output in a clean manner part 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/231015184-79dbb17b-1411-4dea-a2aa-58c04e8232d4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing styled code <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/231015223-fe8903d6-4b0b-435e-a154-34c99062aeb7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing styled code part 2<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/22">https://github.com/Munavvarh/IT202-008/pull/22</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/37">https://github.com/Munavvarh/IT202-008/pull/37</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <div>The body element has a light blue background color. The input and select<br>elements have a display of block, a width of 25%, padding of 5px,<br>margin-bottom of 5px, a border radius of 3px, and a 1px solid border.<br>The table element sets some basic styles for tables. border-collapse: collapse; removes the<br>default spacing between cells, creating a cleaner look. width: 100%; makes the table<br>take up the full width of its container.</div><div>The td element styles the table<br>cells. border: 1px solid; adds a thin border around each cell. padding: 10px;<br>adds some space around the text in each cell.&nbsp;</div><div><br></div>I tried to choose a<br>simple and clean design with a focus on functionality. The navigation bar is<br>given a gray background with a border and padding, making it easily distinguishable<br>from the rest of the page. The form elements are styled to be<br>easy to use, with a block display and appropriate padding and margin. Overall,<br>the styling choices I believe are effective in creating a functional and visually<br>appealing website.<br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230751138-78b48d44-4555-4c41-a7d2-9c70be2af437.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Trying to access protected pages like home.php without being logged in <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230749415-7b1e2b57-4035-479a-8d5a-22222362e89e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing password and confirm password not matching while registering for new account <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230749455-6a781b39-1fdc-4183-8352-f1de6f07b062.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing can&#39;t register with already taken email address <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/14">https://github.com/Munavvarh/IT202-008/pull/14</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/19">https://github.com/Munavvarh/IT202-008/pull/19</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>We have been doing JS and PHP validation to show user friendly messages.&nbsp;<br>&nbsp;It is used in 3 places where forms are such as login.php ,<br>register.php and profile.php. The purpose for using validations is basically to checks if<br>the email address, username, and password meet certain requirements using regular expressions. If<br>any of the validations fail, a friendly error message is displayed to the<br>user using the flash() function. The function also checks if the new password<br>and confirm password fields match. The goal is to provide user-friendly error messages<br>that help users understand and correct any issues with their input. Also, main<br>goal is to not giving too much information where hackers can easily get<br>into the system.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230751694-16d3a887-17b7-42c2-94c5-b3e339bd5cfb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the profile page after being logged in and how it prefills my<br>Email and username <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/20">https://github.com/Munavvarh/IT202-008/pull/20</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>This is a code displays a form for the user to update their<br>profile information and password. It first checks if the user is logged in<br>and redirects them to the login page if they are not. If the<br>user submits the form, it retrieves the new email and username values and<br>updates the corresponding fields in the database.&nbsp;The data about the user is retrieved<br>from the database using the get_user_id() function, which returns the user ID of<br>the currently logged in user. This ID is then used to query the<br>Users table and fetch the user&#39;s email and username.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230753048-d5348da3-45e3-421d-853f-364ac2a0317f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show username validation message Tried to use invalid username range in my profile<br>page to change the username after being logged in and like so it<br>does give me the error message <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230753085-18172077-55ec-4170-af12-ddcf81613955.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email validation message Tried to use invalid email in my profile page<br>to change the email after being logged in and like so it does<br>give me the error message <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230753258-a284147c-fb90-4585-b542-42187509cf8a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing password validation message tried to use invalid password to show the error<br><br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230753182-50d06561-6600-4456-9de7-a0580b5c6e6f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing password and confirm password not matching <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230753285-8a7d25c7-7f5a-45a2-91a1-c6229c6dfc07.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing username is already in used message <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230753322-2ef727d5-d5f2-47bb-aeec-6ed57de601d5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing email is already in used message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230753553-58b219ca-c333-4a31-bd5a-492da224c423.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing before image<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230753591-b23929fc-b3e8-4942-baef-5a74ecf34b6f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing image after updating the username and email <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/25">https://github.com/Munavvarh/IT202-008/pull/25</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/20">https://github.com/Munavvarh/IT202-008/pull/20</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>The code handles updating of user email, username, and password through the UPDATE<br>SQL query. Sanitization and validation are applied to the email, username, and new<br>password fields. The current password is verified before updating the password. If there<br>are any errors, the corresponding error message is displayed through the flash function.<br>The validation code in JavaScript is responsible for checking the user&#39;s input in<br>the form fields before submitting them to the server. It checks that the<br>email address is valid using regular expressions and checks that the username and<br>password fields are not empty. It also checks that the password is at<br>least 8 characters long.&nbsp;If any of the fields fail validation, an error message<br>is displayed next to the corresponding field. If all the fields pass validation,<br>the form is submitted to the server via a POST request.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230805114-8b9b1b08-2c38-4cd4-8b78-1de1e25181c6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing list of done items from project board perspective <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/230805183-eb04a71d-510b-4aa2-8b06-303a661f7a8c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing list of done items from project board perspective  part 2<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/Munavvarh/projects/3">https://github.com/users/Munavvarh/projects/3</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mab265-prod.herokuapp.com/project/login.php">https://mab265-prod.herokuapp.com/project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/mab265" target="_blank">Grading</a></td></tr></table>
