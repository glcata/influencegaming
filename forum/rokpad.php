<?php
/**
 * RokPad Editor Plugin
 *
 * @package		Joomla
 * @subpackage	RokPad Editor Plugin
 * @copyright Copyright (C) 2009 RocketTheme. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see RT-LICENSE.php
 * @author RocketTheme, LLC
 *
 * Core Editor Highlighter: CodeMirror <http://marijn.haverbeke.nl/codemirror/>
 * HTML Tidy: HTMLPurifier <http://htmlpurifier.org>
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

/**
 * RokPad Editor Plugin
 *
 * @package Editors
 * @since 1.5
 */
class plgEditorRokPad extends JPlugin
{
	function plgEditorRokPad(& $subject, $config)
	{
		parent::__construct($subject, $config);
		$this->config = $config;
		$this->loadLanguage( '', JPATH_ADMINISTRATOR );
	}

	function onInit()
	{
		if (!defined("ROKPAD")) {
			$doc = & JFactory::getDocument();
			
			$path = JURI::root()."plugins/editors/rokpad";
			$cm = "$path/codemirror";
		
			$doc->addScript("$cm/js/codemirror.js");
			$doc->addScript("$path/js/dateformat.js");
			$doc->addScript("$path/js/rokpad.js");
			$doc->addScriptDeclaration("window.RokPadPath = '$cm';");
			$doc->addStyleSheet("$path/css/rokpad.css");
			$doc->addScriptDeclaration("window.rokeditors = {}; window.rokpadSettings = {};");			
			
			define("ROKPAD", 1);
		}
		
		return "";
	}

	function onSave($editor) {
		return "document.getElementById('$editor').value = window.rokeditors['$editor'].codemirror.getCode();\n";
	}
	
	function onGetContent($editor) {
		return "window.rokeditors['$editor'].codemirror.getCode();\n";
	}

	function onSetContent($editor, $html) {
		return "window.rokeditors['$editor'].codemirror.setCode($html);\n";
	}

	function onDisplay( $name, $content, $width, $height, $col, $row, $buttons = true )
	{
		$doc = & JFactory::getDocument();
		
		// Only add "px" to width and height if they are not given as a percentage
		if (is_numeric( $width )) {
			$width .= 'px';
		}
		if (is_numeric( $height )) {
			$height .= 'px';
		}

		$buttons = $this->_displayButtons($name, $buttons);
		$topbar = '<div class="rokpad"><div class="topbar">'.$this->_createToolbar().'</div>';
		$hiddenbar = '<div class="hidden-bar">'.$this->_hiddenBar().'</div>';
		$handle = '<div class="handle"><div class="handle-center"></div></div>';
		$statusbar = '<div class="status-bar">
			<div class="last-save section">'.JText::_('ROKPAD.LAST_SAVE').':<span>'.JText::_('ROKPAD.NEVER').'</span></div>
			<div class="line section">'.JText::_('ROKPAD.LINE').': <span>0</span> | '.JText::_('ROKPAD.COLUMN').': <span>0</span> | '.JText::_('ROKPAD.LENGTH').': <span>0</span></div>
		</div>';
		$editor  = "<textarea name=\"$name\" id=\"$name\" cols=\"$col\" rows=\"$row\" style=\"width: $width; height: $height;\">$content</textarea>";
		
		$settings = $this->_getSettings();
		
		$doc->addScriptDeclaration("window.rokpadSettings['$name'] = {".$settings."}
			window.addEvent('domready', function() {window.rokeditors['$name'] = new RokPad('$name')});");
		
		return $topbar.$hiddenbar.$editor.$statusbar.$handle.$buttons."</div>";
	}

	function onGetInsertMethod($name)
	{
		$doc = & JFactory::getDocument();

		$js = "\tfunction jInsertEditorText(text, editor) {
				window.rokeditors['$name'].codemirror.replaceSelection(text);\n
		}";
		$doc->addScriptDeclaration($js);

		return true;
	}
	
