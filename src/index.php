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
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off')
    || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo "The URL of current page: " . $CurPageURL;
echo "<br>";

$str = $_GET['string'];
$str = explode("/", $str);
echo "<pre>";
print_r($str);

?>