<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use DateTime;

/**
 * @ORM\Entity(repositoryClass=BookRepository::class)
 * @UniqueEntity("title")
 */
class Book
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique="true")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @ORM\Column(type="date")
     */

    private $date;

    /**
     * @ORM\Column(type="blob")
     */
    private $summary;

    /**
     * @ORM\Column(type="bigint")
     */
    private $isbn13;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }


    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummary($summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getIsbn13(): ?string
    {
        return $this->isbn13;
    }

    public function setIsbn13(string $isbn13): self
    {
        $this->isbn13 = $isbn13;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }
/**
 * Return a string version of date to be used in twig
 */
    public function getDateStr()
    {
        return $this->date->format('d-m-Y');
    }

    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }

/**
 * create a date from $string for use in fixtures or tests
 */

    public function setDateStr(string $string): self
    {
        $date = new DateTime($string);
        $this->date = $date;

        return $this;
    }
/**
 * Return a text version of summary blob to be used in twig
 */
    public function readableSummary()
    {
        $blob = $this->summary;
        while (!feof($blob)) {
            $sum =fread($blob, 10000);
        }
        fclose($blob);
        return $sum;
    }
}
