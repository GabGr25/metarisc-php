<?php

namespace Metarisc\Model;

class POI
{
    private ?string $id                                                = null;
    private ?\DateTime $date_de_realisation                            = null;
    private ?\DateTime $date_de_derniere_mise_a_jour                   = null;
    private ?string $statut                                            = null;
    private ?array $references_exterieures                             = null;
    private ?\Metarisc\Model\DescriptifTechnique $descriptif_technique = null;
    private ?string $geometrie                                         = null;
    private ?\Metarisc\Model\AdressePostale $adresse_postale           = null;

    public static function unserialize(array $data) : self
    {
        $object = new self();

        /** @var string $data['id'] */
        $object->setId($data['id']);

        /** @var string $data['date_de_realisation'] */
        $object->setDateDeRealisation($data['date_de_realisation']);

        /** @var string $data['date_de_derniere_mise_a_jour'] */
        $object->setDateDeDerniereMiseAJour($data['date_de_derniere_mise_a_jour']);

        /** @var string $data['statut'] */
        $object->setStatut($data['statut']);

        /** @var \Metarisc\Model\POIReferencesExterieuresInner[] $data['references_exterieures'] */
        $object->setReferencesExterieures($data['references_exterieures']);

        /** @var array<array-key, mixed> $data['descriptif_technique'] */
        $object->setDescriptifTechnique($data['descriptif_technique']);

        /** @var string $data['geometrie'] */
        $object->setGeometrie($data['geometrie']);

        /** @var array<array-key, mixed> $data['adresse_postale'] */
        $object->setAdressePostale($data['adresse_postale']);

        return $object;
    }

    public function getId() : ?string
    {
        return $this->id;
    }

    public function setId(string $id = null) : void
    {
        $this->id=$id;
    }

    public function getDateDeRealisation() : ?\DateTime
    {
        return $this->date_de_realisation;
    }

    public function setDateDeRealisation(?string $date_de_realisation) : void
    {
        $this->date_de_realisation = (\is_string($date_de_realisation)) ? \DateTime::createFromFormat(\DATE_ATOM, $date_de_realisation) : null;
    }

    public function getDateDeDerniereMiseAJour() : ?\DateTime
    {
        return $this->date_de_derniere_mise_a_jour;
    }

    public function setDateDeDerniereMiseAJour(?string $date_de_derniere_mise_a_jour) : void
    {
        $this->date_de_derniere_mise_a_jour = (\is_string($date_de_derniere_mise_a_jour)) ? \DateTime::createFromFormat(\DATE_ATOM, $date_de_derniere_mise_a_jour) : null;
    }

    public function getStatut() : ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut = null) : void
    {
        $this->statut=$statut;
    }

    public function getReferencesExterieures() : ?array
    {
        return $this->references_exterieures;
    }

    public function setReferencesExterieures(array $references_exterieures = null) : void
    {
        $this->references_exterieures=$references_exterieures;
    }

    public function getDescriptifTechnique() : ?DescriptifTechnique
    {
        return $this->descriptif_technique;
    }

    public function setDescriptifTechnique(array $descriptif_technique) : void
    {
        $this->descriptif_technique=\Metarisc\Model\DescriptifTechnique::unserialize($descriptif_technique);
    }

    public function getGeometrie() : ?string
    {
        return $this->geometrie;
    }

    public function setGeometrie(string $geometrie = null) : void
    {
        $this->geometrie=$geometrie;
    }

    public function getAdressePostale() : ?AdressePostale
    {
        return $this->adresse_postale;
    }

    public function setAdressePostale(array $adresse_postale) : void
    {
        $this->adresse_postale=\Metarisc\Model\AdressePostale::unserialize($adresse_postale);
    }
}
