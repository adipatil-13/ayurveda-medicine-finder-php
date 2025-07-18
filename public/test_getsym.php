<?php
    require_once('../private/initialize.php');
    require_once(SHARED_PATH.'/header.php');
?>
<div id="content">
    <h1>Find Diseases by Symptoms</h1>
    <form action="test_putdis.php" method="POST" enctype="multipart/form-data">
        <label for="symptoms">Enter Symptom Names (comma-separated):</label>
        <input type="text" name="symptoms" id="symptoms" required>
        <input type="submit" value="Find Diseases">
    </form>
</div>
<?php
    require_once(SHARED_PATH.'/footer.php');
?>