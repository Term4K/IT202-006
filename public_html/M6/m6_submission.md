<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Przemyslaw Narewski(pn253)</td></tr>
<tr><td> <em>Generated: </em> 3/24/2022 1:36:38 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-006-S22/hw-html5-canvas-game/grade/pn253" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Create a branch for this assignment called <em>M6-HTML5-Canvas</em></li>
<li>Pick a base HTML5 game from <a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li>
<li>Create a folder inside public_html called  <em>M6</em></li>
<li>Create an html5.html file in your M6 folder (do not put it in Project even if you&#39;re doing arcade)</li>
<li>Copy one of the base games (from the above link)</li>
<li>Add/Commit the baseline of the game you&#39;ll mod for this assignment <em>(Do this before you start any mods/changes)</em></li>
<li>Make two significant changes<ol>
<li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li>
<li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li>
<li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li>
</ol>
</li>
<li>Evidence/Screenshots<ol>
<li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li>
<li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li>
<li>Remember to include your ucid/date as comments in any screenshots that have code</li>
<li>Ensure your screenshots load and are visible from the md file in step 9</li>
</ol>
</li>
<li>In the M6 folder create a new file called m6_submission.md</li>
<li>Save your below responses, generate the markdown, and paste the output to this file</li>
<li>Add/commit/push all related files as necessary</li>
<li>Merge your pull request once you&#39;re satisfied with the .md file and the canvas game mods</li>
<li>Create a new pull request from dev to prod and merge it</li>
<li>Locally checkout dev and pull the merged changes from step 12</li>
</ol>
<p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>I choose to modify Pong. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://pn253-prod.herokuapp.com/M6/pong.html">https://pn253-prod.herokuapp.com/M6/pong.html</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Term4K/IT202-006/pull/28">https://github.com/Term4K/IT202-006/pull/28</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>I changed the way the score works in the game. The faster the<br>ball is moving the more the person scores. The initial speed of the<br>ball is 2 so if the person does not move at all and<br>get scored on then the person who scored gets a 2. This is<br>done by using trig to calculate the total speed of the ball then<br>the floor of that value it taken and added to the score of<br>the person who scored. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/159768204-7706d385-0f74-440a-b53d-4bf1d91413e9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is score after the bot scored once. I am attempting to show<br>change in score based on speed. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/159768377-daad6a1f-0e99-4484-b875-6e4958919b85.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is a screenshot after the bot scored one other time. I also<br>managed to volley a couple times and thus increased my score to the<br>same amount in only one score. I was able to match the bot<br>score by scoring only once since the ball was moving faster.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/159975535-8f0646dd-2d20-4270-8487-b5da26218d28.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is showing the code for the score increase. I used trig to<br>get the total speed of the ball and used the floor of that<br>value to add it to total score. <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>I added buttons under the pong game canvas to provide the user with<br>a choice of difficulty. These buttons change the value for which the AI<br>can see. By increasing the viewing distance of the AI bot it will<br>be more difficult to score points. I also added text to the canvas<br>between the scores to notify the user of the current game difficulty as<br>well. <br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/159973464-2a8fd706-cd11-4601-b349-9d23423aabcd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows that game is initialized with normal mode and the buttons below the<br>canvas. Also shows the text on the canvas showing the difficulty. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/159973739-445c51c9-5ddf-4d8c-9c1c-308111ab2bc0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the game after extreme mode had been selected. The only visible change<br>in the still image is the mode text in the canvas. In reality<br>the bot now follows the ball exactly as it moves up and down.<br><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/159974258-4415a33c-a890-4b8e-952e-6f5175435bb7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the code for adding the buttons below the canvas as well as<br>what they invoke. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/159974633-9af37645-2fec-4889-9d96-28dcbf07a1d9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the function that is called by the buttons. This actually changes the<br>difficulty of the AI as well as sets a variable with the name<br>of the difficulty. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/61835121/159975027-8decdd84-b068-4aaa-95ca-4027168d9d51.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the code that outputs the current mode to the canvas between the<br>scores. Uses the variable set in function for the actual mode.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>I learned how Canvas works in HTML5. Before this homework and the reading<br>I did not know how the games are drawn and logic is implemented.<br>It was also interesting playing around with how the logic works in terms<br>of the coordinate system and scoring in pong. I also learned how these<br>types of games actually function. I would have never guessed that they are<br>run on a loop in which the functions are called to check conditions<br>and redraw the positions of the objects on the screen. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-006-S22/hw-html5-canvas-game/grade/pn253" target="_blank">Grading</a></td></tr></table>