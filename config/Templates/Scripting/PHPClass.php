<?php
<#assign licenseFirst = "/* ">
<#assign licensePrefix = " * ">
<#assign licenseLast = " */">
<#include "../Licenses/license-${project.license}.txt">
<#if package?? && package != "">
package ${package};

</#if>
/**
 * Description of ${name}
 *
 * @author ${user}
 */
class ${name} {
    //put your code here
}
?>
