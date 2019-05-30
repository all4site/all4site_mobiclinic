<?php


  class LastPages
  {
    private $parentID;
    private $currentID;

	public function __construct()
	{

	  $test = get_the_category();
	  $arr = [];

	  foreach ($test as $tests):
		$arr[] = $tests->term_id;
		$arr_lenth = count($arr);
		if ($tests->parent == 0) :
		  $getparentID = $tests->cat_ID;
		$this->parentID = $getparentID;
		endif;
	  endforeach;

	  if ($arr_lenth > 1):
		$reg = '/^(,)?|(,)$/';
		$t = implode(',', $arr);
		$t = str_replace("$getparentID", '', $t);
		$current_categories = preg_replace($reg, '', $t);
		$this->currentID = $current_categories;
	  else:
		$current_categories = $getparentID;
		$this->currentID = $current_categories;
	  endif;
	}

	public function getCurrentCat()
	{
	  return $this->currentID;
	}
	public function getParrentCat()
	{
	  return $this->parentID;
	}
  }