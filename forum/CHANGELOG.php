<?php
/**
 * RokNavMenu Plugin
 *
 * @package		Joomla
 * @subpackage	RokNavMenu Plugin
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
This is a non-exhaustive changelog for RokNavMenu, inclusive of any alpha, beta, release candidate and final versions.

Legend:

* -> Security Fix
# -> Bug Fix
+ -> Addition
^ -> Change
- -> Removed
! -> Note

------- 1.7.5 Release [30-August-2009] -------

30-Aug-2009 Andy Miller
# Updated CSS and created IE6 CSS for new fusion.js format

29-Aug-2009 Brian Towles
# Fixed child menus showing up at the wrong time when not showing all links


28-Aug-2009 Brian Towles
# Fixed menulinks to honor thier own params and not show as active
# Fixed extended link query string creation on SEO and not.

------- 1.7.4 Release [19-August-2009] -------

19-Aug-2009 Brian Towles
# Fixed handling of HTML Special characters in menu item titles.
^ Moved to namespaced events to help prevent collisions with other extensions.
# Fixed handling of no parameter menu items. 

------- 1.7.3 Release [14-August-2009] -------

14-Aug-2009 Brian Towles
# Fixed bug with backwards compatibility with older templates

07-Aug-2009 Brian Towles
# Fixed bug in fusion theme not calling getLink in the layout

------- 1.7.2 Release [07-August-2009] -------

06-Aug-2009 Brian Towles
# Fixed Multiple instances resulting in fatal error
^ Moved Formatting classes to be Named based on Default/Template and theme name
# Fixed issue with multiple roknavmenu instances with different themes causing crashes
+ Added link additions to the node type
+ Added extended link plugin to let menu item use of link additions 

06-Aug-2009 Djamil Legato
# Fixed javascript error when no sublevels present

------- 1.7.1 Release [01-August-2009] -------

01-Aug-2009 Brian Towles
# Fixed php4 compatibility with class_exists

31-July-2009 Brian Towles
+ Added i18n language support for modules theme parameters
+ Added i18n language support for boost menu item parameters 

------- 1.7 Release [31-July-2009] -------

+ New component based installation/uninstallation
+ Added RokNavMenu Theme support for module and templates
+ Added "Boost" plugin to allow overriding of menu items
+ Added NEW Fusion theme

