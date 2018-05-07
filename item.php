<?php

session_start();

require_once './lib/connect.php';

if (isset($_GET['id'])) {
	$item_id = $_GET['id'];
	$item_sql = "SELECT i.image, i.product_name, i.description, i.price, c.name FROM items AS i, categories AS c WHERE i.id='$item_id' AND i.category_id = c.id";
	$item = mysqli_query($conn, $item_sql) or die(mysqli_error($conn));
}

// foreach ($item as $column) {
// 	extract($column);
// 	echo $image . '<br>';
// 	echo $product_name . '<br>';
// 	echo $description . '<br>';
// 	echo $price . '<br>';
// 	echo $name . '<br>';
// }

// var_dump($item);

function getTitle()
{
	echo "Item Page";
}

include "./partials/head.php"

?>

</head>
<body>

	<?php include "./partials/header.php"; ?>

	<main class="wrapper">
		
		<h1>Item Page</h1>

		<table>
			<?php 
				foreach ($item as $column) {
					extract($column);
					echo '
						<tr>
							<td>Image</td>
							<td><img src="' .$image. '" alt=""></td>
						</tr>
						<tr>
							<td>Product Name</td>
							<td>' .$product_name. '</td>
						</tr>
						<tr>
							<td>Description</td>
							<td>' .$description. '</td>
						</tr>
						<tr>
							<td>Price</td>
							<td>' .$price. '</td>
						</tr>
						<tr>
							<td>Category</td>
							<td>' .$name. '</td>
						</tr>
					';
				}
			?>
		</table>

	</main>

	<?php include "./partials/footer.php"; ?>

<?php include "./partials/foot.php"; ?>