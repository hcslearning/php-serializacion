<?php

class Perro implements Serializable {

	public $ladrido;
	public $edad;
	public $color;

	public function __construct($ladrido, $edad, $color){
		list($this->ladrido, $this->edad, $this->color) = [$ladrido, $edad, $color];
	}

	public function serialize(): string {
		return serialize([$this->edad, $this->color]);
	}

	public function unserialize($serialized) {
		list($this->edad, $this->color) = unserialize( $serialized );
	}
}


$p = new Perro('guau', 5, 'negro');
print_r( $p );
print_r( serialize($p) );

