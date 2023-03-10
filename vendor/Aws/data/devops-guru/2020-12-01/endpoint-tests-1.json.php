<?php

namespace Mailster\Aws3;

// This file was auto-generated from sdk-root/src/data/devops-guru/2020-12-01/endpoint-tests-1.json
return ['testCases' => [['documentation' => 'For region ap-south-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.ap-south-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'ap-south-1', 'UseFIPS' => \true]], ['documentation' => 'For region ap-south-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.ap-south-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'ap-south-1', 'UseFIPS' => \true]], ['documentation' => 'For region ap-south-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.ap-south-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'ap-south-1', 'UseFIPS' => \false]], ['documentation' => 'For region ap-south-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.ap-south-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'ap-south-1', 'UseFIPS' => \false]], ['documentation' => 'For region ca-central-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.ca-central-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'ca-central-1', 'UseFIPS' => \true]], ['documentation' => 'For region ca-central-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.ca-central-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'ca-central-1', 'UseFIPS' => \true]], ['documentation' => 'For region ca-central-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.ca-central-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'ca-central-1', 'UseFIPS' => \false]], ['documentation' => 'For region ca-central-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.ca-central-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'ca-central-1', 'UseFIPS' => \false]], ['documentation' => 'For region eu-central-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.eu-central-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'eu-central-1', 'UseFIPS' => \true]], ['documentation' => 'For region eu-central-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.eu-central-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'eu-central-1', 'UseFIPS' => \true]], ['documentation' => 'For region eu-central-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.eu-central-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'eu-central-1', 'UseFIPS' => \false]], ['documentation' => 'For region eu-central-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.eu-central-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'eu-central-1', 'UseFIPS' => \false]], ['documentation' => 'For region us-west-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.us-west-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'us-west-1', 'UseFIPS' => \true]], ['documentation' => 'For region us-west-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.us-west-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'us-west-1', 'UseFIPS' => \true]], ['documentation' => 'For region us-west-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.us-west-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'us-west-1', 'UseFIPS' => \false]], ['documentation' => 'For region us-west-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.us-west-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'us-west-1', 'UseFIPS' => \false]], ['documentation' => 'For region us-west-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.us-west-2.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'us-west-2', 'UseFIPS' => \true]], ['documentation' => 'For region us-west-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.us-west-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'us-west-2', 'UseFIPS' => \true]], ['documentation' => 'For region us-west-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.us-west-2.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'us-west-2', 'UseFIPS' => \false]], ['documentation' => 'For region us-west-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.us-west-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'us-west-2', 'UseFIPS' => \false]], ['documentation' => 'For region eu-north-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.eu-north-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'eu-north-1', 'UseFIPS' => \true]], ['documentation' => 'For region eu-north-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.eu-north-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'eu-north-1', 'UseFIPS' => \true]], ['documentation' => 'For region eu-north-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.eu-north-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'eu-north-1', 'UseFIPS' => \false]], ['documentation' => 'For region eu-north-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.eu-north-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'eu-north-1', 'UseFIPS' => \false]], ['documentation' => 'For region eu-west-3 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.eu-west-3.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'eu-west-3', 'UseFIPS' => \true]], ['documentation' => 'For region eu-west-3 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.eu-west-3.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'eu-west-3', 'UseFIPS' => \true]], ['documentation' => 'For region eu-west-3 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.eu-west-3.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'eu-west-3', 'UseFIPS' => \false]], ['documentation' => 'For region eu-west-3 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.eu-west-3.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'eu-west-3', 'UseFIPS' => \false]], ['documentation' => 'For region eu-west-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.eu-west-2.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'eu-west-2', 'UseFIPS' => \true]], ['documentation' => 'For region eu-west-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.eu-west-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'eu-west-2', 'UseFIPS' => \true]], ['documentation' => 'For region eu-west-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.eu-west-2.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'eu-west-2', 'UseFIPS' => \false]], ['documentation' => 'For region eu-west-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.eu-west-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'eu-west-2', 'UseFIPS' => \false]], ['documentation' => 'For region eu-west-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.eu-west-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'eu-west-1', 'UseFIPS' => \true]], ['documentation' => 'For region eu-west-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.eu-west-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'eu-west-1', 'UseFIPS' => \true]], ['documentation' => 'For region eu-west-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.eu-west-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'eu-west-1', 'UseFIPS' => \false]], ['documentation' => 'For region eu-west-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.eu-west-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'eu-west-1', 'UseFIPS' => \false]], ['documentation' => 'For region ap-northeast-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.ap-northeast-2.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'ap-northeast-2', 'UseFIPS' => \true]], ['documentation' => 'For region ap-northeast-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.ap-northeast-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'ap-northeast-2', 'UseFIPS' => \true]], ['documentation' => 'For region ap-northeast-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.ap-northeast-2.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'ap-northeast-2', 'UseFIPS' => \false]], ['documentation' => 'For region ap-northeast-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.ap-northeast-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'ap-northeast-2', 'UseFIPS' => \false]], ['documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.ap-northeast-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'ap-northeast-1', 'UseFIPS' => \true]], ['documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.ap-northeast-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'ap-northeast-1', 'UseFIPS' => \true]], ['documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.ap-northeast-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'ap-northeast-1', 'UseFIPS' => \false]], ['documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.ap-northeast-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'ap-northeast-1', 'UseFIPS' => \false]], ['documentation' => 'For region sa-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.sa-east-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'sa-east-1', 'UseFIPS' => \true]], ['documentation' => 'For region sa-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.sa-east-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'sa-east-1', 'UseFIPS' => \true]], ['documentation' => 'For region sa-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.sa-east-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'sa-east-1', 'UseFIPS' => \false]], ['documentation' => 'For region sa-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.sa-east-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'sa-east-1', 'UseFIPS' => \false]], ['documentation' => 'For region ap-southeast-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.ap-southeast-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'ap-southeast-1', 'UseFIPS' => \true]], ['documentation' => 'For region ap-southeast-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.ap-southeast-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'ap-southeast-1', 'UseFIPS' => \true]], ['documentation' => 'For region ap-southeast-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.ap-southeast-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'ap-southeast-1', 'UseFIPS' => \false]], ['documentation' => 'For region ap-southeast-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.ap-southeast-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'ap-southeast-1', 'UseFIPS' => \false]], ['documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.ap-southeast-2.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'ap-southeast-2', 'UseFIPS' => \true]], ['documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.ap-southeast-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'ap-southeast-2', 'UseFIPS' => \true]], ['documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.ap-southeast-2.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'ap-southeast-2', 'UseFIPS' => \false]], ['documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.ap-southeast-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'ap-southeast-2', 'UseFIPS' => \false]], ['documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.us-east-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'us-east-1', 'UseFIPS' => \true]], ['documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.us-east-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'us-east-1', 'UseFIPS' => \true]], ['documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.us-east-1.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'us-east-1', 'UseFIPS' => \false]], ['documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.us-east-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'us-east-1', 'UseFIPS' => \false]], ['documentation' => 'For region us-east-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.us-east-2.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'us-east-2', 'UseFIPS' => \true]], ['documentation' => 'For region us-east-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru-fips.us-east-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'us-east-2', 'UseFIPS' => \true]], ['documentation' => 'For region us-east-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.us-east-2.api.aws']], 'params' => ['UseDualStack' => \true, 'Region' => 'us-east-2', 'UseFIPS' => \false]], ['documentation' => 'For region us-east-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://devops-guru.us-east-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'us-east-2', 'UseFIPS' => \false]], ['documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => ['endpoint' => ['url' => 'https://example.com']], 'params' => ['UseDualStack' => \false, 'Region' => 'us-east-1', 'UseFIPS' => \false, 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => ['error' => 'Invalid Configuration: FIPS and custom endpoint are not supported'], 'params' => ['UseDualStack' => \false, 'Region' => 'us-east-1', 'UseFIPS' => \true, 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => ['error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported'], 'params' => ['UseDualStack' => \true, 'Region' => 'us-east-1', 'UseFIPS' => \false, 'Endpoint' => 'https://example.com']]], 'version' => '1.0'];