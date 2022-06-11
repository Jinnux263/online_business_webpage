<?php include APP_ROOT."/src/includes/header.php"; ?>

<pre><?php echo 'Number of row in table is:';
    print("\n");
    foreach($brands as $row) {
        print_r($row['brand_title']);
        print("\n");
        // do something with each row
    }?>
</pre>
<?php include APP_ROOT."/src/includes/footer.php"; ?>