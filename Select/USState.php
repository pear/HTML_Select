<?php
// +-----------------------------------------------------------------------+ 
// | Copyright (c) 2002 Richard Heyes                                      | 
// | All rights reserved.                                                  | 
// |                                                                       | 
// | Redistribution and use in source and binary forms, with or without    | 
// | modification, are permitted provided that the following conditions    | 
// | are met:                                                              | 
// |                                                                       | 
// | o Redistributions of source code must retain the above copyright      | 
// |   notice, this list of conditions and the following disclaimer.       | 
// | o Redistributions in binary form must reproduce the above copyright   | 
// |   notice, this list of conditions and the following disclaimer in the | 
// |   documentation and/or other materials provided with the distribution.| 
// | o The names of the authors may not be used to endorse or promote      | 
// |   products derived from this software without specific prior written  | 
// |   permission.                                                         | 
// |                                                                       | 
// | THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS   | 
// | "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT     | 
// | LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR | 
// | A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT  | 
// | OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, | 
// | SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT      | 
// | LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, | 
// | DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY | 
// | THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT   | 
// | (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE | 
// | OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.  | 
// |                                                                       | 
// +-----------------------------------------------------------------------+ 
// | Author: Richard Heyes <richard@php.net>                               | 
// +-----------------------------------------------------------------------+ 
// 
// $Id$

/**
* Class to produce a HTML Select dropdown of US States
*
* @author  Richard Heyes <richard@php.net>
* @access  public
* @version 1.0
* @package HTML_Select
*/

class HTML_Select_USState
{
	/**
    * Constructor
	*
	* @access public
    */
	function HTML_Select_USState()
	{
		$this->_states[] = 'Alabama';
		$this->_states[] = 'Alaska';
		$this->_states[] = 'Arizona';
		$this->_states[] = 'Arkansas';
		$this->_states[] = 'California';
		$this->_states[] = 'Colorado';
		$this->_states[] = 'Connecticut';
		$this->_states[] = 'Delaware';
		$this->_states[] = 'District of Columbia';
		$this->_states[] = 'Florida';
		$this->_states[] = 'Georgia';
		$this->_states[] = 'Hawaii';
		$this->_states[] = 'Idaho';
		$this->_states[] = 'Illinois';
		$this->_states[] = 'Indiana';
		$this->_states[] = 'Iowa';
		$this->_states[] = 'Kansas';
		$this->_states[] = 'Kentucky';
		$this->_states[] = 'Louisiana';
		$this->_states[] = 'Maine';
		$this->_states[] = 'Maryland';
		$this->_states[] = 'Massachusetts';
		$this->_states[] = 'Michigan';
		$this->_states[] = 'Minnesota';
		$this->_states[] = 'Mississippi';
		$this->_states[] = 'Missouri';
		$this->_states[] = 'Montana';
		$this->_states[] = 'Nebraska';
		$this->_states[] = 'Nevada';
		$this->_states[] = 'New England';
		$this->_states[] = 'New Hampshire';
		$this->_states[] = 'New Jersey';
		$this->_states[] = 'New Mexico';
		$this->_states[] = 'New York';
		$this->_states[] = 'North Carolina';
		$this->_states[] = 'North Dakota';
		$this->_states[] = 'Ohio';
		$this->_states[] = 'Oklahoma';
		$this->_states[] = 'Oregon';
		$this->_states[] = 'Pennsylvania';
		$this->_states[] = 'Rhode Island';
		$this->_states[] = 'South Carolina';
		$this->_states[] = 'South Dakota';
		$this->_states[] = 'Tennessee';
		$this->_states[] = 'Texas';
		$this->_states[] = 'Utah';
		$this->_states[] = 'Vermont';
		$this->_states[] = 'Virginia';
		$this->_states[] = 'Washington';
		$this->_states[] = 'West Virginia';
		$this->_states[] = 'Wisconsin';
		$this->_states[] = 'Wyoming';
	}

	/**
    * Produces the HTML for the dropdown
	*
	* @param  string $name            The name="" attribute
	* @param  string $selectedOption  The option to be selected by default.
	*                                 Must match the state name exactly,
	*                                 (though it can be a different case).
	* @param  string $promoText       The text to appear as the first option
	* @param  string $extraAttributes Any extra attributes for the <select> tag
	* @return string                  The HTML for the <select>
	* @access public
    */
    function toHTML($name, $selectedOption = null, $promoText = 'Select a state...', $extraAttributes = '')
    {
        $options[]      = sprintf('<option value="">%s</option>', $promoText);
		$selectedOption = strtolower($selectedOption);

        foreach ($this->_states as $state) {
			$state_lc  = strtolower($state);
            $selected  = $selectedOption == $state_lc ? ' selected="selected"' : '';
            $options[] = '<option value="' . $state_lc . '"' . $selected . '>' . ucfirst($state) . '</option>';
        }
        
        return sprintf('<select name="%s" %s>%s</select>',
		               $name,
					   $extraAttributes,
					   implode("\r\n", $options));
    }
}

?>
