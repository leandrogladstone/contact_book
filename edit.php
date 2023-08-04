<?php
include_once("templates/header.php");
?>

    <div class="container">    

       <?php include_once("templates/backbtn.html"); ?>

       <h1 id="main-title">Edite Contact</h1>

       <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">

       <input type="hidden" name="type" value="edit">
       <input type="hidden" name="id" value="<?= $contact['id'] ?>">

       <div class="form-group">

        <label for="name">Name Contact:</label>

        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?= $contact['name'] ?>" required>

       </div>
       <div class="form-group">

        <label for="phone">Phone:</label>

        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone"  value="<?= $contact['phone'] ?>" required>
        
       <div class="form-group">

        <label for="observations">Observations:</label>
        
        <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insert a note" rows="3" >"<?= $contact['name'] ?>"</textarea>

       </div>

       <button type="submit" class="btn btn-primary">Register</button>
       </form>    
    </div>  
<?php 
include_once("templates/footer.php");
?>