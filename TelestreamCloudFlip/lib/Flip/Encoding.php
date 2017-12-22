<?php
/**
 * Encoding
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
 * Encoding Class Doc Comment
 *
 * @category    Class
 * @package     TelestreamCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Encoding implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Encoding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'audio_bitrate' => 'int',
        'audio_channels' => 'int',
        'audio_codec' => 'string',
        'audio_sample_rate' => 'string',
        'created_at' => 'string',
        'duration' => 'string',
        'encoding_progress' => 'string',
        'encoding_time' => 'string',
        'error_class' => 'string',
        'error_message' => 'string',
        'external_id' => 'string',
        'extname' => 'string',
        'file_size' => 'string',
        'files' => 'string[]',
        'fps' => 'string',
        'height' => 'string',
        'width' => 'string',
        'logfile_url' => 'string',
        'mime_type' => 'string',
        'parent_encoding_id' => 'string',
        'path' => 'string',
        'profile_id' => 'string',
        'profile_name' => 'string',
        'screenshots' => 'string[]',
        'started_encoding_at' => 'string',
        'status' => 'string',
        'updated_at' => 'string',
        'video_bitrate' => 'string',
        'video_codec' => 'string',
        'video_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'audio_bitrate' => null,
        'audio_channels' => null,
        'audio_codec' => null,
        'audio_sample_rate' => null,
        'created_at' => 'datetime',
        'duration' => null,
        'encoding_progress' => null,
        'encoding_time' => null,
        'error_class' => null,
        'error_message' => null,
        'external_id' => null,
        'extname' => null,
        'file_size' => null,
        'files' => null,
        'fps' => null,
        'height' => null,
        'width' => null,
        'logfile_url' => null,
        'mime_type' => null,
        'parent_encoding_id' => null,
        'path' => null,
        'profile_id' => null,
        'profile_name' => null,
        'screenshots' => null,
        'started_encoding_at' => 'datetime',
        'status' => null,
        'updated_at' => 'datetime',
        'video_bitrate' => null,
        'video_codec' => null,
        'video_id' => null
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
        'id' => 'id',
        'audio_bitrate' => 'audio_bitrate',
        'audio_channels' => 'audio_channels',
        'audio_codec' => 'audio_codec',
        'audio_sample_rate' => 'audio_sample_rate',
        'created_at' => 'created_at',
        'duration' => 'duration',
        'encoding_progress' => 'encoding_progress',
        'encoding_time' => 'encoding_time',
        'error_class' => 'error_class',
        'error_message' => 'error_message',
        'external_id' => 'external_id',
        'extname' => 'extname',
        'file_size' => 'file_size',
        'files' => 'files',
        'fps' => 'fps',
        'height' => 'height',
        'width' => 'width',
        'logfile_url' => 'logfile_url',
        'mime_type' => 'mime_type',
        'parent_encoding_id' => 'parent_encoding_id',
        'path' => 'path',
        'profile_id' => 'profile_id',
        'profile_name' => 'profile_name',
        'screenshots' => 'screenshots',
        'started_encoding_at' => 'started_encoding_at',
        'status' => 'status',
        'updated_at' => 'updated_at',
        'video_bitrate' => 'video_bitrate',
        'video_codec' => 'video_codec',
        'video_id' => 'video_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'audio_bitrate' => 'setAudioBitrate',
        'audio_channels' => 'setAudioChannels',
        'audio_codec' => 'setAudioCodec',
        'audio_sample_rate' => 'setAudioSampleRate',
        'created_at' => 'setCreatedAt',
        'duration' => 'setDuration',
        'encoding_progress' => 'setEncodingProgress',
        'encoding_time' => 'setEncodingTime',
        'error_class' => 'setErrorClass',
        'error_message' => 'setErrorMessage',
        'external_id' => 'setExternalId',
        'extname' => 'setExtname',
        'file_size' => 'setFileSize',
        'files' => 'setFiles',
        'fps' => 'setFps',
        'height' => 'setHeight',
        'width' => 'setWidth',
        'logfile_url' => 'setLogfileUrl',
        'mime_type' => 'setMimeType',
        'parent_encoding_id' => 'setParentEncodingId',
        'path' => 'setPath',
        'profile_id' => 'setProfileId',
        'profile_name' => 'setProfileName',
        'screenshots' => 'setScreenshots',
        'started_encoding_at' => 'setStartedEncodingAt',
        'status' => 'setStatus',
        'updated_at' => 'setUpdatedAt',
        'video_bitrate' => 'setVideoBitrate',
        'video_codec' => 'setVideoCodec',
        'video_id' => 'setVideoId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'audio_bitrate' => 'getAudioBitrate',
        'audio_channels' => 'getAudioChannels',
        'audio_codec' => 'getAudioCodec',
        'audio_sample_rate' => 'getAudioSampleRate',
        'created_at' => 'getCreatedAt',
        'duration' => 'getDuration',
        'encoding_progress' => 'getEncodingProgress',
        'encoding_time' => 'getEncodingTime',
        'error_class' => 'getErrorClass',
        'error_message' => 'getErrorMessage',
        'external_id' => 'getExternalId',
        'extname' => 'getExtname',
        'file_size' => 'getFileSize',
        'files' => 'getFiles',
        'fps' => 'getFps',
        'height' => 'getHeight',
        'width' => 'getWidth',
        'logfile_url' => 'getLogfileUrl',
        'mime_type' => 'getMimeType',
        'parent_encoding_id' => 'getParentEncodingId',
        'path' => 'getPath',
        'profile_id' => 'getProfileId',
        'profile_name' => 'getProfileName',
        'screenshots' => 'getScreenshots',
        'started_encoding_at' => 'getStartedEncodingAt',
        'status' => 'getStatus',
        'updated_at' => 'getUpdatedAt',
        'video_bitrate' => 'getVideoBitrate',
        'video_codec' => 'getVideoCodec',
        'video_id' => 'getVideoId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['audio_bitrate'] = isset($data['audio_bitrate']) ? $data['audio_bitrate'] : null;
        $this->container['audio_channels'] = isset($data['audio_channels']) ? $data['audio_channels'] : null;
        $this->container['audio_codec'] = isset($data['audio_codec']) ? $data['audio_codec'] : null;
        $this->container['audio_sample_rate'] = isset($data['audio_sample_rate']) ? $data['audio_sample_rate'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['encoding_progress'] = isset($data['encoding_progress']) ? $data['encoding_progress'] : null;
        $this->container['encoding_time'] = isset($data['encoding_time']) ? $data['encoding_time'] : null;
        $this->container['error_class'] = isset($data['error_class']) ? $data['error_class'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['extname'] = isset($data['extname']) ? $data['extname'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['fps'] = isset($data['fps']) ? $data['fps'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['logfile_url'] = isset($data['logfile_url']) ? $data['logfile_url'] : null;
        $this->container['mime_type'] = isset($data['mime_type']) ? $data['mime_type'] : null;
        $this->container['parent_encoding_id'] = isset($data['parent_encoding_id']) ? $data['parent_encoding_id'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['profile_name'] = isset($data['profile_name']) ? $data['profile_name'] : null;
        $this->container['screenshots'] = isset($data['screenshots']) ? $data['screenshots'] : null;
        $this->container['started_encoding_at'] = isset($data['started_encoding_at']) ? $data['started_encoding_at'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['video_bitrate'] = isset($data['video_bitrate']) ? $data['video_bitrate'] : null;
        $this->container['video_codec'] = isset($data['video_codec']) ? $data['video_codec'] : null;
        $this->container['video_id'] = isset($data['video_id']) ? $data['video_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id A unique identifier of an Encoding.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets audio_bitrate
     * @return int
     */
    public function getAudioBitrate()
    {
        return $this->container['audio_bitrate'];
    }

    /**
     * Sets audio_bitrate
     * @param int $audio_bitrate Audio bitrate (in bits/s).
     * @return $this
     */
    public function setAudioBitrate($audio_bitrate)
    {
        $this->container['audio_bitrate'] = $audio_bitrate;

        return $this;
    }

    /**
     * Gets audio_channels
     * @return int
     */
    public function getAudioChannels()
    {
        return $this->container['audio_channels'];
    }

    /**
     * Sets audio_channels
     * @param int $audio_channels A number of audio channels.
     * @return $this
     */
    public function setAudioChannels($audio_channels)
    {
        $this->container['audio_channels'] = $audio_channels;

        return $this;
    }

    /**
     * Gets audio_codec
     * @return string
     */
    public function getAudioCodec()
    {
        return $this->container['audio_codec'];
    }

    /**
     * Sets audio_codec
     * @param string $audio_codec A codec that is used to encode audio streams.
     * @return $this
     */
    public function setAudioCodec($audio_codec)
    {
        $this->container['audio_codec'] = $audio_codec;

        return $this;
    }

    /**
     * Gets audio_sample_rate
     * @return string
     */
    public function getAudioSampleRate()
    {
        return $this->container['audio_sample_rate'];
    }

    /**
     * Sets audio_sample_rate
     * @param string $audio_sample_rate A number of samples of audio carried per second.
     * @return $this
     */
    public function setAudioSampleRate($audio_sample_rate)
    {
        $this->container['audio_sample_rate'] = $audio_sample_rate;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at A date and time when the Encoding has been created.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets duration
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param string $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets encoding_progress
     * @return string
     */
    public function getEncodingProgress()
    {
        return $this->container['encoding_progress'];
    }

    /**
     * Sets encoding_progress
     * @param string $encoding_progress
     * @return $this
     */
    public function setEncodingProgress($encoding_progress)
    {
        $this->container['encoding_progress'] = $encoding_progress;

        return $this;
    }

    /**
     * Gets encoding_time
     * @return string
     */
    public function getEncodingTime()
    {
        return $this->container['encoding_time'];
    }

    /**
     * Sets encoding_time
     * @param string $encoding_time
     * @return $this
     */
    public function setEncodingTime($encoding_time)
    {
        $this->container['encoding_time'] = $encoding_time;

        return $this;
    }

    /**
     * Gets error_class
     * @return string
     */
    public function getErrorClass()
    {
        return $this->container['error_class'];
    }

    /**
     * Sets error_class
     * @param string $error_class A class of an error that has occurred during the encoding process. It is present only if the encoding status is equal to `fail`.
     * @return $this
     */
    public function setErrorClass($error_class)
    {
        $this->container['error_class'] = $error_class;

        return $this;
    }

    /**
     * Gets error_message
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     * @param string $error_message A message that explains why the encoding process has resulted in an error. It is present only if the encoding status is equal to `fail`.
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets external_id
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     * @param string $external_id
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets extname
     * @return string
     */
    public function getExtname()
    {
        return $this->container['extname'];
    }

    /**
     * Sets extname
     * @param string $extname Extension of the output file.
     * @return $this
     */
    public function setExtname($extname)
    {
        $this->container['extname'] = $extname;

        return $this;
    }

    /**
     * Gets file_size
     * @return string
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     * @param string $file_size A size of the output file.
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets files
     * @return string[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     * @param string[] $files An array of output file names.
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets fps
     * @return string
     */
    public function getFps()
    {
        return $this->container['fps'];
    }

    /**
     * Sets fps
     * @param string $fps Number of frames per second.
     * @return $this
     */
    public function setFps($fps)
    {
        $this->container['fps'] = $fps;

        return $this;
    }

    /**
     * Gets height
     * @return string
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param string $height Height of the output video.
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     * @return string
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param string $width Width of the output video.
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets logfile_url
     * @return string
     */
    public function getLogfileUrl()
    {
        return $this->container['logfile_url'];
    }

    /**
     * Sets logfile_url
     * @param string $logfile_url An URL pointing to a logfile.
     * @return $this
     */
    public function setLogfileUrl($logfile_url)
    {
        $this->container['logfile_url'] = $logfile_url;

        return $this;
    }

    /**
     * Gets mime_type
     * @return string
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     * @param string $mime_type A mime type of the encoded file.
     * @return $this
     */
    public function setMimeType($mime_type)
    {
        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets parent_encoding_id
     * @return string
     */
    public function getParentEncodingId()
    {
        return $this->container['parent_encoding_id'];
    }

    /**
     * Sets parent_encoding_id
     * @param string $parent_encoding_id
     * @return $this
     */
    public function setParentEncodingId($parent_encoding_id)
    {
        $this->container['parent_encoding_id'] = $parent_encoding_id;

        return $this;
    }

    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets profile_id
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     * @param string $profile_id An id of a related Profile.
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets profile_name
     * @return string
     */
    public function getProfileName()
    {
        return $this->container['profile_name'];
    }

    /**
     * Sets profile_name
     * @param string $profile_name A name of the used Profile.
     * @return $this
     */
    public function setProfileName($profile_name)
    {
        $this->container['profile_name'] = $profile_name;

        return $this;
    }

    /**
     * Gets screenshots
     * @return string[]
     */
    public function getScreenshots()
    {
        return $this->container['screenshots'];
    }

    /**
     * Sets screenshots
     * @param string[] $screenshots
     * @return $this
     */
    public function setScreenshots($screenshots)
    {
        $this->container['screenshots'] = $screenshots;

        return $this;
    }

    /**
     * Gets started_encoding_at
     * @return string
     */
    public function getStartedEncodingAt()
    {
        return $this->container['started_encoding_at'];
    }

    /**
     * Sets started_encoding_at
     * @param string $started_encoding_at A date and time when the encoding process has been started
     * @return $this
     */
    public function setStartedEncodingAt($started_encoding_at)
    {
        $this->container['started_encoding_at'] = $started_encoding_at;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Determines at what stage the encoding process is at the moment.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param string $updated_at A date and time when a Encoding has been updated last time.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets video_bitrate
     * @return string
     */
    public function getVideoBitrate()
    {
        return $this->container['video_bitrate'];
    }

    /**
     * Sets video_bitrate
     * @param string $video_bitrate video bitrate (in bits/s)
     * @return $this
     */
    public function setVideoBitrate($video_bitrate)
    {
        $this->container['video_bitrate'] = $video_bitrate;

        return $this;
    }

    /**
     * Gets video_codec
     * @return string
     */
    public function getVideoCodec()
    {
        return $this->container['video_codec'];
    }

    /**
     * Sets video_codec
     * @param string $video_codec A codec that is used to encode video streams.
     * @return $this
     */
    public function setVideoCodec($video_codec)
    {
        $this->container['video_codec'] = $video_codec;

        return $this;
    }

    /**
     * Gets video_id
     * @return string
     */
    public function getVideoId()
    {
        return $this->container['video_id'];
    }

    /**
     * Sets video_id
     * @param string $video_id An id of a related Video object
     * @return $this
     */
    public function setVideoId($video_id)
    {
        $this->container['video_id'] = $video_id;

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


