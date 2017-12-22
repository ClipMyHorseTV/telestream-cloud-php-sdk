<?php
/**
 * FactoryBody
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
 * FactoryBody Class Doc Comment
 *
 * @category    Class
 * @package     TelestreamCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FactoryBody implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FactoryBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aws_access_key' => 'string',
        'aws_secret_key' => 'string',
        'factory_region' => 'string',
        'input_bucket_file_pattern' => 'string',
        'input_bucket_name' => 'string',
        'input_bucket_recursive' => 'bool',
        'input_bucket_sync_every_n_min' => 'int',
        'input_bucket_watch' => 'bool',
        'name' => 'string',
        'outputs_path_format' => 'string',
        'provider_specific_settings' => 'object',
        'acl' => 'string',
        'output_bucket_name' => 'string',
        'server_side_encryption' => 'bool',
        'storage_credential_attributes' => '\TelestreamCloud\Flip\FactoryBodyStorageCredentialAttributes',
        'storage_provider' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aws_access_key' => null,
        'aws_secret_key' => null,
        'factory_region' => null,
        'input_bucket_file_pattern' => null,
        'input_bucket_name' => null,
        'input_bucket_recursive' => null,
        'input_bucket_sync_every_n_min' => null,
        'input_bucket_watch' => null,
        'name' => null,
        'outputs_path_format' => null,
        'provider_specific_settings' => null,
        'acl' => null,
        'output_bucket_name' => null,
        'server_side_encryption' => null,
        'storage_credential_attributes' => null,
        'storage_provider' => null
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
        'aws_access_key' => 'aws_access_key',
        'aws_secret_key' => 'aws_secret_key',
        'factory_region' => 'factory_region',
        'input_bucket_file_pattern' => 'input_bucket_file_pattern',
        'input_bucket_name' => 'input_bucket_name',
        'input_bucket_recursive' => 'input_bucket_recursive',
        'input_bucket_sync_every_n_min' => 'input_bucket_sync_every_n_min',
        'input_bucket_watch' => 'input_bucket_watch',
        'name' => 'name',
        'outputs_path_format' => 'outputs_path_format',
        'provider_specific_settings' => 'provider_specific_settings',
        'acl' => 'acl',
        'output_bucket_name' => 'output_bucket_name',
        'server_side_encryption' => 'server_side_encryption',
        'storage_credential_attributes' => 'storage_credential_attributes',
        'storage_provider' => 'storage_provider'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'aws_access_key' => 'setAwsAccessKey',
        'aws_secret_key' => 'setAwsSecretKey',
        'factory_region' => 'setFactoryRegion',
        'input_bucket_file_pattern' => 'setInputBucketFilePattern',
        'input_bucket_name' => 'setInputBucketName',
        'input_bucket_recursive' => 'setInputBucketRecursive',
        'input_bucket_sync_every_n_min' => 'setInputBucketSyncEveryNMin',
        'input_bucket_watch' => 'setInputBucketWatch',
        'name' => 'setName',
        'outputs_path_format' => 'setOutputsPathFormat',
        'provider_specific_settings' => 'setProviderSpecificSettings',
        'acl' => 'setAcl',
        'output_bucket_name' => 'setOutputBucketName',
        'server_side_encryption' => 'setServerSideEncryption',
        'storage_credential_attributes' => 'setStorageCredentialAttributes',
        'storage_provider' => 'setStorageProvider'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'aws_access_key' => 'getAwsAccessKey',
        'aws_secret_key' => 'getAwsSecretKey',
        'factory_region' => 'getFactoryRegion',
        'input_bucket_file_pattern' => 'getInputBucketFilePattern',
        'input_bucket_name' => 'getInputBucketName',
        'input_bucket_recursive' => 'getInputBucketRecursive',
        'input_bucket_sync_every_n_min' => 'getInputBucketSyncEveryNMin',
        'input_bucket_watch' => 'getInputBucketWatch',
        'name' => 'getName',
        'outputs_path_format' => 'getOutputsPathFormat',
        'provider_specific_settings' => 'getProviderSpecificSettings',
        'acl' => 'getAcl',
        'output_bucket_name' => 'getOutputBucketName',
        'server_side_encryption' => 'getServerSideEncryption',
        'storage_credential_attributes' => 'getStorageCredentialAttributes',
        'storage_provider' => 'getStorageProvider'
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

    const ACL__PUBLIC = 'public';
    const ACL__PRIVATE = 'private';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAclAllowableValues()
    {
        return [
            self::ACL__PUBLIC,
            self::ACL__PRIVATE,
        ];
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
        $this->container['aws_access_key'] = isset($data['aws_access_key']) ? $data['aws_access_key'] : null;
        $this->container['aws_secret_key'] = isset($data['aws_secret_key']) ? $data['aws_secret_key'] : null;
        $this->container['factory_region'] = isset($data['factory_region']) ? $data['factory_region'] : null;
        $this->container['input_bucket_file_pattern'] = isset($data['input_bucket_file_pattern']) ? $data['input_bucket_file_pattern'] : null;
        $this->container['input_bucket_name'] = isset($data['input_bucket_name']) ? $data['input_bucket_name'] : null;
        $this->container['input_bucket_recursive'] = isset($data['input_bucket_recursive']) ? $data['input_bucket_recursive'] : null;
        $this->container['input_bucket_sync_every_n_min'] = isset($data['input_bucket_sync_every_n_min']) ? $data['input_bucket_sync_every_n_min'] : null;
        $this->container['input_bucket_watch'] = isset($data['input_bucket_watch']) ? $data['input_bucket_watch'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['outputs_path_format'] = isset($data['outputs_path_format']) ? $data['outputs_path_format'] : null;
        $this->container['provider_specific_settings'] = isset($data['provider_specific_settings']) ? $data['provider_specific_settings'] : null;
        $this->container['acl'] = isset($data['acl']) ? $data['acl'] : null;
        $this->container['output_bucket_name'] = isset($data['output_bucket_name']) ? $data['output_bucket_name'] : null;
        $this->container['server_side_encryption'] = isset($data['server_side_encryption']) ? $data['server_side_encryption'] : null;
        $this->container['storage_credential_attributes'] = isset($data['storage_credential_attributes']) ? $data['storage_credential_attributes'] : null;
        $this->container['storage_provider'] = isset($data['storage_provider']) ? $data['storage_provider'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        $allowed_values = $this->getAclAllowableValues();
        if (!in_array($this->container['acl'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'acl', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        if ($this->container['name'] === null) {
            return false;
        }
        $allowed_values = $this->getAclAllowableValues();
        if (!in_array($this->container['acl'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets aws_access_key
     * @return string
     */
    public function getAwsAccessKey()
    {
        return $this->container['aws_access_key'];
    }

    /**
     * Sets aws_access_key
     * @param string $aws_access_key AWS access key.
     * @return $this
     */
    public function setAwsAccessKey($aws_access_key)
    {
        $this->container['aws_access_key'] = $aws_access_key;

        return $this;
    }

    /**
     * Gets aws_secret_key
     * @return string
     */
    public function getAwsSecretKey()
    {
        return $this->container['aws_secret_key'];
    }

    /**
     * Sets aws_secret_key
     * @param string $aws_secret_key AWS secret key.
     * @return $this
     */
    public function setAwsSecretKey($aws_secret_key)
    {
        $this->container['aws_secret_key'] = $aws_secret_key;

        return $this;
    }

    /**
     * Gets factory_region
     * @return string
     */
    public function getFactoryRegion()
    {
        return $this->container['factory_region'];
    }

    /**
     * Sets factory_region
     * @param string $factory_region A region where the factory is located.
     * @return $this
     */
    public function setFactoryRegion($factory_region)
    {
        $this->container['factory_region'] = $factory_region;

        return $this;
    }

    /**
     * Gets input_bucket_file_pattern
     * @return string
     */
    public function getInputBucketFilePattern()
    {
        return $this->container['input_bucket_file_pattern'];
    }

    /**
     * Sets input_bucket_file_pattern
     * @param string $input_bucket_file_pattern A pattern that will be used to locate files in the input bucket. Valid wildcards might be used.
     * @return $this
     */
    public function setInputBucketFilePattern($input_bucket_file_pattern)
    {
        $this->container['input_bucket_file_pattern'] = $input_bucket_file_pattern;

        return $this;
    }

    /**
     * Gets input_bucket_name
     * @return string
     */
    public function getInputBucketName()
    {
        return $this->container['input_bucket_name'];
    }

    /**
     * Sets input_bucket_name
     * @param string $input_bucket_name A name of an input bucket.
     * @return $this
     */
    public function setInputBucketName($input_bucket_name)
    {
        $this->container['input_bucket_name'] = $input_bucket_name;

        return $this;
    }

    /**
     * Gets input_bucket_recursive
     * @return bool
     */
    public function getInputBucketRecursive()
    {
        return $this->container['input_bucket_recursive'];
    }

    /**
     * Sets input_bucket_recursive
     * @param bool $input_bucket_recursive
     * @return $this
     */
    public function setInputBucketRecursive($input_bucket_recursive)
    {
        $this->container['input_bucket_recursive'] = $input_bucket_recursive;

        return $this;
    }

    /**
     * Gets input_bucket_sync_every_n_min
     * @return int
     */
    public function getInputBucketSyncEveryNMin()
    {
        return $this->container['input_bucket_sync_every_n_min'];
    }

    /**
     * Sets input_bucket_sync_every_n_min
     * @param int $input_bucket_sync_every_n_min Determines how often the input bucket is synchronised.
     * @return $this
     */
    public function setInputBucketSyncEveryNMin($input_bucket_sync_every_n_min)
    {
        $this->container['input_bucket_sync_every_n_min'] = $input_bucket_sync_every_n_min;

        return $this;
    }

    /**
     * Gets input_bucket_watch
     * @return bool
     */
    public function getInputBucketWatch()
    {
        return $this->container['input_bucket_watch'];
    }

    /**
     * Sets input_bucket_watch
     * @param bool $input_bucket_watch Determines whether the Factory should be notified about new files added to the input bucket.
     * @return $this
     */
    public function setInputBucketWatch($input_bucket_watch)
    {
        $this->container['input_bucket_watch'] = $input_bucket_watch;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the Factory.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets outputs_path_format
     * @return string
     */
    public function getOutputsPathFormat()
    {
        return $this->container['outputs_path_format'];
    }

    /**
     * Sets outputs_path_format
     * @param string $outputs_path_format Specify the directory where the output files should be stored. By default it is not set. More info [here](https://cloud.telestream.net/docs#path-format---know-how).
     * @return $this
     */
    public function setOutputsPathFormat($outputs_path_format)
    {
        $this->container['outputs_path_format'] = $outputs_path_format;

        return $this;
    }

    /**
     * Gets provider_specific_settings
     * @return object
     */
    public function getProviderSpecificSettings()
    {
        return $this->container['provider_specific_settings'];
    }

    /**
     * Sets provider_specific_settings
     * @param object $provider_specific_settings
     * @return $this
     */
    public function setProviderSpecificSettings($provider_specific_settings)
    {
        $this->container['provider_specific_settings'] = $provider_specific_settings;

        return $this;
    }

    /**
     * Gets acl
     * @return string
     */
    public function getAcl()
    {
        return $this->container['acl'];
    }

    /**
     * Sets acl
     * @param string $acl Specify if your files are public or private (private files need authorization url to access). By default this is not set.
     * @return $this
     */
    public function setAcl($acl)
    {
        $allowed_values = $this->getAclAllowableValues();
        if (!is_null($acl) && !in_array($acl, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'acl', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['acl'] = $acl;

        return $this;
    }

    /**
     * Gets output_bucket_name
     * @return string
     */
    public function getOutputBucketName()
    {
        return $this->container['output_bucket_name'];
    }

    /**
     * Sets output_bucket_name
     * @param string $output_bucket_name A bucket where processed files will be stored.
     * @return $this
     */
    public function setOutputBucketName($output_bucket_name)
    {
        $this->container['output_bucket_name'] = $output_bucket_name;

        return $this;
    }

    /**
     * Gets server_side_encryption
     * @return bool
     */
    public function getServerSideEncryption()
    {
        return $this->container['server_side_encryption'];
    }

    /**
     * Sets server_side_encryption
     * @param bool $server_side_encryption Specify if you want to use multi-factor server-side 256-bit AES-256 data encryption with Amazon S3-managed encryption keys (SSE-S3). Each object is encrypted using a unique key which as an additional safeguard is encrypted itself with a master key that S3 regularly rotates. By default this is not set.
     * @return $this
     */
    public function setServerSideEncryption($server_side_encryption)
    {
        $this->container['server_side_encryption'] = $server_side_encryption;

        return $this;
    }

    /**
     * Gets storage_credential_attributes
     * @return \TelestreamCloud\Flip\FactoryBodyStorageCredentialAttributes
     */
    public function getStorageCredentialAttributes()
    {
        return $this->container['storage_credential_attributes'];
    }

    /**
     * Sets storage_credential_attributes
     * @param \TelestreamCloud\Flip\FactoryBodyStorageCredentialAttributes $storage_credential_attributes
     * @return $this
     */
    public function setStorageCredentialAttributes($storage_credential_attributes)
    {
        $this->container['storage_credential_attributes'] = $storage_credential_attributes;

        return $this;
    }

    /**
     * Gets storage_provider
     * @return int
     */
    public function getStorageProvider()
    {
        return $this->container['storage_provider'];
    }

    /**
     * Sets storage_provider
     * @param int $storage_provider Specifies which storage provider the factory should use. Available options: S3: 0, Google Cloud Storage: 1, FTP storage: 2, Google Cloud Interoperability Storage: 5, Flip storage: 7, FASP storage: 8, Azure Blob Storage: 9
     * @return $this
     */
    public function setStorageProvider($storage_provider)
    {
        $this->container['storage_provider'] = $storage_provider;

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


