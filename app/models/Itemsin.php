<?php

class Itemsin extends Eloquent{
	
	protected $table="itemsin";
	
	public function fetchNames(){
		$entry=DB::table('itemsin')
		->join('models', 'itemsin.modelId', '=', 'models.id')
		->join('spares', 'itemsin.spareId', '=', 'spares.id')
		->join('providers', 'itemsin.providerId', '=', 'providers.id')
		->select('itemsin.id', 'models.name', 'spares.name','providers.name')
		->get();
		
		return $entry;
	}
}