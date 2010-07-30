<?php
/**
 * File containing the ezcWorkflowConditionIsEqualOrLessThan class.
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package Workflow
 * @version //autogen//
 * @copyright Copyright (C) 2005-2010 eZ Systems AS. All rights reserved.
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * Condition that evaluates to true if the provided value is less than or equal to the reference value.
 *
 * Typically used together with ezcWorkflowConditionVariable to use the
 * condition on a workflow variable.
 *
 * <code>
 * <?php
 * $condition = new ezcWorkflowConditionVariable ( 'variable name' ,
 *   new ezcWorkflowConditionIsEqualOrLessThan ( $comparisonValue )
 * );
 * ?>
 * </code>
 *
 * @package Workflow
 * @version //autogen//
 */
class ezcWorkflowConditionIsEqualOrLessThan extends ezcWorkflowConditionComparison
{
    /**
     * Textual representation of the comparison operator.
     *
     * @var mixed
     */
    protected $operator = '<=';

    /**
     * Evaluates this condition with $value and returns true if $value is less than
     * or equal to the reference value or false if not.
     *
     * @param  mixed $value
     * @return boolean true when the condition holds, false otherwise.
     * @ignore
     */
    public function evaluate( $value )
    {
        return $value <= $this->value;
    }
}
?>
