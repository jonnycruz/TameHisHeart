<?php 

	require_once('global.php');

	
	/* Copyright Julian Aceves / LM Leverage (2013) */
	
	abstract class View {
	
		# Private
		
		  private static $self		= '/_includes/template.core.php';
		  private static $template	= '/_markup/';
		  private static $suffix	= array('html','php');
		  private static $root		= __FILE__;
		
		
		public static function __callStatic($func, Array $args) {

			foreach ($args as $k => $arg) {
				unset($args[$k]);
				$args['{'.strtoupper($k).'}'] = $arg;
			}

			$output = self::locate($func);
			$output = ($args) ? str_ireplace(array_keys($args), array_values($args), $output) : $output;
			
			return $output;
			
		}
		
		public static function load($template, Array $args = array()) {
			return self::__callStatic($template, $args);
		}
		
		
		/*** PRIVATE METHOD ***/
		
		private static function locate($func) {
		
			$func = str_replace(' ','-',$func);
			
			$paths = array(str_replace(self::$self, '', self::$root).self::$template.strtolower($func).'.',
						   str_replace(self::$self, '', self::$root).self::$template.strtolower(array_shift(explode('-', $func))).'/'.strtolower($func).'.');
						   
			foreach (self::$suffix as $s) {
				foreach ($paths as $p) if (file_exists($p.$s)) return @file_get_contents($p.$s);
			}
			
			return 'Template not found.';
		
			/* RUNS ASYNCHRONOUSLY????
			
			$D = new RecursiveDirectoryIterator(str_replace(self::$self, '', self::$root).self::$template);
			$R = new RecursiveIteratorIterator($D);
			
			foreach ($R as $file) {
				if (in_array(strtolower(array_pop(explode('.', $file))), self::$suffix) && strpos($file, strtolower(str_replace(' ','-',$func))) !== false) return @file_get_contents($file);
			}
			
			return 'Template not found.';*/
		}
		
	}

?>