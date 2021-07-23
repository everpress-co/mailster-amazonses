<?php

namespace Mailster\Aws3\Aws\Api\Serializer;

use Mailster\Aws3\Aws\Api\Shape;
use Mailster\Aws3\Aws\Api\ListShape;
/**
 * @internal
 */
class Ec2ParamBuilder extends \Mailster\Aws3\Aws\Api\Serializer\QueryParamBuilder
{
    protected function queryName(\Mailster\Aws3\Aws\Api\Shape $shape, $default = null)
    {
        return $shape['queryName'] ?: ucfirst($shape['locationName']) ?: $default;
    }
    protected function isFlat(\Mailster\Aws3\Aws\Api\Shape $shape)
    {
        return false;
    }
    protected function format_list(\Mailster\Aws3\Aws\Api\ListShape $shape, array $value, $prefix, &$query)
    {
        // Handle empty list serialization
        if (!$value) {
            $query[$prefix] = false;
        } else {
            $items = $shape->getMember();
            foreach ($value as $k => $v) {
                $this->format($items, $v, $prefix . '.' . ($k + 1), $query);
            }
        }
    }
}
