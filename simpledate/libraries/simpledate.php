<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Simpledate Addon
 *
 * @package		MojoMotor
 * @subpackage	Addons
 * @version		1.2.1
 * @author		Aaron Fowler
 * @link		http://twitter.com/adfowler
 */
class Simpledate
{
	var $addon_version = '1.2.1';
	var $display_name = 'Simpledate';
	private $mojo;

	// --------------------------------------------------------------------

	/**
	 * Constructor
	 *
	 * @access	public
	 * @return	void
	 */
	function __construct()
	{
	}

	// --------------------------------------------------------------------

	/**
	 * Get
	 *
	 * Returns the current date with default format 'F j Y'
	 * Accepts format parameter using PHP date formatting options
	 *
	 * @access	public
	 * @param	array
	 * @return	string
	 */
	function get($tag = array())
	{
		$format = 'F j Y';
		$time = isset($tag['parameters']['time']) ? $tag['parameters']['time'] : time();
		$time = $time + (isset($tag['parameters']['offset']) ? $tag['parameters']['offset'] : 0);
		if (isset($tag['parameters']['format']))
		{
			$format = $tag['parameters']['format'];
		}
		return date($format, $time);
	}
	
	/**
	 * Get Last Modified
	 *
	 * Returns the page's last modified date with default format 'F j Y'
	 * Accepts format parameter using PHP date formatting options
	 *
	 * @access	public
	 * @param	array
	 * @return	string
	 */
	function get_last_modified($tag = array())
	{
		$this->mojo =& get_instance();
		
		if ($this->mojo->mojomotor_parser->page->last_modified() > 0)
		{
			$tag['parameters']['time'] = $this->mojo->mojomotor_parser->page->last_modified();
			return $this->get($tag);
		}
		else
		{
			return;
		}
	}


}

/* End of file simpledate.php */
/* Location: system/mojomotor/third_party/simpledate/libraries/simpledate.php */