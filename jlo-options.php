<?php
	if (!current_user_can('manage_options')) {
    wp_die('You do not have sufficient permissions to access this page.');
}

?>
 <div class="wrap">
        <?php screen_icon('plugins'); ?> <h2>Jason LD Organization</h2>
<?php
 if (isset($_POST["update_settings"])) {
    // Do the saving
    $name = esc_attr($_POST["name"]);   
update_option("jlo_name", $name);
    $telephone = esc_attr($_POST["telephone"]);   
update_option("jlo_telephone", $telephone);
    $faxNumber = esc_attr($_POST["faxNumber"]);   
update_option("jlo_faxNumber", $faxNumber);
    $email = esc_attr($_POST["email"]);   
update_option("jlo_email", $email);
?>
<div id="message" class="updated">Settings saved</div>
<?php
}
  $name = get_option("jlo_name");
  $telephone = get_option("jlo_telephone");
  $faxNumber = get_option("jlo_faxNumber");
  $email = get_option("jlo_email");
?>
        <form method="POST" action="">
        	<input type="hidden" name="update_settings" value="Y" />
            <table class="form-table">
            	
                <tr valign="top">
                    <th scope="row">
                        <label for="name">
                          Name
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="name" required value="<?php echo $name; ?>" size="25" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="telephone">
                          Telephone
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="telephone"  value="<?php echo $telephone; ?>" size="25" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="faxNumber">
                          Fax Number
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="faxNumber"  value="<?php echo $faxNumber; ?>" size="25" />
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="email">
                          email
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="email"  value="<?php echo $email; ?>" size="25" />
                    </td>
		</tr>
                <tr>
                	<td colspan="2"> <p>
    <input type="submit" value="Save settings" class="button-primary"/>
</p></td>
                </tr>
            </table>
        </form>
    
    
    </div>
    
