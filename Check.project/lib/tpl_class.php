<?php

	class template_class
	{
		public $values = array();
		var $html;

		//загрузка шаблона
		function get_tpl($tpl_name)
		{
			if(empty($tpl_name) || !file_exists($tpl_name))
			{
				return FALSE;
			}
			else
			{
				$this->html = join('',file($tpl_name));
			}
		}

		//становка значения
		function set_value($key, $var)
		{
			$key = '{' . $key . '}';
			$this->values[$key] = $var;
		}

		//парсинг шаблона
		function tpl_parse()
		{
			foreach ($this->values as $find => $replace) 
			{
				$this->html = str_replace($find, $replace, $this->html);
			}
		}

		
		
	}
//экземпляр класса
	$tpl = new template_class; 
?>