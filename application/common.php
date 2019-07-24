<?php
use think\Db;
/**
 * 检查权限
 * @param $userId  int        要检查权限的用户 ID
 * @param $name string|array  需要验证的规则列表,支持逗号分隔的权限规则或索引数组
 * @param $relation string    如果为 'or' 表示满足任一条规则即通过验证;如果为 'and'则表示需满足所有规则才能通过验证
 * @return boolean            通过验证返回true;失败返回false
 */
function xyb_auth_check($userId, $name = null, $relation = 'or')
{
    if (empty($userId)) {
        return false;
    }

    if ($userId == 1) {
        return true;
    }

    $authObj = new \auth\Auth();
    if (empty($name)) {
        $request    = request();
        $module     = $request->module();
        $controller = $request->controller();
        $action     = $request->action();
        $name       = strtolower($module . "/" . $controller . "/" . $action);
    }
    return $authObj->check($userId, $name, $relation);
}


function get_cat_info($id){
   $info= Db::name('curriculums')->where(array('id'=>$id))->field('p_next_id')->find();
   $name=Db::name('cat_name')->where(array('id'=>$info['p_next_id']))->value('name');
   return $name;
}