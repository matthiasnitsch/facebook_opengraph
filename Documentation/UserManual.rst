============
Users manual
============

The extension provides the possibility to enter values which can be read by Facebook to provide a nice preview if a user shares or 
likes the page.

Following meta informations can be provided:

.. figure:: Images/UserManual/BackendView.png
		:width: 500px
		:alt: Backend view

		Added Tab to page properties

		The Backend view of TYPO3 after the user has clicked on module "Page". (legend of the image)

Meta tag values can be edited for every page. If a field value is not present on the actual page, the extension slides through the 
rootline to get a value vor the field. If there is none until root-level, the given fefault value in constants.txt will be taken. 
In case of an also missing default value the meta tag will not get rendered.