<?php

namespace Mailster\Aws3;

// This file was auto-generated from sdk-root/src/data/cloudsearchdomain/2013-01-01/endpoint-tests-1.json
return ['testCases' => [['documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => ['endpoint' => ['url' => 'https://example.com']], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \false, 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => ['error' => 'Invalid Configuration: FIPS and custom endpoint are not supported'], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \false, 'UseFIPS' => \true, 'Endpoint' => 'https://example.com']], ['documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => ['error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported'], 'params' => ['Region' => 'us-east-1', 'UseDualStack' => \true, 'UseFIPS' => \false, 'Endpoint' => 'https://example.com']]], 'version' => '1.0'];
