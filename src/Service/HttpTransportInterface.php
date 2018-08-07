<?php
/**
 * Created by PhpStorm.
 * User: am
 * Date: 8/7/18
 * Time: 3:49 PM
 */

interface HttpTransportInterface {
    public function request($method, $url);
}
