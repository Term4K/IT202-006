<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Przemyslaw Narewski(pn253)</td></tr>
<tr><td> <em>Generated: </em> 5/12/2022 9:12:42 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-006-S22/it202-milestone-4-arcade-project/grade/pn253" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168185831-0e2b5c1d-3f05-4935-8235-73f47cdb173e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the visibility column. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168185907-e978bae3-0b5d-461e-8e12-67767625ce8d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the updated profile in the edit view version. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168185978-2808d1ea-b88d-425a-8882-dc4ae9c97bed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of public view without any email showing. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/75">https://github.com/Term4K/IT202-006/pull/75</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/profile.php?id=3">https://pn253-prod.herokuapp.com/Project/profile.php?id=3</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168186241-e066048f-919e-48d4-957f-bdd1ba731e98.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows up as screenshot but should be a link. Here is link as<br>well <a href="https://pn253-prod.herokuapp.com/Project/profile.php?id=3">https://pn253-prod.herokuapp.com/Project/profile.php?id=3</a>. I also put it above in the pull requests portion<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>The public profile uses the GET requests of the url to find the<br>profile that should be displayed. It first pulls the id from URL and<br>checks to see if the user who is viewing the profile is the<br>owner if it is then the $isMe is set to true. This will<br>be used in the HTML with PHP to display certain elements to the<br>user only id they are  logged in as the owner of the<br>profile. This also acts as a check for the edit function so that<br>anyone who does not own the account can not edit it. If the<br>profile is in edit mode a determined by the get variable &quot;edit&quot; then<br>the user is shown with the usual form to change their data. Otherwise<br>the public profile is shown. Also if the profile is set to private<br>via the visibility column of Users table then anyone who is not the<br>owner will be pushed backed to home with a flash message saying the<br>profile is private. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to see their competition history </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of competition history view ( competition name, participant count, reward, the expiry date if active otherwise “expired”, whether or not they are the creator) Demonstrate pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168187052-1018813d-7b52-43ab-8c1e-b7aea7761d4e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the competition history with the pagination on page 1. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168191729-88c68d55-b7a0-4403-ba56-a9afde05509c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the competition history with the pagination on page 2. Noticed that<br>screenshot was wrong so I took another one later and the user had<br>more competitions that&#39;s why there is a 3rd page in the second screenshot.<br><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/77">https://github.com/Term4K/IT202-006/pull/77</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to the related page on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/profile.php">https://pn253-prod.herokuapp.com/Project/profile.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the logic behind generating this view</td></tr>
<tr><td> <em>Response:</em> <p>This is generated the same way that list competitions is generated. It first<br>calls the pagination function which counts the number of competitions that meet the<br>requirement of having the same user_id. After this there is the second query<br>which pulls all the data on the competitions using the LIMIT functionality as<br>well as the ones in which the user_id is correct. The LIMIT functionality<br>is controlled via the GET variable to determine the page number as well<br>as the amount of results to be displayed per page. These values are<br>then used in the query limiting its results depending on what page the<br>paginated table is displaying. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User with the role of admin can edit non-paid out competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/ff0000/000000?text=Incomplete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing the list of competitions the admin can view along with the link to edit it</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the competition edit form</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing related message of not being able to edit a competition that's been paid out</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add before and after screenshots of an edited competition</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 6: </em> Add link to the admin list page and a link to the edit competition edit page</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Add pagination to the active competitions view </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the view showing the pagination working</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168187733-e4f255b4-f8c1-4ad0-89e3-77039a9002e3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the first page of the competitions. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168187902-a1d37eb1-8523-44aa-a222-78ad41dfb700.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the second page of the competitions. Shows pagination working. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/77">https://github.com/Term4K/IT202-006/pull/77</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/list_competitions.php">https://pn253-prod.herokuapp.com/Project/list_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Anywhere username is displayed should link to that user's profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the score boards with the username links</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168188106-003c50ae-3118-4285-aa66-cf8761d2c81a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the username with a link to the user profile. This is on<br>the homepage. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168188200-fc5da515-3cbb-4dfb-abd6-bc6bbe0c1691.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the link to profile in a different location. This is viewing<br>an active competition. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing a public profile of another users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168188272-0237a8c9-fbb5-4f0e-938e-cdc61f0a049f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of another users public profile. Is missing the edit link as user<br>is not owner. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of a private profile or private profile message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168188330-15692549-6dcc-424a-821d-f7364086828d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the flash message when trying to view a profile that is<br>set to private. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/78">https://github.com/Term4K/IT202-006/pull/78</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a link to a public profile</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/">https://pn253-prod.herokuapp.com/Project/</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Competition Scoreboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the view competition page showing an accurate scoreboard for that competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168188705-33c8a217-4390-47f2-b51a-4d5d66a99ebd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the scores for that competition that are accurate. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the code that generates this scoreboard (include ucid and date)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168188813-9cadd986-f1a5-424f-8cc9-239e24e707a4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>First portion of code that is on the actual page that calls for<br>the partial file scores_table.php<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168189005-cc879df4-9e04-4acb-95ed-d25c72a4b25b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of code that calls the function to get the results to be<br>displayed. In this case would be the top ten scores for the competition.<br><br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168189174-9b679585-a084-4cf5-bd84-d40f4463cacf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of function to the top 10 scores for that competition to later<br>be used in the the displaying of the table. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168189256-a12323c3-3e3f-4495-80ea-087ce50d3ff0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the HTML code as well PHP code to display the results<br>in table format. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/76">https://github.com/Term4K/IT202-006/pull/76</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related url(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/view_competition.php?id=18">https://pn253-prod.herokuapp.com/Project/view_competition.php?id=18</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code logic for generating the scoreboard and the approach you took</td></tr>
<tr><td> <em>Response:</em> <p>The scoreboard is generated using the scores_table.php partial file. This first gets the<br>variables set in the original page which include the duration as competition as<br>well as the competition id. This is later used on the scores_table.php file<br>to call the get_top_scores_competion() function to return the top 10 scores for that<br>particular function. After this the HTML and PHP statements generate a table with<br>the data returned by the function. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Game should be fully implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the game in progress</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168189550-b0225850-daed-4e8f-b5af-a40ccb49918e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot before clicking for any cookies. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168189598-3be54397-3e7e-4628-ba7c-60e5bb2ddf54.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the score going up after clicking the cookies some. This is<br>game in progress. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the message showing a score can't be generated when logged in (was recorded in milestone2)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168189787-80512fe1-4769-4041-ac0d-73700b2c6b01.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing that score can&#39;t be saved since user is not logged in.<br><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the message showing score was saved if logged in (was recorded in milestone2)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168189721-b3c8f0ed-c059-4b7d-8292-60f32e92a48f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message showing that the score was saved only if user is logged in.<br><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/42">https://github.com/Term4K/IT202-006/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to game</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/">https://pn253-prod.herokuapp.com/Project/</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic used for showing the related messages</td></tr>
<tr><td> <em>Response:</em> <p>The messages are shown based on if the user is logged in or<br>not. This uses the is_logged_in() function to check if the session is set<br>for the user. The function returns true or false and if it is<br>false then the message is flashed saying user is not logged in and<br>can&#39;t save score. Otherwise the score is saved and messaged is flashed to<br>reflect that. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User's score history will include pagination </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show screenshots of paginated scores</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168190201-a24d8f1f-9b1e-4ffa-b7f5-98906ea2ae84.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The user scores do not need pagination as the history for the user<br>is only 1 as it is persistent. Asked prof about this said I<br>didn&#39;t need to do pagination. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show screenshot if no results are available</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168190201-a24d8f1f-9b1e-4ffa-b7f5-98906ea2ae84.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The user scores do not need pagination as the history for the user<br>is only 1 as it is persistent. Asked prof about this said I<br>didn&#39;t need to do pagination. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/77">https://github.com/Term4K/IT202-006/pull/77</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add link to home page with high score lists</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/home.php">https://pn253-prod.herokuapp.com/Project/home.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to public profile page showing paginated latest scores</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/Project/profile.php?id=3">https://pn253-prod.herokuapp.com/Project/profile.php?id=3</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168191297-5ca9cdc9-0761-4213-ae74-017a94210182.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the proposal.md file filled out for Milestone4<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168191393-37aa3226-0655-4c89-892f-f7113e7a518e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of 1 incomplete and 4 of the done issues. 4/7 done issues<br>shown. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/168191488-1bbe2e58-c95a-4a58-bfd0-7ec10aee3e99.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot showing the 1 incomplete and last 3 that are done issues. 7/7<br>done issues shown. <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-006-S22/it202-milestone-4-arcade-project/grade/pn253" target="_blank">Grading</a></td></tr></table>