<?php

namespace Vrkansagara\Dynamodb;

class DynamoDBAttribute
{
    public string $KeyType;
    public string $AttributeType;
    public string $AttributeName;
    public string $Value;

    // https://docs.aws.amazon.com/amazondynamodb/latest/developerguide/HowItWorks.CoreComponents.html#HowItWorks.CoreComponents.PrimaryKey
    public bool $PrimaryKey = false;
    public bool $CompositePrimaryKey = false;

    public static $attributeTypeString = 'S';
    public static $attributeTypeNumber = 'N';
    public static $attributeTypeBinary = 'B';

    public static $keyTypeHash = 'HASH';
    public static $keyTypeRange = 'RANGE';


    public function __construct(
        string $AttributeName,
        string $AttributeType,
        string $KeyType,
        string $Value = '',
    ) {
        $this->AttributeName = $AttributeName;
        $this->AttributeType = $this->isAllowedAttributeType($AttributeType);
        $this->KeyType = $this->isAllowedKeyType($KeyType);
        $this->Value = $Value;
    }

    public function isAllowedAttributeType($AttributeType)
    {
        return in_array($AttributeType, [
            self::$attributeTypeString,
            self::$attributeTypeNumber,
            self::$attributeTypeBinary,
        ]) ? trim(strtoupper($AttributeType)) : throw new \Exception(sprintf('AttributeType %s is not allowed', trim($AttributeType)));
    }

    public function isAllowedKeyType($KeyType)
    {
        return in_array($KeyType, [
            self::$keyTypeHash,
            self::$keyTypeRange
        ]) ? trim(strtoupper($KeyType)) : throw new \Exception(sprintf('KeyType %s is not allowed', trim(strtoupper($KeyType))));
    }

    public function setPrimaryKey(bool $value = false): self
    {
        $this->PrimaryKey = $value;
        return $this;
    }

    public function setCompositePrimaryKey(bool $value = false): self
    {
        $this->CompositePrimaryKey = $value;
        return $this;
    }
}
