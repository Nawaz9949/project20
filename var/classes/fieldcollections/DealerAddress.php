<?php

/**
 * Fields Summary:
 * - DoorNumber [input]
 * - City [input]
 * - State [select]
 * - Country [countrymultiselect]
 */

return Pimcore\Model\DataObject\Fieldcollection\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'DealerAddress',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => '',
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => NULL,
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'children' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => 'Layout',
         'width' => '',
         'height' => '',
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'name' => 'DoorNumber',
             'title' => 'Door Number',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'input',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'width' => '',
             'defaultValue' => NULL,
             'columnLength' => 190,
             'regex' => '',
             'regexFlags' => 
            array (
            ),
             'unique' => false,
             'showCharCount' => false,
             'defaultValueGenerator' => '',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'name' => 'City',
             'title' => 'City',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'input',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'width' => '',
             'defaultValue' => NULL,
             'columnLength' => 190,
             'regex' => '',
             'regexFlags' => 
            array (
            ),
             'unique' => false,
             'showCharCount' => false,
             'defaultValueGenerator' => '',
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'State',
             'title' => 'State',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'select',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'options' => 
            array (
              0 => 
              array (
                'key' => 'Andhra Pradesh',
                'value' => 'Andhra Pradesh',
              ),
              1 => 
              array (
                'key' => 'Arunachal Pradesh',
                'value' => 'Arunachal Pradesh',
              ),
              2 => 
              array (
                'key' => 'Assam',
                'value' => 'Assam',
              ),
              3 => 
              array (
                'key' => 'Bihar',
                'value' => 'Bihar',
              ),
              4 => 
              array (
                'key' => 'Chhattisgarh',
                'value' => 'Chhattisgarh',
              ),
              5 => 
              array (
                'key' => 'Goa',
                'value' => 'Goa',
              ),
              6 => 
              array (
                'key' => 'Gujarat',
                'value' => 'Gujarat',
              ),
              7 => 
              array (
                'key' => 'Haryana',
                'value' => 'Haryana',
              ),
              8 => 
              array (
                'key' => 'Himachal Pradesh',
                'value' => 'Himachal Pradesh',
              ),
              9 => 
              array (
                'key' => 'Jharkhand',
                'value' => 'Jharkhand',
              ),
              10 => 
              array (
                'key' => 'Karnataka',
                'value' => 'Karnataka',
              ),
              11 => 
              array (
                'key' => 'Kerala',
                'value' => 'Kerala',
              ),
              12 => 
              array (
                'key' => 'Madhya Pradesh',
                'value' => 'Madhya Pradesh',
              ),
              13 => 
              array (
                'key' => 'Maharashtra',
                'value' => 'Maharashtra',
              ),
              14 => 
              array (
                'key' => 'Manipur',
                'value' => 'Manipur',
              ),
              15 => 
              array (
                'key' => 'Meghalaya',
                'value' => 'Meghalaya',
              ),
              16 => 
              array (
                'key' => 'Mizoram',
                'value' => 'Mizoram',
              ),
              17 => 
              array (
                'key' => 'Nagaland',
                'value' => 'Nagaland',
              ),
              18 => 
              array (
                'key' => 'Odisha',
                'value' => 'Odisha',
              ),
              19 => 
              array (
                'key' => 'Punjab',
                'value' => 'Punjab',
              ),
              20 => 
              array (
                'key' => 'Rajasthan',
                'value' => 'Rajasthan',
              ),
              21 => 
              array (
                'key' => 'Sikkim',
                'value' => 'Sikkim',
              ),
              22 => 
              array (
                'key' => 'Tamil Nadu',
                'value' => 'Tamil Nadu',
              ),
              23 => 
              array (
                'key' => 'Telangana',
                'value' => 'Telangana',
              ),
              24 => 
              array (
                'key' => 'Tripura',
                'value' => 'Tripura',
              ),
              25 => 
              array (
                'key' => 'Uttarakhand',
                'value' => 'Uttarakhand',
              ),
              26 => 
              array (
                'key' => 'Uttar Pradesh',
                'value' => 'Uttar Pradesh',
              ),
              27 => 
              array (
                'key' => 'West Bengal',
                'value' => 'West Bengal',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Countrymultiselect::__set_state(array(
             'name' => 'Country',
             'title' => 'Country',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'countrymultiselect',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'width' => '',
             'height' => '',
             'maxItems' => NULL,
             'renderType' => 'list',
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'dynamicOptions' => false,
             'restrictTo' => '',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'fieldtype' => 'panel',
         'layout' => NULL,
         'border' => false,
         'icon' => '',
         'labelWidth' => 0,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'generateTypeDeclarations' => true,
   'blockedVarsForExport' => 
  array (
  ),
));
