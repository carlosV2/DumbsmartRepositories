<?php

namespace spec\carlosV2\DumbsmartRepositories\Relation;

class TestingObject
{
    protected $field;

    public function setField($data)
    {
        $this->field = $data;
    }

    public function getField()
    {
        return $this->field;
    }
}
