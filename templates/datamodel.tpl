<DATAMODEL name="{$tableName}" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="datamodel.xsd">
	{foreach $fieldNameArray as $myObject}
		<NODE name="{$myObject->fieldName}" type="{$myObject->fieldType}" nullable="{$myObject->canBeNull}" autoincrement="{$myObject->autoIncrement}" pk="{$myObject->pk}" lenght="{$myObject->fieldLenght}"/>
    {/foreach}
</DATAMODEL>