	function _getSettings()
	{
		$settings = array();
		
		// Height
		$height = $this->params->get("rokpad-height", 350) . "px";
		$settings[] = "height: '$height'";
		
		// Parser 
		$parser = $this->params->get("rokpad-parser", "xhtmlmixed");

		switch($parser) {
			case "xhtml":
				$settings[] = "parserfile: 'parsexml.js', \nstylesheet: window.RokPadPath+'/css/xmlcolors.css'";
				break;
			case "css":
				$settings[] = "parserfile: 'parsecss.js', \nstylesheet: window.RokPadPath+'/css/csscolors.css'";
				break;
			case "javascript":
				$settings[] = "parserfile: ['tokenizejavascript.js', parsejavascript.js'], \nstylesheet: window.RokPadPath+'/css/jscolors.css'";
				break;
			case "php":
				$settings[] = "parserfile: ['tokenizephp.js', parsephp.js'], \nstylesheet: window.RokPadPath+'/css/phpcolors.css'";
				break;
			case "xhtmlmixed":
				$settings[] = "parserfile: ['parsexml.js', 'parsecss.js', 'tokenizejavascript.js', 'parsejavascript.js', 'parsehtmlmixed.js'], \nstylesheet: [window.RokPadPath+'/css/xmlcolors.css', window.RokPadPath+'/css/jscolors.css', window.RokPadPath+'/css/csscolors.css']";
				break;
			case "phpxhtmlmixed":
				$settings[] = "parserfile: ['parsexml.js', 'parsecss.js', 'tokenizejavascript.js', 'parsejavascript.js', 'tokenizephp.js', 'parsephp.js', 'parsephphtmlmixed.js'], \nstylesheet: [window.RokPadPath+'/css/xmlcolors.css', window.RokPadPath+'/css/jscolors.css', window.RokPadPath+'/css/csscolors.css', window.RokPadPath+'/css/phpcolors.css']";
				break;
		}
		
		// Pass delay
		$passdelay = $this->params->get("rokpad-passdelay", 200);
		$settings[] = "passDelay: $passdelay";
		
		// Pass time
		$passtime = $this->params->get("rokpad-passtime", 50);
		$settings[] = "passTime: $passtime";
		
		// Continuous Scanning
		$continuous = $this->params->get("rokpad-continuous", 200);
		$settings[] = "continuousScanning: $continuous";
		
		// Match Parens
		$parens = $this->params->get("rokpad-matchparens", 1);
		$settings[] = "autoMatchParens: $parens";
		
		// History Depth
		$history = $this->params->get("rokpad-history", 50);
		$settings[] = "undoDepth: $history";
		
		// History Delay
		$historyDelay = $this->params->get("rokpad-history-delay", 800);
		$settings[] = "undoDelay: $historyDelay";
		
		// Line Numbers
		if ($this->params->get('rokpad-lineHandler', 0) == 0) {
			$settings[] = "lineNumbers: true";
			$settings[] = "textWrapping: false";
		} else {
			// Text Wrapping
			$settings[] = "lineNumbers: false";
			$settings[] = "textWrapping: true";
		}
		
		// Indent Unit
		$indentUnit = $this->params->get("rokpad-indentunit", 2);
		$settings[] = "indentUnit: $indentUnit";
		
		// Tab Mode
		$tabmode = $this->params->get("rokpad-tabmode", "indent");
		$settings[] = "tabMode: '$tabmode'";
		
		// Load Indent
		$loadindent = $this->params->get("rokpad-loadindent", 1);
		$settings[] = "reindentOnLoad: $loadindent";
		
		// DocType
		$doctype = $this->params->get("rokpad-tidylevel", "XHTML 1.0 Transitional");
		$settings[] = "doctype: '$doctype'";
		
		return join(",\n", $settings);
	}
	
	function _createToolbar()
	{
		return $this->_leftBar().$this->_rightBar();
	}
	
	function _leftBar()
	{
		$useragent = $_SERVER["HTTP_USER_AGENT"];

		if (strstr($useragent,"Mac")) $os = "mac";
		else $os = "other";
		
		if ($os != "mac") {
			$shift = "SHIFT-";
			$opt = "ALT-";
			$cmd = "CTRL-";
		} else {
			$shift = "&#x21E7; ";
			$opt = "&#x2325; ";
			$cmd = "&#x2318; ";
		}
		
		$left = '<div class="left-bar">';
		
			// save
			$left .= '<div class="save disabled rokpadbutton"><span>'.JText::_('SAVE').' ('.$cmd.'S)</span></div>';
			// separator
			$left .= '<div class="separator"></div>';
			// back
			$left .= '<div class="back disabled rokpadbutton"><span>'.JText::_('ROKPAD.UNDO').' ('.$cmd.'Z)</span></div>';
			// forward
			$left .= '<div class="forward disabled rokpadbutton"><span>'.JText::_('ROKPAD.REDO').' ('.$cmd.$shift.'Z)</span></div>';
			// separator
			$left .= '<div class="separator"></div>';
			// auto indent
			$left .= '<div class="auto-indent rokpadbutton"><span>'.JText::_('ROKPAD.AUTOINDENT').' (CTRL-I)</span></div>';
			// goto line
			$left .= '<div class="goto-line rokpadbutton"><span>'.JText::_('ROKPAD.GOTOLINE').' ('.$cmd.'L)</span></div>';
			// search
			$left .= '<div class="search rokpadbutton"><span>'.JText::_('SEARCH').' ('.$opt.'F)</span></div>';

			$parser = $this->params->get("rokpad-parser", "xhtmlmixed");
			if (function_exists("curl_version") && preg_match("/xhtml/", $parser)) {
				// tidy
				$left .= '<div class="tidy rokpadbutton"><span>'.JText::_('ROKPAD.HTMLTIDY').'</span></div>';
			}
		
		$left .= '</div>';
		
		return $left;
	}
	
	function _rightBar()
	{
		$right = '<div class="right-bar">';
		
			// fullscreen
			$right .= '<div class="fullscreen out rokpadbutton"><span>'.JText::_('ROKPAD.FULLSCREEN').'</span></div>';
			$right .= '<div class="setup rokpadbutton"><span>'.JText::_('SETTINGS').'</span></div>';
		
		$right .= '</div>';
		
		return $right;
	}
	
