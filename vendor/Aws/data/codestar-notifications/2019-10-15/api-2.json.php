<?php

namespace Mailster\Aws3;

// This file was auto-generated from sdk-root/src/data/codestar-notifications/2019-10-15/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2019-10-15', 'endpointPrefix' => 'codestar-notifications', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS CodeStar Notifications', 'serviceId' => 'codestar notifications', 'signatureVersion' => 'v4', 'signingName' => 'codestar-notifications', 'uid' => 'codestar-notifications-2019-10-15'], 'operations' => ['CreateNotificationRule' => ['name' => 'CreateNotificationRule', 'http' => ['method' => 'POST', 'requestUri' => '/createNotificationRule'], 'input' => ['shape' => 'CreateNotificationRuleRequest'], 'output' => ['shape' => 'CreateNotificationRuleResult'], 'errors' => [['shape' => 'ResourceAlreadyExistsException'], ['shape' => 'ValidationException'], ['shape' => 'LimitExceededException'], ['shape' => 'ConfigurationException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'AccessDeniedException']]], 'DeleteNotificationRule' => ['name' => 'DeleteNotificationRule', 'http' => ['method' => 'POST', 'requestUri' => '/deleteNotificationRule'], 'input' => ['shape' => 'DeleteNotificationRuleRequest'], 'output' => ['shape' => 'DeleteNotificationRuleResult'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'LimitExceededException'], ['shape' => 'ConcurrentModificationException']]], 'DeleteTarget' => ['name' => 'DeleteTarget', 'http' => ['method' => 'POST', 'requestUri' => '/deleteTarget'], 'input' => ['shape' => 'DeleteTargetRequest'], 'output' => ['shape' => 'DeleteTargetResult'], 'errors' => [['shape' => 'ValidationException']]], 'DescribeNotificationRule' => ['name' => 'DescribeNotificationRule', 'http' => ['method' => 'POST', 'requestUri' => '/describeNotificationRule'], 'input' => ['shape' => 'DescribeNotificationRuleRequest'], 'output' => ['shape' => 'DescribeNotificationRuleResult'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException']]], 'ListEventTypes' => ['name' => 'ListEventTypes', 'http' => ['method' => 'POST', 'requestUri' => '/listEventTypes'], 'input' => ['shape' => 'ListEventTypesRequest'], 'output' => ['shape' => 'ListEventTypesResult'], 'errors' => [['shape' => 'InvalidNextTokenException'], ['shape' => 'ValidationException']]], 'ListNotificationRules' => ['name' => 'ListNotificationRules', 'http' => ['method' => 'POST', 'requestUri' => '/listNotificationRules'], 'input' => ['shape' => 'ListNotificationRulesRequest'], 'output' => ['shape' => 'ListNotificationRulesResult'], 'errors' => [['shape' => 'InvalidNextTokenException'], ['shape' => 'ValidationException']]], 'ListTagsForResource' => ['name' => 'ListTagsForResource', 'http' => ['method' => 'POST', 'requestUri' => '/listTagsForResource'], 'input' => ['shape' => 'ListTagsForResourceRequest'], 'output' => ['shape' => 'ListTagsForResourceResult'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException']]], 'ListTargets' => ['name' => 'ListTargets', 'http' => ['method' => 'POST', 'requestUri' => '/listTargets'], 'input' => ['shape' => 'ListTargetsRequest'], 'output' => ['shape' => 'ListTargetsResult'], 'errors' => [['shape' => 'InvalidNextTokenException'], ['shape' => 'ValidationException']]], 'Subscribe' => ['name' => 'Subscribe', 'http' => ['method' => 'POST', 'requestUri' => '/subscribe'], 'input' => ['shape' => 'SubscribeRequest'], 'output' => ['shape' => 'SubscribeResult'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ConfigurationException']]], 'TagResource' => ['name' => 'TagResource', 'http' => ['method' => 'POST', 'requestUri' => '/tagResource'], 'input' => ['shape' => 'TagResourceRequest'], 'output' => ['shape' => 'TagResourceResult'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'LimitExceededException'], ['shape' => 'ValidationException'], ['shape' => 'ConcurrentModificationException']]], 'Unsubscribe' => ['name' => 'Unsubscribe', 'http' => ['method' => 'POST', 'requestUri' => '/unsubscribe'], 'input' => ['shape' => 'UnsubscribeRequest'], 'output' => ['shape' => 'UnsubscribeResult'], 'errors' => [['shape' => 'ValidationException']]], 'UntagResource' => ['name' => 'UntagResource', 'http' => ['method' => 'POST', 'requestUri' => '/untagResource/{resourceArn}'], 'input' => ['shape' => 'UntagResourceRequest'], 'output' => ['shape' => 'UntagResourceResult'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'LimitExceededException'], ['shape' => 'ValidationException'], ['shape' => 'ConcurrentModificationException']]], 'UpdateNotificationRule' => ['name' => 'UpdateNotificationRule', 'http' => ['method' => 'POST', 'requestUri' => '/updateNotificationRule'], 'input' => ['shape' => 'UpdateNotificationRuleRequest'], 'output' => ['shape' => 'UpdateNotificationRuleResult'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ConfigurationException']]]], 'shapes' => ['AccessDeniedException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'Message']], 'error' => ['httpStatusCode' => 403], 'exception' => \true], 'ClientRequestToken' => ['type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^[\\w:/-]+$'], 'ConcurrentModificationException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'Message']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ConfigurationException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'Message']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'CreateNotificationRuleRequest' => ['type' => 'structure', 'required' => ['Name', 'EventTypeIds', 'Resource', 'Targets', 'DetailType'], 'members' => ['Name' => ['shape' => 'NotificationRuleName'], 'EventTypeIds' => ['shape' => 'EventTypeIds'], 'Resource' => ['shape' => 'NotificationRuleResource'], 'Targets' => ['shape' => 'Targets'], 'DetailType' => ['shape' => 'DetailType'], 'ClientRequestToken' => ['shape' => 'ClientRequestToken', 'idempotencyToken' => \true], 'Tags' => ['shape' => 'Tags'], 'Status' => ['shape' => 'NotificationRuleStatus']]], 'CreateNotificationRuleResult' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => 'NotificationRuleArn']]], 'CreatedTimestamp' => ['type' => 'timestamp'], 'DeleteNotificationRuleRequest' => ['type' => 'structure', 'required' => ['Arn'], 'members' => ['Arn' => ['shape' => 'NotificationRuleArn']]], 'DeleteNotificationRuleResult' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => 'NotificationRuleArn']]], 'DeleteTargetRequest' => ['type' => 'structure', 'required' => ['TargetAddress'], 'members' => ['TargetAddress' => ['shape' => 'TargetAddress'], 'ForceUnsubscribeAll' => ['shape' => 'ForceUnsubscribeAll']]], 'DeleteTargetResult' => ['type' => 'structure', 'members' => []], 'DescribeNotificationRuleRequest' => ['type' => 'structure', 'required' => ['Arn'], 'members' => ['Arn' => ['shape' => 'NotificationRuleArn']]], 'DescribeNotificationRuleResult' => ['type' => 'structure', 'required' => ['Arn'], 'members' => ['Arn' => ['shape' => 'NotificationRuleArn'], 'Name' => ['shape' => 'NotificationRuleName'], 'EventTypes' => ['shape' => 'EventTypeBatch'], 'Resource' => ['shape' => 'NotificationRuleResource'], 'Targets' => ['shape' => 'TargetsBatch'], 'DetailType' => ['shape' => 'DetailType'], 'CreatedBy' => ['shape' => 'NotificationRuleCreatedBy'], 'Status' => ['shape' => 'NotificationRuleStatus'], 'CreatedTimestamp' => ['shape' => 'CreatedTimestamp'], 'LastModifiedTimestamp' => ['shape' => 'LastModifiedTimestamp'], 'Tags' => ['shape' => 'Tags']]], 'DetailType' => ['type' => 'string', 'enum' => ['BASIC', 'FULL']], 'EventTypeBatch' => ['type' => 'list', 'member' => ['shape' => 'EventTypeSummary']], 'EventTypeId' => ['type' => 'string', 'max' => 200, 'min' => 1], 'EventTypeIds' => ['type' => 'list', 'member' => ['shape' => 'EventTypeId']], 'EventTypeName' => ['type' => 'string'], 'EventTypeSummary' => ['type' => 'structure', 'members' => ['EventTypeId' => ['shape' => 'EventTypeId'], 'ServiceName' => ['shape' => 'ServiceName'], 'EventTypeName' => ['shape' => 'EventTypeName'], 'ResourceType' => ['shape' => 'ResourceType']]], 'ForceUnsubscribeAll' => ['type' => 'boolean'], 'InvalidNextTokenException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'Message']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'LastModifiedTimestamp' => ['type' => 'timestamp'], 'LimitExceededException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'Message']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ListEventTypesFilter' => ['type' => 'structure', 'required' => ['Name', 'Value'], 'members' => ['Name' => ['shape' => 'ListEventTypesFilterName'], 'Value' => ['shape' => 'ListEventTypesFilterValue']]], 'ListEventTypesFilterName' => ['type' => 'string', 'enum' => ['RESOURCE_TYPE', 'SERVICE_NAME']], 'ListEventTypesFilterValue' => ['type' => 'string'], 'ListEventTypesFilters' => ['type' => 'list', 'member' => ['shape' => 'ListEventTypesFilter']], 'ListEventTypesRequest' => ['type' => 'structure', 'members' => ['Filters' => ['shape' => 'ListEventTypesFilters'], 'NextToken' => ['shape' => 'NextToken'], 'MaxResults' => ['shape' => 'MaxResults', 'box' => \true]]], 'ListEventTypesResult' => ['type' => 'structure', 'members' => ['EventTypes' => ['shape' => 'EventTypeBatch'], 'NextToken' => ['shape' => 'NextToken']]], 'ListNotificationRulesFilter' => ['type' => 'structure', 'required' => ['Name', 'Value'], 'members' => ['Name' => ['shape' => 'ListNotificationRulesFilterName'], 'Value' => ['shape' => 'ListNotificationRulesFilterValue']]], 'ListNotificationRulesFilterName' => ['type' => 'string', 'enum' => ['EVENT_TYPE_ID', 'CREATED_BY', 'RESOURCE', 'TARGET_ADDRESS']], 'ListNotificationRulesFilterValue' => ['type' => 'string', 'max' => 2048], 'ListNotificationRulesFilters' => ['type' => 'list', 'member' => ['shape' => 'ListNotificationRulesFilter']], 'ListNotificationRulesRequest' => ['type' => 'structure', 'members' => ['Filters' => ['shape' => 'ListNotificationRulesFilters'], 'NextToken' => ['shape' => 'NextToken'], 'MaxResults' => ['shape' => 'MaxResults', 'box' => \true]]], 'ListNotificationRulesResult' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'NextToken'], 'NotificationRules' => ['shape' => 'NotificationRuleBatch']]], 'ListTagsForResourceRequest' => ['type' => 'structure', 'required' => ['Arn'], 'members' => ['Arn' => ['shape' => 'NotificationRuleArn']]], 'ListTagsForResourceResult' => ['type' => 'structure', 'members' => ['Tags' => ['shape' => 'Tags']]], 'ListTargetsFilter' => ['type' => 'structure', 'required' => ['Name', 'Value'], 'members' => ['Name' => ['shape' => 'ListTargetsFilterName'], 'Value' => ['shape' => 'ListTargetsFilterValue']]], 'ListTargetsFilterName' => ['type' => 'string', 'enum' => ['TARGET_TYPE', 'TARGET_ADDRESS', 'TARGET_STATUS']], 'ListTargetsFilterValue' => ['type' => 'string', 'max' => 2048], 'ListTargetsFilters' => ['type' => 'list', 'member' => ['shape' => 'ListTargetsFilter']], 'ListTargetsRequest' => ['type' => 'structure', 'members' => ['Filters' => ['shape' => 'ListTargetsFilters'], 'NextToken' => ['shape' => 'NextToken'], 'MaxResults' => ['shape' => 'MaxResults', 'box' => \true]]], 'ListTargetsResult' => ['type' => 'structure', 'members' => ['Targets' => ['shape' => 'TargetsBatch'], 'NextToken' => ['shape' => 'NextToken']]], 'MaxResults' => ['type' => 'integer', 'max' => 100, 'min' => 1], 'Message' => ['type' => 'string', 'min' => 1], 'NextToken' => ['type' => 'string', 'pattern' => '^[\\w/+=]+$'], 'NotificationRuleArn' => ['type' => 'string', 'pattern' => '^arn:aws[^:\\s]*:codestar-notifications:[^:\\s]+:\\d{12}:notificationrule\\/(.*\\S)?$'], 'NotificationRuleBatch' => ['type' => 'list', 'member' => ['shape' => 'NotificationRuleSummary']], 'NotificationRuleCreatedBy' => ['type' => 'string', 'min' => 1], 'NotificationRuleId' => ['type' => 'string', 'max' => 40, 'min' => 1], 'NotificationRuleName' => ['type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[A-Za-z0-9\\-_ ]+$', 'sensitive' => \true], 'NotificationRuleResource' => ['type' => 'string', 'pattern' => '^arn:aws[^:\\s]*:[^:\\s]*:[^:\\s]*:[0-9]{12}:[^\\s]+$'], 'NotificationRuleStatus' => ['type' => 'string', 'enum' => ['ENABLED', 'DISABLED']], 'NotificationRuleSummary' => ['type' => 'structure', 'members' => ['Id' => ['shape' => 'NotificationRuleId'], 'Arn' => ['shape' => 'NotificationRuleArn']]], 'ResourceAlreadyExistsException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'Message']], 'error' => ['httpStatusCode' => 409], 'exception' => \true], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'Message']], 'error' => ['httpStatusCode' => 404], 'exception' => \true], 'ResourceType' => ['type' => 'string', 'min' => 1, 'pattern' => '^([a-zA-Z0-9-])+$'], 'ServiceName' => ['type' => 'string'], 'SubscribeRequest' => ['type' => 'structure', 'required' => ['Arn', 'Target'], 'members' => ['Arn' => ['shape' => 'NotificationRuleArn'], 'Target' => ['shape' => 'Target'], 'ClientRequestToken' => ['shape' => 'ClientRequestToken']]], 'SubscribeResult' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => 'NotificationRuleArn']]], 'TagKey' => ['type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$'], 'TagKeys' => ['type' => 'list', 'member' => ['shape' => 'TagKey']], 'TagResourceRequest' => ['type' => 'structure', 'required' => ['Arn', 'Tags'], 'members' => ['Arn' => ['shape' => 'NotificationRuleArn'], 'Tags' => ['shape' => 'Tags']]], 'TagResourceResult' => ['type' => 'structure', 'members' => ['Tags' => ['shape' => 'Tags']]], 'TagValue' => ['type' => 'string', 'max' => 256, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$'], 'Tags' => ['type' => 'map', 'key' => ['shape' => 'TagKey'], 'value' => ['shape' => 'TagValue']], 'Target' => ['type' => 'structure', 'members' => ['TargetType' => ['shape' => 'TargetType'], 'TargetAddress' => ['shape' => 'TargetAddress']]], 'TargetAddress' => ['type' => 'string', 'max' => 320, 'min' => 1, 'sensitive' => \true], 'TargetStatus' => ['type' => 'string', 'enum' => ['PENDING', 'ACTIVE', 'UNREACHABLE', 'INACTIVE', 'DEACTIVATED']], 'TargetSummary' => ['type' => 'structure', 'members' => ['TargetAddress' => ['shape' => 'TargetAddress'], 'TargetType' => ['shape' => 'TargetType'], 'TargetStatus' => ['shape' => 'TargetStatus']]], 'TargetType' => ['type' => 'string', 'pattern' => '^[A-Za-z]+$'], 'Targets' => ['type' => 'list', 'member' => ['shape' => 'Target'], 'max' => 10], 'TargetsBatch' => ['type' => 'list', 'member' => ['shape' => 'TargetSummary']], 'UnsubscribeRequest' => ['type' => 'structure', 'required' => ['Arn', 'TargetAddress'], 'members' => ['Arn' => ['shape' => 'NotificationRuleArn'], 'TargetAddress' => ['shape' => 'TargetAddress']]], 'UnsubscribeResult' => ['type' => 'structure', 'required' => ['Arn'], 'members' => ['Arn' => ['shape' => 'NotificationRuleArn']]], 'UntagResourceRequest' => ['type' => 'structure', 'required' => ['Arn', 'TagKeys'], 'members' => ['Arn' => ['shape' => 'NotificationRuleArn', 'location' => 'uri', 'locationName' => 'resourceArn'], 'TagKeys' => ['shape' => 'TagKeys', 'location' => 'querystring', 'locationName' => 'tagKeys']]], 'UntagResourceResult' => ['type' => 'structure', 'members' => []], 'UpdateNotificationRuleRequest' => ['type' => 'structure', 'required' => ['Arn'], 'members' => ['Arn' => ['shape' => 'NotificationRuleArn'], 'Name' => ['shape' => 'NotificationRuleName'], 'Status' => ['shape' => 'NotificationRuleStatus'], 'EventTypeIds' => ['shape' => 'EventTypeIds'], 'Targets' => ['shape' => 'Targets'], 'DetailType' => ['shape' => 'DetailType']]], 'UpdateNotificationRuleResult' => ['type' => 'structure', 'members' => []], 'ValidationException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'Message']], 'error' => ['httpStatusCode' => 400], 'exception' => \true]]];
