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
 * Flip API
 *
 * Description
 *
 * OpenAPI spec version: 3.1.0
 * Contact: cloudsupport@telestream.net
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TelestreamCloud\Flip;

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
        'extra_files' => '\TelestreamCloud\Flip\ExtraFile[]',
        'profiles' => 'string',
        'path_format' => 'string',
        'payload' => 'map[string,string]',
        'extra_variables' => 'map[string,string]',
        'watermark_url' => 'string',
        'watermark_left' => 'string',
        'watermark_top' => 'string',
        'watermark_right' => 'string',
        'watermark_bottom' => 'string',
        'watermark_width' => 'string',
        'watermark_height' => 'string',
        'clip_length' => 'string',
        'clip_offset' => 'string',
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
        'path_format' => null,
        'payload' => null,
        'extra_variables' => null,
        'watermark_url' => null,
        'watermark_left' => null,
        'watermark_top' => null,
        'watermark_right' => null,
        'watermark_bottom' => null,
        'watermark_width' => null,
        'watermark_height' => null,
        'clip_length' => null,
        'clip_offset' => null,
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
        'path_format' => 'path_format',
        'payload' => 'payload',
        'extra_variables' => 'extra_variables',
        'watermark_url' => 'watermark_url',
        'watermark_left' => 'watermark_left',
        'watermark_top' => 'watermark_top',
        'watermark_right' => 'watermark_right',
        'watermark_bottom' => 'watermark_bottom',
        'watermark_width' => 'watermark_width',
        'watermark_height' => 'watermark_height',
        'clip_length' => 'clip_length',
        'clip_offset' => 'clip_offset',
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
        'path_format' => 'setPathFormat',
        'payload' => 'setPayload',
        'extra_variables' => 'setExtraVariables',
        'watermark_url' => 'setWatermarkUrl',
        'watermark_left' => 'setWatermarkLeft',
        'watermark_top' => 'setWatermarkTop',
        'watermark_right' => 'setWatermarkRight',
        'watermark_bottom' => 'setWatermarkBottom',
        'watermark_width' => 'setWatermarkWidth',
        'watermark_height' => 'setWatermarkHeight',
        'clip_length' => 'setClipLength',
        'clip_offset' => 'setClipOffset',
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
        'path_format' => 'getPathFormat',
        'payload' => 'getPayload',
        'extra_variables' => 'getExtraVariables',
        'watermark_url' => 'getWatermarkUrl',
        'watermark_left' => 'getWatermarkLeft',
        'watermark_top' => 'getWatermarkTop',
        'watermark_right' => 'getWatermarkRight',
        'watermark_bottom' => 'getWatermarkBottom',
        'watermark_width' => 'getWatermarkWidth',
        'watermark_height' => 'getWatermarkHeight',
        'clip_length' => 'getClipLength',
        'clip_offset' => 'getClipOffset',
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
        $this->container['path_format'] = isset($data['path_format']) ? $data['path_format'] : null;
        $this->container['payload'] = isset($data['payload']) ? $data['payload'] : null;
        $this->container['extra_variables'] = isset($data['extra_variables']) ? $data['extra_variables'] : null;
        $this->container['watermark_url'] = isset($data['watermark_url']) ? $data['watermark_url'] : null;
        $this->container['watermark_left'] = isset($data['watermark_left']) ? $data['watermark_left'] : null;
        $this->container['watermark_top'] = isset($data['watermark_top']) ? $data['watermark_top'] : null;
        $this->container['watermark_right'] = isset($data['watermark_right']) ? $data['watermark_right'] : null;
        $this->container['watermark_bottom'] = isset($data['watermark_bottom']) ? $data['watermark_bottom'] : null;
        $this->container['watermark_width'] = isset($data['watermark_width']) ? $data['watermark_width'] : null;
        $this->container['watermark_height'] = isset($data['watermark_height']) ? $data['watermark_height'] : null;
        $this->container['clip_length'] = isset($data['clip_length']) ? $data['clip_length'] : null;
        $this->container['clip_offset'] = isset($data['clip_offset']) ? $data['clip_offset'] : null;
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
     * @return \TelestreamCloud\Flip\ExtraFile[]
     */
    public function getExtraFiles()
    {
        return $this->container['extra_files'];
    }

    /**
     * Sets extra_files
     * @param \TelestreamCloud\Flip\ExtraFile[] $extra_files A list of names of additional files that will be uploaded.
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
     * Gets path_format
     * @return string
     */
    public function getPathFormat()
    {
        return $this->container['path_format'];
    }

    /**
     * Sets path_format
     * @param string $path_format
     * @return $this
     */
    public function setPathFormat($path_format)
    {
        $this->container['path_format'] = $path_format;

        return $this;
    }

    /**
     * Gets payload
     * @return map[string,string]
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     * @param map[string,string] $payload
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

        return $this;
    }

    /**
     * Gets extra_variables
     * @return map[string,string]
     */
    public function getExtraVariables()
    {
        return $this->container['extra_variables'];
    }

    /**
     * Sets extra_variables
     * @param map[string,string] $extra_variables
     * @return $this
     */
    public function setExtraVariables($extra_variables)
    {
        $this->container['extra_variables'] = $extra_variables;

        return $this;
    }

    /**
     * Gets watermark_url
     * @return string
     */
    public function getWatermarkUrl()
    {
        return $this->container['watermark_url'];
    }

    /**
     * Sets watermark_url
     * @param string $watermark_url URL pointing to an image that will be used asa watermark.
     * @return $this
     */
    public function setWatermarkUrl($watermark_url)
    {
        $this->container['watermark_url'] = $watermark_url;

        return $this;
    }

    /**
     * Gets watermark_left
     * @return string
     */
    public function getWatermarkLeft()
    {
        return $this->container['watermark_left'];
    }

    /**
     * Sets watermark_left
     * @param string $watermark_left Determines distance between the left edge of a video and the left edge of a watermark image. Can be specified in pixels or percents. This parameter can be set only if watermark_right is not.
     * @return $this
     */
    public function setWatermarkLeft($watermark_left)
    {
        $this->container['watermark_left'] = $watermark_left;

        return $this;
    }

    /**
     * Gets watermark_top
     * @return string
     */
    public function getWatermarkTop()
    {
        return $this->container['watermark_top'];
    }

    /**
     * Sets watermark_top
     * @param string $watermark_top Determines distance between the top edge of a video and the top edge of a watermark image. Can be specified in pixels or percents. This parameter can be set only if watermark_bottom is not.
     * @return $this
     */
    public function setWatermarkTop($watermark_top)
    {
        $this->container['watermark_top'] = $watermark_top;

        return $this;
    }

    /**
     * Gets watermark_right
     * @return string
     */
    public function getWatermarkRight()
    {
        return $this->container['watermark_right'];
    }

    /**
     * Sets watermark_right
     * @param string $watermark_right Determines distance between the right edge of a video and the right edge of a watermark image. Can be specified in pixels or percents. This parameter can be set only if watermark_left is not.
     * @return $this
     */
    public function setWatermarkRight($watermark_right)
    {
        $this->container['watermark_right'] = $watermark_right;

        return $this;
    }

    /**
     * Gets watermark_bottom
     * @return string
     */
    public function getWatermarkBottom()
    {
        return $this->container['watermark_bottom'];
    }

    /**
     * Sets watermark_bottom
     * @param string $watermark_bottom Determines distance between the bottom edge of a video and the bottom edge of a watermark image. Can be specified in pixels or percents. This parameter can be set only if watermark_top is not.
     * @return $this
     */
    public function setWatermarkBottom($watermark_bottom)
    {
        $this->container['watermark_bottom'] = $watermark_bottom;

        return $this;
    }

    /**
     * Gets watermark_width
     * @return string
     */
    public function getWatermarkWidth()
    {
        return $this->container['watermark_width'];
    }

    /**
     * Sets watermark_width
     * @param string $watermark_width Determines width of the watermark image. Should be specified in pixels.
     * @return $this
     */
    public function setWatermarkWidth($watermark_width)
    {
        $this->container['watermark_width'] = $watermark_width;

        return $this;
    }

    /**
     * Gets watermark_height
     * @return string
     */
    public function getWatermarkHeight()
    {
        return $this->container['watermark_height'];
    }

    /**
     * Sets watermark_height
     * @param string $watermark_height Determines width of the watermark image. Should be specified in pixels.
     * @return $this
     */
    public function setWatermarkHeight($watermark_height)
    {
        $this->container['watermark_height'] = $watermark_height;

        return $this;
    }

    /**
     * Gets clip_length
     * @return string
     */
    public function getClipLength()
    {
        return $this->container['clip_length'];
    }

    /**
     * Sets clip_length
     * @param string $clip_length Length of the uploaded video. Should be formatted as follows: HH:MM:SS
     * @return $this
     */
    public function setClipLength($clip_length)
    {
        $this->container['clip_length'] = $clip_length;

        return $this;
    }

    /**
     * Gets clip_offset
     * @return string
     */
    public function getClipOffset()
    {
        return $this->container['clip_offset'];
    }

    /**
     * Sets clip_offset
     * @param string $clip_offset Clip starts at a specific offset.
     * @return $this
     */
    public function setClipOffset($clip_offset)
    {
        $this->container['clip_offset'] = $clip_offset;

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


