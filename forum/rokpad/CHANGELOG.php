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
 */
 
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
?>

1. Copyright and disclaimer
----------------


2. Changelog
------------
This is a non-exhaustive changelog for RokPad, inclusive of any alpha, beta, release candidate and final versions.

Legend:

* -> Security Fix
# -> Bug Fix
+ -> Addition
^ -> Change
- -> Removed
! -> Note

---------------------- 0.5 Release [31-Aug-2009] ----------------------
31-Aug-2009 Djamil Legato
# Fixed RokPad save not working on Joomla! pages with no Apply button.
+ Added options for having wrapped lines. You can now choose between wrapped lines or line numbers. The two can't be enabled at the same time.

---------------------- 0.4 Release [14-Aug-2009] ----------------------
14-Aug-2009 Brian Towles
# Fixed language install issue.
# Fixed running htmlpurify under php4

14-Aug-2009 Djamil Legato
# Fixed + sign being dropped after tidying process
+ Undo is now enabled after tidying process

---------------------- 0.3 Release [12-Aug-2009] ----------------------

12-Aug-2009 Djamil Legato
# Fixed an issue on handling new custom modules created where the id and other infos weren't known yet.

07-Aug-2009 Brian Towles
^ Moved to a build script and plugin layout.
^ Added i18n and language files.
^ Moved to the htmlawed as a tidy script.


---------------------- 0.2 Release [06-Aug-2009] ----------------------

06-Aug-2009 Djamil Legato 
# Fixed HTML Tidy failing when the content had amps.
# Fixed z-indexing issue on Safari when RokPad in FullScreen mode.

---------------------- 0.1 Release [04-Aug-2009] ----------------------

04-Aug-2009 Djamil Legato 
! Initial release.