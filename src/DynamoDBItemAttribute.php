<?php

namespace Vrkansagara\Dynamodb;

class DynamoDBItemAttribute
{
    // Attributes values
    // https://docs.aws.amazon.com/aws-sdk-php/v3/api/api-dynamodb-2012-08-10.html#shape-attributevalue

    /** @var string|resource|Psr\Http\Message\StreamInterface $blob */
    public static $blob = 'B';

    /** @var string|resource|Psr\Http\Message\StreamInterface $blobArray */
    public static $blobArray = 'BS';

    /** @var bool $boolean */
    public static $boolean = 'BOOL';

    /**
     * Array of AttributeValue structures
     * [ {"S": "Cookies"} , {"S": "Coffee"}, {"N": "3.14159"}]
     * @var [] $list
     */
    public static $list = 'L';

    /**
     * An attribute of type Map. For example:
     * "M": {"Name": {"S": "Joe"}, "Age": {"N": "35"}}
     * @var int $map
     */
    public static $map = 'M';

    /**
     * An attribute of type Number. For example:
     * "N": "123.45"
     *
     * @var string $number
     */
    public static $number = 'N';

    /**
     * An attribute of type Number Set. For example:
     *
     * "NS": ["42.2", "-19", "7.5", "3.14"]
     *
     * @var string $numberSet
     */
    public static $numberSet = 'NS';

    /**
     * An attribute of type Null. For example:
     *
     * "NULL": true
     *
     * @var null $null
     */
    public static $null = 'NULL';

    /**
     * An attribute of type String. For example:
     *
     * "S": "Hello"
     *
     * @var string      $string
     */
    public static $string = 'S';

    /**
     * An attribute of type String Set. For example:
     *
     * "SS": ["Giraffe", "Hippo" ,"Zebra"]
     *
     * @var string $arrayString
     */
    public static $arrayString = 'SS';
}
