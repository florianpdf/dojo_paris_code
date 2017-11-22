<?php

namespace MyApp\Model\Entity;

/**
 * Class User
 * @package MyApp\Model\Entity
 */
class User{

	const CRYPT = [
		"a" => "erfghnbh",
		"b" => "pôij",
		"c" => "hllghuj",
		"d" => "89765GHKJN",
		"e" => "jkhjgbn,",
		"f" => "jkhjgb",
		"g" => "'(§èç!ç'",
		"h" => "ggergfre",
		"i" => "vdfvf:=;,",
		"j" => "=:,;jkh",
		"k" => "=:;,nhkjuig",
		"l" => "çà!è§tyfg",
		"m" => "à)ç!èytghj",
		"n" => "(§è!iukjh",
		"o" => "gergrezge",
		"p" => "gergreger",
		"q" => "gfhfh:=;,",
		"r" => ":=;,jhkj",
		"s" => "=:;,jkh",
		"t" => "=:;,lj",
		"u" => "=:;,ljuiy",
		"v" => ":=;,kjiou",
		"w" => "=:;,jiu!",
		"x" => ":=;ki!ç",
		"y" => "regreg",
		"z" => "grege=:;",
		"1" => "(§'§(",
		"2" => "azazzazaz",
		"3" => "gfdgfdg",
		"5" => "fdgfdbdg",
		"6" => "greger=:;",
		"7" => ":=;,kjuh",
		"8" => ":=;kjiu",
		"9" => "mlkjhu!",
		"0" => "lkjkhuyè",
	];

	public function __construct($email = null, $mdp = null)
	{
		$this->email = $email;
		$this->setMdp($mdp);
	}

	/**
	 * @var int
	 */
	private $id;

	/**
	 * @var string
	 */
	private $email;

	/**
	 * @var int
	 */
	private $mdp;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}

	/**
	 * @return int
	 */
	public function getMdp()
	{
		return $this->mdp;
	}

	/**
	 * @param int $mdp
	 */
	public function setMdp($mdp)
	{
		$hash = "";
		for($i = 0; $i < strlen($mdp); $i++)
		{
			$hash .= Self::CRYPT[$mdp[$i]];
		}

		$this->mdp = $hash;
	}
}