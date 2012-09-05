#########################
be_groups
#########################
:Copyright: |copy| Michael Klapper
:Version: 1.1.0
:Description: This extension provide several new options to restructure large amount of be_groups records.

.. raw:: pdf

   PageBreak

.. contents:: **Table of Contents**
  :depth: 2

.. raw:: pdf

   PageBreak

***************************************
Overview
***************************************

Affected Changes at be_groups Records
=====================================

The New Type Field
-----------------
We added a new type field "Kind of" (tx_begroups_kind).

|imageMetaGroup|

Hide In List Flag
-----------------
The hide_in_list flag is automatically set depending on the current selected type "Kind of".
Thus the group records are only visible in the be_user records if they are of type "Default all" or "Meta".

|imageHideInList|

New Fields For Type "Meta"
--------------------------
The new be_groups record of type "Meta" is totally restructured and provide new tabs as follow:

- `General`_
- `Rights`_
- `Mount and WS`_
- `Language`_
- `Options`_


General
^^^^^^^^^^^^^^^^^^^^^^^^^
|imageMetaGroupGeneral|

Rights
^^^^^^^^^^^^^^^^^^^^^^^^^
|imageMetaGroupRights|

Mount and WS
^^^^^^^^^^^^^^^^^^^^^^^^^
|imageMetaGroupMountAndWs|

Language
^^^^^^^^^^^^^^^^^^^^^^^^^
|imageMetaGroupLanguage|

Options
^^^^^^^^^^^^^^^^^^^^^^^^^
|imageMetaGroupOptions|

Affected Changes at be_user Records
=====================================
The "Group" Field provides only be_groups records of type "META" (tx_begroups_kind=3) or "Default all" (tx_begroups_kind=0).

|imageBeUsersGroups|

.. raw:: pdf

   PageBreak

***************************************
Backend Group Structure |extensionIcon|
***************************************

A Systematic Approach Using Different Types of Backend User Groups
==================================================================
To achieve a clear and easy-to-maintain rights structure, we split up different types of rights into
different types of user groups; each with a specific purpose.

The actual rights of an editor are the sum of the rights of the different user groups the user is
assigned to. This makes it easier to create new users later and reduce maintenance effort, but also
allows for minimum redundancy.

For reasons of clarity, each user group is marked by an acronym in front of its name. The following
types of user groups are used (details information about each type below):

- `Page Mount Groups [PM]`_
- `File Mount Groups [FM]`_
- `Rights Groups [R]`_
- `TSConfig Groups [TS]`_
- `Page Access Groups [PA]`_
- `Workspace Groups [WS]`_
- `Language Groups [L]`_
- `Meta-Groups [META]`_

Page Mount Groups [PM] |typeIconPageMount|
======================
These groups are prefixed “**[PM]**” and set the page mount, or root of the page tree visible to the editor.
Only the starting point for the page mount is set in these groups. The name of a page mount group
should be the name of the selected starting point in the page tree.

File Mount Groups [FM] |typeIconFileMount|
======================
With these groups prefixed “**[FM]**”, we set the file mounts for a user, defining which subdirectories of
fileadmin/ will be accessible to the user. When using the DAM extension, we select the corresponding
DAM categories for the respective user groups.

Rights Groups [R] |typeIconRights|
======================
In these groups prefixed “**[R]**” we set the actual backend rights, including those settings available
after checking the checkbox “Include Access Lists”. These are:

- The visible modules in the backend menu. Only those necessary for the specific task of the rights group are set.
- The tables and fields which the user may see and edit.
- Disabling extensions and record types which are not needed.

TSConfig Groups [TS] |typeIconTsConfig|
======================
In these groups prefixed “**[TS]**”, we set the user TSConfig. This can be used for example to define
adminpanel settings. Depending on the scale of the project, creating TSConfig groups might not be
necessary or it might be better to include TSConfig settings in rights groups.

Page Access Groups [PA] |typeIconPageAccess|
======================
Page access groups are prefixed “**[P]**” and are used to manage access rights to the page tree. They
don’t have their own settings but are only used to manage rights over the access module. For page
access groups there is a simple and an advanced approach.

Simple Approach to Page Groups
------------------------------
If the page mounts are hierarchical, a single page access group “[P] all” is sufficient. This is a
simplification of the usual approach which saves us from having to create a page access group for
every single page mount. What the editor then sees in the backend is solely dependent on the page
mount group. For most websites, this is completely sufficient.

