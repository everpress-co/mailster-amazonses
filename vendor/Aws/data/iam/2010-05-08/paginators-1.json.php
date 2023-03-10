<?php

namespace Mailster\Aws3;

// This file was auto-generated from sdk-root/src/data/iam/2010-05-08/paginators-1.json
return ['pagination' => ['GetAccountAuthorizationDetails' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => ['UserDetailList', 'GroupDetailList', 'RoleDetailList', 'Policies']], 'GetGroup' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'Users'], 'ListAccessKeys' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'AccessKeyMetadata'], 'ListAccountAliases' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'AccountAliases'], 'ListAttachedGroupPolicies' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'AttachedPolicies'], 'ListAttachedRolePolicies' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'AttachedPolicies'], 'ListAttachedUserPolicies' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'AttachedPolicies'], 'ListEntitiesForPolicy' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => ['PolicyGroups', 'PolicyUsers', 'PolicyRoles']], 'ListGroupPolicies' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'PolicyNames'], 'ListGroups' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'Groups'], 'ListGroupsForUser' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'Groups'], 'ListInstanceProfiles' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'InstanceProfiles'], 'ListInstanceProfilesForRole' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'InstanceProfiles'], 'ListMFADevices' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'MFADevices'], 'ListPolicies' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'Policies'], 'ListPolicyVersions' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'Versions'], 'ListRolePolicies' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'PolicyNames'], 'ListRoles' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'Roles'], 'ListSAMLProviders' => ['result_key' => 'SAMLProviderList'], 'ListSSHPublicKeys' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'SSHPublicKeys'], 'ListServerCertificates' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'ServerCertificateMetadataList'], 'ListSigningCertificates' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'Certificates'], 'ListUserPolicies' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'PolicyNames'], 'ListUserTags' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'Tags'], 'ListUsers' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'Users'], 'ListVirtualMFADevices' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'VirtualMFADevices'], 'SimulateCustomPolicy' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'EvaluationResults'], 'SimulatePrincipalPolicy' => ['input_token' => 'Marker', 'limit_key' => 'MaxItems', 'more_results' => 'IsTruncated', 'output_token' => 'Marker', 'result_key' => 'EvaluationResults']]];
