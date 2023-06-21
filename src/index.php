<form action="/" type="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" name="string" id="exampleInputEmail1" placeholder="Enter string">
        <br>
        <small id="string" class="form-text text-muted"><b>Format:</b>Controller/Action/Parameter
        </small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
$str = $_GET['string'];
$str = explode("/", $str);
print_r($str);

?>