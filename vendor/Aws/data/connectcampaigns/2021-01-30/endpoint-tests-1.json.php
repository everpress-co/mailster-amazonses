<?php

namespace Mailster\Aws3;

// This file was auto-generated from sdk-root/src/data/connectcampaigns/2021-01-30/endpoint-tests-1.json
return ['testCases' => [['documentation' => 'For region us-west-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns-fips.us-west-2.api.aws']], 'params' => ['Region' => 'us-west-2', 'UseDualStack' => \true, 'UseFIPS' => \true]], ['documentation' => 'For region us-west-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns-fips.us-west-2.amazonaws.com']], 'params' => ['Region' => 'us-west-2', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region us-west-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns.us-west-2.api.aws']], 'params' => ['Region' => 'us-west-2', 'UseDualStack' => \true, 'UseFIPS' => \false]], ['documentation' => 'For region us-west-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns.us-west-2.amazonaws.com']], 'params' => ['Region' => 'us-west-2', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region eu-west-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns-fips.eu-west-2.api.aws']], 'params' => ['Region' => 'eu-west-2', 'UseDualStack' => \true, 'UseFIPS' => \true]], ['documentation' => 'For region eu-west-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns-fips.eu-west-2.amazonaws.com']], 'params' => ['Region' => 'eu-west-2', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region eu-west-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns.eu-west-2.api.aws']], 'params' => ['Region' => 'eu-west-2', 'UseDualStack' => \true, 'UseFIPS' => \false]], ['documentation' => 'For region eu-west-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns.eu-west-2.amazonaws.com']], 'params' => ['Region' => 'eu-west-2', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns-fips.ap-southeast-2.api.aws']], 'params' => ['Region' => 'ap-southeast-2', 'UseDualStack' => \true, 'UseFIPS' => \true]], ['documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns-fips.ap-southeast-2.amazonaws.com']], 'params' => ['Region' => 'ap-southeast-2', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns.ap-southeast-2.api.aws']], 'params' => ['Region' => 'ap-southeast-2', 'UseDualStack' => \true, 'UseFIPS' => \false]], ['documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns.ap-southeast-2.amazonaws.com']], 'params' => ['Region' => 'ap-southeast-2', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns-fips.us-east-1.api.aws']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \true, 'UseFIPS' => \true]], ['documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns-fips.us-east-1.amazonaws.com']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \true]], ['documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns.us-east-1.api.aws']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \true, 'UseFIPS' => \false]], ['documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => ['endpoint' => ['url' => 'https://connect-campaigns.us-east-1.amazonaws.com']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \false]], ['documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => ['endpoint' => ['url' => 'https://example.com']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \false, 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => ['error' => 'Invalid Configuration: FIPS and custom endpoint are not supported'], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \true, 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => ['error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported'], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \true, 'UseFIPS' => \false, 'Endpoint' => 'https://example.com']]], 'version' => '1.0'];
