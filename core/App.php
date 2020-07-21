<?php


class  App
{
    public $controller = 'IndexController';
    public $method = 'index';
    public $params = [];

    public function __construct()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];

            $url = $this->Explode($url);
            $this->controller = $url[0];
            unset($url[0]);
            if (isset($url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
            $this->params = array_values($url);
        }


        $path = "controller/" . $this->controller . ".php";
        if (file_exists($path)) {
            require $path;
            $object = new $this->controller();
            $object->Model($this->controller);
            if (method_exists($object, $this->method)) {
                call_user_func_array([$object, $this->method], $this->params);
            } else {
                echo '<h1 style="color: orange;font-size: 88px;text-align: center;margin-top: 133px;  font-size: 72px;
  background: -webkit-linear-gradient(#ff0404, #ffa303);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">Error 404</h1>';
            }
        } else {
            echo '<h1 style="color: orange;font-size: 88px;text-align: center;margin-top: 133px;  font-size: 72px;
  background: -webkit-linear-gradient(#eee, #333);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">Error 404</h1>';

        }


    }

    public function Explode($url)
    {
        $url = rtrim($url,"/");
        $url = explode('/', $url);
        return $url;

    }
}
