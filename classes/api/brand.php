<?php
/**
 * @file brand.php
 * @brief 品牌API 
 */
class APIBrand
{
	//品牌列表
	public function getBrandInfo($id)
	{
		$query = new IModel('brand');
		$info  = $query->getObj("id=".$id);
		return $info;
	}

	//根据商品分类ID获取品牌数据
	public function getBrandListByGoodsCategoryId($id,$limit = 14)
	{
		$result = array();
		$tb_brand_category = new IModel('brand_category');
		$info  = $tb_brand_category->query("goods_category_id=".$id);
		if($info)
		{
			$query = new IQuery('brand');
			foreach($info as $key => $val)
			{
				$query->where = " FIND_IN_SET(".$val['id'].",category_ids) ";
				$query->order = 'sort asc';
			    $query->limit  = $limit;
			    $list = $query->find();
			    $result = array_merge($result,$list);
			    if(count($result) >= $limit)
			    {
			    	$result = array_slice($result, 0, $limit);
			    	break;
			    }
			}
		}
		return $result;
	}
}