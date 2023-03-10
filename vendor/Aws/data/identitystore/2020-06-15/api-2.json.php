<?php

namespace Mailster\Aws3;

// This file was auto-generated from sdk-root/src/data/identitystore/2020-06-15/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2020-06-15', 'endpointPrefix' => 'identitystore', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'IdentityStore', 'serviceFullName' => 'AWS SSO Identity Store', 'serviceId' => 'identitystore', 'signatureVersion' => 'v4', 'signingName' => 'identitystore', 'targetPrefix' => 'AWSIdentityStore', 'uid' => 'identitystore-2020-06-15'], 'operations' => ['CreateGroup' => ['name' => 'CreateGroup', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateGroupRequest'], 'output' => ['shape' => 'CreateGroupResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException'], ['shape' => 'ServiceQuotaExceededException']]], 'CreateGroupMembership' => ['name' => 'CreateGroupMembership', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateGroupMembershipRequest'], 'output' => ['shape' => 'CreateGroupMembershipResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException'], ['shape' => 'ServiceQuotaExceededException']]], 'CreateUser' => ['name' => 'CreateUser', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateUserRequest'], 'output' => ['shape' => 'CreateUserResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException'], ['shape' => 'ServiceQuotaExceededException']]], 'DeleteGroup' => ['name' => 'DeleteGroup', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteGroupRequest'], 'output' => ['shape' => 'DeleteGroupResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']], 'idempotent' => \true], 'DeleteGroupMembership' => ['name' => 'DeleteGroupMembership', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteGroupMembershipRequest'], 'output' => ['shape' => 'DeleteGroupMembershipResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']], 'idempotent' => \true], 'DeleteUser' => ['name' => 'DeleteUser', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteUserRequest'], 'output' => ['shape' => 'DeleteUserResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']], 'idempotent' => \true], 'DescribeGroup' => ['name' => 'DescribeGroup', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeGroupRequest'], 'output' => ['shape' => 'DescribeGroupResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']]], 'DescribeGroupMembership' => ['name' => 'DescribeGroupMembership', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeGroupMembershipRequest'], 'output' => ['shape' => 'DescribeGroupMembershipResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']]], 'DescribeUser' => ['name' => 'DescribeUser', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeUserRequest'], 'output' => ['shape' => 'DescribeUserResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']]], 'GetGroupId' => ['name' => 'GetGroupId', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetGroupIdRequest'], 'output' => ['shape' => 'GetGroupIdResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']]], 'GetGroupMembershipId' => ['name' => 'GetGroupMembershipId', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetGroupMembershipIdRequest'], 'output' => ['shape' => 'GetGroupMembershipIdResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']]], 'GetUserId' => ['name' => 'GetUserId', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetUserIdRequest'], 'output' => ['shape' => 'GetUserIdResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']]], 'IsMemberInGroups' => ['name' => 'IsMemberInGroups', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'IsMemberInGroupsRequest'], 'output' => ['shape' => 'IsMemberInGroupsResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']]], 'ListGroupMemberships' => ['name' => 'ListGroupMemberships', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListGroupMembershipsRequest'], 'output' => ['shape' => 'ListGroupMembershipsResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']]], 'ListGroupMembershipsForMember' => ['name' => 'ListGroupMembershipsForMember', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListGroupMembershipsForMemberRequest'], 'output' => ['shape' => 'ListGroupMembershipsForMemberResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']]], 'ListGroups' => ['name' => 'ListGroups', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListGroupsRequest'], 'output' => ['shape' => 'ListGroupsResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']]], 'ListUsers' => ['name' => 'ListUsers', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListUsersRequest'], 'output' => ['shape' => 'ListUsersResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException']]], 'UpdateGroup' => ['name' => 'UpdateGroup', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateGroupRequest'], 'output' => ['shape' => 'UpdateGroupResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException'], ['shape' => 'ServiceQuotaExceededException']]], 'UpdateUser' => ['name' => 'UpdateUser', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateUserRequest'], 'output' => ['shape' => 'UpdateUserResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ValidationException'], ['shape' => 'ServiceQuotaExceededException']]]], 'shapes' => ['AccessDeniedException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ExceptionMessage'], 'RequestId' => ['shape' => 'RequestId']], 'exception' => \true], 'Address' => ['type' => 'structure', 'members' => ['StreetAddress' => ['shape' => 'SensitiveStringType'], 'Locality' => ['shape' => 'SensitiveStringType'], 'Region' => ['shape' => 'SensitiveStringType'], 'PostalCode' => ['shape' => 'SensitiveStringType'], 'Country' => ['shape' => 'SensitiveStringType'], 'Formatted' => ['shape' => 'SensitiveStringType'], 'Type' => ['shape' => 'SensitiveStringType'], 'Primary' => ['shape' => 'SensitiveBooleanType']]], 'Addresses' => ['type' => 'list', 'member' => ['shape' => 'Address'], 'max' => 1, 'min' => 1], 'AlternateIdentifier' => ['type' => 'structure', 'members' => ['ExternalId' => ['shape' => 'ExternalId'], 'UniqueAttribute' => ['shape' => 'UniqueAttribute']], 'union' => \true], 'AttributeOperation' => ['type' => 'structure', 'required' => ['AttributePath'], 'members' => ['AttributePath' => ['shape' => 'AttributePath'], 'AttributeValue' => ['shape' => 'AttributeValue']]], 'AttributeOperations' => ['type' => 'list', 'member' => ['shape' => 'AttributeOperation'], 'max' => 100, 'min' => 1], 'AttributePath' => ['type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '\\p{L}+(?:\\.\\p{L}+){0,2}'], 'AttributeValue' => ['type' => 'structure', 'members' => [], 'document' => \true], 'ConflictException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ExceptionMessage'], 'RequestId' => ['shape' => 'RequestId'], 'Reason' => ['shape' => 'ConflictExceptionReason']], 'exception' => \true], 'ConflictExceptionReason' => ['type' => 'string', 'enum' => ['UNIQUENESS_CONSTRAINT_VIOLATION', 'CONCURRENT_MODIFICATION']], 'CreateGroupMembershipRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'GroupId', 'MemberId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'GroupId' => ['shape' => 'ResourceId'], 'MemberId' => ['shape' => 'MemberId']]], 'CreateGroupMembershipResponse' => ['type' => 'structure', 'required' => ['MembershipId', 'IdentityStoreId'], 'members' => ['MembershipId' => ['shape' => 'ResourceId'], 'IdentityStoreId' => ['shape' => 'IdentityStoreId']]], 'CreateGroupRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'DisplayName' => ['shape' => 'GroupDisplayName'], 'Description' => ['shape' => 'SensitiveStringType']]], 'CreateGroupResponse' => ['type' => 'structure', 'required' => ['GroupId', 'IdentityStoreId'], 'members' => ['GroupId' => ['shape' => 'ResourceId'], 'IdentityStoreId' => ['shape' => 'IdentityStoreId']]], 'CreateUserRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'UserName' => ['shape' => 'UserName'], 'Name' => ['shape' => 'Name'], 'DisplayName' => ['shape' => 'SensitiveStringType'], 'NickName' => ['shape' => 'SensitiveStringType'], 'ProfileUrl' => ['shape' => 'SensitiveStringType'], 'Emails' => ['shape' => 'Emails'], 'Addresses' => ['shape' => 'Addresses'], 'PhoneNumbers' => ['shape' => 'PhoneNumbers'], 'UserType' => ['shape' => 'SensitiveStringType'], 'Title' => ['shape' => 'SensitiveStringType'], 'PreferredLanguage' => ['shape' => 'SensitiveStringType'], 'Locale' => ['shape' => 'SensitiveStringType'], 'Timezone' => ['shape' => 'SensitiveStringType']]], 'CreateUserResponse' => ['type' => 'structure', 'required' => ['UserId', 'IdentityStoreId'], 'members' => ['UserId' => ['shape' => 'ResourceId'], 'IdentityStoreId' => ['shape' => 'IdentityStoreId']]], 'DeleteGroupMembershipRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'MembershipId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'MembershipId' => ['shape' => 'ResourceId']]], 'DeleteGroupMembershipResponse' => ['type' => 'structure', 'members' => []], 'DeleteGroupRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'GroupId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'GroupId' => ['shape' => 'ResourceId']]], 'DeleteGroupResponse' => ['type' => 'structure', 'members' => []], 'DeleteUserRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'UserId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'UserId' => ['shape' => 'ResourceId']]], 'DeleteUserResponse' => ['type' => 'structure', 'members' => []], 'DescribeGroupMembershipRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'MembershipId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'MembershipId' => ['shape' => 'ResourceId']]], 'DescribeGroupMembershipResponse' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'MembershipId', 'GroupId', 'MemberId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'MembershipId' => ['shape' => 'ResourceId'], 'GroupId' => ['shape' => 'ResourceId'], 'MemberId' => ['shape' => 'MemberId']]], 'DescribeGroupRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'GroupId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'GroupId' => ['shape' => 'ResourceId']]], 'DescribeGroupResponse' => ['type' => 'structure', 'required' => ['GroupId', 'IdentityStoreId'], 'members' => ['GroupId' => ['shape' => 'ResourceId'], 'DisplayName' => ['shape' => 'GroupDisplayName'], 'ExternalIds' => ['shape' => 'ExternalIds'], 'Description' => ['shape' => 'SensitiveStringType'], 'IdentityStoreId' => ['shape' => 'IdentityStoreId']]], 'DescribeUserRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'UserId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'UserId' => ['shape' => 'ResourceId']]], 'DescribeUserResponse' => ['type' => 'structure', 'required' => ['UserId', 'IdentityStoreId'], 'members' => ['UserName' => ['shape' => 'UserName'], 'UserId' => ['shape' => 'ResourceId'], 'ExternalIds' => ['shape' => 'ExternalIds'], 'Name' => ['shape' => 'Name'], 'DisplayName' => ['shape' => 'SensitiveStringType'], 'NickName' => ['shape' => 'SensitiveStringType'], 'ProfileUrl' => ['shape' => 'SensitiveStringType'], 'Emails' => ['shape' => 'Emails'], 'Addresses' => ['shape' => 'Addresses'], 'PhoneNumbers' => ['shape' => 'PhoneNumbers'], 'UserType' => ['shape' => 'SensitiveStringType'], 'Title' => ['shape' => 'SensitiveStringType'], 'PreferredLanguage' => ['shape' => 'SensitiveStringType'], 'Locale' => ['shape' => 'SensitiveStringType'], 'Timezone' => ['shape' => 'SensitiveStringType'], 'IdentityStoreId' => ['shape' => 'IdentityStoreId']]], 'Email' => ['type' => 'structure', 'members' => ['Value' => ['shape' => 'SensitiveStringType'], 'Type' => ['shape' => 'SensitiveStringType'], 'Primary' => ['shape' => 'SensitiveBooleanType']]], 'Emails' => ['type' => 'list', 'member' => ['shape' => 'Email'], 'max' => 1, 'min' => 1], 'ExceptionMessage' => ['type' => 'string'], 'ExternalId' => ['type' => 'structure', 'required' => ['Issuer', 'Id'], 'members' => ['Issuer' => ['shape' => 'ExternalIdIssuer'], 'Id' => ['shape' => 'ExternalIdIdentifier']]], 'ExternalIdIdentifier' => ['type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}]+', 'sensitive' => \true], 'ExternalIdIssuer' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '(?!(?i)(arn|aws):)[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}]+', 'sensitive' => \true], 'ExternalIds' => ['type' => 'list', 'member' => ['shape' => 'ExternalId'], 'max' => 10, 'min' => 1], 'Filter' => ['type' => 'structure', 'required' => ['AttributePath', 'AttributeValue'], 'members' => ['AttributePath' => ['shape' => 'AttributePath'], 'AttributeValue' => ['shape' => 'SensitiveStringType']]], 'Filters' => ['type' => 'list', 'member' => ['shape' => 'Filter'], 'max' => 1, 'min' => 0], 'GetGroupIdRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'AlternateIdentifier'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'AlternateIdentifier' => ['shape' => 'AlternateIdentifier']]], 'GetGroupIdResponse' => ['type' => 'structure', 'required' => ['GroupId', 'IdentityStoreId'], 'members' => ['GroupId' => ['shape' => 'ResourceId'], 'IdentityStoreId' => ['shape' => 'IdentityStoreId']]], 'GetGroupMembershipIdRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'GroupId', 'MemberId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'GroupId' => ['shape' => 'ResourceId'], 'MemberId' => ['shape' => 'MemberId']]], 'GetGroupMembershipIdResponse' => ['type' => 'structure', 'required' => ['MembershipId', 'IdentityStoreId'], 'members' => ['MembershipId' => ['shape' => 'ResourceId'], 'IdentityStoreId' => ['shape' => 'IdentityStoreId']]], 'GetUserIdRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'AlternateIdentifier'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'AlternateIdentifier' => ['shape' => 'AlternateIdentifier']]], 'GetUserIdResponse' => ['type' => 'structure', 'required' => ['UserId', 'IdentityStoreId'], 'members' => ['UserId' => ['shape' => 'ResourceId'], 'IdentityStoreId' => ['shape' => 'IdentityStoreId']]], 'Group' => ['type' => 'structure', 'required' => ['GroupId', 'IdentityStoreId'], 'members' => ['GroupId' => ['shape' => 'ResourceId'], 'DisplayName' => ['shape' => 'GroupDisplayName'], 'ExternalIds' => ['shape' => 'ExternalIds'], 'Description' => ['shape' => 'SensitiveStringType'], 'IdentityStoreId' => ['shape' => 'IdentityStoreId']]], 'GroupDisplayName' => ['type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  ]+', 'sensitive' => \true], 'GroupIds' => ['type' => 'list', 'member' => ['shape' => 'ResourceId'], 'max' => 100, 'min' => 1], 'GroupMembership' => ['type' => 'structure', 'required' => ['IdentityStoreId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'MembershipId' => ['shape' => 'ResourceId'], 'GroupId' => ['shape' => 'ResourceId'], 'MemberId' => ['shape' => 'MemberId']]], 'GroupMembershipExistenceResult' => ['type' => 'structure', 'members' => ['GroupId' => ['shape' => 'ResourceId'], 'MemberId' => ['shape' => 'MemberId'], 'MembershipExists' => ['shape' => 'SensitiveBooleanType']]], 'GroupMembershipExistenceResults' => ['type' => 'list', 'member' => ['shape' => 'GroupMembershipExistenceResult']], 'GroupMemberships' => ['type' => 'list', 'member' => ['shape' => 'GroupMembership']], 'Groups' => ['type' => 'list', 'member' => ['shape' => 'Group']], 'IdentityStoreId' => ['type' => 'string', 'max' => 36, 'min' => 1, 'pattern' => 'd-[0-9a-f]{10}$|^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}'], 'InternalServerException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ExceptionMessage'], 'RequestId' => ['shape' => 'RequestId'], 'RetryAfterSeconds' => ['shape' => 'RetryAfterSeconds']], 'exception' => \true, 'fault' => \true, 'retryable' => ['throttling' => \false]], 'IsMemberInGroupsRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'MemberId', 'GroupIds'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'MemberId' => ['shape' => 'MemberId'], 'GroupIds' => ['shape' => 'GroupIds']]], 'IsMemberInGroupsResponse' => ['type' => 'structure', 'required' => ['Results'], 'members' => ['Results' => ['shape' => 'GroupMembershipExistenceResults']]], 'ListGroupMembershipsForMemberRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'MemberId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'MemberId' => ['shape' => 'MemberId'], 'MaxResults' => ['shape' => 'MaxResults'], 'NextToken' => ['shape' => 'NextToken']]], 'ListGroupMembershipsForMemberResponse' => ['type' => 'structure', 'required' => ['GroupMemberships'], 'members' => ['GroupMemberships' => ['shape' => 'GroupMemberships'], 'NextToken' => ['shape' => 'NextToken']]], 'ListGroupMembershipsRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'GroupId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'GroupId' => ['shape' => 'ResourceId'], 'MaxResults' => ['shape' => 'MaxResults'], 'NextToken' => ['shape' => 'NextToken']]], 'ListGroupMembershipsResponse' => ['type' => 'structure', 'required' => ['GroupMemberships'], 'members' => ['GroupMemberships' => ['shape' => 'GroupMemberships'], 'NextToken' => ['shape' => 'NextToken']]], 'ListGroupsRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'MaxResults' => ['shape' => 'MaxResults'], 'NextToken' => ['shape' => 'NextToken'], 'Filters' => ['shape' => 'Filters', 'deprecated' => \true, 'deprecatedMessage' => 'Using filters with ListGroups API is deprecated, please use GetGroupId API instead.']]], 'ListGroupsResponse' => ['type' => 'structure', 'required' => ['Groups'], 'members' => ['Groups' => ['shape' => 'Groups'], 'NextToken' => ['shape' => 'NextToken']]], 'ListUsersRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'MaxResults' => ['shape' => 'MaxResults'], 'NextToken' => ['shape' => 'NextToken'], 'Filters' => ['shape' => 'Filters', 'deprecated' => \true, 'deprecatedMessage' => 'Using filters with ListUsers API is deprecated, please use GetGroupId API instead.']]], 'ListUsersResponse' => ['type' => 'structure', 'required' => ['Users'], 'members' => ['Users' => ['shape' => 'Users'], 'NextToken' => ['shape' => 'NextToken']]], 'MaxResults' => ['type' => 'integer', 'box' => \true, 'max' => 100, 'min' => 1], 'MemberId' => ['type' => 'structure', 'members' => ['UserId' => ['shape' => 'ResourceId']], 'union' => \true], 'Name' => ['type' => 'structure', 'members' => ['Formatted' => ['shape' => 'SensitiveStringType'], 'FamilyName' => ['shape' => 'SensitiveStringType'], 'GivenName' => ['shape' => 'SensitiveStringType'], 'MiddleName' => ['shape' => 'SensitiveStringType'], 'HonorificPrefix' => ['shape' => 'SensitiveStringType'], 'HonorificSuffix' => ['shape' => 'SensitiveStringType']]], 'NextToken' => ['type' => 'string', 'max' => 65535, 'min' => 1, 'pattern' => '[-a-zA-Z0-9+=/:]*'], 'PhoneNumber' => ['type' => 'structure', 'members' => ['Value' => ['shape' => 'SensitiveStringType'], 'Type' => ['shape' => 'SensitiveStringType'], 'Primary' => ['shape' => 'SensitiveBooleanType']]], 'PhoneNumbers' => ['type' => 'list', 'member' => ['shape' => 'PhoneNumber'], 'max' => 1, 'min' => 1], 'RequestId' => ['type' => 'string', 'max' => 36, 'min' => 1, 'pattern' => '[A-Fa-f0-9]{8}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{12}'], 'ResourceId' => ['type' => 'string', 'max' => 47, 'min' => 1, 'pattern' => '([0-9a-f]{10}-|)[A-Fa-f0-9]{8}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{12}'], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['ResourceType' => ['shape' => 'ResourceType'], 'ResourceId' => ['shape' => 'ResourceId'], 'Message' => ['shape' => 'ExceptionMessage'], 'RequestId' => ['shape' => 'RequestId']], 'exception' => \true], 'ResourceType' => ['type' => 'string', 'enum' => ['GROUP', 'USER', 'IDENTITY_STORE', 'GROUP_MEMBERSHIP']], 'RetryAfterSeconds' => ['type' => 'integer'], 'SensitiveBooleanType' => ['type' => 'boolean', 'sensitive' => \true], 'SensitiveStringType' => ['type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+', 'sensitive' => \true], 'ServiceQuotaExceededException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ExceptionMessage'], 'RequestId' => ['shape' => 'RequestId']], 'exception' => \true], 'ThrottlingException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ExceptionMessage'], 'RequestId' => ['shape' => 'RequestId'], 'RetryAfterSeconds' => ['shape' => 'RetryAfterSeconds']], 'exception' => \true, 'retryable' => ['throttling' => \true]], 'UniqueAttribute' => ['type' => 'structure', 'required' => ['AttributePath', 'AttributeValue'], 'members' => ['AttributePath' => ['shape' => 'AttributePath'], 'AttributeValue' => ['shape' => 'AttributeValue']]], 'UpdateGroupRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'GroupId', 'Operations'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'GroupId' => ['shape' => 'ResourceId'], 'Operations' => ['shape' => 'AttributeOperations']]], 'UpdateGroupResponse' => ['type' => 'structure', 'members' => []], 'UpdateUserRequest' => ['type' => 'structure', 'required' => ['IdentityStoreId', 'UserId', 'Operations'], 'members' => ['IdentityStoreId' => ['shape' => 'IdentityStoreId'], 'UserId' => ['shape' => 'ResourceId'], 'Operations' => ['shape' => 'AttributeOperations']]], 'UpdateUserResponse' => ['type' => 'structure', 'members' => []], 'User' => ['type' => 'structure', 'required' => ['UserId', 'IdentityStoreId'], 'members' => ['UserName' => ['shape' => 'UserName'], 'UserId' => ['shape' => 'ResourceId'], 'ExternalIds' => ['shape' => 'ExternalIds'], 'Name' => ['shape' => 'Name'], 'DisplayName' => ['shape' => 'SensitiveStringType'], 'NickName' => ['shape' => 'SensitiveStringType'], 'ProfileUrl' => ['shape' => 'SensitiveStringType'], 'Emails' => ['shape' => 'Emails'], 'Addresses' => ['shape' => 'Addresses'], 'PhoneNumbers' => ['shape' => 'PhoneNumbers'], 'UserType' => ['shape' => 'SensitiveStringType'], 'Title' => ['shape' => 'SensitiveStringType'], 'PreferredLanguage' => ['shape' => 'SensitiveStringType'], 'Locale' => ['shape' => 'SensitiveStringType'], 'Timezone' => ['shape' => 'SensitiveStringType'], 'IdentityStoreId' => ['shape' => 'IdentityStoreId']]], 'UserName' => ['type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}]+', 'sensitive' => \true], 'Users' => ['type' => 'list', 'member' => ['shape' => 'User']], 'ValidationException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ExceptionMessage'], 'RequestId' => ['shape' => 'RequestId']], 'exception' => \true]]];