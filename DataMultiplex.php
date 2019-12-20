class  DataMultiplex
{
 
 public function get_is_attribute($x_rank, $attribute)
 {
  if ($x_rank & $attribute) return true; else return false;
  
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
}
