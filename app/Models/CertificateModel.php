<?php

namespace App\Models;

use CodeIgniter\Model;

class CertificateModel extends Model
{
	protected $table      = 'certificate';
	protected $primaryKey = 'certificate_code';
	protected $returnType     = 'object';
	protected $allowedFields = ['certificate_code', 'name', 'graduates', 'type'];
	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
}
