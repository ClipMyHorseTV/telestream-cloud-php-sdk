<?php
/**
 * VideoUploadBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  TelestreamCloud
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Qc API
 *
 * QC API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: cloudsupport@telestream.net
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TelestreamCloud\Qc;

use \ArrayAccess;

/**
 * VideoUploadBody Class Doc Comment
 *
 * @category    Class
 * @package     TelestreamCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VideoUploadBody implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'video_upload_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'file_size' => 'int',
        'file_name' => 'string',
        'extra_files' => '\TelestreamCloud\Qc\ExtraFile[]',
        'profiles' => 'string',
        'multi_chunk' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'file_size' => 'int64',
        'file_name' => null,
        'extra_files' => null,
        'profiles' => null,
        'multi_chunk' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'file_size' => 'file_size',
        'file_name' => 'file_name',
        'extra_files' => 'extra_files',
        'profiles' => 'profiles',
        'multi_chunk' => 'multi_chunk'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'file_size' => 'setFileSize',
        'file_name' => 'setFileName',
        'extra_files' => 'setExtraFiles',
        'profiles' => 'setProfiles',
        'multi_chunk' => 'setMultiChunk'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'file_size' => 'getFileSize',
        'file_name' => 'getFileName',
        'extra_files' => 'getExtraFiles',
        'profiles' => 'getProfiles',
        'multi_chunk' => 'getMultiChunk'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['extra_files'] = isset($data['extra_files']) ? $data['extra_files'] : null;
        $this->container['profiles'] = isset($data['profiles']) ? $data['profiles'] : null;
        $this->container['multi_chunk'] = isset($data['multi_chunk']) ? $data['multi_chunk'] : true;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['file_size'] === null) {
            $invalid_properties[] = "'file_size' can't be null";
        }
        if ($this->container['file_name'] === null) {
            $invalid_properties[] = "'file_name' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['file_size'] === null) {
            return false;
        }
        if ($this->container['file_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets file_size
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     * @param int $file_size Size of the file that will be uploaded in `bytes`.
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets file_name
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     * @param string $file_name Name of the file that will be uploaded.
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets extra_files
     * @return \TelestreamCloud\Qc\ExtraFile[]
     */
    public function getExtraFiles()
    {
        return $this->container['extra_files'];
    }

    /**
     * Sets extra_files
     * @param \TelestreamCloud\Qc\ExtraFile[] $extra_files A list of names of additional files that will be uploaded.
     * @return $this
     */
    public function setExtraFiles($extra_files)
    {
        $this->container['extra_files'] = $extra_files;

        return $this;
    }

    /**
     * Gets profiles
     * @return string
     */
    public function getProfiles()
    {
        return $this->container['profiles'];
    }

    /**
     * Sets profiles
     * @param string $profiles A comma-separated list of profile names or IDs to be used during encoding. Alternatively, specify none so no encodings will created right away.
     * @return $this
     */
    public function setProfiles($profiles)
    {
        $this->container['profiles'] = $profiles;

        return $this;
    }

    /**
     * Gets multi_chunk
     * @return bool
     */
    public function getMultiChunk()
    {
        return $this->container['multi_chunk'];
    }

    /**
     * Sets multi_chunk
     * @param bool $multi_chunk
     * @return $this
     */
    public function setMultiChunk($multi_chunk)
    {
        $this->container['multi_chunk'] = $multi_chunk;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\TelestreamCloud\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\TelestreamCloud\ObjectSerializer::sanitizeForSerialization($this));
    }
}


