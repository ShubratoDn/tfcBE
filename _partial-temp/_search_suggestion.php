
<?php 


    if(isset($_POST['search'])){

        $search = $_POST['search_item'] ;
        $search = filter_var($search, FILTER_SANITIZE_STRING);

        $srch_sql = "SELECT * FROM `item_info` WHERE item_name='$search'";
        $srch_result = mysqli_query($con, $srch_sql);

        if(mysqli_num_rows($srch_result)>0){
            $srch_row = mysqli_fetch_assoc($srch_result);
            $srch_id = $srch_row["item_id"];

            ?>

                <script>
                    location.replace("<?php echo $adRedirect.'item.php?item_id='.$srch_id ?>");
                </script>

            <?php
        }else{
            ?>
                <script>
                    location.replace("found_nothing.php");
                </script>
            <?php
        }
    }




?>

<!-- ==============SEARCH BAR STARTS==============  -->
<form action="#" method="POST" class="searchbar">
    <!-- Search bar -->
    <div class="search-group d-flex">
        <input autocomplete="off" name="search_item" list="search_sug" type="text" placeholder="Search food" class="search-input">
        <button type="submit" name="search" class="fa fa-search search-btn">
    </div>
</form>

<datalist id="search_sug">
    <?php
        //FOR GETTING THE SUGGESTION 
        $sug_sql = "SELECT * FROM `item_info` ";
        $sug_result = mysqli_query($con, $sug_sql);
        if(mysqli_num_rows($sug_result)>0){
            while($sug_row = mysqli_fetch_assoc($sug_result)){
                echo '<option value="'.$sug_row['item_name'].'"></option>';
            }
        }

    ?>
</datalist>
<!-- ==============SEARCH BAR STARTS==============  -->