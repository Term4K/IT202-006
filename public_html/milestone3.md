<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Przemyslaw Narewski(pn253)</td></tr>
<tr><td> <em>Generated: </em> 5/11/2022 2:41:26 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-006-S22/it202-milestone-3-arcade-project/grade/pn253" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will have credits associated with their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the user's table with the new credits column with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167516884-bb6fb2b8-afb9-4652-a66d-4c88033af636.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the user table with the credits column. Only one account has<br>any credits as the other one had them spent. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the code/sql that properly updates the credit/balance value based on CreditHistory</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167517054-ffe47dc4-6cdc-49ea-be45-4203287a6791.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot that shows the function used to update the credits. There is a<br>SQL statement on line 5 that sums the creditHistory to get credits. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the credits displaying on the user's profile page (a value > 0 must show)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167517237-9ab5f015-655f-4679-b7e8-419d03fb347b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the profile page with a credit score. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot showing the code snippet of how the credits are fetched/displayed on the profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167517416-d34e577c-9182-488d-a29e-2477086f1c3c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the way credits are displayed on profile. Uses calls to refresh_credit_balance()<br>as well as get_credits() to get accurate credit count. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167517535-54c3131d-9547-444a-ba0b-44365456b24a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the get_credits() to retrive the credits from cookies. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167517747-7d4d5b2a-7db0-4b0c-9959-7e61cc3f78e4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the refresh function to get accurate credit count. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process for updating the credit/balance value and displaying it on the profile page</td></tr>
<tr><td> <em>Response:</em> <p>To update the credits on the profile page first the code runs the<br>refresh_credit_balance() function to get an accurate number. This function sums the creditsHistory table<br>and updates the users table as well as setting the session cookie to<br>the proper amount of credits. After this profile page runs the get_credits() function<br>to get the amount of credits the user has from the session cookie.<br>This result is echoed out to be displayed on the profile page. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/58">https://github.com/Term4K/IT202-006/pull/58</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file (profile page)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/profile.php">https://pn253-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Create a CreditHistory Table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the CreditHistory table with valid records having been recorded</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167524431-f1705146-b023-409d-9bc4-373a8f2b1d00.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the CreditHistory table with the entries. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/59">https://github.com/Term4K/IT202-006/pull/59</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Competitions Table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Competitions table with valid records having been recorded</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167524772-bff037ea-9ea6-4fd9-8a03-486d46411613.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the comps table. Only three competitions have have been created. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/60">https://github.com/Term4K/IT202-006/pull/60</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to create a competition </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Create Competition form with valid date filled in (including the expected cost)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167535985-bb68cd20-78fe-4467-8c01-d5b19c392fcd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the form filled in with the expected create cost down below<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot(s) showing success and error messages of the creation process</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167751337-fc145d32-0306-4ce5-a557-97b5f03beb9c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the error message for when you do not have 100% in<br>the winner payout. All other error checking is done through form input restrictions.<br><br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167751516-56ad2cfc-4dc2-43ad-86e3-7a0effd65f95.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the success message for when creating the competition. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167751694-37639b6b-7989-493e-bc62-ee15fa42f3cc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the error message for trying to create competition without enough credits.<br><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the new record in the Competitions table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167536178-60b1f4a1-645e-4aa8-97e4-c51e73ed64c1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows new record with in the table with the data that was inputted<br>in the above sub task 1.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the CreditHistory related to creating this competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167536261-6aac920b-9d92-4336-aa10-a647ad1eaf89.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The last entry is for the creation of the competition above. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot of the CompetitionParticipants table with the new record for this competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167536355-174b50e1-b1a5-4d24-a8ee-1c6e081f6745.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the UserComps table which has an entry for the creator of the<br>new competition. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <em>Response:</em> <p><a href="https://github.com/Term4K/IT202-006/pull/62">https://github.com/Term4K/IT202-006/pull/62</a><br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the code flow for the creation process</td></tr>
<tr><td> <em>Response:</em> <p>The first thing that happens is the parameters are checked for the form<br>input. This mainly includes whether the total percentage of reward adds up to<br>100%. After this all the form fields are grabbed and the page starts<br>to run DB calls. The first thing it checks is whether the user<br>has the balance to attempt to create this competition. This is done by<br>grabbing the credit balance via the function get_credits(). After this the transfer_credits() function<br>is called to create the proper CreditsHistory entry along with updating the users<br>total amount of credits. After this the user is added to the competition<br>they are creating. If in any of these steps the function fails then<br>the database is rolled back to undo any of the previous changes. This<br>means that any failure will not have a negative effect on the users<br>information or credit balance. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add a direct link to heroku prod for this file (create competition)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/create_competition.php">https://pn253-prod.herokuapp.com/Project/create_competition.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Each new participant causes the Reward value to increase by 50% of the joining fee rounded up </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add before and after screenshots of the Competition record in the DB when a user joins (showing the reward change)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167758594-6c82f508-7b4c-4d6c-a1a2-611fdb6a3b03.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing before joining the competition. Competition in question is the last one<br>or TEST-REWARD.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167759031-fe586c71-0196-4d5e-ace1-0e62d25cf0da.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the after were the reward increased by 3 since 6 is<br>the join fee. Comp in question is last one or TEST-REWARD<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the reward calculation logic</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167759365-e62c14e1-f98f-4248-999b-e6ea990b2d04.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the calculation logic to update the reward. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the calculation</td></tr>
<tr><td> <em>Response:</em> <p>In this SQL statement the value that is set for the reward is<br>reliant on the join fee. If the join fee is greater than 0<br>then the reward is updated to be 50% of the join fee plus<br>the current reward. The 50% portion is also using the ceiling function to<br>ensure an integer. If the join fee is less than zero than the<br>reward is simply kept the same. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/62">https://github.com/Term4K/IT202-006/pull/62</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (join competition)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com">https://pn253-prod.herokuapp.com</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Have a page where the user can see active competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the active competitions page list with a few active competitions</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167537246-85a2cab6-738a-452e-aae6-253ee923cd22.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing two active competitions. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the query including the WHERE clause</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167759866-70ae716b-014b-4489-9cf9-acddca6aaf8f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the WHERE clause that displays the currently active competitions. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the query and the code used to display this data</td></tr>
<tr><td> <em>Response:</em> <p>The query pulls all the data from the Comps table as well as<br>the join with the UserComps table to see if the the user_id is<br>already in the competition. The query restricts the results to only those that<br>the expire date stamp is at a latter date then current and where<br>the competition is neither paid out or calculated for a payout. This data<br>is then ordered in ascending order in terms of the expiration dates. After<br>this the php creates a table and iterates through all the results from<br>the query. The PHP also changes the button to disabled if the user<br>is already in the competition being listed. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/63">https://github.com/Term4K/IT202-006/pull/63</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (list competitions)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/list_competitions.php">https://pn253-prod.herokuapp.com/Project/list_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> CompetitionParticipants table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167760275-55604177-b8f9-4e59-97bf-051cf6450cd2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the table with valid data in it.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/61">https://github.com/Term4K/IT202-006/pull/61</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can join active competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of the CreditHistory table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167767179-4cd2bf68-a9ff-413f-9071-ef84a5c413c1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot before user joins the competition. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167767508-4d2c70eb-a19d-45e4-9b99-08311563926c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the transaction to join the comp. There is a conversion transaction<br>in between as the user did not have enough credits to join. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of the Competitions table showing the participant count update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167767295-09a84fc5-8f38-4138-93f1-6b2921ebbf19.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the Hello comp before user joins it. Count is 1 for<br>the user that created the comp. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167767416-eced5035-692c-46f7-a06d-4cd4abcadc36.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the amount of users being increased. The comp in question is<br>the last one or Hello. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot(s) showing proper error and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167768250-eb098839-a55f-4d4a-ab4b-1f857812432c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing success message for joining a comp.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167768377-893a574a-9c94-4cd8-abd2-b054fa558612.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the error message when you do not have enough credits to<br>join.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/63">https://github.com/Term4K/IT202-006/pull/63</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the logic/code for joining a competition and the involved steps</td></tr>
<tr><td> <em>Response:</em> <p>The join competition first checks to see if you have enough balance to<br>join the comp. If you do not then an warning message will appear<br>to tell you this. Next the code queries the database to get the<br>join_fee as well as the title of the competition. This is also a<br>second verification to check that the user has enough credits to join the<br>competition. After this the transfer_credits() function is called to remove the cost of<br>joining from the users credits. After that the user is than added to<br>the competition using the add_to_competition() function. This function inserts the user id and<br>comp id into the UserComps table as well as updates the total participants<br>in the Comps table. This also updates the reward if the join_fee is<br>greater than zero. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file (any join page)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com">https://pn253-prod.herokuapp.com</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Create a function to calculate winners </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the whole code process with the clear comments (ensure your ucid and date are shown)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167906102-3ffe0490-85e0-4944-9b1b-1cbfbc2747a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of first 47 lines of the calculation function. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167906278-587dcfb0-d24d-4be4-b05f-16dfd8138fce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of line 48 - 93 of the calculation function. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167906486-80c8f0a9-9fd4-451b-9e5f-4bccc02f980f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of last few lines of the calculation function. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167906702-d85441df-ea08-4490-b37e-fc2c5da08fef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the PHP page that admin goes to in order to calculate<br>the winners. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Mention which winner calculation you chose (copy the text from the proposal for your choice)</td></tr>
<tr><td> <em>Response:</em> <p>Option 2: Where the individual score was earned/created between when the user joined<br>the competition and when the Competition expires<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add before and after screenshots of the Competitions table of valid and invalid competitions being successfully processed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167907411-7a88112b-d9e1-4d31-804e-08f3151a6489.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing comps before running the function.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167914158-181740c7-1404-4daf-8d2a-bff7a98b52ef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing after running the function. Comps with ids 1 &amp; 2 were<br>invalid and as such marked with only did_calc and comp with id 5<br>or TEST4 was valid and was marked with both did_calc and paid_out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the calculation steps and payout process</td></tr>
<tr><td> <em>Response:</em> <p>The first step in calculating the winners is to grab 10 competitions that<br>have already expired and have not been calculated yet. In addition to this<br>there is also the restriction of if the competition met the minimum required<br>amount of players. This is done as to not go through the whole<br>process of calculating winners when a requirement had not been met yet. The<br>query grabs the first 10 comps that are expired and their percentages for<br>places as well as the reward. Then the reward is calculated for each<br>place by multiplying the reward by the percentages and taking the ceiling of<br>that number to assure that the credits are whole numbers. After this the<br>function to get the top 3 scores from the competition is called to<br>get the user_ids and scores of the users who had the highest in<br>the competition timeframe. After the top 3 are received the rewards are distributed<br>among them and transferred to each of the accounts. After the transfer the<br>competitions that had any type of pay out are then updated so that<br>they have paid_out and did_calc marked as 1 or competed. After all the<br>valid competitions are calculated the invalids are also done. In this case the<br>query pulls all expired competitions who do not meet the requirement and set<br>their did_calc to 1. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/64">https://github.com/Term4K/IT202-006/pull/64</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167922000-5b167f69-c340-41e1-9afb-e6dc9316ccc6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the completed Milestone3 portion in the Proposal.md including links. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167922144-274d58f0-cd6d-44d1-848a-86626ca056d2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing 4/9 done issues. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167922305-e09440aa-86ba-4bf3-a4c5-277286efd0b0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing 3 more issues closed. 7/9 issues. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/167922463-c0760aed-237d-4c78-a118-e88a4353d858.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the last two issues closed for Milestone3. 9/9 issues done. <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-006-S22/it202-milestone-3-arcade-project/grade/pn253" target="_blank">Grading</a></td></tr></table>