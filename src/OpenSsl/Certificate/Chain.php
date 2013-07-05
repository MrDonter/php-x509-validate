<?php
/**
 * Janus X509 Certificate Validator
 *
 * LICENSE
 *
 * Copyright 2013 Janus SSP group
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and limitations under the License.
 *
 * @package
 * @copyright 2010-2013 Janus SSP group
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 */

/**
 * Certificate chain.
 */
class OpenSsl_Certificate_Chain
{
    protected $_certificates;

    /**
     * Create a new certificate chain.
     *
     * @param array $certificates
     */
    public function __construct(array $certificates = array())
    {
        $this->_certificates = $certificates;
    }

    /**
     * Add a parent certificate.
     *
     * Note that this does not do any checking!
     *
     * @param  OpenSsl_Certificate       $certificate
     * @return OpenSsl_Certificate_Chain
     */
    public function addCertificate(OpenSsl_Certificate $certificate)
    {
        array_push($this->_certificates, $certificate);

        return $this;
    }

    /**
     * Get a stack of certificates, top most CA is the last certificate.
     *
     * @return array
     */
    public function getCertificates()
    {
        return $this->_certificates;
    }
}
