<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookTableColumn File
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
* WorkbookTableColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookTableColumn extends Entity
{
    /**
    * Gets the index
    *
    * @return int The index
    */
    public function getIndex()
    {
        if (array_key_exists("index", $this->_propDict)) {
            return $this->_propDict["index"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the index
    *
    * @param int $val The index
    *
    * @return WorkbookTableColumn
    */
    public function setIndex($val)
    {
        $this->_propDict["index"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return WorkbookTableColumn
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the values
    *
    * @return string The values
    */
    public function getValues()
    {
        if (array_key_exists("values", $this->_propDict)) {
            return $this->_propDict["values"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the values
    *
    * @param string $val The values
    *
    * @return WorkbookTableColumn
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }
    
    /**
    * Gets the filter
    *
    * @return WorkbookFilter The filter
    */
    public function getFilter()
    {
        if (array_key_exists("filter", $this->_propDict)) {
            if (is_a($this->_propDict["filter"], "Microsoft\Graph\Model\WorkbookFilter")) {
                return $this->_propDict["filter"];
            } else {
                $this->_propDict["filter"] = new WorkbookFilter($this->_propDict["filter"]);
                return $this->_propDict["filter"];
            }
        }
        return null;
    }
    
    /**
    * Sets the filter
    *
    * @param WorkbookFilter $val The filter
    *
    * @return WorkbookTableColumn
    */
    public function setFilter($val)
    {
        $this->_propDict["filter"] = $val;
        return $this;
    }
    
}