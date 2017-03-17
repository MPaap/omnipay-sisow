<?php

namespace Omnipay\Sisow\Message;

use \Omnipay\Common\Message\AbstractRequest as BaseAbstractRequest;

/**
 * Sisow Abstract Request
 */
abstract class AbstractRequest extends BaseAbstractRequest
{
    /**
     * Generate the message signature
     *
     * @return string
     */
    abstract protected function generateSignature();
    
    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    public function getMerchantKey()
    {
        return $this->getParameter('merchantKey');
    }

    public function setMerchantKey($value)
    {
        return $this->setParameter('merchantKey', $value);
    }

    public function getShopId()
    {
        return $this->getParameter('shopId');
    }

    public function setShopId($value)
    {
        return $this->setParameter('shopId', $value);
    }

    /**
     * Get the request callback URL.
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->getParameter('notifyUrl');
    }

    /**
     * Sets the request callback URL.
     *
     * @param string $value
     * @return AbstractRequest Provides a fluent interface
     */
    public function setCallbackUrl($value)
    {
        return $this->setParameter('callbackUrl', $value);
    }
}
