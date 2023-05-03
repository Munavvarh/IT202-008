<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Shop Project</td></tr>
<tr><td> <em>Student: </em> Munavvarhusain Bunglawala (mab265)</td></tr>
<tr><td> <em>Generated: </em> 5/3/2023 2:43:07 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-3-shop-project/grade/mab265" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Orders will be able to be recorded </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Orders table with valid data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235832193-895cb3c2-1fcd-41aa-ab1a-ed1f1c8d5c5f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Orders table with valid columns and data filled in <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of OrderItems table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235832301-fc08e325-7e66-4c0b-87e0-bfa8158589e7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing OrderItems table with valid columns and data filled in <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the purchase form UI from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235832465-71bad063-56da-462a-bec8-c024af14b729.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Purchase page with valid table and also filled in checkout form data<br>(part1)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235832622-51801548-bc7f-4592-be7b-2c407e91b0aa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing Purchase page with valid table and also filled in checkout form data<br>(part2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot showing the items pending purchase from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235832733-e51107d5-ba11-4150-8a35-69beb6323d7b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the Item name, desired quantity, unit_cost, subtotal<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235833005-c6b5e63a-39a2-4048-9d4d-30973d04d803.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing If Cart.unit_cost differs from Products.unit_cost display a % change to the user<br>in my case original price of Apple AirPods Pro was 100 now it&#39;s<br>90 so -10%<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235833217-143c1ab0-4cd2-4a83-a16b-0bb733a43fef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show the total purchase price<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235833126-64243ca3-8ae0-4ccf-9ed4-9750a263979c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Include a link back to Cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the Order Process validations from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235833677-2e1b385b-41b7-40ac-9db3-a7e73c04c718.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>clearly showing the code for Verify payment method, Verify paid amount vs cart<br>amount , Verify address pieces (part 1)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235833894-d18d9359-931b-4f9c-971e-3fa8c1d8b4c4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>clearly showing the code for Verify stock/price of items (part 2)  ,<br>also in the else statement showing that I am checking all the condition<br>and if they are valid then only doing insert to table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a screenshot showing the Order Process validations from the UI (Heroku)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235834005-d2ad74a5-5e8f-4b99-870e-78ef57b83cd4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show Price difference message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235834353-1ec42a78-e8a1-49af-917e-439983b3f12f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show unavailable stock message (part 1) showing filled in data  first <br>that I am trying to purchase 2 quantity of HOLLISTER X MIDWEST KIDS<br><br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235834643-124b7637-8fee-42a2-9aaa-05be516754e6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show unavailable stock message (part 2) showing filled in data was checked and<br>because desired_quantity was &gt; stock for HOLLISTER X MIDWEST KIDS it takes user<br>back to cart and notifies them to be able to update quantity <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235834829-4801c8c3-2125-40cb-b374-929eae3b285a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show invalid &quot;Money Received&quot; message (part 1) first showing the data filled in<br>and as you can see I am only 185 and my cart total<br>is 190 so it should reject it <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235834979-c3db839d-e6a1-4a58-8b31-bbb6ef56294e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show invalid &quot;Money Received&quot; message (part 2) showing error message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly describe the code flow/process of the purchase process</td></tr>
<tr><td> <em>Response:</em> <div>I will break it down in steps that I took to cover this<br>code.&nbsp;</div><div><br></div>1) Verifying that the form has been submitted and that the payment method<br>and amount are appropriate.&nbsp; -&gt; from code perspective using post method<div>2) Retrieve the<br>items in the user's shopping cart and calculate the total cost&nbsp; -&gt; from<br>code perspective using for loop and iterating over stuff fetched from database tables</div><div>3)<br>Validate shipping address forms and, if necessary, give error messages using flash&nbsp; &nbsp;-&gt;<br>from code perspective just basic php checking and validation&nbsp;</div><div>4) Add a new order<br>record to the Orders table, including the user ID, payment method, amount received,<br>and shipment address.&nbsp;&nbsp;</div><div>5)&nbsp; Retrieve the new order ID and add each cart item<br>to the OrderItems table as a new record. Reduce the quantity purchased to<br>update stock for each product in the cart.&nbsp;</div><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/58">https://github.com/Munavvarh/IT202-008/pull/58</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mab265-prod.herokuapp.com/project/cart_alt.php">https://mab265-prod.herokuapp.com/project/cart_alt.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mab265-prod.herokuapp.com/project/purchase.php?id=13">https://mab265-prod.herokuapp.com/project/purchase.php?id=13</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Order Confirmation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot showing the order details from the purchase form and the related items that were purchased with a thank you message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235835488-1267febf-b487-4669-a31c-9d81dcd265c2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>part 1 here just filling the checkout form for sake of showing it<br>worked in next two screenschots from order_confirmation page and Order / OrderItems table<br>that it was added<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235835663-3c870d3d-1920-4832-8c20-1e626703837e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing Including the cost of each line item and the total value, <br>purchased (payment method) and how much they paid,  shipping info , Thank<br>you message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235835857-d851e10e-d393-4eda-b9c9-cd23c9d9d34a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing proof from OrderItems Table <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235835957-70da2e04-1f9c-4511-b4a3-12f3a297d960.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing proof from Orders Table <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how this information is retrieved and displayed from a code logic perspective</td></tr>
<tr><td> <em>Response:</em> <p>Firstly, retrieves and displays order details for a logged-in user. checks if the<br>user is logged in by calling the is_logged_in() function. The $db variable is<br>then assigned the database connection by calling the getDB() function. The $_GET is<br>used to obtain the order_id from the URL. The SELECT statement in the<br>first prepared statement is then executed to retrieve the order details from the<br>Orders table, and the result is assigned to the $order variable. If the<br>$order variable is invalid in a sense that if the order does not<br>exist or the user is unauthorized), a message is flashed to the user<br>indicating that the order ID is invalid or that access is unauthorized using<br>flash(). The second prepared statement is then executed to retrieve the order items<br>for the given order ID from the OrderItems table and the related Products<br>table using a join statement. The results are stored in the $order_items variable<br>as an array of associative arrays. A table is then displayed to the<br>user containing the details of everything.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/59">https://github.com/Munavvarh/IT202-008/pull/59</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mab265-prod.herokuapp.com/project/order_confirmation.php?id=26">https://mab265-prod.herokuapp.com/project/order_confirmation.php?id=26</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to see their Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history for a user</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235836175-af72ba29-5f71-409b-995a-ccfc10618eb9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the purchase_history page with relevent data and link to goto order_details.php page<br>to know more about purchased item<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235838379-a109b094-ac74-4101-b949-493d1d3fffd1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing proof from different user named abrar<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235836331-3182ae94-0005-4ba3-88ba-3a03eb87e8c9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing full details of a purchase Order Details Page <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235838502-db50fe74-a1d9-4778-aa9e-84f68e036e4c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing full details of a purchase Order Details Page (user abrar)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details</td></tr>
<tr><td> <em>Response:</em> <p>here displaying the purchase history of the logged-in user. It retrieves the order<br>information from the database and displays it in a table with columns for<br>Order ID, Item Count, Total Price, Created At, and More Details. The More<br>Details link takes the user to the order_details.php page, which displays information about<br>the specific order using logged in user id to see their applicable orders<br>on purchased history page but when clicking on more details link showing specific<br>order details using order_id.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/60">https://github.com/Munavvarh/IT202-008/pull/60</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mab265-prod.herokuapp.com/project/purchase_history.php">https://mab265-prod.herokuapp.com/project/purchase_history.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mab265-prod.herokuapp.com/project/order_details.php?id=26">https://mab265-prod.herokuapp.com/project/order_details.php?id=26</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history from multiple users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235837214-d5b46cf6-5dc3-4183-afa9-197a46cf81a5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing purchase history from multiple users when logged in as admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235837415-5c993c4e-79cc-4450-a863-b62d35923e25.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing order details of user muna who is not an admin user<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235837544-5d218ad7-0852-4cfc-b168-a7e3e7ac4565.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing order details of user abrar who is also clearly not an admin<br>user<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235837786-d5d800ee-5575-46fe-b67d-0c79c7c2d53a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>just showing proof of code as well how I am checking if logged<br>in user is admin if then I allow it to check all the<br>users order details / purchase history otherwise reject it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details (mostly how it differs from the user's purchase history feature)</td></tr>
<tr><td> <em>Response:</em> <p>here showing that the purchase history of all users but only the admin<br>user can see everything. It fetches order information from the database, including the<br>user who placed the order&#39;s username, and shows it in a table similar<br>to the user&#39;s buy history page. This page&#39;s More Details link also redirects<br>the user to the order_details.php page, which displays information on the specific order.<br>The main distinction is that the admin user can access all users&#39; buy<br>histories, whilst regular users can only see their own purchase histories and if<br>they try to acess someone else purchased history it will show them appropriate<br>message and redirect to home page.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/60">https://github.com/Munavvarh/IT202-008/pull/60</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/61">https://github.com/Munavvarh/IT202-008/pull/61</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mab265-prod.herokuapp.com/project/admin/all_purchase_history.php">https://mab265-prod.herokuapp.com/project/admin/all_purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart page showing the button to place an order</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235838689-0890aedb-c5ca-477f-9277-ad5559bf9151.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>clearly showing purchase button to place an order<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/235847336-3a26aa10-605e-4310-a3a9-80852a128801.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing all issues have been taken care of everything is done <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-3-shop-project/grade/mab265" target="_blank">Grading</a></td></tr></table>