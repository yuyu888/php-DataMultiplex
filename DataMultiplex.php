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
		$n=1;
        while($x_rank>0){
            // &表示按位与，0x开头的表示的是十六进制数，k&0x1表示k与0x1按位与，其效果为取k的二进制中最右边的数字
			if($x_rank&0x1){ 
				$list[] = $n;
			}
			$n = $n<<1;
            $x_rank = $x_rank>>1;
        }
        return $list;
    }

}
