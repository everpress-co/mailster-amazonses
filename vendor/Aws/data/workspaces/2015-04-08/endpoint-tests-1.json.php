<?php

namespace Mailster\Aws3;

// This file was auto-generated from sdk-root/src/data/workspaces/2015-04-08/endpoint-tests-1.json
return ['testCases' => [['documentation' => 'For region ap-south-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.ap-south-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'ap-south-1']], ['documentation' => 'For region ap-south-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.ap-south-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'ap-south-1']], ['documentation' => 'For region ap-south-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.ap-south-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'ap-south-1']], ['documentation' => 'For region ap-south-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.ap-south-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'ap-south-1']], ['documentation' => 'For region ca-central-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.ca-central-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'ca-central-1']], ['documentation' => 'For region ca-central-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.ca-central-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'ca-central-1']], ['documentation' => 'For region ca-central-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.ca-central-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'ca-central-1']], ['documentation' => 'For region ca-central-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.ca-central-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'ca-central-1']], ['documentation' => 'For region eu-central-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.eu-central-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'eu-central-1']], ['documentation' => 'For region eu-central-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.eu-central-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'eu-central-1']], ['documentation' => 'For region eu-central-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.eu-central-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'eu-central-1']], ['documentation' => 'For region eu-central-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.eu-central-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'eu-central-1']], ['documentation' => 'For region us-iso-west-1 with FIPS enabled and DualStack enabled', 'expect' => ['error' => 'FIPS and DualStack are enabled, but this partition does not support one or both'], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'us-iso-west-1']], ['documentation' => 'For region us-iso-west-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.us-iso-west-1.c2s.ic.gov']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'us-iso-west-1']], ['documentation' => 'For region us-iso-west-1 with FIPS disabled and DualStack enabled', 'expect' => ['error' => 'DualStack is enabled but this partition does not support DualStack'], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'us-iso-west-1']], ['documentation' => 'For region us-iso-west-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.us-iso-west-1.c2s.ic.gov']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'us-iso-west-1']], ['documentation' => 'For region us-west-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.us-west-2.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'us-west-2']], ['documentation' => 'For region us-west-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.us-west-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'us-west-2']], ['documentation' => 'For region us-west-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.us-west-2.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'us-west-2']], ['documentation' => 'For region us-west-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.us-west-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'us-west-2']], ['documentation' => 'For region af-south-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.af-south-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'af-south-1']], ['documentation' => 'For region af-south-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.af-south-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'af-south-1']], ['documentation' => 'For region af-south-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.af-south-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'af-south-1']], ['documentation' => 'For region af-south-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.af-south-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'af-south-1']], ['documentation' => 'For region eu-west-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.eu-west-2.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'eu-west-2']], ['documentation' => 'For region eu-west-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.eu-west-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'eu-west-2']], ['documentation' => 'For region eu-west-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.eu-west-2.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'eu-west-2']], ['documentation' => 'For region eu-west-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.eu-west-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'eu-west-2']], ['documentation' => 'For region eu-west-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.eu-west-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'eu-west-1']], ['documentation' => 'For region eu-west-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.eu-west-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'eu-west-1']], ['documentation' => 'For region eu-west-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.eu-west-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'eu-west-1']], ['documentation' => 'For region eu-west-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.eu-west-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'eu-west-1']], ['documentation' => 'For region ap-northeast-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.ap-northeast-2.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'ap-northeast-2']], ['documentation' => 'For region ap-northeast-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.ap-northeast-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'ap-northeast-2']], ['documentation' => 'For region ap-northeast-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.ap-northeast-2.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'ap-northeast-2']], ['documentation' => 'For region ap-northeast-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.ap-northeast-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'ap-northeast-2']], ['documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.ap-northeast-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'ap-northeast-1']], ['documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.ap-northeast-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'ap-northeast-1']], ['documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.ap-northeast-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'ap-northeast-1']], ['documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.ap-northeast-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'ap-northeast-1']], ['documentation' => 'For region sa-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.sa-east-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'sa-east-1']], ['documentation' => 'For region sa-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.sa-east-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'sa-east-1']], ['documentation' => 'For region sa-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.sa-east-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'sa-east-1']], ['documentation' => 'For region sa-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.sa-east-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'sa-east-1']], ['documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.us-gov-west-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'us-gov-west-1']], ['documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.us-gov-west-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'us-gov-west-1']], ['documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.us-gov-west-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'us-gov-west-1']], ['documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.us-gov-west-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'us-gov-west-1']], ['documentation' => 'For region ap-southeast-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.ap-southeast-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'ap-southeast-1']], ['documentation' => 'For region ap-southeast-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.ap-southeast-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'ap-southeast-1']], ['documentation' => 'For region ap-southeast-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.ap-southeast-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'ap-southeast-1']], ['documentation' => 'For region ap-southeast-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.ap-southeast-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'ap-southeast-1']], ['documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.ap-southeast-2.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'ap-southeast-2']], ['documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.ap-southeast-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'ap-southeast-2']], ['documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.ap-southeast-2.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'ap-southeast-2']], ['documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.ap-southeast-2.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'ap-southeast-2']], ['documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['error' => 'FIPS and DualStack are enabled, but this partition does not support one or both'], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'us-iso-east-1']], ['documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.us-iso-east-1.c2s.ic.gov']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'us-iso-east-1']], ['documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['error' => 'DualStack is enabled but this partition does not support DualStack'], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'us-iso-east-1']], ['documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.us-iso-east-1.c2s.ic.gov']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'us-iso-east-1']], ['documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.us-east-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'us-east-1']], ['documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.us-east-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'us-east-1']], ['documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.us-east-1.api.aws']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'us-east-1']], ['documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.us-east-1.amazonaws.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'us-east-1']], ['documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.cn-northwest-1.api.amazonwebservices.com.cn']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'cn-northwest-1']], ['documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.cn-northwest-1.amazonaws.com.cn']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'cn-northwest-1']], ['documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.cn-northwest-1.api.amazonwebservices.com.cn']], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'cn-northwest-1']], ['documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.cn-northwest-1.amazonaws.com.cn']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'cn-northwest-1']], ['documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['error' => 'FIPS and DualStack are enabled, but this partition does not support one or both'], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \true, 'Region' => 'us-isob-east-1']], ['documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces-fips.us-isob-east-1.sc2s.sgov.gov']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'us-isob-east-1']], ['documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['error' => 'DualStack is enabled but this partition does not support DualStack'], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'us-isob-east-1']], ['documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://workspaces.us-isob-east-1.sc2s.sgov.gov']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'us-isob-east-1']], ['documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => ['endpoint' => ['url' => 'https://example.com']], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \false, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => ['error' => 'Invalid Configuration: FIPS and custom endpoint are not supported'], 'params' => ['UseDualStack' => \false, 'UseFIPS' => \true, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => ['error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported'], 'params' => ['UseDualStack' => \true, 'UseFIPS' => \false, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com']]], 'version' => '1.0'];
