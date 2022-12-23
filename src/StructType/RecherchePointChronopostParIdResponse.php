<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recherchePointChronopostParIdResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:recherchePointChronopostParIdResponse
 * @subpackage Structs
 */
class RecherchePointChronopostParIdResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PointChronopost[]
     */
    protected ?array $return = null;
    /**
     * Constructor method for recherchePointChronopostParIdResponse
     * @uses RecherchePointChronopostParIdResponse::setReturn()
     * @param \StructType\PointChronopost[] $return
     */
    public function __construct(?array $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\PointChronopost[]
     */
    public function getReturn(): ?array
    {
        return $this->return;
    }
    /**
     * This method is responsible for validating the values passed to the setReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReturnForArrayConstraintsFromSetReturn(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $recherchePointChronopostParIdResponseReturnItem) {
            // validation for constraint: itemType
            if (!$recherchePointChronopostParIdResponseReturnItem instanceof \StructType\PointChronopost) {
                $invalidValues[] = is_object($recherchePointChronopostParIdResponseReturnItem) ? get_class($recherchePointChronopostParIdResponseReturnItem) : sprintf('%s(%s)', gettype($recherchePointChronopostParIdResponseReturnItem), var_export($recherchePointChronopostParIdResponseReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The return property can only contain items of type \StructType\PointChronopost, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set return value
     * @throws InvalidArgumentException
     * @param \StructType\PointChronopost[] $return
     * @return \StructType\RecherchePointChronopostParIdResponse
     */
    public function setReturn(?array $return = null): self
    {
        // validation for constraint: array
        if ('' !== ($returnArrayErrorMessage = self::validateReturnForArrayConstraintsFromSetReturn($return))) {
            throw new InvalidArgumentException($returnArrayErrorMessage, __LINE__);
        }
        $this->return = $return;
        
        return $this;
    }
    /**
     * Add item to return value
     * @throws InvalidArgumentException
     * @param \StructType\PointChronopost $item
     * @return \StructType\RecherchePointChronopostParIdResponse
     */
    public function addToReturn(\StructType\PointChronopost $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PointChronopost) {
            throw new InvalidArgumentException(sprintf('The return property can only contain items of type \StructType\PointChronopost, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->return[] = $item;
        
        return $this;
    }
}
