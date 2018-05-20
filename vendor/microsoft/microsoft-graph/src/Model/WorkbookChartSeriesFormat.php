<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartSeriesFormat File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* WorkbookChartSeriesFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookChartSeriesFormat extends Entity
{
    /**
    * Gets the fill
    *
    * @return WorkbookChartFill The fill
    */
    public function getFill()
    {
        if (array_key_exists("fill", $this->_propDict)) {
            if (is_a($this->_propDict["fill"], "Microsoft\Graph\Model\WorkbookChartFill")) {
                return $this->_propDict["fill"];
            } else {
                $this->_propDict["fill"] = new WorkbookChartFill($this->_propDict["fill"]);
                return $this->_propDict["fill"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fill
    *
    * @param WorkbookChartFill $val The fill
    *
    * @return WorkbookChartSeriesFormat
    */
    public function setFill($val)
    {
        $this->_propDict["fill"] = $val;
        return $this;
    }
    
    /**
    * Gets the line
    *
    * @return WorkbookChartLineFormat The line
    */
    public function getLine()
    {
        if (array_key_exists("line", $this->_propDict)) {
            if (is_a($this->_propDict["line"], "Microsoft\Graph\Model\WorkbookChartLineFormat")) {
                return $this->_propDict["line"];
            } else {
                $this->_propDict["line"] = new WorkbookChartLineFormat($this->_propDict["line"]);
                return $this->_propDict["line"];
            }
        }
        return null;
    }
    
    /**
    * Sets the line
    *
    * @param WorkbookChartLineFormat $val The line
    *
    * @return WorkbookChartSeriesFormat
    */
    public function setLine($val)
    {
        $this->_propDict["line"] = $val;
        return $this;
    }
    
}