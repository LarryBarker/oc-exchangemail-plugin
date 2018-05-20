<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartTitle File
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
* WorkbookChartTitle class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookChartTitle extends Entity
{
    /**
    * Gets the overlay
    *
    * @return bool The overlay
    */
    public function getOverlay()
    {
        if (array_key_exists("overlay", $this->_propDict)) {
            return $this->_propDict["overlay"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the overlay
    *
    * @param bool $val The overlay
    *
    * @return WorkbookChartTitle
    */
    public function setOverlay($val)
    {
        $this->_propDict["overlay"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the text
    *
    * @return string The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the text
    *
    * @param string $val The text
    *
    * @return WorkbookChartTitle
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    
    /**
    * Gets the visible
    *
    * @return bool The visible
    */
    public function getVisible()
    {
        if (array_key_exists("visible", $this->_propDict)) {
            return $this->_propDict["visible"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the visible
    *
    * @param bool $val The visible
    *
    * @return WorkbookChartTitle
    */
    public function setVisible($val)
    {
        $this->_propDict["visible"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the format
    *
    * @return WorkbookChartTitleFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "Microsoft\Graph\Model\WorkbookChartTitleFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartTitleFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    *
    * @param WorkbookChartTitleFormat $val The format
    *
    * @return WorkbookChartTitle
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
}