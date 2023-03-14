<?php

namespace Mailster\Aws3;

// This file was auto-generated from sdk-root/src/data/backupstorage/2018-04-10/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2018-04-10', 'endpointPrefix' => 'backupstorage', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS Backup Storage', 'serviceId' => 'BackupStorage', 'signatureVersion' => 'v4', 'signingName' => 'backup-storage', 'uid' => 'backupstorage-2018-04-10'], 'operations' => ['DeleteObject' => ['name' => 'DeleteObject', 'http' => ['method' => 'DELETE', 'requestUri' => '/backup-jobs/{jobId}/object/{objectName}'], 'input' => ['shape' => 'DeleteObjectInput'], 'errors' => [['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceInternalException'], ['shape' => 'RetryableException'], ['shape' => 'IllegalArgumentException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException']]], 'GetChunk' => ['name' => 'GetChunk', 'http' => ['method' => 'GET', 'requestUri' => '/restore-jobs/{jobId}/chunk/{chunkToken}'], 'input' => ['shape' => 'GetChunkInput'], 'output' => ['shape' => 'GetChunkOutput'], 'errors' => [['shape' => 'IllegalArgumentException'], ['shape' => 'RetryableException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ServiceInternalException'], ['shape' => 'ThrottlingException'], ['shape' => 'KMSInvalidKeyUsageException'], ['shape' => 'AccessDeniedException']]], 'GetObjectMetadata' => ['name' => 'GetObjectMetadata', 'http' => ['method' => 'GET', 'requestUri' => '/restore-jobs/{jobId}/object/{objectToken}/metadata'], 'input' => ['shape' => 'GetObjectMetadataInput'], 'output' => ['shape' => 'GetObjectMetadataOutput'], 'errors' => [['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceInternalException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'RetryableException'], ['shape' => 'IllegalArgumentException'], ['shape' => 'ThrottlingException'], ['shape' => 'KMSInvalidKeyUsageException'], ['shape' => 'AccessDeniedException']]], 'ListChunks' => ['name' => 'ListChunks', 'http' => ['method' => 'GET', 'requestUri' => '/restore-jobs/{jobId}/chunks/{objectToken}/list'], 'input' => ['shape' => 'ListChunksInput'], 'output' => ['shape' => 'ListChunksOutput'], 'errors' => [['shape' => 'ServiceUnavailableException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ServiceInternalException'], ['shape' => 'RetryableException'], ['shape' => 'IllegalArgumentException'], ['shape' => 'AccessDeniedException']]], 'ListObjects' => ['name' => 'ListObjects', 'http' => ['method' => 'GET', 'requestUri' => '/restore-jobs/{jobId}/objects/list'], 'input' => ['shape' => 'ListObjectsInput'], 'output' => ['shape' => 'ListObjectsOutput'], 'errors' => [['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceInternalException'], ['shape' => 'RetryableException'], ['shape' => 'IllegalArgumentException'], ['shape' => 'ThrottlingException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'KMSInvalidKeyUsageException'], ['shape' => 'AccessDeniedException']]], 'NotifyObjectComplete' => ['name' => 'NotifyObjectComplete', 'http' => ['method' => 'PUT', 'requestUri' => '/backup-jobs/{jobId}/object/{uploadId}/complete'], 'input' => ['shape' => 'NotifyObjectCompleteInput'], 'output' => ['shape' => 'NotifyObjectCompleteOutput'], 'errors' => [['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceInternalException'], ['shape' => 'NotReadableInputStreamException'], ['shape' => 'RetryableException'], ['shape' => 'IllegalArgumentException'], ['shape' => 'ThrottlingException'], ['shape' => 'KMSInvalidKeyUsageException'], ['shape' => 'AccessDeniedException']], 'authtype' => 'v4-unsigned-body'], 'PutChunk' => ['name' => 'PutChunk', 'http' => ['method' => 'PUT', 'requestUri' => '/backup-jobs/{jobId}/chunk/{uploadId}/{chunkIndex}'], 'input' => ['shape' => 'PutChunkInput'], 'output' => ['shape' => 'PutChunkOutput'], 'errors' => [['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceInternalException'], ['shape' => 'NotReadableInputStreamException'], ['shape' => 'RetryableException'], ['shape' => 'IllegalArgumentException'], ['shape' => 'ThrottlingException'], ['shape' => 'KMSInvalidKeyUsageException'], ['shape' => 'AccessDeniedException']], 'authtype' => 'v4-unsigned-body'], 'PutObject' => ['name' => 'PutObject', 'http' => ['method' => 'PUT', 'requestUri' => '/backup-jobs/{jobId}/object/{objectName}/put-object'], 'input' => ['shape' => 'PutObjectInput'], 'output' => ['shape' => 'PutObjectOutput'], 'errors' => [['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceInternalException'], ['shape' => 'NotReadableInputStreamException'], ['shape' => 'RetryableException'], ['shape' => 'IllegalArgumentException'], ['shape' => 'ThrottlingException'], ['shape' => 'KMSInvalidKeyUsageException'], ['shape' => 'AccessDeniedException']], 'authtype' => 'v4-unsigned-body'], 'StartObject' => ['name' => 'StartObject', 'http' => ['method' => 'PUT', 'requestUri' => '/backup-jobs/{jobId}/object/{objectName}'], 'input' => ['shape' => 'StartObjectInput'], 'output' => ['shape' => 'StartObjectOutput'], 'errors' => [['shape' => 'ServiceUnavailableException'], ['shape' => 'ServiceInternalException'], ['shape' => 'RetryableException'], ['shape' => 'IllegalArgumentException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'DataAlreadyExistsException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException']]]], 'shapes' => ['AccessDeniedException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ServiceErrorMessage']], 'error' => ['httpStatusCode' => 403], 'exception' => \true, 'synthetic' => \true], 'BackupObject' => ['type' => 'structure', 'required' => ['Name', 'ObjectChecksum', 'ObjectChecksumAlgorithm', 'ObjectToken'], 'members' => ['Name' => ['shape' => 'string'], 'ChunksCount' => ['shape' => 'OptionalLong'], 'MetadataString' => ['shape' => 'string'], 'ObjectChecksum' => ['shape' => 'string'], 'ObjectChecksumAlgorithm' => ['shape' => 'SummaryChecksumAlgorithm'], 'ObjectToken' => ['shape' => 'string']]], 'Chunk' => ['type' => 'structure', 'required' => ['Index', 'Length', 'Checksum', 'ChecksumAlgorithm', 'ChunkToken'], 'members' => ['Index' => ['shape' => 'long'], 'Length' => ['shape' => 'long'], 'Checksum' => ['shape' => 'string'], 'ChecksumAlgorithm' => ['shape' => 'DataChecksumAlgorithm'], 'ChunkToken' => ['shape' => 'string']]], 'ChunkList' => ['type' => 'list', 'member' => ['shape' => 'Chunk']], 'DataAlreadyExistsException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'string'], 'Checksum' => ['shape' => 'string'], 'ChecksumAlgorithm' => ['shape' => 'string']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'DataChecksumAlgorithm' => ['type' => 'string', 'enum' => ['SHA256']], 'DeleteObjectInput' => ['type' => 'structure', 'required' => ['BackupJobId', 'ObjectName'], 'members' => ['BackupJobId' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'jobId'], 'ObjectName' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'objectName']]], 'GetChunkInput' => ['type' => 'structure', 'required' => ['StorageJobId', 'ChunkToken'], 'members' => ['StorageJobId' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'jobId'], 'ChunkToken' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'chunkToken']]], 'GetChunkOutput' => ['type' => 'structure', 'required' => ['Data', 'Length', 'Checksum', 'ChecksumAlgorithm'], 'members' => ['Data' => ['shape' => 'PayloadBlob'], 'Length' => ['shape' => 'long', 'location' => 'header', 'locationName' => 'x-amz-data-length'], 'Checksum' => ['shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-checksum'], 'ChecksumAlgorithm' => ['shape' => 'DataChecksumAlgorithm', 'location' => 'header', 'locationName' => 'x-amz-checksum-algorithm']], 'payload' => 'Data'], 'GetObjectMetadataInput' => ['type' => 'structure', 'required' => ['StorageJobId', 'ObjectToken'], 'members' => ['StorageJobId' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'jobId'], 'ObjectToken' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'objectToken']]], 'GetObjectMetadataOutput' => ['type' => 'structure', 'members' => ['MetadataString' => ['shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-metadata-string'], 'MetadataBlob' => ['shape' => 'PayloadBlob'], 'MetadataBlobLength' => ['shape' => 'long', 'location' => 'header', 'locationName' => 'x-amz-data-length'], 'MetadataBlobChecksum' => ['shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-checksum'], 'MetadataBlobChecksumAlgorithm' => ['shape' => 'DataChecksumAlgorithm', 'location' => 'header', 'locationName' => 'x-amz-checksum-algorithm']], 'payload' => 'MetadataBlob'], 'IllegalArgumentException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'string']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'KMSInvalidKeyUsageException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'string']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ListChunksInput' => ['type' => 'structure', 'required' => ['StorageJobId', 'ObjectToken'], 'members' => ['StorageJobId' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'jobId'], 'ObjectToken' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'objectToken'], 'MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'max-results'], 'NextToken' => ['shape' => 'string', 'location' => 'querystring', 'locationName' => 'next-token']]], 'ListChunksOutput' => ['type' => 'structure', 'required' => ['ChunkList'], 'members' => ['ChunkList' => ['shape' => 'ChunkList'], 'NextToken' => ['shape' => 'string']]], 'ListObjectsInput' => ['type' => 'structure', 'required' => ['StorageJobId'], 'members' => ['StorageJobId' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'jobId'], 'StartingObjectName' => ['shape' => 'string', 'location' => 'querystring', 'locationName' => 'starting-object-name'], 'StartingObjectPrefix' => ['shape' => 'string', 'location' => 'querystring', 'locationName' => 'starting-object-prefix'], 'MaxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'max-results'], 'NextToken' => ['shape' => 'string', 'location' => 'querystring', 'locationName' => 'next-token'], 'CreatedBefore' => ['shape' => 'timestamp', 'location' => 'querystring', 'locationName' => 'created-before'], 'CreatedAfter' => ['shape' => 'timestamp', 'location' => 'querystring', 'locationName' => 'created-after']]], 'ListObjectsOutput' => ['type' => 'structure', 'required' => ['ObjectList'], 'members' => ['ObjectList' => ['shape' => 'ObjectList'], 'NextToken' => ['shape' => 'string']]], 'MaxResults' => ['type' => 'integer', 'max' => 100, 'min' => 1], 'MetadataString' => ['type' => 'string', 'pattern' => '^.{1,256}$'], 'NotReadableInputStreamException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'string']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'NotifyObjectCompleteInput' => ['type' => 'structure', 'required' => ['BackupJobId', 'UploadId', 'ObjectChecksum', 'ObjectChecksumAlgorithm'], 'members' => ['BackupJobId' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'jobId'], 'UploadId' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'uploadId'], 'ObjectChecksum' => ['shape' => 'string', 'location' => 'querystring', 'locationName' => 'checksum'], 'ObjectChecksumAlgorithm' => ['shape' => 'SummaryChecksumAlgorithm', 'location' => 'querystring', 'locationName' => 'checksum-algorithm'], 'MetadataString' => ['shape' => 'MetadataString', 'location' => 'querystring', 'locationName' => 'metadata-string'], 'MetadataBlob' => ['shape' => 'PayloadBlob'], 'MetadataBlobLength' => ['shape' => 'long', 'location' => 'querystring', 'locationName' => 'metadata-blob-length'], 'MetadataBlobChecksum' => ['shape' => 'string', 'location' => 'querystring', 'locationName' => 'metadata-checksum'], 'MetadataBlobChecksumAlgorithm' => ['shape' => 'DataChecksumAlgorithm', 'location' => 'querystring', 'locationName' => 'metadata-checksum-algorithm']], 'payload' => 'MetadataBlob'], 'NotifyObjectCompleteOutput' => ['type' => 'structure', 'required' => ['ObjectChecksum', 'ObjectChecksumAlgorithm'], 'members' => ['ObjectChecksum' => ['shape' => 'string'], 'ObjectChecksumAlgorithm' => ['shape' => 'SummaryChecksumAlgorithm']]], 'ObjectList' => ['type' => 'list', 'member' => ['shape' => 'BackupObject']], 'OptionalLong' => ['type' => 'long'], 'PayloadBlob' => ['type' => 'blob', 'streaming' => \true], 'PutChunkInput' => ['type' => 'structure', 'required' => ['BackupJobId', 'UploadId', 'ChunkIndex', 'Data', 'Length', 'Checksum', 'ChecksumAlgorithm'], 'members' => ['BackupJobId' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'jobId'], 'UploadId' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'uploadId'], 'ChunkIndex' => ['shape' => 'long', 'location' => 'uri', 'locationName' => 'chunkIndex'], 'Data' => ['shape' => 'PayloadBlob'], 'Length' => ['shape' => 'long', 'location' => 'querystring', 'locationName' => 'length'], 'Checksum' => ['shape' => 'string', 'location' => 'querystring', 'locationName' => 'checksum'], 'ChecksumAlgorithm' => ['shape' => 'DataChecksumAlgorithm', 'location' => 'querystring', 'locationName' => 'checksum-algorithm']], 'payload' => 'Data'], 'PutChunkOutput' => ['type' => 'structure', 'required' => ['ChunkChecksum', 'ChunkChecksumAlgorithm'], 'members' => ['ChunkChecksum' => ['shape' => 'string'], 'ChunkChecksumAlgorithm' => ['shape' => 'DataChecksumAlgorithm']]], 'PutObjectInput' => ['type' => 'structure', 'required' => ['BackupJobId', 'ObjectName'], 'members' => ['BackupJobId' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'jobId'], 'ObjectName' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'objectName'], 'MetadataString' => ['shape' => 'string', 'location' => 'querystring', 'locationName' => 'metadata-string'], 'InlineChunk' => ['shape' => 'PayloadBlob'], 'InlineChunkLength' => ['shape' => 'long', 'location' => 'querystring', 'locationName' => 'length'], 'InlineChunkChecksum' => ['shape' => 'string', 'location' => 'querystring', 'locationName' => 'checksum'], 'InlineChunkChecksumAlgorithm' => ['shape' => 'string', 'location' => 'querystring', 'locationName' => 'checksum-algorithm'], 'ObjectChecksum' => ['shape' => 'string', 'location' => 'querystring', 'locationName' => 'object-checksum'], 'ObjectChecksumAlgorithm' => ['shape' => 'SummaryChecksumAlgorithm', 'location' => 'querystring', 'locationName' => 'object-checksum-algorithm'], 'ThrowOnDuplicate' => ['shape' => 'boolean', 'location' => 'querystring', 'locationName' => 'throwOnDuplicate']], 'payload' => 'InlineChunk'], 'PutObjectOutput' => ['type' => 'structure', 'required' => ['InlineChunkChecksum', 'InlineChunkChecksumAlgorithm', 'ObjectChecksum', 'ObjectChecksumAlgorithm'], 'members' => ['InlineChunkChecksum' => ['shape' => 'string'], 'InlineChunkChecksumAlgorithm' => ['shape' => 'DataChecksumAlgorithm'], 'ObjectChecksum' => ['shape' => 'string'], 'ObjectChecksumAlgorithm' => ['shape' => 'SummaryChecksumAlgorithm']]], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'string']], 'error' => ['httpStatusCode' => 404], 'exception' => \true], 'RetryableException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'string']], 'error' => ['httpStatusCode' => 500], 'exception' => \true], 'ServiceErrorMessage' => ['type' => 'string'], 'ServiceInternalException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'string']], 'error' => ['httpStatusCode' => 500], 'exception' => \true, 'fault' => \true], 'ServiceUnavailableException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'string']], 'error' => ['httpStatusCode' => 503], 'exception' => \true, 'fault' => \true], 'StartObjectInput' => ['type' => 'structure', 'required' => ['BackupJobId', 'ObjectName'], 'members' => ['BackupJobId' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'jobId'], 'ObjectName' => ['shape' => 'string', 'location' => 'uri', 'locationName' => 'objectName'], 'ThrowOnDuplicate' => ['shape' => 'boolean']]], 'StartObjectOutput' => ['type' => 'structure', 'required' => ['UploadId'], 'members' => ['UploadId' => ['shape' => 'string']]], 'SummaryChecksumAlgorithm' => ['type' => 'string', 'enum' => ['SUMMARY']], 'ThrottlingException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'string']], 'error' => ['httpStatusCode' => 429], 'exception' => \true], 'boolean' => ['type' => 'boolean'], 'long' => ['type' => 'long'], 'string' => ['type' => 'string'], 'timestamp' => ['type' => 'timestamp']]];