Advanced Approach to Page Groups
--------------------------------
In the advanced approach, one page access group is created for every page mount group to manage
its respective rights. That means that a page in the page tree should always belong to a page access
group. The page access groups have to correspond to the page tree and should usually have the same
hierarchy. The following guidelines should be followed:

- A page access group corresponds to a certain sub-tree in the page tree. All pages of this subtree should belong to this group. This setting is managed with the access module.
- Page access groups should have the same name as the corresponding page.
- One line of TSConfig in the page properties causes newsly created subpages to be automatically assigned to the correct page access group.
- There should be at least as many page access groups as there are page mounts for editors.
- A page access group should include those subgroups which are directly under it in the corresponding page hierarchy as subgroups. Thus, the same structure as in the page tree is created and users belonging to a superordinate group also have the rights to edit the pages assigned to the subordinate page access groups.

Automatically Assigning New Pages to a Group
--------------------------------------------
By inserting the following TypoScript on the rootpage of a pagetree, we set group permissions and
owner groups for all newly created subpages.

::

    TCEMAIN {
            # common right settings for new pages
        permissions.group = show,edit,delete,new,editcontent
            #page group for newly created pages = [P] Project 1
        permissions.groupid = 1
    }

Workspace Groups [WS] |typeIconWorkspace|
======================
For each Workspace, there should be two Workspace groups, a draft and a reviewer group. The only
setting made in these groups will be the checkbox to allow them to edit the respective workspace. The
groups will be added to the workspace as “**Members:**” and “**Reviewers:**” respectively.

Workspace groups are prefixed “**[WS]**” and are usually not included in META groups but assigned to
users on an individual basis.

Language Groups [L] |typeIconLanguage|
======================
The only setting made in language groups is “**Limit to languages:**” to prevent a user from editing any
but the languages he was specifically authorized to.

Language groups are prefixed "**[L]**" and are usually not included in META groups but assigned to
users on an individual basis

Meta-Groups [META] |typeIconMeta|
======================
Depending on their respective function, every backend user receives a combination of the rights of
different groups. This should include at least one page mount group, one rights group, and one page
group (Make sure that both checkboxes under “Mount from Groups” are checked for the user to
inherit all mounts from the groups).

|imageMetaGroupDetail|

To simplify this further, we create so-called META groups prefixed “**[META]**”, which are responsible
for combining these groups. If we need a combination of different groups more than once, we create a
META group and assign the users to this group. This also makes it easier to change the rights for a
whole department without having to change them for each individual user.

.. raw:: pdf

   PageBreak

***************************************
Migration Steps
***************************************

Migration From version 0.3.3 (BETA)
===================================
You can use the update wizard provided by the extension manager to convert your existing be_groups records to use the new features.

|imageExtUpdateInfo|

|imageExtUpdateAction|

.. |imageExtUpdateAction| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Documentation/Images/ExtUpdateAction.png
.. |imageExtUpdateInfo| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Documentation/Images/ExtUpdateInfo.png
.. |imageMetaGroupGeneral| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Documentation/Images/MetaGroupGeneral.png
.. |imageMetaGroupRights| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Documentation/Images/MetaGroupRights.png
.. |imageMetaGroupMountAndWs| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Documentation/Images/MetaGroupMountAndWs.png
.. |imageMetaGroupLanguage| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Documentation/Images/MetaGroupLanguage.png
.. |imageMetaGroupOptions| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Documentation/Images/MetaGroupOptions.png
.. |imageHideInList| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Documentation/Images/HideInList.png
.. |imageBeUsersGroups| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Documentation/Images/BeUsersGroups.png
.. |imageMetaGroup| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Documentation/Images/MetaGroup.png
.. |imageMetaGroupDetail| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Documentation/Images/MetaGroupDetail.png
.. |typeIconRights| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_1.gif
.. |typeIconLanguage| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_2.gif
.. |typeIconMeta| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_3.gif
.. |typeIconPageAccess| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_4.gif
.. |typeIconFileMount| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_5.gif
.. |typeIconPageMount| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_6.gif
.. |typeIconTsConfig| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_7.gif
.. |typeIconWorkspace| image:: https://raw.github.com/michaelklapper/be_groups/master/Resources/Public/Images/selicon_be_groups_tx_begroups_kind_8.gif
.. |extensionIcon| image:: https://raw.github.com/michaelklapper/be_groups/master/ext_icon.gif