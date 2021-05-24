<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>


        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
<?php
//when the button is clicked
        if(isset($_POST['showbtn'])){

            $conn = mysqli_connect("localhost","root","","mycrud") or die("duh ");
    //from url GET  is super global variable 
    //we get id from change smade in url of chANGE ID
    $stu_id = $_POST['sid'];
    //run a query to get the required id
    $sql="SELECT * FROM student WHERE sid = {$stu_id}";
    $result = mysqli_query($conn , $sql) or die( "check query");
    
        if(mysqli_num_rows($result)>0){
//if any record gets fetched 
        while($row = mysqli_fetch_assoc($result)){

//using updatedata.php in action for the next form which will run the update query
?>


    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid'] ?>" />
            <input type="text" name="sname" value="<?php echo $row['sname'] ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['sadress']; ?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <?php 
      $sql1 ="SELECT * FROM studentclass";
      //to run this query use mysqliquery
$result1 = mysqli_query($conn , $sql1) or die("failed");
    
if(mysqli_num_rows($result1)>0){

echo "<select name='sclass'>";

while($row1 = mysqli_fetch_assoc($result1)){
    //to display whats selected 
if($row['sclass']== $row1['cid']){
$select = "selected";
}
else{
$select ="";
}
    echo "<option {$select} value='{$row1['cid']}'> {$row1['cname']} </option>";
}
?>
          

              
        </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['sphone'];?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php }}} }?>
</div>
</div>
</body>
</html>