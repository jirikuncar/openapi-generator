<?php

/**
 * OpenAPI Petstore
 * PHP version 7.2
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 */
namespace OpenAPIServer\Model;

use OpenAPIServer\Interfaces\ModelInterface;

/**
 * ArrayOfArrayOfNumberOnly
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class ArrayOfArrayOfNumberOnly implements ModelInterface
{
    private const MODEL_SCHEMA = <<<'SCHEMA'
{
  "type" : "object",
  "properties" : {
    "ArrayArrayNumber" : {
      "type" : "array",
      "items" : {
        "type" : "array",
        "items" : {
          "type" : "number"
        }
      }
    }
  }
}
SCHEMA;

    /** @var float[][] $arrayArrayNumber */
    private $arrayArrayNumber;

    /**
     * Returns model schema.
     *
     * @param bool $assoc When TRUE, returned objects will be converted into associative arrays. Default FALSE.
     *
     * @return array
     */
    public static function getOpenApiSchema($assoc = false)
    {
        return json_decode(static::MODEL_SCHEMA, $assoc);
    }
}