	function _hiddenBar()
	{
		$lines = $this->params->get('rokpad-lineHandler', 0);
		$linesCheck = (!$lines) ? ' checked="checked" ' : '';
		$tabModeCheck = $this->params->get("rokpad-tabmode", "indent");
		$indentUnit = $this->params->get("rokpad-indentunit", 2);
		
		$hiddenBar = "";
		
		// Options
		$hiddenBar .= '<div class="toolsPanel panel">
			<div class="tabs">
				<div class="tab-mode">
					<span>'.JText::_('ROKPAD.TABMODE').':</span>
					<select class="tab-mode">
						<option value="indent" '.(($tabModeCheck == 'indent') ? 'selected="selected" ' : '').'>'.JText::_('ROKPAD.AUTOINDENT').'</option>
						<option value="shift" '.(($tabModeCheck == 'shift') ? 'selected="selected" ' : '').'>'.JText::_('ROKPAD.SHIFT').'</option>
						<option value="spaces" '.(($tabModeCheck == 'spaces') ? 'selected="selected" ' : '').'>'.JText::_('ROKPAD.SPACES').'</option>
						<option value="default" '.(($tabModeCheck == 'default') ? 'selected="selected" ' : '').'>'.JText::_('ROKPAD.NONE').'</option>
					</select>
				</div>
				
				<div class="tab-size">
					<span>'.JText::_('ROKPAD.TABSIZE').':</span>
					<input type="text" class="tab-size" value="'.$indentUnit.'" />
				</div>';
				
				if (!$lines) {
				
				$hiddenBar .= '<div class="line-numbers">
					<label><input type="checkbox" class="lines-number" value="1" '.$linesCheck.' /> '.JText::_('ROKPAD.LINENUMBERS').'</label>
				</div>';
				
				}
				
				$hiddenBar .= '<div class="auto-save">
					<label><input type="checkbox" class="auto-save" value="1" /> '.JText::_('ROKPAD.AUTOSAVEEVERY').' </label>
					<input type="text" class="auto-save-time" value="5" /> '.JText::_('ROKPAD.MIN').'.
				</div>
			</div>
		</div>';
		
		// Search
		$hiddenBar .= '<div class="searchPanel panel">
			<div class="block">
				<div class="search-input">
					'.JText::_('SEARCH').': <input type="text" class="search" />
				</div>
				<div class="buttons">
					<div class="button btnsearch disabled">
						<div class="button-l"></div>
						<div class="button-c"><span>Search</span></div>
						<div class="button-r"></div>
					</div>
				</div>
			</div>
			<div class="block">
				<div class="search-input">
					'.JText::_('ROKPAD.REPLACE').': <input type="text" class="replace" /> 
				</div>
				<div class="buttons">
					<div class="button replace-all-button">
						<div class="button-l"></div>
						<div class="button-c"><span>'.JText::_('ROKPAD.REPLACEALL').'</span></div>
						<div class="button-r"></div>
					</div>
				</div>
				<div class="buttons">
					<div class="button replace-button">
						<div class="button-l"></div>
						<div class="button-c"><span>'.JText::_('ROKPAD.REPLACE').'</span></div>
						<div class="button-r"></div>
					</div>
				</div>
			</div>
			<div class="block">
				<label><input type="checkbox" class="ignore-case" value="0" /> '.JText::_('ROKPAD.IGNORECASE').'</label>
			</div>
		</div>';
		
		// Goto Line
		$hiddenBar .= '<div class="gotoLinePanel panel">'.JText::_('ROKPAD.GOTOLINE').': <input type="text" class="gotoline" /></div>';
		
		return $hiddenBar;
	}
	
	function _displayButtons($name, $buttons)
	{
		// Load modal popup behavior
		JHTML::_('behavior.modal', 'a.modal-button');

		$args['name'] = $name;
		$args['event'] = 'onGetInsertMethod';

		$return = '';
		$results[] = $this->update($args);
		foreach ($results as $result) {
			if (is_string($result) && trim($result)) {
				$return .= $result;
			}
		}

		if(!empty($buttons))
		{
			$results = $this->_subject->getButtons($name, $buttons);

			/*
			 * This will allow plugins to attach buttons or change the behavior on the fly using AJAX
			 */
			$return .= "\n<div id=\"editor-xtd-buttons\">\n";
			foreach ($results as $button)
			{
				/*
				 * Results should be an object
				 */
				if ( $button->get('name') )
				{
					$modal		= ($button->get('modal')) ? 'class="modal-button"' : null;
					$href		= ($button->get('link')) ? 'href="'.$button->get('link').'"' : null;
					$onclick	= ($button->get('onclick')) ? 'onclick="'.$button->get('onclick').'"' : null;
					$return .= "<div class=\"button2-left\"><div class=\"".$button->get('name')."\"><a ".$modal." title=\"".$button->get('text')."\" ".$href." ".$onclick." rel=\"".$button->get('options')."\">".$button->get('text')."</a></div></div>\n";
				}
			}
			$return .= "</div>\n";
		}

		return $return;
	}
}