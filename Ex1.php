<html>
<head>
<title>Library</title>
<style>
	td{width:100px;border:1px ridge black}
</style>
</head>
<body>
<table id="tbl" style="border:3px ridge black;margin:150px auto;">
	<tr style="font-size:18pt;font-weight:bold;text-align:center;"><td colspan="4">Library</td></tr>
	<tr style="font-weight:bold;text-align:center;">
			<td>Title</td><td>Author</td><td>Price</td><td>Rating</td>
	</tr>
<?php
//загрузка из файла
	$doc=simplexml_load_file("library_2.xml");
	//проходим по всем элементам получая значения
	foreach($doc->book as $book){
		echo('<tr><td>'.($book->title).'</td><td>'.($book->author).'</td><td>'.($book->price).' руб.</td><td>');
		//свич для рейтинга
		switch($book->rating){
			case '2': echo 'Плохо</tr>';
			break;
			case '3': echo 'Нормально</tr>';
			break;
			case '4': echo 'Хорошо</tr>';
			break;
			case '5': echo 'Отлично</tr>';
			break;
		}
	}
?>
</table>
</body>
</html>