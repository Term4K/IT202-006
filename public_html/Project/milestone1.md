<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Przemyslaw Narewski(pn253)</td></tr>
<tr><td> <em>Generated: </em> 4/3/2022 4:45:43 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-006-S22/it202-milestone1-deliverable/grade/pn253" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161410653-6ef573ab-86c1-40b5-8958-d877e50bc570.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing just the form for registration. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161410691-e94c34ad-29a7-4113-b3e9-d99450c4acce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing that email is required. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161410721-59281181-4fe1-4cbe-a09c-a48b4227975f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing that email must be valid<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161410768-919123e7-4b6e-4d4d-905a-5098129718a1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing that username is required. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161410832-01884bd7-fb3a-41af-a3a1-c66e226226d5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing that password and confirm password must match. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161411140-0cb98dad-f931-4d93-9d90-2075457d79e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing error in duplicate username or email. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161410906-47c8cbd7-965f-4705-8992-178a210f5e54.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the Users table along with all currently registered users. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/12">https://github.com/Term4K/IT202-006/pull/12</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/32">https://github.com/Term4K/IT202-006/pull/32</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>For the validation of the form fields it is done using both the<br>client side as well as the server side. The first line of defense<br>is the client side, which is done through the provided HTML validation of<br>form fields as well as the JavaScript validation. In this case I did<br>validation for the username as well as the matching passwords through the JavaScript<br>function. I used it for the username so that it would match the<br>regex that is used for changing the username in the profile menu. After<br>it goes through client side validation the same is done on the server<br>side through the PHP code. The inputs are taken and some are sanitized.<br>After this the inputs are checked through a series of if statements to<br>make sure they fill the requirements. After those checks are done the information<br>is sent to the database but if there are any duplicates in the<br>email or username then there will be a message displayed for that. The<br>passwords is also converted to a hash as stored as such to avoid<br>storing plaintext passwords. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161411187-1df111aa-e5d5-4b40-bf7e-b278d7c29bfd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing that username is not valid. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161411219-d219551a-1c03-497a-9e22-3ae2d53d9d6a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing that email is not in the proper format. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161411243-686381a1-29a7-4bf4-ac2c-55775ee30780.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing that email/username is required.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161411259-e60e7b84-7b63-4a20-8d89-b57880bffad3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing that password is required. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161411281-c0574a77-37e3-4863-be3d-f29e30560189.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing that password must be valid.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161411298-8b95b5c5-6393-4592-96b8-8b6595888bea.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing error message upon wrong password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161411334-cc356467-1802-4031-9e46-adb594d16846.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing error when username/email is not found.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161411366-be8f7195-9c3c-4b95-99bc-0735da5284ad.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing a successful login.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/13">https://github.com/Term4K/IT202-006/pull/13</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/32">https://github.com/Term4K/IT202-006/pull/32</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/31">https://github.com/Term4K/IT202-006/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The validation for this is done similar as to the one in the<br>register page. In this case the email/username is done through JavaScript. This is<br>done to have separate validation depending on if the user logs in via<br>email or username. After the client side validation is done another round of<br>checks is done through the PHP code on the server side. After that<br>the username/email is checked to see if it exists and if it does<br>the hashes of the passwords are compared. If the they are the same,<br>meaning the password is valid, then the session is set and the user<br>is redirected to the home page. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161439996-97dd6455-d6bd-4710-9623-e4d2751947e4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing successful logout message. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161440039-873b5e57-98a8-45fd-8cff-3f3446ac57e9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing error message when trying to access home without being logged in.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/13">https://github.com/Term4K/IT202-006/pull/13</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/27">https://github.com/Term4K/IT202-006/pull/27</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The logout page simply resets the session so that the user details that<br>were used to login are no longer stored. This is turn denies access<br>to the other pages that are protected via a login. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161440039-873b5e57-98a8-45fd-8cff-3f3446ac57e9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the error received when trying to access home.php without being logged in.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161440302-a48fc863-c6ff-4180-a059-73b0e9bfeb82.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user without admin privileges trying to go to an admin assign roles<br>page. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161440347-aa4ae3b0-b10f-40c4-ac44-ef026cec8a33.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows roles table with data in it. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161440368-c8324b9d-37e1-42ad-b1eb-203bd5c1bf6e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows userroles with data in it.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/27">https://github.com/Term4K/IT202-006/pull/27</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/30">https://github.com/Term4K/IT202-006/pull/30</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>The code for the login protected pages utilizes a function called is_logged_in(). When<br>this has true passed to it, it will redirect the user to the<br>login pages if their are not signed in. The way this function works<br>is it checks to see is the session has a user set. If<br>the session does not have a user set then it redirects them to<br>the login page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>The code for this is similar to the login protected pages. The has_roles<br>function checks to see if the user is logged in as well as<br>the role they have. If the role that is set in the session<br>matches that of the input into the function then the user is allowed<br>to access that page. Otherwise the user will receive a flash message a<br>be redirected from that protected site. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161440804-e4f2172f-0b1b-4399-922f-b922c346cb08.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the basic theme of the pages. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161440849-b2838bbd-0ed0-401a-95aa-706c49af4987.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the login page with no flash message and the form. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/30">https://github.com/Term4K/IT202-006/pull/30</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>The CSS for my page is a simple greyscale that I choose. I<br>set the background of the body to grey with a text color of<br>white. I then used a similar concept as before for the nav bar<br>in which it is horizontal. Along with it being horizontal I added some<br>padding so that the color difference and nav would stand out more. I<br>also made the navigation bar horizontal. Lastly I added a hover effect to<br>the nav bar so the user could clearly see what they were selecting.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161410832-01884bd7-fb3a-41af-a3a1-c66e226226d5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image showing user friendly message when passwords dont match. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161411187-1df111aa-e5d5-4b40-bf7e-b278d7c29bfd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image showing user friendly message showing that the inputted username is not in<br>a valid format. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161411298-8b95b5c5-6393-4592-96b8-8b6595888bea.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image showing message when the password is incorrect for login. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161411366-be8f7195-9c3c-4b95-99bc-0735da5284ad.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image showing message for a successful login. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161440302-a48fc863-c6ff-4180-a059-73b0e9bfeb82.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Image showing invalid permission message. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/15">https://github.com/Term4K/IT202-006/pull/15</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>The way the user friendly messages work is that whenever you want to<br>display a message you call the flash function. This function takes the message<br>it is passed and creates an alert based on the color scheme specified<br>in the styles.css file. It also takes the message an puts it in<br>the alert. This message is also passed through when calling the function. There<br>is also JavaScript in the flash.php file to move up the message to<br>make room for the next one. This is executed after each call to<br>flash. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161441293-7c207626-8499-4467-bf1c-742fb1271c4b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the user profile page. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/16">https://github.com/Term4K/IT202-006/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The page first checks to make sure that the user is logged in<br>when trying to access the page. If the user is logged in then<br>there is a form in which the username and email are taken from<br>php and put as values in their respective fields. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161441508-a72f7d40-2da4-42da-8afe-55b2a00651ef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the email validation. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161441537-488a49c8-2f93-4530-b17c-5d39c56ea043.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the username validation message.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161441592-c8f04ad2-27f0-4403-ad78-232b1a26c27a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the password and confirm must match validation. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161441707-80ed2408-f296-4d49-af04-5b071cbdf7a6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the success message after updating username. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161441684-9b11f13f-5237-4dcd-a3a8-fac9d4e683c6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user data before changing. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161441744-5f75515f-eab7-4fe9-a3d6-827379c9cc64.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows screenshot after username was changed. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/16">https://github.com/Term4K/IT202-006/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>After the initial checks done via HTML and JavaScript there is addition validation<br>done via PHP code and if statements. It then checks for duplicate email<br>or usernames while trying to send the request to the database. This will<br>flash a success message or an error message depending on the result. A<br>similar process is done for the password in which the current password is<br>grabbed from the database and compared with the hash of the password given<br>in the form. If the two password match then the new password is<br>hashed and sent to database as a replacement for the current password. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161447511-6b0f0135-48d7-4f1b-ab06-c9a5274e9ff1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing all needed requirements of the Proposal document. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161447797-eaa3397e-94cc-470b-a9aa-e406b5e5f11e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing done issues.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161447829-c15dfcd8-9977-4601-8e6d-f8ae2e634db1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing more done issues. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/161447860-3919084b-bf82-42dd-9a0c-650e62174469.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing last done issue. <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-006-S22/it202-milestone1-deliverable/grade/pn253" target="_blank">Grading</a></td></tr></table>