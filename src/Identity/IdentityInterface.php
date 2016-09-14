<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-authentication
 * @author: n3vrax
 * Date: 9/6/2016
 * Time: 7:49 PM
 */

namespace Dot\Authentication\Identity;

interface IdentityInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();
}