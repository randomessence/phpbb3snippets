open the file `includes/ucp/ucp_register.php`

find the line

`$agreed	 = (!empty($_POST['agreed'])) ? 1 : 0;`

it is around line 41

change it to 

`$agreed	 = 1;`
