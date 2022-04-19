<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Przemyslaw Narewski(pn253)</td></tr>
<tr><td> <em>Generated: </em> 4/18/2022 10:07:07 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-006-S22/it202-milestone-2-arcade-project/grade/pn253" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone2 branch </li>
<li>Create a new markdown file called milestone2.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone2.md link (from Milestone2) into the proposal.md file under each milestone2 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone2.md</li>
<li>Add/commit/push the changes to Milestone2</li>
<li>PR Milestone2 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 3</li>
<li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on github and everywhere else.
Images are only accepted from dev or prod, not local host.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Pick a game... </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game will you be doing?</td></tr>
<tr><td> <em>Response:</em> <p>I will be doing a cookie clicker.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly describe it and its mechanics</td></tr>
<tr><td> <em>Response:</em> <p>You click the cookie in the center to increase your score. I intend<br>to add auto incrementing score modifiers that can be purchased using gems/points later<br>down the line.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing something of the game</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/163730859-0363d0b9-7de0-4c5f-8d20-ef2feb7263e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot just showing the actual game. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/163730881-572ab344-f4b4-4859-8273-2dcc3be2630f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the score change after clicking the cookie in the middle a<br>bunch of times. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/163892137-aa749250-f4b0-4bdf-b8a1-6395e9b3e609.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is a screenshot to show that game was saved when user is<br>logged in. I put it here as the submission was not set up<br>to be a screenshot submission but rather a URL submission.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/42">https://github.com/Term4K/IT202-006/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/game.php">https://pn253-prod.herokuapp.com/Project/game.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Saving Score </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing a notice telling the user their score was saved</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://user-images.githubusercontent.com/61835121/163892137-aa749250-f4b0-4bdf-b8a1-6395e9b3e609.png">https://user-images.githubusercontent.com/61835121/163892137-aa749250-f4b0-4bdf-b8a1-6395e9b3e609.png</a> </td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a notice telling the user their score wasn't saved because they're logged out</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/163891926-ac9bcd9e-6fe0-498a-955a-0eee8f3865e6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing message telling user that they are not logged in when they<br>attempt to save the score. The saving is done manually as the game<br>is has a persistent score. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of your scores table with some score entries (preferably different users with multiple scores each)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/163893222-c6034d18-4c69-4f85-83c9-ff5b00346ae7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of my scores table. I only have two as I currently have<br>only two users registered and the game has a persistent score. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly describe the code flow of saving a score from the game</td></tr>
<tr><td> <em>Response:</em> <p>Since this game has a persistent or running score the user chooses when<br>to save the game. Therefore the save is done via a button under<br>the actual game. When this button is clicked it calls the JS function<br>saveGame() which send a post request to save_scores.php, the post request is sent<br>via the function in helpers.js. After the post request is sent the data<br>is extracted from the post request and checked before calling the save_score() function.<br>Once the save_score function is called there is a check performed to see<br>if user is logged in, if not the function returns data with message<br>that user is not logged in. Otherwise there is a SQL query made<br>that tries to insert the score into the Scores table. However if there<br>is an entry that already has the user_id then the record is instead<br>updated. This is to keep one score per user as the running score<br>of their game. If the score is saved successfully a Saved score message<br>is returned along with status code 200. The message returned is later flashed<br>on screen to inform the user. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/43">https://github.com/Term4K/IT202-006/pull/43</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's last 10 scores </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the latest scores for the user from their profile page (show at least a few scores)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/163732553-d70fb462-ad6a-4557-a9dc-acd83be7f81d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the latest scores. It only has one as I am doing<br>a persistent score for my game. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the scores are being pulled and displayed</td></tr>
<tr><td> <em>Response:</em> <p>The scores are being pulled from the database via a helper file called<br>score_helpers.php. In this file there is a function called get_latest_score(), this function takes<br>in an input of the user_id and limit as to how many scores<br>to return, default is 10. After this it queries the database where it<br>selects the records corresponding to the user id in order of which of<br>them are most recent. There is also a limit set on the amount<br>of items to be returned. If successful it returns the values if not<br>it has an error message. This return value is then passed to a<br>partials file which organizes it into a presentable table. First it checks to<br>see the time interval which the user wants to use. This sets the<br>value that will later be used for the title of the table and<br>will be used to determine what function is called to get the values<br>from the db. In this case it calls get_latest_scores() as that is what<br>the duration variable is set to in the profile page. It then checks<br>to see that there are returned records from the call to the previous<br>function. If not it displays a message showing that no records are found<br>within that interval. It then iterates through all the records and creates a<br>table based on the columns returned.  <br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/44">https://github.com/Term4K/IT202-006/pull/44</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/profile.php">https://pn253-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Create function(s) for outputiting the 3 different scoreboard durations (weekly, monthly, lifetime) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot (or screenshots) showing the function(s)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/163730545-b8d7039f-1949-43cd-a7b0-0ad0b140fb34.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing first portion of code for top 10 function. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/163730587-2ae711a9-fdcb-42ab-b477-25bdb569c901.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing second portion of code for displaying the top ten scores<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the process of how the code works</td></tr>
<tr><td> <em>Response:</em> <p>The function for this is in the score_helper.php file and uses the duration<br>that is set in the page it is being used to determine the<br>time interval. This one function is used for all 3 of the different<br>time intervals for scores. The first thing the function does is check to<br>see if the variable that is being passed in has a safe value.<br>Since this value will later be used in a SQL statement it is<br>important to safe guard against sql injection. After the value has been confirmed<br>being safe there is a query statement created that uses a join statement<br>to pull the proper username based on the user_id of the score record.<br>Then there is a series of if/ifelse statements to append a where clause<br>to the SQL query. This where clause is used to determine the time<br>period of the records being pulled from this joined table. This uses the<br>dates to determine the period of time for the records. After that there<br>is also a limit and order by score append to return just the<br>ten top scores. After that the query is sent to the database and<br>returned to the original file the function was called from. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/44">https://github.com/Term4K/IT202-006/pull/44</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Home Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the scoreboads, the link to the game and description, and the proper heading</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/163897308-bc01d66b-db7a-4cce-afba-592e6aaf4bf4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the home page with scoreboard, description and proper heading. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/163897381-7e52f88f-86bf-4cd5-b348-2759e493cf82.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the button on bottom that links to the game. Also game<br>is placed in the navbar. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the different pieces are retrieved and shown to the user</td></tr>
<tr><td> <em>Response:</em> <p>The scoreboards are retrieved via the same function that is described above. On<br>the home page there are three divs that each set the duration variable<br>to their respective time intervals. Then in each div the scores_table.php file is<br>required and that generated the tables as seen in the screenshot. In this<br>scores table file first the variable is checked to see if it is<br>one of the pre specified values. After this the title of the table<br>is set and assigned. Then there is an HTML portion that sets up<br>the table in which the data is retrieved from the database using the<br>function in the deliverable above. This data is iterated through and formed into<br>a table. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/45">https://github.com/Term4K/IT202-006/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/home.php">https://pn253-prod.herokuapp.com/Project/home.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/163905495-425d0bdf-217b-47d5-8c9a-ff7b256e4951.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of updated proposal.md file along with all required links, dates, etc.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/163905687-e6dc8d14-f1d1-4eeb-8834-e633fb335bda.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of first four done issues related to milestone2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/163905782-6115f3d4-d71d-47f7-863b-9ce86f6d7776.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing the last issue in done for related milestone2 deliverables. <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-006-S22/it202-milestone-2-arcade-project/grade/pn253" target="_blank">Grading</a></td></tr></table>