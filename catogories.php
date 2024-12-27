<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Page</title>
    <link rel="stylesheet" href="catogories.css">
</head>
<body>
    <div class="container">
        <h1>Categories</h1>
        <ul id="categoryList">
            <?php
            $categories = ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5'];
            
            foreach ($categories as $category) {
                echo '<li><div class="category">' . $category . '</div></li>';
            }
            ?>
        </ul>
    </div>
    
    <script src="catogories.js"></script>
</body>
</html>
