<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating the Item</title>
</head>
<body>
    <h1>Update the item</h1>
    <form method="POST">
        <input type="text" placeholder="Enter Your Item Name" name="item1" value=<?php print_r($toPopulateData[0]->item1); ?>>
        <input type="number" placeholder="Enter the price of the item" name="price" value=<?php print_r($toPopulateData[0]->price); ?>>
        <input type="text" placeholder="Enter the colour of the item" name="colour" value=<?php print_r($toPopulateData[0]->colour); ?>>
        <input type="number" placeholder="Enter the qty of the items" name="qty" value=<?php print_r($toPopulateData[0]->qty); ?>>
        <input type="submit" value="Update Item">
    </form>

    <a href="<?=base_url();?>/Home2/itemview">Go Back</a>
    
</body>
</html>