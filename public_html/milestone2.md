<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Munavvarhusain Bunglawala (mab265)</td></tr>
<tr><td> <em>Generated: </em> 4/26/2023 12:11:15 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-shop-project/grade/mab265" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234435649-1798e57b-6f26-425f-bec5-4291c49c9448.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing image of creating product through admin access <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234435897-d4aae9fe-9aef-444f-a56c-230e26583e8c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the Products Table with valid columns and data filled in <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p><b>Note I forgot to do the Filter/Sort logic on Shop page in the<br>beginning&nbsp;so some branches might not have it but Milestone2 branch is up to<br>date with everything&nbsp;</b><div><br></div><div>The code shows that only admin users can add a new<br>Product to the database via a form, which is processed and saved to<br>the &quot;Products&quot; table when the form is submitted.<br></div><div>The high-level steps for adding a<br>new product are: 1) User fills out the form with product details, 2)<br>User clicks the &quot;Create&quot; button to submit the form data, 3) The PHP<br>script validates user permissions and processes the form data, 4) The script saves<br>the form data to the &quot;Products&quot; table in the database with it&#39;s respective<br>fields and records.<br></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/41">https://github.com/Munavvarh/IT202-008/pull/41</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mab265-prod.herokuapp.com/project/admin/add_item.php">https://mab265-prod.herokuapp.com/project/admin/add_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234436441-84cfe735-b8f6-44e9-a294-c7d3e36001e4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing shop page with 10 sample items<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234436612-8227ed90-d32b-48d2-8ddd-ce54a6cc719a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the partial match with name filter<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234436776-585988a1-e0ce-49db-9771-1bb05a556792.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the match with category filter<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234436918-0703cd94-398f-4329-97f0-acea61f89563.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Sorting the products by price Low to High <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234437022-6409b9a6-9156-43dc-9fde-e53817fa3a9b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Sorting the products by price High to Low <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234437173-f0126b69-a6dd-401a-aebf-6c0caf050d0f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the code for filter/sort logic on the shop page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>When a form is submitted, the values entered by the user in the<br>form fields are sent to the server in the form of an HTTP<br>POST request. Then filters are applied by checking if the $_POST variables &quot;itemName&quot;<br>and &quot;itemCategory&quot; are set. If they are set, the SQL statement is modified<br>to include a LIKE clause for the name and to check the category.<br>Additionally, the results can be sorted by price in ascending or descending order,<br>based on the value of the $_POST variable &quot;sortByPrice&quot;. If &quot;asc&quot; is selected,<br>the results are ordered by unit_price in ascending order, and if &quot;desc&quot; is<br>selected, they are ordered in descending order.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/42">https://github.com/Munavvarh/IT202-008/pull/42</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/44">https://github.com/Munavvarh/IT202-008/pull/44</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mab265-prod.herokuapp.com/project/shop.php">https://mab265-prod.herokuapp.com/project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234437708-9bc2e344-4385-4fd4-bfb5-adde61a41060.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing Admin/Shop Owner Product List page with data<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234437799-e60f6866-dcef-4cb1-bd44-62305684cb90.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing filter logic works on Admin/Shop Owner Product List page as well<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234437941-0e5a7978-4b16-40a4-8d56-0c5583f752cd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing sort logic works on Admin/Shop Owner Product List page as well<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>The database query logic in this code is used to retrieve records from<br>the &quot;Products&quot; database table. The query sorts the results depending on the &quot;itemName&quot;<br>and &quot;itemCategory&quot; POST parameters. It also has an optional sorting parameter &quot;sortByPrice&quot; that<br>allows you to sort the results by unit price in ascending or decreasing<br>order. The query retrieves up to 50 records and returns them in the<br>form of an associative array. Any failures that occur during query execution are<br>recorded and an error message is displayed. This code on admin/item_list.phpcreates page that<br>displays objects from the &quot;Products&quot; database table. Also, to view the page, the<br>user must have the &quot;Admin&quot; role. It takes search filters from a submitted<br>form (item name, category, and price sort order) and runs a SQL query<br>to find products that fit the filters. The results are displayed in a<br>table, and the admin can edit a specific item by clicking a &quot;Edit&quot;<br>link. A flash is produced if no results are found.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/42">https://github.com/Munavvarh/IT202-008/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mab265-prod.herokuapp.com/project/admin/list_items.php">https://mab265-prod.herokuapp.com/project/admin/list_items.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234438262-9387a724-aea5-4b11-8074-d5853ba6a9c5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> showing the edit button visible to the Admin on the Shop page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234438371-82fd10ba-0774-4509-a66b-7e099fae59d6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the edit button visible to the Admin on the Product Details Page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234438439-4328b3fe-d2df-4802-ad65-9b1672cdb6d1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> showing the edit button visible to the Admin on the Admin Product<br>List Page via admin access <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234438650-e756d6be-1733-4dd6-ac9d-060bc58ee89c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> showing before screenshot of Editing a Product via the Admin Edit Product<br>Page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234438809-c581f136-771c-4ba5-9f68-44bc2d422f3a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p> showing after screenshot of Editing a Product via the Admin Edit Product<br>Page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234438878-cdd24b73-c01e-4c74-8575-c688af93dabe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing proof via product details page that it indeed updated stuff via admin<br>edit access and I changed description/stock as seen in before/after image<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>This code on admin/edit_item.php is to accesses the data from the &quot;Products&quot; table<br>of the MySQL database in order to display a form for modifying a<br>product. When a user submits the form, the database item is updated with<br>the fresh data. It checks the admin access first then fetches the table&#39;s<br>columns, skipping over some of them like &quot;id,&quot; &quot;modified,&quot; and &quot;created.&quot; The record<br>to be modified is then retrieved from the database by the code, and<br>using input_map(), the fetched fields are converted to input types. Finally, it shows<br>a form with pre-filled information, which when submitted updates the database record for<br>the object.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/42">https://github.com/Munavvarh/IT202-008/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mab265-prod.herokuapp.com/project/admin/edit_item.php?id=4">https://mab265-prod.herokuapp.com/project/admin/edit_item.php?id=4</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234439298-8c973307-7f96-499b-a4fd-ec3313bc8c9b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing details button is available on the shop page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234439385-5136fc3b-6352-4c55-9613-fd91db383c20.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing details button is available on the public shop page as well<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234439604-df9ce26e-e66a-4010-8a16-8db4973c7ae1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing result of clicking details button from admin access/user  shop page <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234439484-1631cfc6-1939-4b95-b284-8f4fda157aa5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing result of clicking details button from public shop page <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>Firstly this is very similar to admin/edit_items.php page the logic here is that<br>code retrieves the data of a specific product from the &quot;Products&quot; table of<br>a MySQL database and displays it on a page. It also has a<br>button to edit the product information, which is only visible to users with<br>the &quot;Admin&quot; role. The fetched columns are mapped to input types using the<br>input_map() function and the values are displayed on the page using a loop.<br>If there is an error in fetching the data, a message is displayed<br>using the flash.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/42">https://github.com/Munavvarh/IT202-008/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mab265-prod.herokuapp.com/project/product_details.php?id=8">https://mab265-prod.herokuapp.com/project/product_details.php?id=8</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234439816-80a8c14d-8707-4962-92a6-43ca50c98ea8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing screenshot of the success message of adding to cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234439913-6057ee6e-45c5-4931-a4af-79197293a216.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the error message of adding to cart when not logged in<br>meaning from public shop page and then it redirects to login.php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234440259-2e752c7b-482e-4314-9fb2-bd37e7f460d8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing screenshot of the Cart table with data in it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p><span style="letter-spacing: 0.09996px;">1 cart per user</span><div><span style="letter-spacing: 0.09996px;">In my code there is only<br>one cart per user, as it queries the database for cart items that<br>belong to the current user using their user ID.</span><br></div><div><span style="letter-spacing: 0.09996px;"><br></span></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>The process of adding an item to the cart involves sending a POST<br>request to the server with the relevant details of the product, such as<br>the product ID and the desired quantity. The server then processes the request<br>by inserting the item into the database using query and specific switch cases<br>such as &quot;add&quot; or &quot;update&quot; if it is not already in the cart<br>or updating the quantity of the item if it is already in the<br>cart. The server then sends a response to the client, indicating the success<br>or failure using flash<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/43">https://github.com/Munavvarh/IT202-008/pull/43</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234440509-a9f5c3cf-4d6b-489e-8f86-22819894a014.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing Screenshot of the Cart View it covers everything from subtotal of each<br>item, cart total, details page link, multiple products in the cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>This code in the cart file is used calculates the subtotal and total<br>cost of the items in the cart. It uses a table called Product_Cart<br>to store the user&#39;s cart items with columns for id, product_id, desired_quantity, unit_price,<br>and user_id. The code allows the user to add, update, delete or clear<br>items in their cart by inserting, updating or deleting rows in the Product_Cart<br>table. The code fetches the cart items from the table, joins it with<br>the Products table to get the name and stock of the product and<br>calculates the product&#39;s subtotal as the product of its unit price and desired<br>quantity, which is then used to calculate the subtotal and added all of<br>them subtotals up to show total cost of the cart.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/43">https://github.com/Munavvarh/IT202-008/pull/43</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mab265-prod.herokuapp.com/project/cart_alt.php">https://mab265-prod.herokuapp.com/project/cart_alt.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234440858-c3b9d0f2-e17f-445f-8c02-e43c0b1ce8a8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing a before Screenshot of Cart Quantity update <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234441032-9f22a702-1446-4fdf-b122-92bd977eeee8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing a after Screenshot of Cart Quantity update for Apple aripods pro to<br>5 as you can see how pricing is changed accordingly as well<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234440858-c3b9d0f2-e17f-445f-8c02-e43c0b1ce8a8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing a before Screenshot of Cart Quantity to 0 <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234441764-5a650d92-58d9-4467-ba63-d058488f8284.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing a after Screenshot of Cart Quantity update to 0 for Apple aripods<br>pro <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234442165-83a09e9e-3179-4137-a96d-d2b90154bb0a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>(Part 2)Showing a after Screenshot of Cart Quantity update to 0 for Apple<br>aripods pro  and when clicked it removed the item from the cart<br>because update qunatity=0<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234442370-520e7f09-eeb1-41ef-8aab-375eb6ccfc99.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the error by client side if item has set negative quantity <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <div>Explanation :</div><div><br></div><div>first we get the desired_quantity which is pretty simple&nbsp;$desired_quantity = se($_POST, "desired_quantity",<br>0, false);</div><div>Then&nbsp;</div><div>1)&nbsp;If the quantity is 0: When the user updates the desired quantity<br>of an item in their cart, if the value entered is 0, it<br>means they want to remove that item from their cart. The code then<br>runs a delete query to remove that item from the Product_Cart table. The<br>code for this is starting with the if statement in the case "update"&nbsp;</div><div><br></div><div>2)<br>the negitives are handled in the same way just difference is if the<br>quantitiy is negitive we show the user error message from client side instead<br>of removing the item .</div><div><br></div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/43">https://github.com/Munavvarh/IT202-008/pull/43</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234440858-c3b9d0f2-e17f-445f-8c02-e43c0b1ce8a8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the before screenshot of deleting a single item from the Cart <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234442867-111f0d60-5cf4-4a1a-a605-cc14c78d461e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the after screenshot of deleting a single item from the Cart Apple<br>Airpods Pro <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234440858-c3b9d0f2-e17f-445f-8c02-e43c0b1ce8a8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the before screenshot of clearing the cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234443132-a91809fb-ddc2-4bb2-9c4b-be12dc55cd0b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the after screenshot of clearing the cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>There is 3 delete processes overall in this file.&nbsp;<div><br></div><div>1) If the quantity is<br>0&nbsp;</div><div>2) if user selects specific item to remove&nbsp;</div><div>3) if users clicks clear cart<br>button&nbsp;</div><div><br></div><div>Explanation :</div><div>1)&nbsp;If the quantity is 0: When the user updates the desired quantity<br>of an item in their cart, if the value entered is 0, it<br>means they want to remove that item from their cart. The code then<br>runs a delete query to remove that item from the Product_Cart table. The<br>code for this is starting with the if statement in the case &quot;update&quot;&nbsp;</div><div>2)If<br>user selects specific item to remove: If the user clicks the delete button<br>next to an item in their cart, the code executes a delete query<br>to remove that item from the Product_Cart table. The code for this is<br>in the case &quot;delete&quot;</div><div>3)If users click the clear cart button: If the user<br>clicks the &quot;Clear Cart&quot; button, the code executes a delete query to remove<br>all items from the Product_Cart table. The code for this is in the<br>case &quot;clear&quot;</div><div><br></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/43">https://github.com/Munavvarh/IT202-008/pull/43</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Munavvarh/IT202-008/pull/44">https://github.com/Munavvarh/IT202-008/pull/44</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234467530-3061c1c6-406c-46c0-ac52-ae73b1b20755.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing screen shots of issues from Milestone2 everything is done sucessfully <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/98997616/234467764-adf4ae7d-6047-4d22-bd3f-07f9f021fed1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing screen shots of issues from Milestone2 everything is done successfully  (part<br>2)<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-shop-project/grade/mab265" target="_blank">Grading</a></td></tr></table>