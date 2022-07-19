<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php  
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>
	<!-- START HTML FORM -->
	<form id="contactForm" action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
		<table id="formTable">
			<tr>
				<td><label for="name">Name:</label></td>
				<td><input id="name" type="text" name="Name" required="required" placeholder=" e.g. Your Name" title="Please enter your name" tabindex="10" size="50%" autofocus></td>	
			</tr>
			<tr>
				<td><label for="email">Email:</label></td>
				<td><input id="email" type="email" name="Email" required="required" placeholder=" e.g. username@domain.com" title="Please enter a valid email address" tabindex="20" size="48"></td>
			</tr>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->	
			<tr>
				<td class="topAlign"><label for="message">Message:</label></td>
				<td><textarea id="message" name="Message" rows="10" placeholder=" Type your message here..." tabindex="30"></textarea></td>
			</tr>
		</table><br />
    	<fieldset>
    		<legend>How would you rate my site? <em>(Optional)</em></legend>
			<table id="ratingTable">
				<thead>
					<tr>
						<th><input id="terrible" type="radio" name="rating" value="0"></th>
						<th><input id="poor" type="radio" name="rating" value="1"></th>
						<th><input id="meh" type="radio" name="rating" value="2" tabindex="50"></th>
						<th><input id="good" type="radio" name="rating" value="3"></th>
						<th><input id="great" type="radio" name="rating" value="4"></th>
					</tr>			
				</thead>
				<tbody>
					<tr>
						<td><label for="terrible">Terrible!</label></td>
						<td><label for="poor">Poor.</label></td>
						<td><label for="meh">Meh...</label></td>
						<td><label for="good">Good.</label></td>
						<td><label for="great">Great!</label></td>
					</tr>
				</tbody>
			</table>			
    	</fieldset>
    	<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div><br /> 
		<input id="contact" type="submit" value="Submit">
    </form>
	<!-- END HTML FORM -->
