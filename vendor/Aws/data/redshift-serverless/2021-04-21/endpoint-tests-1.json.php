<?php

namespace Mailster\Aws3;

// This file was auto-generated from sdk-root/src/data/redshift-serverless/2021-04-21/endpoint-tests-1.json
return ['testCases' => [['documentation' => 'For region cn-north-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless-fips.cn-north-1.api.amazonwebservices.com.cn']], 'params' => ['Region' => 'cn-north-1', 'UseDualStack' => \true, 'UseFIPS' => \true]], ['documentation' => 'For region cn-north-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless-fips.cn-north-1.amazonaws.com.cn']], 'params' => ['Region' => 'cn-north-1', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region cn-north-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.cn-north-1.api.amazonwebservices.com.cn']], 'params' => ['Region' => 'cn-north-1', 'UseDualStack' => \true, 'UseFIPS' => \false]], ['documentation' => 'For region cn-north-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.cn-north-1.amazonaws.com.cn']], 'params' => ['Region' => 'cn-north-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless-fips.us-iso-east-1.c2s.ic.gov']], 'params' => ['Region' => 'us-iso-east-1', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.us-iso-east-1.c2s.ic.gov']], 'params' => ['Region' => 'us-iso-east-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region eu-central-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.eu-central-1.amazonaws.com']], 'params' => ['Region' => 'eu-central-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.us-east-1.amazonaws.com']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region eu-west-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.eu-west-1.amazonaws.com']], 'params' => ['Region' => 'eu-west-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region eu-west-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.eu-west-2.amazonaws.com']], 'params' => ['Region' => 'eu-west-2', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region ap-southeast-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.ap-southeast-1.amazonaws.com']], 'params' => ['Region' => 'ap-southeast-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.ap-southeast-2.amazonaws.com']], 'params' => ['Region' => 'ap-southeast-2', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region eu-north-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.eu-north-1.amazonaws.com']], 'params' => ['Region' => 'eu-north-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region us-east-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.us-east-2.amazonaws.com']], 'params' => ['Region' => 'us-east-2', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region us-west-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.us-west-2.amazonaws.com']], 'params' => ['Region' => 'us-west-2', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.ap-northeast-1.amazonaws.com']], 'params' => ['Region' => 'ap-northeast-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region ap-northeast-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.ap-northeast-2.amazonaws.com']], 'params' => ['Region' => 'ap-northeast-2', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless-fips.us-east-1.api.aws']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \true, 'UseFIPS' => \true]], ['documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless-fips.us-east-1.amazonaws.com']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.us-east-1.api.aws']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \true, 'UseFIPS' => \false]], ['documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless-fips.us-gov-east-1.api.aws']], 'params' => ['Region' => 'us-gov-east-1', 'UseDualStack' => \true, 'UseFIPS' => \true]], ['documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless-fips.us-gov-east-1.amazonaws.com']], 'params' => ['Region' => 'us-gov-east-1', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.us-gov-east-1.api.aws']], 'params' => ['Region' => 'us-gov-east-1', 'UseDualStack' => \true, 'UseFIPS' => \false]], ['documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.us-gov-east-1.amazonaws.com']], 'params' => ['Region' => 'us-gov-east-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless-fips.us-isob-east-1.sc2s.sgov.gov']], 'params' => ['Region' => 'us-isob-east-1', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://redshift-serverless.us-isob-east-1.sc2s.sgov.gov']], 'params' => ['Region' => 'us-isob-east-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => ['endpoint' => ['url' => 'https://example.com']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \false, 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => ['error' => 'Invalid Configuration: FIPS and custom endpoint are not supported'], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \true, 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => ['error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported'], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \true, 'UseFIPS' => \false, 'Endpoint' => 'https://example.com']]], 'version' => '1.0'];
