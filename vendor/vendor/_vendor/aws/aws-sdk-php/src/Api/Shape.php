<?php

namespace Mailster\Aws\Api;

/**
 * Base class representing a modeled shape.
 */
class Shape extends \Mailster\Aws\Api\AbstractModel
{
    /**
     * Get a concrete shape for the given definition.
     *
     * @param array    $definition
     * @param ShapeMap $shapeMap
     *
     * @return mixed
     * @throws \RuntimeException if the type is invalid
     */
    public static function create(array $definition, \Mailster\Aws\Api\ShapeMap $shapeMap)
    {
        static $map = ['structure' => 'Mailster\\Aws\\Api\\StructureShape', 'map' => 'Mailster\\Aws\\Api\\MapShape', 'list' => 'Mailster\\Aws\\Api\\ListShape', 'timestamp' => 'Mailster\\Aws\\Api\\TimestampShape', 'integer' => 'Mailster\\Aws\\Api\\Shape', 'double' => 'Mailster\\Aws\\Api\\Shape', 'float' => 'Mailster\\Aws\\Api\\Shape', 'long' => 'Mailster\\Aws\\Api\\Shape', 'string' => 'Mailster\\Aws\\Api\\Shape', 'byte' => 'Mailster\\Aws\\Api\\Shape', 'character' => 'Mailster\\Aws\\Api\\Shape', 'blob' => 'Mailster\\Aws\\Api\\Shape', 'boolean' => 'Mailster\\Aws\\Api\\Shape'];
        if (isset($definition['shape'])) {
            return $shapeMap->resolve($definition);
        }
        if (!isset($map[$definition['type']])) {
            throw new \RuntimeException('Invalid type: ' . \print_r($definition, \true));
        }
        $type = $map[$definition['type']];
        return new $type($definition, $shapeMap);
    }
    /**
     * Get the type of the shape
     *
     * @return string
     */
    public function getType()
    {
        return $this->definition['type'];
    }
    /**
     * Get the name of the shape
     *
     * @return string
     */
    public function getName()
    {
        return $this->definition['name'];
    }
}
