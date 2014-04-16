<?php

class Itemsin extends Eloquent{
	
	protected $table="itemsin";
	
	public function fetchNames(){
		$entry=$DB::table('itemsin')
		->join('modelName', 'itemsin.modelId', '=', 'models.id')
		->join('spareName', 'itemsin.spareId', '=', 'spares.id')
		->join('providerName', 'itemsin.providerId', '=', 'providers.id')
		->select('itemsin.id', 'models.name', 'spares.name','providers.name')
		->get();
		
		return $entry;
	}
}