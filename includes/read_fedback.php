<?php
include('includes/config.php');//connect to database


$id = isset($_GET['id']) ? $_GET['id'] : null;
$year_month = isset($_GET['month']) ? $_GET['month'] : null;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$entries_per_page = 3;

$selection = "";

// by single item
if(is_numeric($id)){
	$selection = ' WHERE id=' . $id; 
}

// by mnth
if(strlen($year_month) > 0){
	list($year,$month) = explode('-',$year_month);
	$selection = ' WHERE month(date)=' . $month . ' AND year(date)=' . $year; 
}

$all_entries = $conn->query("SELECT * FROM feedback ORDER BY date desc" . $selection); //select all ;
$entries = $conn->query("SELECT * FROM feedback ORDER BY date desc" . $selection . 
			" LIMIT ". ($page-1)*$entries_per_page . " , " . $entries_per_page); //select per page;



?>

		<hr>
		<?php
			if($entries && $entries->num_rows > 0){
				while($row = $entries->fetch_assoc()){
					echo '<div class="a-row"><div class="a-col">Customer name:</div><div class="a-col">' . $row['name'] . '</div></div>';
					echo '<div class="a-row"><div class="a-col">How many people:</div><div class="a-col">' . $row['people'] . '</div></div>';
					echo '<div class="a-row"><div class="a-col">Preferred Date and Time:</div><div class="a-col">' . $row['datetime'] . '</div></div>';
					echo '<div class="a-row"><div class="a-col">Additional requests and messages:</div><div class="a-col">' . $row['mesage'] . '</div></div>';
					echo '<hr>';
				}
				$max_page = ceil($all_entries->num_rows/$entries_per_page);
				for($n=1; $n <= $max_page; $n++){
					$active = ($page == $n) ? "classname='active'" : "";
					echo '<a class="pagination" href="admin.php?page=' . $n . '" ' . $active . '>' . $n . '</a>';
				}
			}else {
				echo '<p>Error: No entries</p>';
			}
		?>
	</body>
</html>