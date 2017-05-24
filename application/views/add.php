<?php include("header.php") ?>

<div class="container" style="width: 600px;margin-top: 100px;">
    <h2>Ajouter un nouveau reunion</h2>
    <form action="/action_page.php">
        <div class="form-group">
            <label for="Object">Object:</label>
            <input type="text" class="form-control" id="Object" placeholder="Enter Object" name="Object">
        </div>
        <div class="form-group">
            <label for="Type">Type:</label>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Type
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">reunion S1</a></li>
                    <li><a href="#">reunion S1</a></li>
                    <li><a href="#">reunion S3</a></li>
                </ul>
            </div>        </div>
        <div class="form-group">
            <label for="pwd">Date:</label>
            <input type="Date" class="form-control" id="pwd" placeholder="Enter Date" name="Date">
        </div>
        <div class="form-group">
            <label for="Participants">Participants:</label>
            <input type="text" class="form-control" id="Participants" placeholder="Enter Participants" name="Participants">
        </div>
        <div class="form-group">
            <label for="crr">Compte rendue de la reunion:</label>
            e
            <input type="text" class="form-control" id="crr" placeholder="Enter crr" name="crr">
        </div>
        <button type="submit" class="btn btn-default">Ajouter</button>
        <button type="submit" class="btn btn-warning" style="margin-left: 22px">Modifier</button>
    </form>
</div>

<?php include("footer.php")?>