<?php
namespace Zuuda;

use Exception; 

class Model extends SQLQuery
{
	protected $_model;
	
	final public function rootName() { return __CLASS__; }

	public function __construct() 
	{
		try 
		{ 
			global $inflect;
			if( method_exists($this, 'init') ) 
				$this->init(); 
			$c1 = isset($this->_table) || isset($this->_propTable);
			$c2 = isset($this->_model) || isset($this->_propModel); 
			$c3 = isset($this->_alias) || isset($this->_propAlias); 
			$c4 = !isset($this->abstract); 
			$c5 = __useDB();
			if( $c1&&$c2&&$c3&&$c4&&$c5 ) 
			{
				$alias = (EMPTY_CHAR!==$this->_propAlias)?$this->_propAlias:$this->_alias; 
				$alias = explode(mad, $alias); 
				sort($alias); 
				foreach( $alias as $key => $word ) 
					$alias[$key] = $inflect->singularize(strtolower($word)); 
				$this->_alias = implode(mad, $alias); 
				$this->__initConn();
			}
			if( NULL==$this->_primaryKey ) 
			{ 
				throw new Exception( "The <b>{$this->_propModel}Model</b> is being missed the primary key specification." );
			} 
		}			
		catch( Exception $e ) 
		{ 
			abort( 500, $e->getMessage() ); 
		}
	} 
	
	protected function __initConn() 
	{
		global $configs;
		$src = $configs['DATASOURCE']['server']['default']; 
		if( isset($configs['DATASOURCE'][$src]) ) 
		{
			if( isset($configs['DATASOURCE']['server'][$configs['DATASOURCE'][$src]['server']]['source']) ) 
			{
				if( $configs['DATASOURCE']['server'][$configs['DATASOURCE'][$src]['server']]['source']!=$src ) 
				{
					$this->__connect($src); 
				} 
				else 
				{ 
					$this->__handled($configs['DATASOURCE']['server'][$configs['DATASOURCE'][$src]['server']]['resource'], $src);
				} 
			} 
			else 
			{
				$this->__connect($src); 
			}
		}
		
		return $this;
	}
}