<?php
/**
 * Part of the Joomla Framework ORM Package
 *
 * @copyright  Copyright (C) 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\ORM\Entity;

/**
 * Interface EntityInterface
 *
 * @package  Joomla\ORM
 * @since    1.0
 */
interface EntityInterface
{
	/**
	 * Get the type of the entity.
	 *
	 * @return  string  The type (name) of the entity
	 */
	public function type();

	/**
	 * Get the status of the entity.
	 *
	 * @return  int  The status, one of the \Joomla\ORM\Status constants
	 *
	 * @see     \Joomla\ORM\Status
	 */
	public function status();

	/**
	 * Get the field for the primary key.
	 *
	 * @return  string  The name of the field
	 */
	public function key();

	/**
	 * Bind data to the entity.
	 *
	 * @param   array  $data  The data for the entity as a list of key-value pairs
	 *
	 * @return  void
	 */
	public function bind(Array $data);

	/**
	 * Make the entity readonly.
	 *
	 * Making the entity immutable is not reversible.
	 *
	 * @return  void
	 */
	public function lock();

	/**
	 * Check if the entity is locked
	 *
	 * @return  bool
	 */
	public function isImmutable();

	/**
	 * Check if the entity has a certain property.
	 *
	 * @param   string  $property  The name of the property
	 *
	 * @return  bool
	 */
	public function has($property);

	/**
	 * Get a property from the entity.
	 *
	 * @param   string  $property  The name of the property
	 *
	 * @return  mixed  The value of the property
	 */
	public function __get($property);

	/**
	 * Set a property in the entity.
	 *
	 * @param   string  $property  The name of the property
	 * @param   mixed   $value     The value for the property
	 *
	 * @return  mixed
	 */
	public function __set($property, $value);

	/**
	 * Get the field values
	 *
	 * @return  array  The field values, indexed by field name
	 */
	public function asArray();
}
