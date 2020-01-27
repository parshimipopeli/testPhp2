if (isset($_POST['validate'])) {
foreach ($donneesJson as &$val) {
if ($_POST['id'] == $val['id']) {
$val['language'] = $_POST['language'];
$val['description'] = $_POST['description'];
}
file_put_contents('../data/categorie.json', json_encode($donneesJson));
