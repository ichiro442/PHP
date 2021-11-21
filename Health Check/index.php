$parse_url = parse_url($_SERVER['REQUEST_URI']);
if(preg_match('/.php/', $parse_url['path'])){
	$params = explode('/', $parse_url['path']);
	$value = end($params);
	$path = preg_replace('('.$value.')', '', $parse_url['path']);
	$filename = preg_replace('(.php)', '', $value);
	$filename = preg_replace('(-)', '', $filename);
	$filename = ucfirst(strtolower($filename));
	$filename = $filename.'Controller.php';
}else{
	$path = $parse_url['path'];
	$filename = 'IndexController.php';
}
include('./controllers/user/'.$path.$filename);