<?php

namespace Einvoicing;

trait LegalMonetaryTotalTrait
{
    /**
     * Sum of all allowances on document level
     * @var float
     */
    public $taxExclusiveAmount = 0;

    /**
     * Sum of all charges on document level
     * @var float
     */
    public $taxInclusiveAmount = 0;

    public function getTaxExclusiveAmount(): float|int
    {
        return $this->taxExclusiveAmount;
    }

    public function setTaxExclusiveAmount(float|int $taxExclusiveAmount): self
    {
        $this->taxExclusiveAmount = $taxExclusiveAmount;

        return $this;
    }

    public function getTaxInclusiveAmount(): float|int
    {
        return $this->taxInclusiveAmount;
    }

    public function setTaxInclusiveAmount(float|int $taxInclusiveAmount): self
    {
        $this->taxInclusiveAmount = $taxInclusiveAmount;

        return $this;
    }
}
