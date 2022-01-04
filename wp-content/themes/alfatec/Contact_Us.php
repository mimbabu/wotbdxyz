<?php 
/**
 Template Name: Contact Us
 Displays Only Contact Us Template

 *@package Wordpress
 * @subpackage webite
 * @since website 1.0
*/
get_header();

?>


<div class="jumbotron jumbotron-fluid">
  
    <p>Contact Us</p>      

</div>

<div class="contct-heding">

<h3>Contact </h3>
</div>





<div class="container_contct">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Position</label>
     <input type="text" id="lname" name="lastname" placeholder="Your Position..">
    

    <label for="country">Company</label>
     <input type="text" id="lname" name="lastname" placeholder="Your Company..">
    

    <label for="country">Address</label>
     <input type="text" id="lname" name="lastname" placeholder="Your Address..">
    

    <label for="country">City</label>
     <input type="text" id="lname" name="lastname" placeholder="Your City..">
    

    <label for="country">Region</label>
     <input type="text" id="lname" name="lastname" placeholder="Your Region..">
    

    <label for="country">Country</label>
     <input type="text" id="lname" name="lastname" placeholder="Your Country..">


      <label for="country">Postal Code</label>
     <input type="text" id="lname" name="lastname" placeholder="Your Postal code..">


      <label for="country">Telephone Number</label>
     <input type="text" id="lname" name="lastname" placeholder="Your Telephone Number..">

      <label for="country">Fax Number</label>
     <input type="text" id="lname" name="lastname" placeholder="Your Fax Number..">

      <label for="country">Email</label>
       <input type="text" id="lname" name="lastname" placeholder="Your Fax Email..">

    <label for="subject">Informations for products:</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>





 <?php get_footer();?>
