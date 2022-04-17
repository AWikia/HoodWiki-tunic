*Starting from 17/4//2022, this project will no longer be maintained because the main DB trasmitter of that project died. See [Evelution](https://github.com/AWikia/SkinEvelution) for a related project. You should uninstall the skin from your wiki, if you have it installed as Tunic will become less compatible with Evelution's config from time to time.*

# Description
A lightweight Monobook skin with no sidebar, the sidebar links are
given at the bottom of the page instead. Based on retired skin Chick.

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
http://www.gnu.org/copyleft/gpl.html


# Requirements
To Run Tunic on your wiki, you must have MediaWiki 1.36 or greater and Evelution 66.0.0 or greater. Older versions of MediaWiki and Evelution are not supported

# Installation
To Install Tunic, you must download the reposistory first. Make a folder called **Tunic** in **Skins** diractory where you have installed MediaWiki and extract the zipped file contents in **Tunic** folder.  Lastly, put this in **LocalSettings.php**:
```php
wfLoadSkin( 'Tunic' );
```

# New Version release
- New releaes on Tunic will always come by HM100. However, users with **Triage** or **Write** access can merge others PRs to Evelution. Once I got access to Evelution Skin in my personal MW instance, I will try to merge the changes from this repo to the **Tunic** folder in my MW instance and will release a new release, major or minor.

# More Help
Join to [our Discord Server](https://discord.gg/a6FbV6zWFs) for more help about Tunic and its friends
