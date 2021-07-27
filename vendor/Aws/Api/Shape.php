<?php

namespace Mailster\Aws3\Aws\Api;

/**
 * Base class representing a modeled shape.
 */
class Shape extends \Mailster\Aws3\Aws\Api\AbstractModel
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
    public static function create(array $definition, \Mailster\Aws3\Aws\Api\ShapeMap $shapeMap)
    {
        static $map = ['structure' => 'Mailster\\Aws3\\Aws\\Api\\StructureShape', 'map' => 'Mailster\\Aws3\\Aws\\Api\\MapShape', 'list' => 'Mailster\\Aws3\\Aws\\Api\\ListShape', 'timestamp' => 'Mailster\\Aws3\\Aws\\Api\\TimestampShape', 'integer' => 'Mailster\\Aws3\\Aws\\Api\\Shape', 'double' => 'Mailster\\Aws3\\Aws\\Api\\Shape', 'float' => 'Mailster\\Aws3\\Aws\\Api\\Shape', 'long' => 'Mailster\\Aws3\\Aws\\Api\\Shape', 'string' => 'Mailster\\Aws3\\Aws\\Api\\Shape', 'byte' => 'Mailster\\Aws3\\Aws\\Api\\Shape', 'character' => 'Mailster\\Aws3\\Aws\\Api\\Shape', 'blob' => 'Mailster\\Aws3\\Aws\\Api\\Shape', 'boolean' => 'Mailster\\Aws3\\Aws\\Api\\Shape'];
        if (isset($definition['shape'])) {
            return $shapeMap->resolve($definition);
        }
        if (!isset($map[$definition['type']])) {
            throw new \RuntimeException('Invalid type: ' . print_r($definition, true));
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