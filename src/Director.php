<?php
namespace Test;


class Director {

    public function build(BuilderInterface $builder) {

    	return $builder->getData();
    }
}