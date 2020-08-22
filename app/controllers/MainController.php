<?php

namespace app\controllers;

use app\models\Main;
use app\models\User;
use fw\core\App;
use fw\core\base\View;
use fw\libs\Pagination;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use fw\libs\Cache;

/**
 * Description of Main
 *
 */
class MainController extends AppController
{

    public function __construct($route)
    {
        parent::__construct($route);

        $my_id = $uid = $_SESSION['user']['id'];
        $route = $this->route;
        $user = $cur_user = \R::load('user', $_SESSION['user']['id']);
        View::setMeta('', 'Описание страницы', 'Ключевые слова');
        $this->set(compact('title', 'user', 'my_id', 'uid', 'cur_user', 'route'));
    }

    public function indexAction()
    {
        // $this->view = 'profile';

        $my_id = $uid = $_SESSION['user']['id'];
        $route = $this->route;
        $user = $cur_user = \R::load('user', $_SESSION['user']['id']);
        View::setMeta('', 'Описание страницы', 'Ключевые слова');
        $this->set(compact('title', 'user', 'my_id', 'uid', 'cur_user', 'route'));
    }

    public function docsnextAction()
    {
    }

    public function profileAction()
    {
    }
    public function pageAction()
    {
    }
    public function page2Action()
    {
        // dd(file_get_contents('https://vk.com/feed'));
        $cacheKey = 'custom_data';
        $cache = new Cache();
        if(!$data = $cache->get($cacheKey)) {
            $data = $this->get_c('https://yandex.ru/');
            $cache->set($cacheKey, $data, 60);
        }


        dd($data);
    }
    public function page3Action()
    {
    }
    public function page4Action()
    {
    }
    //    public function page5Action() {}

    function get_c($url, $post = 0,$auth = false) {
        $agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        curl_setopt($ch, CURLOPT_URL, $url ); // отправляем на
        curl_setopt($ch, CURLOPT_HEADER, 0); // пустые заголовки
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // возвратить то что вернул сервер
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // следовать за редиректами
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);// таймаут4
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
    //    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
    //    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: portfolio.usue.ru'));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);// просто отключаем проверку сертификата
        if ($auth)
            curl_setopt($ch, CURLOPT_COOKIEJAR,  '/var/www/html/my_cookies.txt');
            curl_setopt($ch, CURLOPT_COOKIEFILE,  '/var/www/html/my_cookies.txt');
    
        curl_setopt($ch, CURLOPT_POST, $post !== 0);
        if ($post) {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            curl_setopt($ch, CURLOPT_POSTREDIR, 3);
        }
        $data = curl_exec($ch);
    //        curl_getinfo($ch);
        curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
        curl_close($ch);
        return $data;
    }
}
