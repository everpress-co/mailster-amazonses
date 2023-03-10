<?php

namespace Mailster\Aws3;

// This file was auto-generated from sdk-root/src/data/ssm/2014-11-06/endpoint-tests-1.json
return ['testCases' => [['documentation' => 'For region ap-south-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-south-2.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-south-2', 'UseDualStack' => \true]], ['documentation' => 'For region ap-south-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-south-2.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-south-2', 'UseDualStack' => \false]], ['documentation' => 'For region ap-south-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-south-2.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-south-2', 'UseDualStack' => \true]], ['documentation' => 'For region ap-south-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-south-2.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-south-2', 'UseDualStack' => \false]], ['documentation' => 'For region ap-south-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-south-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-south-1', 'UseDualStack' => \true]], ['documentation' => 'For region ap-south-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-south-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-south-1', 'UseDualStack' => \false]], ['documentation' => 'For region ap-south-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-south-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-south-1', 'UseDualStack' => \true]], ['documentation' => 'For region ap-south-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-south-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-south-1', 'UseDualStack' => \false]], ['documentation' => 'For region eu-south-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-south-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-south-1', 'UseDualStack' => \true]], ['documentation' => 'For region eu-south-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-south-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-south-1', 'UseDualStack' => \false]], ['documentation' => 'For region eu-south-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-south-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-south-1', 'UseDualStack' => \true]], ['documentation' => 'For region eu-south-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-south-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-south-1', 'UseDualStack' => \false]], ['documentation' => 'For region eu-south-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-south-2.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-south-2', 'UseDualStack' => \true]], ['documentation' => 'For region eu-south-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-south-2.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-south-2', 'UseDualStack' => \false]], ['documentation' => 'For region eu-south-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-south-2.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-south-2', 'UseDualStack' => \true]], ['documentation' => 'For region eu-south-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-south-2.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-south-2', 'UseDualStack' => \false]], ['documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.us-gov-east-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-gov-east-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-gov-east-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-gov-east-1', 'UseDualStack' => \false]], ['documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-gov-east-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-gov-east-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-gov-east-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-gov-east-1', 'UseDualStack' => \false]], ['documentation' => 'For region me-central-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.me-central-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'me-central-1', 'UseDualStack' => \true]], ['documentation' => 'For region me-central-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.me-central-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'me-central-1', 'UseDualStack' => \false]], ['documentation' => 'For region me-central-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.me-central-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'me-central-1', 'UseDualStack' => \true]], ['documentation' => 'For region me-central-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.me-central-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'me-central-1', 'UseDualStack' => \false]], ['documentation' => 'For region ca-central-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ca-central-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'ca-central-1', 'UseDualStack' => \true]], ['documentation' => 'For region ca-central-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ca-central-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'ca-central-1', 'UseDualStack' => \false]], ['documentation' => 'For region ca-central-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ca-central-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'ca-central-1', 'UseDualStack' => \true]], ['documentation' => 'For region ca-central-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ca-central-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'ca-central-1', 'UseDualStack' => \false]], ['documentation' => 'For region eu-central-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-central-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-central-1', 'UseDualStack' => \true]], ['documentation' => 'For region eu-central-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-central-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-central-1', 'UseDualStack' => \false]], ['documentation' => 'For region eu-central-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-central-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-central-1', 'UseDualStack' => \true]], ['documentation' => 'For region eu-central-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-central-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-central-1', 'UseDualStack' => \false]], ['documentation' => 'For region us-iso-west-1 with FIPS enabled and DualStack enabled', 'expect' => ['error' => 'FIPS and DualStack are enabled, but this partition does not support one or both'], 'params' => ['UseFIPS' => \true, 'Region' => 'us-iso-west-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-iso-west-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.us-iso-west-1.c2s.ic.gov']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-iso-west-1', 'UseDualStack' => \false]], ['documentation' => 'For region us-iso-west-1 with FIPS disabled and DualStack enabled', 'expect' => ['error' => 'DualStack is enabled but this partition does not support DualStack'], 'params' => ['UseFIPS' => \false, 'Region' => 'us-iso-west-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-iso-west-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-iso-west-1.c2s.ic.gov']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-iso-west-1', 'UseDualStack' => \false]], ['documentation' => 'For region eu-central-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-central-2.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-central-2', 'UseDualStack' => \true]], ['documentation' => 'For region eu-central-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-central-2.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-central-2', 'UseDualStack' => \false]], ['documentation' => 'For region eu-central-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-central-2.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-central-2', 'UseDualStack' => \true]], ['documentation' => 'For region eu-central-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-central-2.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-central-2', 'UseDualStack' => \false]], ['documentation' => 'For region us-west-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.us-west-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-west-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-west-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.us-west-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-west-1', 'UseDualStack' => \false]], ['documentation' => 'For region us-west-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-west-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-west-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-west-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-west-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-west-1', 'UseDualStack' => \false]], ['documentation' => 'For region us-west-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.us-west-2.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-west-2', 'UseDualStack' => \true]], ['documentation' => 'For region us-west-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.us-west-2.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-west-2', 'UseDualStack' => \false]], ['documentation' => 'For region us-west-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-west-2.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-west-2', 'UseDualStack' => \true]], ['documentation' => 'For region us-west-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-west-2.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-west-2', 'UseDualStack' => \false]], ['documentation' => 'For region af-south-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.af-south-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'af-south-1', 'UseDualStack' => \true]], ['documentation' => 'For region af-south-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.af-south-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'af-south-1', 'UseDualStack' => \false]], ['documentation' => 'For region af-south-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.af-south-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'af-south-1', 'UseDualStack' => \true]], ['documentation' => 'For region af-south-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.af-south-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'af-south-1', 'UseDualStack' => \false]], ['documentation' => 'For region eu-north-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-north-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-north-1', 'UseDualStack' => \true]], ['documentation' => 'For region eu-north-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-north-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-north-1', 'UseDualStack' => \false]], ['documentation' => 'For region eu-north-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-north-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-north-1', 'UseDualStack' => \true]], ['documentation' => 'For region eu-north-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-north-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-north-1', 'UseDualStack' => \false]], ['documentation' => 'For region eu-west-3 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-west-3.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-west-3', 'UseDualStack' => \true]], ['documentation' => 'For region eu-west-3 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-west-3.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-west-3', 'UseDualStack' => \false]], ['documentation' => 'For region eu-west-3 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-west-3.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-west-3', 'UseDualStack' => \true]], ['documentation' => 'For region eu-west-3 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-west-3.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-west-3', 'UseDualStack' => \false]], ['documentation' => 'For region eu-west-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-west-2.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-west-2', 'UseDualStack' => \true]], ['documentation' => 'For region eu-west-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-west-2.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-west-2', 'UseDualStack' => \false]], ['documentation' => 'For region eu-west-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-west-2.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-west-2', 'UseDualStack' => \true]], ['documentation' => 'For region eu-west-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-west-2.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-west-2', 'UseDualStack' => \false]], ['documentation' => 'For region eu-west-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-west-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-west-1', 'UseDualStack' => \true]], ['documentation' => 'For region eu-west-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.eu-west-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'eu-west-1', 'UseDualStack' => \false]], ['documentation' => 'For region eu-west-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-west-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-west-1', 'UseDualStack' => \true]], ['documentation' => 'For region eu-west-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.eu-west-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'eu-west-1', 'UseDualStack' => \false]], ['documentation' => 'For region ap-northeast-3 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-northeast-3.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-northeast-3', 'UseDualStack' => \true]], ['documentation' => 'For region ap-northeast-3 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-northeast-3.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-northeast-3', 'UseDualStack' => \false]], ['documentation' => 'For region ap-northeast-3 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-northeast-3.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-northeast-3', 'UseDualStack' => \true]], ['documentation' => 'For region ap-northeast-3 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-northeast-3.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-northeast-3', 'UseDualStack' => \false]], ['documentation' => 'For region ap-northeast-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-northeast-2.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-northeast-2', 'UseDualStack' => \true]], ['documentation' => 'For region ap-northeast-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-northeast-2.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-northeast-2', 'UseDualStack' => \false]], ['documentation' => 'For region ap-northeast-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-northeast-2.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-northeast-2', 'UseDualStack' => \true]], ['documentation' => 'For region ap-northeast-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-northeast-2.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-northeast-2', 'UseDualStack' => \false]], ['documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-northeast-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-northeast-1', 'UseDualStack' => \true]], ['documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-northeast-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-northeast-1', 'UseDualStack' => \false]], ['documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-northeast-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-northeast-1', 'UseDualStack' => \true]], ['documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-northeast-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-northeast-1', 'UseDualStack' => \false]], ['documentation' => 'For region me-south-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.me-south-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'me-south-1', 'UseDualStack' => \true]], ['documentation' => 'For region me-south-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.me-south-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'me-south-1', 'UseDualStack' => \false]], ['documentation' => 'For region me-south-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.me-south-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'me-south-1', 'UseDualStack' => \true]], ['documentation' => 'For region me-south-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.me-south-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'me-south-1', 'UseDualStack' => \false]], ['documentation' => 'For region sa-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.sa-east-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'sa-east-1', 'UseDualStack' => \true]], ['documentation' => 'For region sa-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.sa-east-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'sa-east-1', 'UseDualStack' => \false]], ['documentation' => 'For region sa-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.sa-east-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'sa-east-1', 'UseDualStack' => \true]], ['documentation' => 'For region sa-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.sa-east-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'sa-east-1', 'UseDualStack' => \false]], ['documentation' => 'For region ap-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-east-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-east-1', 'UseDualStack' => \true]], ['documentation' => 'For region ap-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-east-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-east-1', 'UseDualStack' => \false]], ['documentation' => 'For region ap-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-east-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-east-1', 'UseDualStack' => \true]], ['documentation' => 'For region ap-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-east-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-east-1', 'UseDualStack' => \false]], ['documentation' => 'For region cn-north-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.cn-north-1.api.amazonwebservices.com.cn']], 'params' => ['UseFIPS' => \true, 'Region' => 'cn-north-1', 'UseDualStack' => \true]], ['documentation' => 'For region cn-north-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.cn-north-1.amazonaws.com.cn']], 'params' => ['UseFIPS' => \true, 'Region' => 'cn-north-1', 'UseDualStack' => \false]], ['documentation' => 'For region cn-north-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.cn-north-1.api.amazonwebservices.com.cn']], 'params' => ['UseFIPS' => \false, 'Region' => 'cn-north-1', 'UseDualStack' => \true]], ['documentation' => 'For region cn-north-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.cn-north-1.amazonaws.com.cn']], 'params' => ['UseFIPS' => \false, 'Region' => 'cn-north-1', 'UseDualStack' => \false]], ['documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.us-gov-west-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-gov-west-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-gov-west-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-gov-west-1', 'UseDualStack' => \false]], ['documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-gov-west-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-gov-west-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-gov-west-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-gov-west-1', 'UseDualStack' => \false]], ['documentation' => 'For region ap-southeast-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-southeast-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-southeast-1', 'UseDualStack' => \true]], ['documentation' => 'For region ap-southeast-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-southeast-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-southeast-1', 'UseDualStack' => \false]], ['documentation' => 'For region ap-southeast-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-southeast-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-southeast-1', 'UseDualStack' => \true]], ['documentation' => 'For region ap-southeast-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-southeast-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-southeast-1', 'UseDualStack' => \false]], ['documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-southeast-2.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-southeast-2', 'UseDualStack' => \true]], ['documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-southeast-2.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-southeast-2', 'UseDualStack' => \false]], ['documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-southeast-2.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-southeast-2', 'UseDualStack' => \true]], ['documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-southeast-2.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-southeast-2', 'UseDualStack' => \false]], ['documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['error' => 'FIPS and DualStack are enabled, but this partition does not support one or both'], 'params' => ['UseFIPS' => \true, 'Region' => 'us-iso-east-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.us-iso-east-1.c2s.ic.gov']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-iso-east-1', 'UseDualStack' => \false]], ['documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['error' => 'DualStack is enabled but this partition does not support DualStack'], 'params' => ['UseFIPS' => \false, 'Region' => 'us-iso-east-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-iso-east-1.c2s.ic.gov']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-iso-east-1', 'UseDualStack' => \false]], ['documentation' => 'For region ap-southeast-3 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-southeast-3.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-southeast-3', 'UseDualStack' => \true]], ['documentation' => 'For region ap-southeast-3 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-southeast-3.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-southeast-3', 'UseDualStack' => \false]], ['documentation' => 'For region ap-southeast-3 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-southeast-3.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-southeast-3', 'UseDualStack' => \true]], ['documentation' => 'For region ap-southeast-3 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-southeast-3.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-southeast-3', 'UseDualStack' => \false]], ['documentation' => 'For region ap-southeast-4 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-southeast-4.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-southeast-4', 'UseDualStack' => \true]], ['documentation' => 'For region ap-southeast-4 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.ap-southeast-4.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'ap-southeast-4', 'UseDualStack' => \false]], ['documentation' => 'For region ap-southeast-4 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-southeast-4.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-southeast-4', 'UseDualStack' => \true]], ['documentation' => 'For region ap-southeast-4 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.ap-southeast-4.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'ap-southeast-4', 'UseDualStack' => \false]], ['documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.us-east-1.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-east-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.us-east-1.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-east-1', 'UseDualStack' => \false]], ['documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-east-1.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-east-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-east-1.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-east-1', 'UseDualStack' => \false]], ['documentation' => 'For region us-east-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.us-east-2.api.aws']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-east-2', 'UseDualStack' => \true]], ['documentation' => 'For region us-east-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.us-east-2.amazonaws.com']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-east-2', 'UseDualStack' => \false]], ['documentation' => 'For region us-east-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-east-2.api.aws']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-east-2', 'UseDualStack' => \true]], ['documentation' => 'For region us-east-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-east-2.amazonaws.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-east-2', 'UseDualStack' => \false]], ['documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.cn-northwest-1.api.amazonwebservices.com.cn']], 'params' => ['UseFIPS' => \true, 'Region' => 'cn-northwest-1', 'UseDualStack' => \true]], ['documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.cn-northwest-1.amazonaws.com.cn']], 'params' => ['UseFIPS' => \true, 'Region' => 'cn-northwest-1', 'UseDualStack' => \false]], ['documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.cn-northwest-1.api.amazonwebservices.com.cn']], 'params' => ['UseFIPS' => \false, 'Region' => 'cn-northwest-1', 'UseDualStack' => \true]], ['documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.cn-northwest-1.amazonaws.com.cn']], 'params' => ['UseFIPS' => \false, 'Region' => 'cn-northwest-1', 'UseDualStack' => \false]], ['documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['error' => 'FIPS and DualStack are enabled, but this partition does not support one or both'], 'params' => ['UseFIPS' => \true, 'Region' => 'us-isob-east-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm-fips.us-isob-east-1.sc2s.sgov.gov']], 'params' => ['UseFIPS' => \true, 'Region' => 'us-isob-east-1', 'UseDualStack' => \false]], ['documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['error' => 'DualStack is enabled but this partition does not support DualStack'], 'params' => ['UseFIPS' => \false, 'Region' => 'us-isob-east-1', 'UseDualStack' => \true]], ['documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://ssm.us-isob-east-1.sc2s.sgov.gov']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-isob-east-1', 'UseDualStack' => \false]], ['documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => ['endpoint' => ['url' => 'https://example.com']], 'params' => ['UseFIPS' => \false, 'Region' => 'us-east-1', 'UseDualStack' => \false, 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => ['error' => 'Invalid Configuration: FIPS and custom endpoint are not supported'], 'params' => ['UseFIPS' => \true, 'Region' => 'us-east-1', 'UseDualStack' => \false, 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => ['error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported'], 'params' => ['UseFIPS' => \false, 'Region' => 'us-east-1', 'UseDualStack' => \true, 'Endpoint' => 'https://example.com']]], 'version' => '1.0'];
