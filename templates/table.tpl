{literal}<?php class{/literal} {$tableName}
{literal}{{/literal}

    // déclarations des variables
    {foreach $fieldNameArray as $myObject}
    {literal}public ${/literal}{$myObject->fieldName}{literal};{/literal}
    {/foreach}

    // constructeur
    {literal}function {/literal}{$tableName}{literal}() {{/literal}
    {foreach $fieldNameArray as $myObject}
        {literal}$this->{/literal}{$myObject->fieldName}{literal};{/literal}
    {/foreach}
    {literal}}{/literal}

    // Déclarations des fonctions get
    {foreach $fieldNameArray as $myObject}
    {literal}function get{/literal}{$myObject->fieldName|capitalize}{literal}(){{/literal}
        {literal}return $this->{/literal}{$myObject->fieldName}{literal};
    }
    {/literal}
    {/foreach}

    // Déclarations des fonctions set
    {foreach $fieldNameArray as $myObject}
    {if !{$myObject->autoIncrement}}
    {literal}function set{/literal}{$myObject->fieldName|capitalize}{literal}(${/literal}{$myObject->fieldName}{literal}){{/literal}
     {if $myObject->fieldType == 'string'}
        {literal}$this->{/literal}{$myObject->fieldName}{literal} = substr(${/literal}{$myObject->fieldName}{literal}, 0, {/literal}{$myObject->fieldLenght}{literal});{/literal}
     {else}
        {literal}$this->{/literal}{$myObject->fieldName}{literal} = ${/literal}{$myObject->fieldName}{literal};{/literal}
     {/if}
    {literal}}
    {/literal}
    {/if}
    {/foreach}

    {literal}function isNotNullable() {{/literal}
    {foreach $fieldNameArray as $myObject}
        {if {!$myObject->canBeNull} && !{$myObject->autoIncrement}}
            {literal}if (is_null($this->{/literal}{$myObject->fieldName}{literal})) {
                return false;
            }
            {/literal}
        {/if}
    {/foreach}{literal}
    return true;
    }{/literal}

    {literal}function updateQuery() {
        $query = 'UPDATE {/literal}{$tableName}{literal} ';
    {/literal}
    {counter start=0 assign="countField"}
    {foreach $fieldNameArray as $myObject}
        {if !{$myObject->autoIncrement}}
            {if $countField > 0}
                {literal}$query = $query.', ';{/literal}
            {/if}
            {literal}$query = $query.' SET {/literal}{$myObject->fieldName}{literal} = ';{/literal}
            {if $myObject->fieldType == 'string'}
                {literal}$query = $query.'"';{/literal}
            {/if}
                {literal}$query = $query.$this->{/literal}{$myObject->fieldName}{literal};{/literal}
            {if $myObject->fieldType == 'string'}
                {literal}$query = $query.'"';{/literal}
            {/if}
            {counter}
        {/if}
    {/foreach}
    {literal}$query = $query.' WHERE ';{/literal}
    {foreach $fieldNameArray as $myObject}
        {if {$myObject->pk}}
            {if $countField > 0}
                {literal}$query = $query.', ';{/literal}
            {/if}
            {literal}$query = $query.' {/literal}{$myObject->fieldName}{literal} = ';{/literal}
            {if $myObject->fieldType == 'string'}
                {literal}$query = $query.'"';{/literal}
            {/if}
                {literal}$query = $query.$this->{/literal}{$myObject->fieldName}{literal};{/literal}
            {if $myObject->fieldType == 'string'}
                {literal}$query = $query.'"';{/literal}
            {/if}
            {counter}
        {/if}
    {/foreach}
    {literal}
    return $query;
    }{/literal}

{literal}
}
?>{/literal}
