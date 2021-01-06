<?php
class  DataMultiplex
{

    public function get_is_attribute($x_rank, $attribute)
    {
        return ($x_rank&$attribute)==$attribute;
    }
    public function set_add_attribute($x_rank, $attribute)
    {
        return ($x_rank | $attribute);
    }

    public function set_del_attribute($x_rank, $attribute)
    {
        $_temp = ~$attribute;
        return ($x_rank & $_temp);
    }

    // 检查是否是2的n次方
    public function check_attribute($attribute){
        return !($attribute&($attribute-1));
    }

    // 属性遍历
    public function get_attribute_list($x_rank){
        $list = array();
	while($x_rank != 0){
	  $list[] = $x_rank-($x_rank & ($x_rank-1));
	  $x_rank = $x_rank & ($x_rank-1);
	}
	return $list;
    }

}
