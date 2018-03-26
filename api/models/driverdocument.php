<?php
namespace TeamAlpha\Web;

class DriverDocument
{
    public $id;
    public $driverId;
    public $description;
    public $type;
    public $document;
    public $dateCreated;
    public $dateModified;

    public function __construct(array $data)
    {
        if ($data !== null) {
            $this->id = (int) $data['id'] ?? 0;
            $this->driverId = (int) $data['driverid'] ?? 0;
            $this->description = $data['description'] ?? null;
            $this->type = $data['type'] ?? null;
            $this->document = $data['document'] ?? null;
            $this->dateCreated = $data['datecreated'] ?? null;
            $this->dateModified = $data['datemodified'] ?? null;
        }
    }
}
