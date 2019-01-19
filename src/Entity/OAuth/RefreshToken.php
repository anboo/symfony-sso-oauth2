<?php

namespace App\Entity\OAuth;

use App\Entity\User;
use App\Entity\OAuth\Client;
use Doctrine\ORM\Mapping as ORM;
use FOS\OAuthServerBundle\Model\ClientInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OAuth\RefreshTokenRepository")
 */
class RefreshToken extends \FOS\OAuthServerBundle\Entity\RefreshToken
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var Client
     * @ORM\ManyToOne(targetEntity="App\Entity\OAuth\Client")
     */
    protected $client;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    protected $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }
}
