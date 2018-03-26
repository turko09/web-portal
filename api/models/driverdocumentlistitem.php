<?php
namespace TeamAlpha\Web;

class DriverDocumentListItem
{
    public $id;
    public $driverId;
    public $description;
    public $type;

    public function __construct(array $data)
    {
        if ($data !== null) {
            $this->id = (int) $data['id'] ?? 0;
            $this->driverId = (int) $data['driverid'] ?? 0;
            $this->description = $data['description'] ?? null;
            $this->type = $data['type'] ?? null;
        }
    }
}
