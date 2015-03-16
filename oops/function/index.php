<?php


class A{

	public $callbacks = array();
	public $breadcrumbs = array();


	public function register($name, $callback)
    {
        $this->callbacks[$name] = $callback;
    }
    public function push($title, $url = null, array $data = array())
    {
        $this->breadcrumbs[] = (object) array_merge($data, array(
            'title' => $title,
            'url' => $url,
            // These will be altered later where necessary:
            'first' => false,
            'last' => false,
        ));
    }
    public function view($name,$params = array()){
    		array_unshift($params, $this);
    		call_user_func_array($this->callbacks[$name],$params);
    }
}


$obj = new A();

$obj->register('vnt',function($breadcrumbs){
		$breadcrumbs->push('Time In', 'time.in');
});

$obj->register('vnt2', function($breadcrumbs){
		$breadcrumbs->push('Time Out', 'time.out');
});

echo '<pre>';

print_r($obj->callbacks);

$obj->view('vnt2');

print_r($obj->breadcrumbs);


$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
?>



