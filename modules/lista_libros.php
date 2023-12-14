====POST 

$list_libro = read_all_books($titulo);
$list_libro = json($list_libro);
echo($list_libro)