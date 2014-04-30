<?php

namespace Acme\DefaultBundle\Services;

header("Content-type: text/html; charset=utf-8");

use Doctrine\ORM\EntityManager;

class GlobalBaseService {

    protected $em;
    public $getDate;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->getDate = new \DateTime(); //当前时间【datetime类型】
    }

    /**
     * 获取ip
     * @param null $ip
     * @return array
     * @date 2014-04-22
     * @author 殷勇<shyinyong@Outlook.com>
     */
    public function getIp($ip = null)
    {
        if (null === $ip) {
            if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
                //check for ip from share internet
                $ip = $_SERVER["HTTP_CLIENT_IP"];
            } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
                // Check for the Proxy User
                $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
            } else {
                $ip = $_SERVER["REMOTE_ADDR"];
            }
        }

        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, 'http://ip.taobao.com/service/getIpInfo.php?ip=' . $ip);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);

        $taobao_ip = json_decode($file_contents, true);
        $taobao_ip_array = $taobao_ip['data'];

        $client_ip = array(
            'country' => $taobao_ip_array['country'],
            'area' => $taobao_ip_array['area'],
            'region' => $taobao_ip_array['region'],
            'city' => $taobao_ip_array['city'],
            'county' => $taobao_ip_array['county'],
            'isp' => $taobao_ip_array['isp'],
            'ip' => $taobao_ip_array['ip'],
        );
        return $client_ip;
    }

    /**
     * 网站全局配置
     * @author 殷勇 <shyinyong@outlook.com>
     * @return array
     * @Date: 2013-06-27
     */
    public function getSetting($key)
    {
        $conn = $this->em->getConnection();
        $sql = "SELECT `value` FROM `admin_setting` where `key`='" . ($key) . "' LIMIT 1; ";
        $row = $conn->fetchColumn($sql);
        return $row;
    }

    public function getBaseUrl()
    {
        /* First we need to get the protocol the website is using */
        $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https' ? 'https://' : 'http://';

        /* returns /myproject/index.php */
        if (qa_opt('neat_urls') == 0 || strpos($_SERVER['PHP_SELF'], '/index.php/') !== false):
            $path = strstr($_SERVER['PHP_SELF'], '/index', true);
            $directory = $path;
        else:
            $path = $_SERVER['PHP_SELF'];
            $path_parts = pathinfo($path);
            $directory = $path_parts['dirname'];
            $directory = ($directory == "/") ? "" : $directory;
        endif;

        $directory = ($directory == "\\") ? "" : $directory;

        /* Returns localhost OR mysite.com */
        $host = $_SERVER['HTTP_HOST'];

        return $protocol . $host . $directory;
    }

}
