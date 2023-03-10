<?php

namespace Mailster\Aws3;

// This file was auto-generated from sdk-root/src/data/textract/2018-06-27/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2018-06-27', 'endpointPrefix' => 'textract', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Amazon Textract', 'serviceId' => 'Textract', 'signatureVersion' => 'v4', 'targetPrefix' => 'Textract', 'uid' => 'textract-2018-06-27'], 'operations' => ['AnalyzeDocument' => ['name' => 'AnalyzeDocument', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'AnalyzeDocumentRequest'], 'output' => ['shape' => 'AnalyzeDocumentResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InvalidS3ObjectException'], ['shape' => 'UnsupportedDocumentException'], ['shape' => 'DocumentTooLargeException'], ['shape' => 'BadDocumentException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'InternalServerError'], ['shape' => 'ThrottlingException'], ['shape' => 'HumanLoopQuotaExceededException']]], 'AnalyzeExpense' => ['name' => 'AnalyzeExpense', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'AnalyzeExpenseRequest'], 'output' => ['shape' => 'AnalyzeExpenseResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InvalidS3ObjectException'], ['shape' => 'UnsupportedDocumentException'], ['shape' => 'DocumentTooLargeException'], ['shape' => 'BadDocumentException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'InternalServerError'], ['shape' => 'ThrottlingException']]], 'AnalyzeID' => ['name' => 'AnalyzeID', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'AnalyzeIDRequest'], 'output' => ['shape' => 'AnalyzeIDResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InvalidS3ObjectException'], ['shape' => 'UnsupportedDocumentException'], ['shape' => 'DocumentTooLargeException'], ['shape' => 'BadDocumentException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'InternalServerError'], ['shape' => 'ThrottlingException']]], 'DetectDocumentText' => ['name' => 'DetectDocumentText', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DetectDocumentTextRequest'], 'output' => ['shape' => 'DetectDocumentTextResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InvalidS3ObjectException'], ['shape' => 'UnsupportedDocumentException'], ['shape' => 'DocumentTooLargeException'], ['shape' => 'BadDocumentException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'InternalServerError'], ['shape' => 'ThrottlingException']]], 'GetDocumentAnalysis' => ['name' => 'GetDocumentAnalysis', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetDocumentAnalysisRequest'], 'output' => ['shape' => 'GetDocumentAnalysisResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'InvalidJobIdException'], ['shape' => 'InternalServerError'], ['shape' => 'ThrottlingException'], ['shape' => 'InvalidS3ObjectException'], ['shape' => 'InvalidKMSKeyException']]], 'GetDocumentTextDetection' => ['name' => 'GetDocumentTextDetection', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetDocumentTextDetectionRequest'], 'output' => ['shape' => 'GetDocumentTextDetectionResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'InvalidJobIdException'], ['shape' => 'InternalServerError'], ['shape' => 'ThrottlingException'], ['shape' => 'InvalidS3ObjectException'], ['shape' => 'InvalidKMSKeyException']]], 'GetExpenseAnalysis' => ['name' => 'GetExpenseAnalysis', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetExpenseAnalysisRequest'], 'output' => ['shape' => 'GetExpenseAnalysisResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'InvalidJobIdException'], ['shape' => 'InternalServerError'], ['shape' => 'ThrottlingException'], ['shape' => 'InvalidS3ObjectException'], ['shape' => 'InvalidKMSKeyException']]], 'GetLendingAnalysis' => ['name' => 'GetLendingAnalysis', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetLendingAnalysisRequest'], 'output' => ['shape' => 'GetLendingAnalysisResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'InvalidJobIdException'], ['shape' => 'InternalServerError'], ['shape' => 'ThrottlingException'], ['shape' => 'InvalidS3ObjectException'], ['shape' => 'InvalidKMSKeyException']]], 'GetLendingAnalysisSummary' => ['name' => 'GetLendingAnalysisSummary', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetLendingAnalysisSummaryRequest'], 'output' => ['shape' => 'GetLendingAnalysisSummaryResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'InvalidJobIdException'], ['shape' => 'InternalServerError'], ['shape' => 'ThrottlingException'], ['shape' => 'InvalidS3ObjectException'], ['shape' => 'InvalidKMSKeyException']]], 'StartDocumentAnalysis' => ['name' => 'StartDocumentAnalysis', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StartDocumentAnalysisRequest'], 'output' => ['shape' => 'StartDocumentAnalysisResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InvalidS3ObjectException'], ['shape' => 'InvalidKMSKeyException'], ['shape' => 'UnsupportedDocumentException'], ['shape' => 'DocumentTooLargeException'], ['shape' => 'BadDocumentException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'InternalServerError'], ['shape' => 'IdempotentParameterMismatchException'], ['shape' => 'ThrottlingException'], ['shape' => 'LimitExceededException']]], 'StartDocumentTextDetection' => ['name' => 'StartDocumentTextDetection', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StartDocumentTextDetectionRequest'], 'output' => ['shape' => 'StartDocumentTextDetectionResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InvalidS3ObjectException'], ['shape' => 'InvalidKMSKeyException'], ['shape' => 'UnsupportedDocumentException'], ['shape' => 'DocumentTooLargeException'], ['shape' => 'BadDocumentException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'InternalServerError'], ['shape' => 'IdempotentParameterMismatchException'], ['shape' => 'ThrottlingException'], ['shape' => 'LimitExceededException']]], 'StartExpenseAnalysis' => ['name' => 'StartExpenseAnalysis', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StartExpenseAnalysisRequest'], 'output' => ['shape' => 'StartExpenseAnalysisResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InvalidS3ObjectException'], ['shape' => 'InvalidKMSKeyException'], ['shape' => 'UnsupportedDocumentException'], ['shape' => 'DocumentTooLargeException'], ['shape' => 'BadDocumentException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'InternalServerError'], ['shape' => 'IdempotentParameterMismatchException'], ['shape' => 'ThrottlingException'], ['shape' => 'LimitExceededException']]], 'StartLendingAnalysis' => ['name' => 'StartLendingAnalysis', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StartLendingAnalysisRequest'], 'output' => ['shape' => 'StartLendingAnalysisResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InvalidS3ObjectException'], ['shape' => 'InvalidKMSKeyException'], ['shape' => 'UnsupportedDocumentException'], ['shape' => 'DocumentTooLargeException'], ['shape' => 'BadDocumentException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ProvisionedThroughputExceededException'], ['shape' => 'InternalServerError'], ['shape' => 'IdempotentParameterMismatchException'], ['shape' => 'ThrottlingException'], ['shape' => 'LimitExceededException']]]], 'shapes' => ['AccessDeniedException' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'AnalyzeDocumentRequest' => ['type' => 'structure', 'required' => ['Document', 'FeatureTypes'], 'members' => ['Document' => ['shape' => 'Document'], 'FeatureTypes' => ['shape' => 'FeatureTypes'], 'HumanLoopConfig' => ['shape' => 'HumanLoopConfig'], 'QueriesConfig' => ['shape' => 'QueriesConfig']]], 'AnalyzeDocumentResponse' => ['type' => 'structure', 'members' => ['DocumentMetadata' => ['shape' => 'DocumentMetadata'], 'Blocks' => ['shape' => 'BlockList'], 'HumanLoopActivationOutput' => ['shape' => 'HumanLoopActivationOutput'], 'AnalyzeDocumentModelVersion' => ['shape' => 'String']]], 'AnalyzeExpenseRequest' => ['type' => 'structure', 'required' => ['Document'], 'members' => ['Document' => ['shape' => 'Document']]], 'AnalyzeExpenseResponse' => ['type' => 'structure', 'members' => ['DocumentMetadata' => ['shape' => 'DocumentMetadata'], 'ExpenseDocuments' => ['shape' => 'ExpenseDocumentList']]], 'AnalyzeIDDetections' => ['type' => 'structure', 'required' => ['Text'], 'members' => ['Text' => ['shape' => 'String'], 'NormalizedValue' => ['shape' => 'NormalizedValue'], 'Confidence' => ['shape' => 'Percent']]], 'AnalyzeIDRequest' => ['type' => 'structure', 'required' => ['DocumentPages'], 'members' => ['DocumentPages' => ['shape' => 'DocumentPages']]], 'AnalyzeIDResponse' => ['type' => 'structure', 'members' => ['IdentityDocuments' => ['shape' => 'IdentityDocumentList'], 'DocumentMetadata' => ['shape' => 'DocumentMetadata'], 'AnalyzeIDModelVersion' => ['shape' => 'String']]], 'BadDocumentException' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'Block' => ['type' => 'structure', 'members' => ['BlockType' => ['shape' => 'BlockType'], 'Confidence' => ['shape' => 'Percent'], 'Text' => ['shape' => 'String'], 'TextType' => ['shape' => 'TextType'], 'RowIndex' => ['shape' => 'UInteger'], 'ColumnIndex' => ['shape' => 'UInteger'], 'RowSpan' => ['shape' => 'UInteger'], 'ColumnSpan' => ['shape' => 'UInteger'], 'Geometry' => ['shape' => 'Geometry'], 'Id' => ['shape' => 'NonEmptyString'], 'Relationships' => ['shape' => 'RelationshipList'], 'EntityTypes' => ['shape' => 'EntityTypes'], 'SelectionStatus' => ['shape' => 'SelectionStatus'], 'Page' => ['shape' => 'UInteger'], 'Query' => ['shape' => 'Query']]], 'BlockList' => ['type' => 'list', 'member' => ['shape' => 'Block']], 'BlockType' => ['type' => 'string', 'enum' => ['KEY_VALUE_SET', 'PAGE', 'LINE', 'WORD', 'TABLE', 'CELL', 'SELECTION_ELEMENT', 'MERGED_CELL', 'TITLE', 'QUERY', 'QUERY_RESULT', 'SIGNATURE']], 'BoundingBox' => ['type' => 'structure', 'members' => ['Width' => ['shape' => 'Float'], 'Height' => ['shape' => 'Float'], 'Left' => ['shape' => 'Float'], 'Top' => ['shape' => 'Float']]], 'ClientRequestToken' => ['type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[a-zA-Z0-9-_]+$'], 'ContentClassifier' => ['type' => 'string', 'enum' => ['FreeOfPersonallyIdentifiableInformation', 'FreeOfAdultContent']], 'ContentClassifiers' => ['type' => 'list', 'member' => ['shape' => 'ContentClassifier'], 'max' => 256], 'DetectDocumentTextRequest' => ['type' => 'structure', 'required' => ['Document'], 'members' => ['Document' => ['shape' => 'Document']]], 'DetectDocumentTextResponse' => ['type' => 'structure', 'members' => ['DocumentMetadata' => ['shape' => 'DocumentMetadata'], 'Blocks' => ['shape' => 'BlockList'], 'DetectDocumentTextModelVersion' => ['shape' => 'String']]], 'DetectedSignature' => ['type' => 'structure', 'members' => ['Page' => ['shape' => 'UInteger']]], 'DetectedSignatureList' => ['type' => 'list', 'member' => ['shape' => 'DetectedSignature']], 'Document' => ['type' => 'structure', 'members' => ['Bytes' => ['shape' => 'ImageBlob'], 'S3Object' => ['shape' => 'S3Object']]], 'DocumentGroup' => ['type' => 'structure', 'members' => ['Type' => ['shape' => 'NonEmptyString'], 'SplitDocuments' => ['shape' => 'SplitDocumentList'], 'DetectedSignatures' => ['shape' => 'DetectedSignatureList'], 'UndetectedSignatures' => ['shape' => 'UndetectedSignatureList']]], 'DocumentGroupList' => ['type' => 'list', 'member' => ['shape' => 'DocumentGroup']], 'DocumentLocation' => ['type' => 'structure', 'members' => ['S3Object' => ['shape' => 'S3Object']]], 'DocumentMetadata' => ['type' => 'structure', 'members' => ['Pages' => ['shape' => 'UInteger']]], 'DocumentPages' => ['type' => 'list', 'member' => ['shape' => 'Document'], 'max' => 2, 'min' => 1], 'DocumentTooLargeException' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'EntityType' => ['type' => 'string', 'enum' => ['KEY', 'VALUE', 'COLUMN_HEADER']], 'EntityTypes' => ['type' => 'list', 'member' => ['shape' => 'EntityType']], 'ErrorCode' => ['type' => 'string'], 'ExpenseCurrency' => ['type' => 'structure', 'members' => ['Code' => ['shape' => 'String'], 'Confidence' => ['shape' => 'Percent']]], 'ExpenseDetection' => ['type' => 'structure', 'members' => ['Text' => ['shape' => 'String'], 'Geometry' => ['shape' => 'Geometry'], 'Confidence' => ['shape' => 'Percent']]], 'ExpenseDocument' => ['type' => 'structure', 'members' => ['ExpenseIndex' => ['shape' => 'UInteger'], 'SummaryFields' => ['shape' => 'ExpenseFieldList'], 'LineItemGroups' => ['shape' => 'LineItemGroupList'], 'Blocks' => ['shape' => 'BlockList']]], 'ExpenseDocumentList' => ['type' => 'list', 'member' => ['shape' => 'ExpenseDocument']], 'ExpenseField' => ['type' => 'structure', 'members' => ['Type' => ['shape' => 'ExpenseType'], 'LabelDetection' => ['shape' => 'ExpenseDetection'], 'ValueDetection' => ['shape' => 'ExpenseDetection'], 'PageNumber' => ['shape' => 'UInteger'], 'Currency' => ['shape' => 'ExpenseCurrency'], 'GroupProperties' => ['shape' => 'ExpenseGroupPropertyList']]], 'ExpenseFieldList' => ['type' => 'list', 'member' => ['shape' => 'ExpenseField']], 'ExpenseGroupProperty' => ['type' => 'structure', 'members' => ['Types' => ['shape' => 'StringList'], 'Id' => ['shape' => 'String']]], 'ExpenseGroupPropertyList' => ['type' => 'list', 'member' => ['shape' => 'ExpenseGroupProperty']], 'ExpenseType' => ['type' => 'structure', 'members' => ['Text' => ['shape' => 'String'], 'Confidence' => ['shape' => 'Percent']]], 'Extraction' => ['type' => 'structure', 'members' => ['LendingDocument' => ['shape' => 'LendingDocument'], 'ExpenseDocument' => ['shape' => 'ExpenseDocument'], 'IdentityDocument' => ['shape' => 'IdentityDocument']]], 'ExtractionList' => ['type' => 'list', 'member' => ['shape' => 'Extraction']], 'FeatureType' => ['type' => 'string', 'enum' => ['TABLES', 'FORMS', 'QUERIES', 'SIGNATURES']], 'FeatureTypes' => ['type' => 'list', 'member' => ['shape' => 'FeatureType']], 'Float' => ['type' => 'float'], 'FlowDefinitionArn' => ['type' => 'string', 'max' => 256], 'Geometry' => ['type' => 'structure', 'members' => ['BoundingBox' => ['shape' => 'BoundingBox'], 'Polygon' => ['shape' => 'Polygon']]], 'GetDocumentAnalysisRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId'], 'MaxResults' => ['shape' => 'MaxResults'], 'NextToken' => ['shape' => 'PaginationToken']]], 'GetDocumentAnalysisResponse' => ['type' => 'structure', 'members' => ['DocumentMetadata' => ['shape' => 'DocumentMetadata'], 'JobStatus' => ['shape' => 'JobStatus'], 'NextToken' => ['shape' => 'PaginationToken'], 'Blocks' => ['shape' => 'BlockList'], 'Warnings' => ['shape' => 'Warnings'], 'StatusMessage' => ['shape' => 'StatusMessage'], 'AnalyzeDocumentModelVersion' => ['shape' => 'String']]], 'GetDocumentTextDetectionRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId'], 'MaxResults' => ['shape' => 'MaxResults'], 'NextToken' => ['shape' => 'PaginationToken']]], 'GetDocumentTextDetectionResponse' => ['type' => 'structure', 'members' => ['DocumentMetadata' => ['shape' => 'DocumentMetadata'], 'JobStatus' => ['shape' => 'JobStatus'], 'NextToken' => ['shape' => 'PaginationToken'], 'Blocks' => ['shape' => 'BlockList'], 'Warnings' => ['shape' => 'Warnings'], 'StatusMessage' => ['shape' => 'StatusMessage'], 'DetectDocumentTextModelVersion' => ['shape' => 'String']]], 'GetExpenseAnalysisRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId'], 'MaxResults' => ['shape' => 'MaxResults'], 'NextToken' => ['shape' => 'PaginationToken']]], 'GetExpenseAnalysisResponse' => ['type' => 'structure', 'members' => ['DocumentMetadata' => ['shape' => 'DocumentMetadata'], 'JobStatus' => ['shape' => 'JobStatus'], 'NextToken' => ['shape' => 'PaginationToken'], 'ExpenseDocuments' => ['shape' => 'ExpenseDocumentList'], 'Warnings' => ['shape' => 'Warnings'], 'StatusMessage' => ['shape' => 'StatusMessage'], 'AnalyzeExpenseModelVersion' => ['shape' => 'String']]], 'GetLendingAnalysisRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId'], 'MaxResults' => ['shape' => 'MaxResults'], 'NextToken' => ['shape' => 'PaginationToken']]], 'GetLendingAnalysisResponse' => ['type' => 'structure', 'members' => ['DocumentMetadata' => ['shape' => 'DocumentMetadata'], 'JobStatus' => ['shape' => 'JobStatus'], 'NextToken' => ['shape' => 'PaginationToken'], 'Results' => ['shape' => 'LendingResultList'], 'Warnings' => ['shape' => 'Warnings'], 'StatusMessage' => ['shape' => 'StatusMessage'], 'AnalyzeLendingModelVersion' => ['shape' => 'String']]], 'GetLendingAnalysisSummaryRequest' => ['type' => 'structure', 'required' => ['JobId'], 'members' => ['JobId' => ['shape' => 'JobId']]], 'GetLendingAnalysisSummaryResponse' => ['type' => 'structure', 'members' => ['DocumentMetadata' => ['shape' => 'DocumentMetadata'], 'JobStatus' => ['shape' => 'JobStatus'], 'Summary' => ['shape' => 'LendingSummary'], 'Warnings' => ['shape' => 'Warnings'], 'StatusMessage' => ['shape' => 'StatusMessage'], 'AnalyzeLendingModelVersion' => ['shape' => 'String']]], 'HumanLoopActivationConditionsEvaluationResults' => ['type' => 'string', 'max' => 10240], 'HumanLoopActivationOutput' => ['type' => 'structure', 'members' => ['HumanLoopArn' => ['shape' => 'HumanLoopArn'], 'HumanLoopActivationReasons' => ['shape' => 'HumanLoopActivationReasons'], 'HumanLoopActivationConditionsEvaluationResults' => ['shape' => 'HumanLoopActivationConditionsEvaluationResults', 'jsonvalue' => \true]]], 'HumanLoopActivationReason' => ['type' => 'string'], 'HumanLoopActivationReasons' => ['type' => 'list', 'member' => ['shape' => 'HumanLoopActivationReason'], 'min' => 1], 'HumanLoopArn' => ['type' => 'string', 'max' => 256], 'HumanLoopConfig' => ['type' => 'structure', 'required' => ['HumanLoopName', 'FlowDefinitionArn'], 'members' => ['HumanLoopName' => ['shape' => 'HumanLoopName'], 'FlowDefinitionArn' => ['shape' => 'FlowDefinitionArn'], 'DataAttributes' => ['shape' => 'HumanLoopDataAttributes']]], 'HumanLoopDataAttributes' => ['type' => 'structure', 'members' => ['ContentClassifiers' => ['shape' => 'ContentClassifiers']]], 'HumanLoopName' => ['type' => 'string', 'max' => 63, 'min' => 1, 'pattern' => '^[a-z0-9](-*[a-z0-9])*'], 'HumanLoopQuotaExceededException' => ['type' => 'structure', 'members' => ['ResourceType' => ['shape' => 'String'], 'QuotaCode' => ['shape' => 'String'], 'ServiceCode' => ['shape' => 'String']], 'exception' => \true], 'IdList' => ['type' => 'list', 'member' => ['shape' => 'NonEmptyString']], 'IdempotentParameterMismatchException' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'IdentityDocument' => ['type' => 'structure', 'members' => ['DocumentIndex' => ['shape' => 'UInteger'], 'IdentityDocumentFields' => ['shape' => 'IdentityDocumentFieldList'], 'Blocks' => ['shape' => 'BlockList']]], 'IdentityDocumentField' => ['type' => 'structure', 'members' => ['Type' => ['shape' => 'AnalyzeIDDetections'], 'ValueDetection' => ['shape' => 'AnalyzeIDDetections']]], 'IdentityDocumentFieldList' => ['type' => 'list', 'member' => ['shape' => 'IdentityDocumentField']], 'IdentityDocumentList' => ['type' => 'list', 'member' => ['shape' => 'IdentityDocument']], 'ImageBlob' => ['type' => 'blob', 'max' => 10485760, 'min' => 1], 'InternalServerError' => ['type' => 'structure', 'members' => [], 'exception' => \true, 'fault' => \true], 'InvalidJobIdException' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'InvalidKMSKeyException' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'InvalidParameterException' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'InvalidS3ObjectException' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'JobId' => ['type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[a-zA-Z0-9-_]+$'], 'JobStatus' => ['type' => 'string', 'enum' => ['IN_PROGRESS', 'SUCCEEDED', 'FAILED', 'PARTIAL_SUCCESS']], 'JobTag' => ['type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[a-zA-Z0-9_.\\-:]+'], 'KMSKeyId' => ['type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^[A-Za-z0-9][A-Za-z0-9:_/+=,@.-]{0,2048}$'], 'LendingDetection' => ['type' => 'structure', 'members' => ['Text' => ['shape' => 'String'], 'SelectionStatus' => ['shape' => 'SelectionStatus'], 'Geometry' => ['shape' => 'Geometry'], 'Confidence' => ['shape' => 'Percent']]], 'LendingDetectionList' => ['type' => 'list', 'member' => ['shape' => 'LendingDetection']], 'LendingDocument' => ['type' => 'structure', 'members' => ['LendingFields' => ['shape' => 'LendingFieldList'], 'SignatureDetections' => ['shape' => 'SignatureDetectionList']]], 'LendingField' => ['type' => 'structure', 'members' => ['Type' => ['shape' => 'String'], 'KeyDetection' => ['shape' => 'LendingDetection'], 'ValueDetections' => ['shape' => 'LendingDetectionList']]], 'LendingFieldList' => ['type' => 'list', 'member' => ['shape' => 'LendingField']], 'LendingResult' => ['type' => 'structure', 'members' => ['Page' => ['shape' => 'UInteger'], 'PageClassification' => ['shape' => 'PageClassification'], 'Extractions' => ['shape' => 'ExtractionList']]], 'LendingResultList' => ['type' => 'list', 'member' => ['shape' => 'LendingResult']], 'LendingSummary' => ['type' => 'structure', 'members' => ['DocumentGroups' => ['shape' => 'DocumentGroupList'], 'UndetectedDocumentTypes' => ['shape' => 'UndetectedDocumentTypeList']]], 'LimitExceededException' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'LineItemFields' => ['type' => 'structure', 'members' => ['LineItemExpenseFields' => ['shape' => 'ExpenseFieldList']]], 'LineItemGroup' => ['type' => 'structure', 'members' => ['LineItemGroupIndex' => ['shape' => 'UInteger'], 'LineItems' => ['shape' => 'LineItemList']]], 'LineItemGroupList' => ['type' => 'list', 'member' => ['shape' => 'LineItemGroup']], 'LineItemList' => ['type' => 'list', 'member' => ['shape' => 'LineItemFields']], 'MaxResults' => ['type' => 'integer', 'min' => 1], 'NonEmptyString' => ['type' => 'string', 'pattern' => '.*\\S.*'], 'NormalizedValue' => ['type' => 'structure', 'members' => ['Value' => ['shape' => 'String'], 'ValueType' => ['shape' => 'ValueType']]], 'NotificationChannel' => ['type' => 'structure', 'required' => ['SNSTopicArn', 'RoleArn'], 'members' => ['SNSTopicArn' => ['shape' => 'SNSTopicArn'], 'RoleArn' => ['shape' => 'RoleArn']]], 'OutputConfig' => ['type' => 'structure', 'required' => ['S3Bucket'], 'members' => ['S3Bucket' => ['shape' => 'S3Bucket'], 'S3Prefix' => ['shape' => 'S3ObjectName']]], 'PageClassification' => ['type' => 'structure', 'required' => ['PageType', 'PageNumber'], 'members' => ['PageType' => ['shape' => 'PredictionList'], 'PageNumber' => ['shape' => 'PredictionList']]], 'PageList' => ['type' => 'list', 'member' => ['shape' => 'UInteger']], 'Pages' => ['type' => 'list', 'member' => ['shape' => 'UInteger']], 'PaginationToken' => ['type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '.*\\S.*'], 'Percent' => ['type' => 'float', 'max' => 100, 'min' => 0], 'Point' => ['type' => 'structure', 'members' => ['X' => ['shape' => 'Float'], 'Y' => ['shape' => 'Float']]], 'Polygon' => ['type' => 'list', 'member' => ['shape' => 'Point']], 'Prediction' => ['type' => 'structure', 'members' => ['Value' => ['shape' => 'NonEmptyString'], 'Confidence' => ['shape' => 'Percent']]], 'PredictionList' => ['type' => 'list', 'member' => ['shape' => 'Prediction']], 'ProvisionedThroughputExceededException' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'Queries' => ['type' => 'list', 'member' => ['shape' => 'Query'], 'min' => 1], 'QueriesConfig' => ['type' => 'structure', 'required' => ['Queries'], 'members' => ['Queries' => ['shape' => 'Queries']]], 'Query' => ['type' => 'structure', 'required' => ['Text'], 'members' => ['Text' => ['shape' => 'QueryInput'], 'Alias' => ['shape' => 'QueryInput'], 'Pages' => ['shape' => 'QueryPages']]], 'QueryInput' => ['type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '^[a-zA-Z0-9\\s!"\\#\\$%\'&\\(\\)\\*\\+\\,\\-\\./:;=\\?@\\[\\\\\\]\\^_`\\{\\|\\}~><]+$'], 'QueryPage' => ['type' => 'string', 'max' => 9, 'min' => 1, 'pattern' => '^[0-9\\*\\-]+$'], 'QueryPages' => ['type' => 'list', 'member' => ['shape' => 'QueryPage'], 'min' => 1], 'Relationship' => ['type' => 'structure', 'members' => ['Type' => ['shape' => 'RelationshipType'], 'Ids' => ['shape' => 'IdList']]], 'RelationshipList' => ['type' => 'list', 'member' => ['shape' => 'Relationship']], 'RelationshipType' => ['type' => 'string', 'enum' => ['VALUE', 'CHILD', 'COMPLEX_FEATURES', 'MERGED_CELL', 'TITLE', 'ANSWER']], 'RoleArn' => ['type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:([a-z\\d-]+):iam::\\d{12}:role/?[a-zA-Z_0-9+=,.@\\-_/]+'], 'S3Bucket' => ['type' => 'string', 'max' => 255, 'min' => 3, 'pattern' => '[0-9A-Za-z\\.\\-_]*'], 'S3Object' => ['type' => 'structure', 'members' => ['Bucket' => ['shape' => 'S3Bucket'], 'Name' => ['shape' => 'S3ObjectName'], 'Version' => ['shape' => 'S3ObjectVersion']]], 'S3ObjectName' => ['type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '.*\\S.*'], 'S3ObjectVersion' => ['type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '.*\\S.*'], 'SNSTopicArn' => ['type' => 'string', 'max' => 1024, 'min' => 20, 'pattern' => '(^arn:([a-z\\d-]+):sns:[a-zA-Z\\d-]{1,20}:\\w{12}:.+$)'], 'SelectionStatus' => ['type' => 'string', 'enum' => ['SELECTED', 'NOT_SELECTED']], 'SignatureDetection' => ['type' => 'structure', 'members' => ['Confidence' => ['shape' => 'Percent'], 'Geometry' => ['shape' => 'Geometry']]], 'SignatureDetectionList' => ['type' => 'list', 'member' => ['shape' => 'SignatureDetection']], 'SplitDocument' => ['type' => 'structure', 'members' => ['Index' => ['shape' => 'UInteger'], 'Pages' => ['shape' => 'PageList']]], 'SplitDocumentList' => ['type' => 'list', 'member' => ['shape' => 'SplitDocument']], 'StartDocumentAnalysisRequest' => ['type' => 'structure', 'required' => ['DocumentLocation', 'FeatureTypes'], 'members' => ['DocumentLocation' => ['shape' => 'DocumentLocation'], 'FeatureTypes' => ['shape' => 'FeatureTypes'], 'ClientRequestToken' => ['shape' => 'ClientRequestToken'], 'JobTag' => ['shape' => 'JobTag'], 'NotificationChannel' => ['shape' => 'NotificationChannel'], 'OutputConfig' => ['shape' => 'OutputConfig'], 'KMSKeyId' => ['shape' => 'KMSKeyId'], 'QueriesConfig' => ['shape' => 'QueriesConfig']]], 'StartDocumentAnalysisResponse' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId']]], 'StartDocumentTextDetectionRequest' => ['type' => 'structure', 'required' => ['DocumentLocation'], 'members' => ['DocumentLocation' => ['shape' => 'DocumentLocation'], 'ClientRequestToken' => ['shape' => 'ClientRequestToken'], 'JobTag' => ['shape' => 'JobTag'], 'NotificationChannel' => ['shape' => 'NotificationChannel'], 'OutputConfig' => ['shape' => 'OutputConfig'], 'KMSKeyId' => ['shape' => 'KMSKeyId']]], 'StartDocumentTextDetectionResponse' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId']]], 'StartExpenseAnalysisRequest' => ['type' => 'structure', 'required' => ['DocumentLocation'], 'members' => ['DocumentLocation' => ['shape' => 'DocumentLocation'], 'ClientRequestToken' => ['shape' => 'ClientRequestToken'], 'JobTag' => ['shape' => 'JobTag'], 'NotificationChannel' => ['shape' => 'NotificationChannel'], 'OutputConfig' => ['shape' => 'OutputConfig'], 'KMSKeyId' => ['shape' => 'KMSKeyId']]], 'StartExpenseAnalysisResponse' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId']]], 'StartLendingAnalysisRequest' => ['type' => 'structure', 'required' => ['DocumentLocation'], 'members' => ['DocumentLocation' => ['shape' => 'DocumentLocation'], 'ClientRequestToken' => ['shape' => 'ClientRequestToken'], 'JobTag' => ['shape' => 'JobTag'], 'NotificationChannel' => ['shape' => 'NotificationChannel'], 'OutputConfig' => ['shape' => 'OutputConfig'], 'KMSKeyId' => ['shape' => 'KMSKeyId']]], 'StartLendingAnalysisResponse' => ['type' => 'structure', 'members' => ['JobId' => ['shape' => 'JobId']]], 'StatusMessage' => ['type' => 'string'], 'String' => ['type' => 'string'], 'StringList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'TextType' => ['type' => 'string', 'enum' => ['HANDWRITING', 'PRINTED']], 'ThrottlingException' => ['type' => 'structure', 'members' => [], 'exception' => \true, 'fault' => \true], 'UInteger' => ['type' => 'integer', 'min' => 0], 'UndetectedDocumentTypeList' => ['type' => 'list', 'member' => ['shape' => 'NonEmptyString']], 'UndetectedSignature' => ['type' => 'structure', 'members' => ['Page' => ['shape' => 'UInteger']]], 'UndetectedSignatureList' => ['type' => 'list', 'member' => ['shape' => 'UndetectedSignature']], 'UnsupportedDocumentException' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'ValueType' => ['type' => 'string', 'enum' => ['DATE']], 'Warning' => ['type' => 'structure', 'members' => ['ErrorCode' => ['shape' => 'ErrorCode'], 'Pages' => ['shape' => 'Pages']]], 'Warnings' => ['type' => 'list', 'member' => ['shape' => 'Warning']]]];