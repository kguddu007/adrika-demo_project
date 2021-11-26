<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying item list</title>
</head>
    <body>
        <h1>Displaying the item list here</h1>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>color</th>
                <th>qty.</th>
            </tr>
            <?php foreach($item_array as $item){ ?>
            <tr>
            <td><?Php echo $item->item1;?></td>
            <td><?Php echo $item->price;?></td>
            <td><?Php echo $item->colour;?></td>
            <td><?Php echo $item->qty;?></td>
            </tr>
            <?php }
            ?>
        </table>
        <button onclick="onButtonClick()">Add Items</button>

                <script>
                    function onButtonClick(){
                        window.location.href="http://127.0.0.1/first-project/public/Home2/addItemForm";
                    }
                </script>

    </body>
</html>