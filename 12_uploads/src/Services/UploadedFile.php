<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 28/11/17
 * Time: 00:20
 */

namespace MyApp\Services;

/**
 * Class UploadedFile
 * @package MyApp\Services
 */
class UploadedFile
{
	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var string
	 */
	private $tmp_name;

	/**
	 * @var string
	 */
	private $size;

	/**
	 * @var string
	 */
	private $ext;

	/**
	 * @var string
	 */
	private $fileName;

	/**
	 * UploadedFile constructor.
	 * @param $name
	 * @param $tmp_name
	 * @param $size
	 */
	public function __construct($name, $tmp_name, $size)
	{
		$this->setTmpName($tmp_name);
		$this->setSize($size);
		$this->setExt($name);
		$this->setName($name);
		$this->setFileName($name);
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getTmpName()
	{
		return $this->tmp_name;
	}

	/**
	 * @param mixed $tmp_name
	 */
	public function setTmpName($tmp_name)
	{
		$this->tmp_name = $tmp_name;
	}

	/**
	 * @return mixed
	 */
	public function getSize()
	{
		return $this->size;
	}

	/**
	 * @param mixed $size
	 */
	public function setSize($size)
	{
		$this->size = $size;
	}

	/**
	 * @return mixed
	 */
	public function getExt()
	{
		return $this->ext;
	}

	/**
	 * @param mixed $name
	 */
	public function setExt($name)
	{
		// Récupérer l'extension du fichier (pathinfo)
		$this->ext=pathinfo($name, PATHINFO_EXTENSION);
	}

	/**
	 * @return mixed
	 */
	public function getFileName()
	{
		return $this->fileName;
	}

	/**
	 * @param mixed $fileName
	 */
	public function setFileName($fileName)
	{
		$this->fileName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $this->ext;
	}
}