<?php
/**
 * Autoloader definition for the Workflow component.
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
 * @copyright Copyright (C) 2005-2010 eZ Systems AS. All rights reserved.
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @version //autogentag//
 * @filesource
 * @package Workflow
 */

return array(
    'ezcWorkflowException'                        => 'Workflow/exceptions/exception.php',
    'ezcWorkflowDefinitionStorageException'       => 'Workflow/exceptions/definition_storage.php',
    'ezcWorkflowExecutionException'               => 'Workflow/exceptions/execution.php',
    'ezcWorkflowInvalidInputException'            => 'Workflow/exceptions/invalid_input.php',
    'ezcWorkflowInvalidWorkflowException'         => 'Workflow/exceptions/invalid_workflow.php',
    'ezcWorkflowVisitable'                        => 'Workflow/interfaces/visitable.php',
    'ezcWorkflowNode'                             => 'Workflow/interfaces/node.php',
    'ezcWorkflowCondition'                        => 'Workflow/interfaces/condition.php',
    'ezcWorkflowNodeBranch'                       => 'Workflow/interfaces/node_branch.php',
    'ezcWorkflowNodeMerge'                        => 'Workflow/interfaces/node_merge.php',
    'ezcWorkflowConditionBooleanSet'              => 'Workflow/interfaces/condition_boolean_set.php',
    'ezcWorkflowConditionComparison'              => 'Workflow/interfaces/condition_comparison.php',
    'ezcWorkflowConditionType'                    => 'Workflow/interfaces/condition_type.php',
    'ezcWorkflowDefinitionStorage'                => 'Workflow/interfaces/definition_storage.php',
    'ezcWorkflowExecution'                        => 'Workflow/interfaces/execution.php',
    'ezcWorkflowExecutionPlugin'                  => 'Workflow/interfaces/execution_plugin.php',
    'ezcWorkflowNodeArithmeticBase'               => 'Workflow/interfaces/node_arithmetic_base.php',
    'ezcWorkflowNodeConditionalBranch'            => 'Workflow/interfaces/node_conditional_branch.php',
    'ezcWorkflowNodeEnd'                          => 'Workflow/nodes/end.php',
    'ezcWorkflowNodeStart'                        => 'Workflow/nodes/start.php',
    'ezcWorkflowNodeSynchronization'              => 'Workflow/nodes/control_flow/synchronization.php',
    'ezcWorkflowVisitor'                          => 'Workflow/interfaces/visitor.php',
    'ezcWorkflow'                                 => 'Workflow/workflow.php',
    'ezcWorkflowConditionAnd'                     => 'Workflow/conditions/and.php',
    'ezcWorkflowConditionInArray'                 => 'Workflow/conditions/in_array.php',
    'ezcWorkflowConditionIsAnything'              => 'Workflow/conditions/is_anything.php',
    'ezcWorkflowConditionIsArray'                 => 'Workflow/conditions/is_array.php',
    'ezcWorkflowConditionIsBool'                  => 'Workflow/conditions/is_bool.php',
    'ezcWorkflowConditionIsEqual'                 => 'Workflow/conditions/is_equal.php',
    'ezcWorkflowConditionIsEqualOrGreaterThan'    => 'Workflow/conditions/is_equal_or_greater_than.php',
    'ezcWorkflowConditionIsEqualOrLessThan'       => 'Workflow/conditions/is_equal_or_less_than.php',
    'ezcWorkflowConditionIsFalse'                 => 'Workflow/conditions/is_false.php',
    'ezcWorkflowConditionIsFloat'                 => 'Workflow/conditions/is_float.php',
    'ezcWorkflowConditionIsGreaterThan'           => 'Workflow/conditions/is_greater_than.php',
    'ezcWorkflowConditionIsInteger'               => 'Workflow/conditions/is_integer.php',
    'ezcWorkflowConditionIsLessThan'              => 'Workflow/conditions/is_less_than.php',
    'ezcWorkflowConditionIsNotEqual'              => 'Workflow/conditions/is_not_equal.php',
    'ezcWorkflowConditionIsObject'                => 'Workflow/conditions/is_object.php',
    'ezcWorkflowConditionIsString'                => 'Workflow/conditions/is_string.php',
    'ezcWorkflowConditionIsTrue'                  => 'Workflow/conditions/is_true.php',
    'ezcWorkflowConditionNot'                     => 'Workflow/conditions/not.php',
    'ezcWorkflowConditionOr'                      => 'Workflow/conditions/or.php',
    'ezcWorkflowConditionVariable'                => 'Workflow/conditions/variable.php',
    'ezcWorkflowConditionVariables'               => 'Workflow/conditions/variables.php',
    'ezcWorkflowConditionXor'                     => 'Workflow/conditions/xor.php',
    'ezcWorkflowDefinitionStorageXml'             => 'Workflow/definition_storage/xml.php',
    'ezcWorkflowExecutionListener'                => 'Workflow/interfaces/execution_listener.php',
    'ezcWorkflowExecutionListenerPlugin'          => 'Workflow/execution/plugin/listener.php',
    'ezcWorkflowExecutionNonInteractive'          => 'Workflow/execution/non_interactive.php',
    'ezcWorkflowExecutionVisualizerPlugin'        => 'Workflow/execution/plugin/visualizer.php',
    'ezcWorkflowExecutionVisualizerPluginOptions' => 'Workflow/options/execution_plugin_visualizer.php',
    'ezcWorkflowNodeAction'                       => 'Workflow/nodes/action.php',
    'ezcWorkflowNodeCancel'                       => 'Workflow/nodes/cancel.php',
    'ezcWorkflowNodeDiscriminator'                => 'Workflow/nodes/control_flow/discriminator.php',
    'ezcWorkflowNodeExclusiveChoice'              => 'Workflow/nodes/control_flow/exclusive_choice.php',
    'ezcWorkflowNodeFinally'                      => 'Workflow/nodes/finally.php',
    'ezcWorkflowNodeInput'                        => 'Workflow/nodes/variables/input.php',
    'ezcWorkflowNodeLoop'                         => 'Workflow/nodes/control_flow/loop.php',
    'ezcWorkflowNodeMultiChoice'                  => 'Workflow/nodes/control_flow/multi_choice.php',
    'ezcWorkflowNodeParallelSplit'                => 'Workflow/nodes/control_flow/parallel_split.php',
    'ezcWorkflowNodeSimpleMerge'                  => 'Workflow/nodes/control_flow/simple_merge.php',
    'ezcWorkflowNodeSubWorkflow'                  => 'Workflow/nodes/sub_workflow.php',
    'ezcWorkflowNodeSynchronizingMerge'           => 'Workflow/nodes/control_flow/synchronizing_merge.php',
    'ezcWorkflowNodeVariableAdd'                  => 'Workflow/nodes/variables/add.php',
    'ezcWorkflowNodeVariableDecrement'            => 'Workflow/nodes/variables/decrement.php',
    'ezcWorkflowNodeVariableDiv'                  => 'Workflow/nodes/variables/div.php',
    'ezcWorkflowNodeVariableIncrement'            => 'Workflow/nodes/variables/increment.php',
    'ezcWorkflowNodeVariableMul'                  => 'Workflow/nodes/variables/mul.php',
    'ezcWorkflowNodeVariableSet'                  => 'Workflow/nodes/variables/set.php',
    'ezcWorkflowNodeVariableSub'                  => 'Workflow/nodes/variables/sub.php',
    'ezcWorkflowNodeVariableUnset'                => 'Workflow/nodes/variables/unset.php',
    'ezcWorkflowServiceObject'                    => 'Workflow/interfaces/service_object.php',
    'ezcWorkflowUtil'                             => 'Workflow/util.php',
    'ezcWorkflowVariableHandler'                  => 'Workflow/interfaces/variable_handler.php',
    'ezcWorkflowVisitorNodeCollector'             => 'Workflow/visitors/node_collector.php',
    'ezcWorkflowVisitorReset'                     => 'Workflow/visitors/reset.php',
    'ezcWorkflowVisitorVerification'              => 'Workflow/visitors/verification.php',
    'ezcWorkflowVisitorVisualization'             => 'Workflow/visitors/visualization.php',
    'ezcWorkflowVisitorVisualizationOptions'      => 'Workflow/options/visitor_visualization.php',
);
?>
