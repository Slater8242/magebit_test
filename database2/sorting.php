<?php
include "dbconnection.php";
$dbConn = new dbconnection();

/* Все варианты сортировки */
$sort_list = array(
	'time_asc'   => 'time',
	'time_desc'  => 'time DESC',
	'email_asc'  => 'email',
	'email_desc' => 'email DESC',
	'id_asc'   => 'id',
	'id_desc'  => 'id DESC'
);
 
/* Проверка GET-переменной */
$sort = @$_GET['sort'];
if (array_key_exists($sort, $sort_list)) {
	$sort_sql = $sort_list[$sort];
} else {
	$sort_sql = reset($sort_list);
}
 
/* Запрос в БД */
$users = $dbConn->connect()->prepare("SELECT * FROM subscribers ORDER BY {$sort_sql}");
$users->execute();
$list = $users->fetchAll(PDO::FETCH_ASSOC);
 
/* Функция вывода ссылок */
function sort_link_th($title, $a, $b) {
	$sort = @$_GET['sort'];
 
	if ($sort == $a) {
		return '<a class="active" href="?sort=' . $b . '">' . $title . ' <i>▲</i></a>';
	} elseif ($sort == $b) {
		return '<a class="active" href="?sort=' . $a . '">' . $title . ' <i>▼</i></a>';  
	} else {
		return '<a href="?sort=' . $a . '">' . $title . '</a>';  
	}
}
?>
<style>
  tr,th,td{
    border: 1px solid black;
  }
</style>
<table>
	<thead>
		<tr>
			<th><?php echo sort_link_th('Id', 'id_asc', 'id_desc'); ?></th>
			<th><?php echo sort_link_th('Email', 'email_asc', 'email_desc'); ?></th>
			<th><?php echo sort_link_th('Time', 'time_asc', 'time_desc'); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($list as $row): ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['time']; ?></td>
		</tr>
		<?php endforeach; ?>    
	</tbody>
</table>