<?php
namespace app\common\common;

use think\Controller;
use think\Request;

class BaseController extends Controller{


    /**
     * 初始化
     * BaseController constructor.
     * @param Request|null $request
     */
    public function __construct(Request $request = null)
    {
        parent::__construct($request);

        $this->user();
    }


    public function user(){
        print_r(3434);
    }
}