<?php require_once '../app/views/templates/header.php'?>
<h2>finde reminders</h2>
    
    <form action="/report/FindR" method="post" >
    <input class="form-control" placeholder="2010/4/4" type="text" name="date">
    <button type="submit" name = "Search" class="btn btn-outline-secondary">Search</button>
</form>
<?php require_once '../app/views/templates/footer.php' ?>