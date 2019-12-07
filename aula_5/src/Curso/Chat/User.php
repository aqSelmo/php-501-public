<?php

namespace Curso\Chat\Entidades;

use Doctrine\Common\Collections\ArrayCollection;

/**
*	@Entity 
*	@Table(name="tb_users")
*/
class User
{
	/**
	*	@Id
	*	@Column(type="integer")
	*	@GeneratedValue
	*/
	protected $id;

	/**
	*	@OneToOne(targetEntity="Profile")
	*/
	protected $profile;

	/**
	*	@OneToMany(targetEntity="Message")
	*/
	protected $message;

	/**
	*	@ManyToOne(targetEntity="ChatRoom")
	*/
	protected $chatRoom;

	public function __construct()
	{
		$this->messages = new ArrayCollection();
	}
}